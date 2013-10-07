<?php
/**
 * This file is part of the DBSessionStorage Module (https://github.com/Nitecon/DBSessionStorage.git)
 *
 * Copyright (c) 2013 Will Hattingh (https://github.com/Nitecon/DBSessionStorage.git)
 *
 * For the full copyright and license information, please view
 * the file LICENSE.txt that was distributed with this source code.
 */
return array(
    'service_manager' => array(
        'invokables' => array(
            'DBSessionStorage\Storage\DBStorage' => 'DBSessionStorage\Storage\DBStorage',
        ),
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
            'DBSessionStorage\Factory\DBStorage' => 'DBSessionStorage\Factory\DBStorageFactory',
        )
    ),

);
