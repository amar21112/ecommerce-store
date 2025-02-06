<?php

namespace PHPMVC\Models;

class ProductModel extends AbstractModel
{
    public $ProductId;
    public $CategoryId;
    public $Name;
    public $Image;
    public $Quantity;
    public $BuyPrice;
    public $SellPrice;
    public $Unit;
    public $BarCode;

    protected static $tableName = 'app_products_list';

    protected static $tableSchema = array(
        'CategoryId'        => self::DATABASE_TYPE_INT,
        'Name'              => self::DATABASE_TYPE_STR,
        'Image'             => self::DATABASE_TYPE_STR,
        'Quantity'          => self::DATABASE_TYPE_INT,
        'BuyPrice'          => self::DATABASE_TYPE_DECIMAL,
        'SellPrice'         => self::DATABASE_TYPE_DECIMAL,
        'Unit'              => self::DATABASE_TYPE_INT,
        'BarCode'           => self::DATABASE_TYPE_STR
    );

    protected static $primaryKey = 'ProductId';

    public static function getAll()
    {
        $sql = 'SELECT apl.*, apc.Name categoryName FROM ' . self::$tableName . ' apl';
        $sql .= ' INNER JOIN ' . ProductCategoryModel::getModelTableName() . ' apc';
        $sql .= ' ON apc.CategoryId = apl.CategoryId';
        return self::get($sql);
    }
}