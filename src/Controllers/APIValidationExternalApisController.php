<?php

declare(strict_types=1);

/*
 * ApimaticAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApimaticAPILib\Controllers;

use ApimaticAPILib\Exceptions\ApiException;
use ApimaticAPILib\Models\ApiValidationSummary;
use ApimaticAPILib\Utils\FileWrapper;
use Core\Request\Parameters\FormParam;
use Core\Request\Parameters\QueryParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class APIValidationExternalApisController extends BaseController
{
    /**
     * Validate an API by uploading the API specification file.
     *
     * You can also specify [API Metadata](https://docs.apimatic.io/manage-apis/apimatic-metadata) while
     * validating the API using this endpoint. When specifying Metadata, the uploaded file will be a zip
     * file containing the API specification file and the `APIMATIC-META` json file.
     *
     * @param FileWrapper $file The API specification file.<br>The type of the specification file
     *        should be any of the [supported formats](https://docs.apimatic.io/api-
     *        transformer/overview-transformer#supported-input-formats).
     *
     * @return ApiValidationSummary Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function validateAPIViaFile(FileWrapper $file): ApiValidationSummary
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/validation/validate-via-file')
            ->auth('Authorization')
            ->parameters(FormParam::init('file', $file));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad Request'))
            ->throwErrorOn('401', ErrorType::init('Unauthenticated'))
            ->throwErrorOn('403', ErrorType::init('Forbidden'))
            ->throwErrorOn('500', ErrorType::init('Internal Server Error'))
            ->type(ApiValidationSummary::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Validate an API by providing the URL of the API specification file.
     *
     * You can also specify [API Metadata](https://docs.apimatic.io/manage-apis/apimatic-metadata) while
     * validating the API using this endpoint. When specifying Metadata, the URL provided will be that of a
     * zip file containing the API specification file and the `APIMATIC-META` json file.
     *
     * @param string $descriptionUrl The URL for the API specification file.<br><br>**Note:** This
     *        URL should be publicly accessible.
     *
     * @return ApiValidationSummary Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function validateAPIViaURL(string $descriptionUrl): ApiValidationSummary
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/validation/validate-via-url')
            ->auth('Authorization')
            ->parameters(QueryParam::init('descriptionUrl', $descriptionUrl));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad Request'))
            ->throwErrorOn('401', ErrorType::init('Unauthenticated'))
            ->throwErrorOn('403', ErrorType::init('Forbidden'))
            ->throwErrorOn('500', ErrorType::init('Internal Server Error'))
            ->type(ApiValidationSummary::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
