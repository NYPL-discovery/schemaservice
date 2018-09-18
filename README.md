# NYPL Schema Service

[![Build Status](https://travis-ci.org/NYPL-discovery/schemaservice.svg?branch=master)](https://travis-ci.org/NYPL-discovery/schemaservice)
[![Coverage Status](https://coveralls.io/repos/github/NYPL-discovery/schemaservice/badge.svg?branch=travis)](https://coveralls.io/github/NYPL-discovery/schemaservice?branch=travis)

This package is intended to be used as a Lambda-based Node.js/PHP Schema Service using the 
[NYPL PHP Microservice Starter](https://github.com/NYPL/php-microservice-starter).

This package adheres to [PSR-1](http://www.php-fig.org/psr/psr-1/), 
[PSR-2](http://www.php-fig.org/psr/psr-2/), and [PSR-4](http://www.php-fig.org/psr/psr-4/) 
(using the [Composer](https://getcomposer.org/) autoloader).

## Purpose

This package is deployed as a Lambda to [./index.php](serve) the following Platform API routes:

 * GET /docs/schema
 * GET /api/v0.1/schemas
 * POST /api/v0.1/schemas/{streamName}
 * GET /api/v0.1/schemas/{id}
 * GET /api/v0.1/current-schemas
 * GET /api/v0.1/current-schemas/{streamName}

## Requirements

* Node.js >=6.0
* PHP >=7.0 
  * [pdo_pdgsql](http://php.net/manual/en/ref.pdo-pgsql.php)

Homebrew is highly recommended for PHP:

```
brew install php@7.1
```

## Installation

1. Clone the repo.
2. Install required dependencies.
   * Run `npm install` to install Node.js packages.
   * Run `composer install` to install PHP packages.

## Configuration

Various files are used to configure and deploy the Lambda.

### .env

`.env` contains common configuration for deploying the lambda (e.g. timeout, Node version)

### package.json

Configures `npm run` commands for each environment for deployment and testing. Deployment commands may also set
the proper AWS Lambda VPC, security group, and role. See "scripts" section for deployment specific configuration.

### config/var_app

Configures environment variables common to *all* environments.

### config/var_*environment*.env

Configures environment variables specific to each environment.

### config/event_sources_*environment*

Configures Lambda event sources (triggers) specific to each environment.

## Usage

### Process a Lambda Event

To use `node-lambda` to process a sample API Gateway event in `event.json` (emulating a GET request on /schemas):

 1. Add a `./config/var_local.env` containing plaintext config. For example:

~~~
# Note this was restored from production, hence the production dbname:
DB_CONNECT_STRING=pgsql:host=schema-service-qa.cvy7z512hcjg.us-east-1.rds.amazonaws.com;dbname=schema_service_production
DB_USERNAME=schemaservice
# These parameters should NOT be encrypted because we're local
DB_PASSWORD=[plaintext db password here]
~~~

 2. Next, run the following to process the event:

~~~~
npm run test-schema
~~~~

### Run as a Web Server

To use the PHP internal web server:

1. Copy unencryted environmental variables (for example, from ./config/var_local.env) into your `.env`
2. Run:

~~~~
php -S localhost:8888 -t . index.php
~~~~

You can then make a request to the Lambda: `http://localhost:8888/api/v0.1/schemas`.

**Note**: Do not forget to remove your changes to `.env` before committing changes. The reason environmental variables have to be added to `.env` is that [that's one of only two places Config knows to read config from](https://github.com/NYPL/php-microservice-starter/blob/821d71c3a95f31746ef586a192717d1b9260ee92/src/Config.php#L9-L10)

### Swagger Documentation Generator

Create a Swagger route to generate Swagger specification documentation:

~~~~
$service->get("/swagger", function (Request $request, Response $response) {
    return SwaggerGenerator::generate(__DIR__ . "/src", $response);
});
~~~~

## Contributing / Git Workflow

 * Cut feature branches from `development`. Create a PR against `development`.
 * After approval, PR author merges into `development`.
 * Subsequently merge `development` into `qa`, and `qa` into `master`.

## Deployment

Travis CD is enabled for pushes to `origin/development`, `origin/qa`, and `origin/master` (production).

If you need to manually deploy local code, you can use:

```
npm run deploy-[environment]
```
