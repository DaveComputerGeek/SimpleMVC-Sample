<?php

if( ! isset( $app ) )
    exit;

$router = $app->getRouter();

require_once __DIR__ . "/controllers/MainController.php";
$mainController = new MainController;

$router->map
(
    array
    (
        "path" => "/",
        "action" => array
        (
            $mainController,
            "home"
        )
    ),
    array
    (
        "path" => "/about",
        "action" => array
        (
            $mainController,
            "about"
        )
    ),
    array
    (
        "path" => "/contact",
        "action" => array
        (
            $mainController,
            "contact"
        )
    ),
	array(
		"path" => "/notfound",
		"action" => array(
			$mainController,
			"notfound"
		)
	)
);

$route_options = array
(
	"path" => isset( $_GET['path'] ) ? $_GET['path'] : "/"
);

if( ! $router->mapExists( $route_options ) )
{
	$route_options['path'] = "/notfound";
}

$router->processRoute
(
	$route_options
);