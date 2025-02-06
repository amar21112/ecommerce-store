<?php

namespace PHPMVC\Models;

class EmployeeModel extends AbstractModel
{
  public $id;
  public $name;
  public $age;
  public $address;
  public $tax;
  public $salary;
  public $gender;
  public $theType;
  public $os;
  public $notes;


  protected static $tableName = 'employees';
  protected static $tableSchema = array(
    'name'          => self::DATABASE_TYPE_STR,
    'age'           => self::DATABASE_TYPE_INT,
    'address'       => self::DATABASE_TYPE_STR,
    'tax'           => self::DATABASE_TYPE_DECIMAL,
    'salary'        => self::DATABASE_TYPE_DECIMAL,
    'gender'        => self::DATABASE_TYPE_INT,
    'theType'       => self::DATABASE_TYPE_INT,
    'os'            => self::DATABASE_TYPE_STR,
    'notes'         => self::DATABASE_TYPE_INT
  );
  protected static $primaryKey = 'id';

  public function getTableName()
  {
    return self::$tableName;
  }
}


