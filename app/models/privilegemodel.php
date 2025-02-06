<?php

namespace PHPMVC\Models;

class PrivilegeModel extends AbstractModel
{
    public $PrivilegeId;
    public $Privilege;
    public $PrivilegeTitle;

    protected static $tableName = 'app_users_privileges';

    protected static $tableSchema = array(
        'PrivilegeId'       => self::DATABASE_TYPE_INT,
        'Privilege'         => self::DATABASE_TYPE_STR,
        'PrivilegeTitle'    => self::DATABASE_TYPE_STR
    );

    protected static $primaryKey = 'PrivilegeId';
}