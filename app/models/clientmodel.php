<?php
namespace PHPMVC\Models;

class ClientModel extends AbstractModel
{

    public $ClientId;
    public $Name;
    public $PhoneNumber;
    public $Email;
    public $Address;

    protected static $tableName = 'app_clients';

    protected static $tableSchema = array(
        'Name'              => self::DATABASE_TYPE_STR,
        'PhoneNumber'       => self::DATABASE_TYPE_STR,
        'Email'             => self::DATABASE_TYPE_STR,
        'Address'           => self::DATABASE_TYPE_STR

    );

    protected static $primaryKey = 'ClientId';
}