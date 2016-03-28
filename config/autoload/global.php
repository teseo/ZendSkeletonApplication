<?php
return array(
    'doctrine' => array(

        /***** enabling the memcache ****/
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
                    'user'     => 'root',
                    'password' => 'mysql56secret',
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