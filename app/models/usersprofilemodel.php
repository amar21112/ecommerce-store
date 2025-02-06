<?php

namespace PHPMVC\Models;

class UsersProfileModel extends AbstractModel
{
    public $UserId;
    public $FirstName;
    public $LastName;
    public $Address;
    public $DOB;
    public $Image;

    protected static $tableName = 'app_users_profiles';

    protected static $tableSchema = array(
        'UserId'             => self::DATABASE_TYPE_INT,
        'FirstName'          => self::DATABASE_TYPE_STR,
        'LastName'           => self::DATABASE_TYPE_STR,
        'Address'            => self::DATABASE_TYPE_STR,
        'DOB'                => self::DATABASE_TYPE_DATE,
        'Image'              => self::DATABASE_TYPE_STR,
    );

    protected static $primaryKey = 'UserId';
}