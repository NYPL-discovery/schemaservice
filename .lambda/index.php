<?php
require __DIR__ . '/vendor/autoload.php';

use Slim\Http\Request;
use Slim\Http\Response;
use NYPL\Starter\Service;
use NYPL\Services\Controller;
use NYPL\Starter\SwaggerGenerator;
use NYPL\Starter\Config;
use Monolog\ErrorHandler;

try {
    Config::initialize(__DIR__);

    $service = new Service();

    $service->get("/docs/schema", function (Request $request, Response $response) {
        return SwaggerGenerator::generate(
            [__DIR__ . "/src", __DIR__ . "/vendor/nypl/microservice-starter/src"],
            $response
        );
    });

    $service->get("/api/v0.1/schemas", function (Request $request, Response $response) {
        $controller = new Controller\SchemaController($request, $response);
        return $controller->getSchemas();
    });

    $service->post("/api/v0.1/schemas/{streamName}", function (Request $request, Response $response, $parameters) {
        $controller = new Controller\SchemaController($request, $response);
        return $controller->createSchema($parameters["streamName"]);
    });

    $service->get("/api/v0.1/schemas/{id}", function (Request $request, Response $response, $parameters) {
        $controller = new Controller\SchemaController($request, $response);
        return $controller->getSchema($parameters["id"]);
    });

    $service->get("/api/v0.1/current-schemas", function (Request $request, Response $response) {
        $controller = new Controller\SchemaController($request, $response);
        return $controller->getCurrentSchemas();
    });

    $service->get("/api/v0.1/current-schemas/{streamName}", function (Request $request, Response $response, $parameters) {
        $controller = new Controller\SchemaController($request, $response);
        return $controller->getCurrentSchema($parameters["streamName"]);
    });

    $service->run();
} catch (Exception $exception) {
    ErrorHandler::processShutdownError($exception->getMessage(), $exception);
}
