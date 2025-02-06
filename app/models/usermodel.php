<?php
namespace PHPMVC\Models;

class UserModel extends AbstractModel
{
    public $UserId;
    public $Username;
    public $Password;
    public $Email;
    public $PhoneNumber;
    public $SubscriptionDate;
    public $LastLogin;
    public $GroupId;
    public $Status;

    /**
     * @var UsersProfileModel
     */
    public $profile;
    public $privileges;

    protected static $tableName = 'app_users';

    protected static $tableSchema = array(
        'UserId'            => self::DATABASE_TYPE_INT,
        'Username'          => self::DATABASE_TYPE_STR,
        'Password'          => self::DATABASE_TYPE_STR,
        'Email'             => self::DATABASE_TYPE_STR,
        'PhoneNumber'       => self::DATABASE_TYPE_STR,
        'SubscriptionDate'  => self::DATABASE_TYPE_DATE,
        'LastLogin'         => self::DATABASE_TYPE_STR,
        'GroupId'           => self::DATABASE_TYPE_INT,
        'Status'            => self::DATABASE_TYPE_INT,
    );

    protected static $primaryKey = 'UserId';

    public function cryptPassword($password)
    {
        $this->Password = crypt($password, APP_SALT);
    }
    //TODO:: FIX THE TABLE ALIASING
    public static function getUsers(UserModel $user)
    {
        return self::get(
            'SELECT au.*, aug.GroupName GroupName FROM ' . self::$tableName . ' au INNER JOIN app_users_groups aug ON aug.GroupId = au.GroupId WHERE au.UserId != ' . $user->UserId
        );
    }

    public static function UserExists($username)
    {
        return self::get(
            'SELECT * FROM ' . self::$tableName . ' WHERE Username = "' . $username . '"'
        );
    }

    public static function authenticate($username, $password, $session)
    {
        $password = crypt($password, APP_SALT) ;
        $sql = 'SELECT *, (SELECT GroupName FROM app_users_groups WHERE app_users_groups.GroupId = ' . self::$tableName . '.GroupId) GroupName FROM ' . self::$tableName . ' WHERE Username = "' . $username . '" AND Password = "' .  $password . '"';
        $foundUser = self::getOne($sql);
        if(false !== $foundUser) {
            if($foundUser->Status == 2) {
                return 2;
            }
            $foundUser->LastLogin = date('Y-m-d H:i:s');
            $foundUser->save();
            $foundUser->profile = UsersProfileModel::getByPK($foundUser->UserId);
            $foundUser->privileges = UserGroupPrivilegeModel::getPrivilegesForGroup($foundUser->GroupId);
            $session->u = $foundUser;

            return 1;
        }
        return false;
    }
}