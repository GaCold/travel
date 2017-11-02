<?php
/**
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;


Router::defaultRouteClass(DashedRoute::class);




Router::scope('/', function (RouteBuilder $routes) {
    
    $routes->connect('/', ['controller' => 'Home', 'action' => 'index', 'index']);


    $routes->connect('/admin/roles/*', ['controller' => 'Roles', 'action' => 'index' ]);
    $routes->connect('/admin/edit-roles/*', ['controller' => 'Roles', 'action' => 'edit' ]);
    $routes->connect('/admin/add-roles/*', ['controller' => 'Roles', 'action' => 'add' ]);
    
    $routes->connect('/admin/accounts/*', ['controller' => 'Accounts', 'action' => 'adminindex' ]);
    $routes->connect('/admin/add-accounts/*', ['controller' => 'Accounts', 'action' => 'adminadd' ]);
    $routes->connect('/admin/edit-accounts/*', ['controller' => 'Accounts', 'action' => 'adminedit' ]);
    $routes->connect('/admin/view-accounts/*', ['controller' => 'Accounts', 'action' => 'adminview' ]);

    $routes->connect('/accounts/*', ['controller' => 'Accounts', 'action' => 'view' ]);
    $routes->connect('/edit-accounts/*', ['controller' => 'Accounts', 'action' => 'edit' ]);
    $routes->connect('/create-accounts/*', ['controller' => 'Accounts', 'action' => 'add' ]);
    $routes->connect('/delete-accounts/*', ['controller' => 'Accounts', 'action' => 'delete' ]);




    
    $routes->connect('/products/*', ['controller' => 'Pages', 'action' => 'products']);
    $routes->connect('/contactus/*', ['controller' => 'Pages', 'action' => 'contactus']);

    $routes->fallbacks(DashedRoute::class);
});


Plugin::routes();
