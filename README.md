
# Getting Started with Apimatic API

## Introduction

This API gives you programmatic access to APIMatic's Code Generation, Docs Generation and Transformation Engine

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```php
composer require "sdksio/apimatic-sdk:3.0.0"
```

Or add it to the composer.json file manually as given below:

```php
"require": {
    "sdksio/apimatic-sdk": "3.0.0"
}
```

You can also view the package at:
https://packagist.org/packages/sdksio/apimatic-sdk#3.0.0

## Test the SDK

Unit tests in this SDK can be run using PHPUnit.

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/sdks-io/apimatic-php-sdk/tree/3.0.0/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524, 408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT', 'GET', 'PUT'` |
| `customHeaderAuthenticationCredentials` | [`CustomHeaderAuthenticationCredentials`](https://www.github.com/sdks-io/apimatic-php-sdk/tree/3.0.0/doc/$a/https://www.github.com/sdks-io/apimatic-php-sdk/tree/3.0.0/custom-header-signature.md) | The Credentials Setter for Custom Header Signature |

The API client can be initialized as follows:

```php
$client = ApimaticAPIClientBuilder::init()
    ->customHeaderAuthenticationCredentials(
        CustomHeaderAuthenticationCredentialsBuilder::init(
            'Authorization'
        )
    )
    ->build();
```

## Authorization

This API uses the following authentication schemes.

* [`Authorization (Custom Header Signature)`](https://www.github.com/sdks-io/apimatic-php-sdk/tree/3.0.0/doc/$a/https://www.github.com/sdks-io/apimatic-php-sdk/tree/3.0.0/custom-header-signature.md)

## List of APIs

* [APIs Management](https://www.github.com/sdks-io/apimatic-php-sdk/tree/3.0.0/doc/controllers/apis-management.md)
* [Code Generation-Imported APIs](https://www.github.com/sdks-io/apimatic-php-sdk/tree/3.0.0/doc/controllers/code-generation-imported-apis.md)
* [Code Generation-External APIs](https://www.github.com/sdks-io/apimatic-php-sdk/tree/3.0.0/doc/controllers/code-generation-external-apis.md)
* [Docs Portal Management](https://www.github.com/sdks-io/apimatic-php-sdk/tree/3.0.0/doc/controllers/docs-portal-management.md)
* [API Validation-Imported APIs](https://www.github.com/sdks-io/apimatic-php-sdk/tree/3.0.0/doc/controllers/api-validation-imported-apis.md)
* [API Validation-External APIs](https://www.github.com/sdks-io/apimatic-php-sdk/tree/3.0.0/doc/controllers/api-validation-external-apis.md)
* [Transformation](https://www.github.com/sdks-io/apimatic-php-sdk/tree/3.0.0/doc/controllers/transformation.md)

## Classes Documentation

* [Utility Classes](https://www.github.com/sdks-io/apimatic-php-sdk/tree/3.0.0/doc/utility-classes.md)
* [ApiException](https://www.github.com/sdks-io/apimatic-php-sdk/tree/3.0.0/doc/api-exception.md)
* [HttpRequest](https://www.github.com/sdks-io/apimatic-php-sdk/tree/3.0.0/doc/http-request.md)
* [HttpResponse](https://www.github.com/sdks-io/apimatic-php-sdk/tree/3.0.0/doc/http-response.md)

