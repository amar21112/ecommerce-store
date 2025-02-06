<?php

namespace PHPMVC\Lib\Database;

abstract class DatabaseHandler
{
  const DATABASE_DRIVER_PDO = 1;
  const DATABASE_DRIVER_MYSQLI = 2;

  private function __construct() {}

  protected static function init() {}

  protected static function getInstance() {}

  public static function factory()
  {
    $driver = DATABASE_CONN_DRIVER;
    if ($driver == self::DATABASE_DRIVER_PDO) {
      return PDODatabaseHandler::getInstance();
    } elseif ($driver == self::DATABASE_DRIVER_MYSQLI) {
      return MySQLDatabaseHandler::getInstance();
    }
  }
}

/*namespace PHPMVC\Lib\Database;

abstract class DatabaseHandler
{
  const DATABASE_DRIVER_PDO = 1;
  const DATABASE_DRIVER_MYSQLI = 2;

  private function __construct() {}

  abstract protected static function init();

  abstract protected static function getInstance();

  public static function factory()
  {
    $driver = DATABASE_CONN_DRIVER;
    if ($driver == self::DATABASE_DRIVER_PDO) {
      return PDODatabaseHandler::getInstance();
    } elseif ($driver == self::DATABASE_DRIVER_MYSQLI) {
      return MySQLDatabaseHandler::getInstance();
    }
  }
}*/