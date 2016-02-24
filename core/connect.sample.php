<?php
/*
  $Id: connect.sample.php 29 2016-02-23 04:25:01Z anrdaemon $
*/

if(!defined('APP_NAME'))
{
  die('Your presence was noted. Your actions will not be tolerated.');
}

$_pdo_options = array(
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
  );

if(version_compare(PHP_VERSION, '5.3.6', '<') && preg_match('/^mysql:.*\bcharset=(?P<charset>\w+)/i', trim($_s['DB']['DSN']), $ta))
  $_pdo_options = array_merge($_pdo_options, array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES {$ta['charset']}"));

$_pdo = new \PDO($_s['DB']['DSN'], $_s['DB']['USER'], $_s['DB']['PASS'], $_pdo_options);

unset($_s['DB'], $_pdo_options, $ta);
