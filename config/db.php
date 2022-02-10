<?php

return [
    'class' => 'yii\db\Connection',
    'driverName' => 'sqlsrv',
    'dsn' => 'sqlsrv:Server=localhost;Database=db_pegawai',
    'username' => 'sa',
    'password' => '1234',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
