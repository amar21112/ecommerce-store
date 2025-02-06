<?php

namespace PHPMVC\Models;

class SupplierModel extends AbstractModel
{
    public $SupplierId;
    public $Name;
    public $PhoneNumber;
    public $Email;
    public $Address;

    protected static $tableName = 'app_suppliers';

    protected static $tableSchema = array(
        'Name'              => self::DATABASE_TYPE_STR,
        'PhoneNumber'       => self::DATABASE_TYPE_STR,
        'Email'             => self::DATABASE_TYPE_STR,
        'Address'           => self::DATABASE_TYPE_STR

    );

    protected static $primaryKey = 'SupplierId';
}