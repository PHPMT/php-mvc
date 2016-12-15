<?php

namespace App;

class Conn
{
  public static function getDb()
  {
    return new \PDO( 'mysql:host=0.0.0.0:3306;dbname=agenda',
                      'dev',
                      '123456');
    }
}
