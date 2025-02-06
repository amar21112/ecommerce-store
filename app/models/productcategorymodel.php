<?php

namespace PHPMVC\Models;

class ProductCategoryModel extends AbstractModel
{
    public $CategoryId;
    public $Name;
    public $Image;

    protected static $tableName = 'app_products_categories';

    protected static $tableSchema = array(
        'Name'              => self::DATABASE_TYPE_STR,
        'Image'             => self::DATABASE_TYPE_STR

    );

    protected static $primaryKey = 'CategoryId';
}