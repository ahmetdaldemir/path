<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/customers' => [
            [['_route' => 'customer_login', '_controller' => 'App\\Controller\\CustomerController::token'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'customer_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, true, false, null],
        ],
        '/customers/create' => [
            [['_route' => 'customer_create', '_controller' => 'App\\Controller\\CustomerController::create'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'product_create', '_controller' => 'App\\Controller\\ProductController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/orders' => [
            [['_route' => 'order_index', '_controller' => 'App\\Controller\\OrderController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'order_show', '_controller' => 'App\\Controller\\OrderController::show'], null, ['POST' => 0], null, true, false, null],
            [['_route' => 'order_update', '_controller' => 'App\\Controller\\OrderController::update'], null, ['POST' => 0], null, true, false, null],
        ],
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
        '/user/index' => [[['_route' => 'users_index', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user/login' => [[['_route' => 'users_login', '_controller' => 'App\\Controller\\UserController::login'], null, ['POST' => 0], null, false, false, null]],
        '/customer/login' => [[['_route' => 'customers_login', '_controller' => 'App\\Controller\\CustomerController::token'], null, ['POST' => 0], null, false, false, null]],
        '/customer/index' => [[['_route' => 'customers_index', '_controller' => 'App\\Controller\\CustomerController::index'], null, null, null, false, false, null]],
        '/customer/create' => [[['_route' => 'customers_create', '_controller' => 'App\\Controller\\CustomerController::create'], null, null, null, false, false, null]],
        '/order/create' => [[['_route' => 'orders_create', '_controller' => 'App\\Controller\\OrderController::create'], null, ['POST' => 0], null, false, false, null]],
        '/order/index' => [[['_route' => 'orders_index', '_controller' => 'App\\Controller\\OrderController::index'], null, ['GET' => 0], null, false, false, null]],
        '/order/show' => [[['_route' => 'orders_show', '_controller' => 'App\\Controller\\OrderController::show'], null, ['POST' => 0], null, false, false, null]],
        '/order/update' => [[['_route' => 'orders_udpate', '_controller' => 'App\\Controller\\OrderController::update'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/customers/(?'
                    .'|(\\d+)(?'
                        .'|(*:64)'
                    .')'
                    .'|([^/]++)(*:80)'
                    .'|(\\d+)(*:92)'
                .')'
                .'|/orders/(\\d+)(*:113)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [
            [['_route' => 'customer_show', '_controller' => 'App\\Controller\\CustomerController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        80 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['productd'], ['PUT' => 0], null, false, true, null]],
        92 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        113 => [
            [['_route' => 'orders_delete', '_controller' => 'App\\Controller\\OrderController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
