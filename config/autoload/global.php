<?php
return array(
    'db' => array(
        'driver' => 'Pdo',
        'dsn' => 'mysql:dbname=zf;host=mysql56',
        'username' => 'admin',
        'password' => 'lY2I36gN0R03',
        'driver_options' => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
        ),
    ),
    'doctrine' => array(

        /***** enabling the cache ****/
        'configuration' => array(
            'orm_default' => array(
                'result_cache'      => 'redis',
                'second_level_cache' => [
                    'enabled'               => true,
                    'default_lifetime'      => 200,
                    'default_lock_lifetime' => 500,
                    'regions' => [
                        'User' => [
                            'lifetime'      => 800,
                            'lock_lifetime' => 1000
                        ],
                    ],
                ],
                'metadata_cache'    => 'redis',
                'query_cache'       => 'redis',
                'hydration_cache'   => 'redis',
            )
        ),
        'connection' => array(
            // default connection name
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host'     => 'mysql56',
                    'port'     => '3306',
                    'user'     => 'admin',
                    'password' => 'lY2I36gN0R03',
                    'dbname'   => 'zf',
                )
            )
        ),
        'cache' => array(
            'redis' => array(
                'instance' => 'doctrine.cache.redis',
            ),
        ),
    )
);
