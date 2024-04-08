<?php

declare(strict_types=1);

/*
 * ApimaticAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApimaticAPILib\Tests;

use ApimaticAPILib\ApimaticAPIClient;
use ApimaticAPILib\ApimaticAPIClientBuilder;
use ApimaticAPILib\Authentication\CustomHeaderAuthenticationCredentialsBuilder;
use Core\Types\CallbackCatcher;

class ClientFactory
{
    public static function create(CallbackCatcher $httpCallback): ApimaticAPIClient
    {
        $clientBuilder = ApimaticAPIClientBuilder::init();
        $clientBuilder = self::addConfigurationFromEnvironment($clientBuilder);
        $clientBuilder = self::addTestConfiguration($clientBuilder);
        return $clientBuilder->httpCallback($httpCallback)->build();
    }

    public static function addTestConfiguration(ApimaticAPIClientBuilder $builder): ApimaticAPIClientBuilder
    {
        return $builder;
    }

    public static function addConfigurationFromEnvironment(ApimaticAPIClientBuilder $builder): ApimaticAPIClientBuilder
    {
        $timeout = getenv('APIMATIC_API_LIB_TIMEOUT');
        $numberOfRetries = getenv('APIMATIC_API_LIB_NUMBER_OF_RETRIES');
        $maximumRetryWaitTime = getenv('APIMATIC_API_LIB_MAXIMUM_RETRY_WAIT_TIME');
        $environment = getenv('APIMATIC_API_LIB_ENVIRONMENT');
        $authorization = getenv('APIMATIC_API_LIB_AUTHORIZATION');

        if (!empty($timeout) && \is_numeric($timeout)) {
            $builder->timeout(intval($timeout));
        }

        if (!empty($numberOfRetries) && \is_numeric($numberOfRetries)) {
            $builder->numberOfRetries(intval($numberOfRetries));
        }

        if (!empty($maximumRetryWaitTime) && \is_numeric($maximumRetryWaitTime)) {
            $builder->maximumRetryWaitTime(intval($maximumRetryWaitTime));
        }

        if (!empty($environment)) {
            $builder->environment($environment);
        }

        if (!empty($authorization)) {
            $builder->customHeaderAuthenticationCredentials(
                CustomHeaderAuthenticationCredentialsBuilder::init($authorization)
            );
        }

        return $builder;
    }
}
