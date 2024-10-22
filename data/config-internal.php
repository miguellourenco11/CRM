<?php
return [
  'database' => [
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'port' => '',
    'charset' => 'utf8mb4',
    'dbname' => 'BD_13_CRM',
    'user' => 'root',
    'password' => ''
  ],
  'smtpPassword' => '',
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false
  ],
  'restrictedMode' => false,
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'isInstalled' => true,
  'microtimeInternal' => 1715933766.790659,
  'passwordSalt' => 'c43be820cc67923a',
  'cryptKey' => 'eacdced644e35deb7bc42ee905c7bd35',
  'hashSecretKey' => '68bca1d252aa96897e867cd2c10abd62',
  'actualDatabaseType' => 'mariadb',
  'actualDatabaseVersion' => '10.4.10'
];
