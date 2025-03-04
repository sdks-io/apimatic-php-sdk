<?php

declare(strict_types=1);

/*
 * ApimaticAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApimaticAPILib\Controllers;

use ApimaticAPILib\Exceptions\ApiException;
use ApimaticAPILib\Models\APIEntityCodeGeneration;
use ApimaticAPILib\Models\Platforms;
use Core\Request\Parameters\FormParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\TemplateParam;
use CoreInterfaces\Core\Request\RequestMethod;

class CodeGenerationImportedApisController extends BaseController
{
    /**
     * Generate an SDK for an API Version.
     *
     * This endpoint generates and then uploads the generated SDK to APIMatic's cloud storage. An ID for
     * the generation performed is returned as part of the response.
     *
     * @param string $apiEntityId The ID of the API Entity to generate the SDK for.
     * @param string $template The structure contains platforms that APIMatic CodeGen can generate
     *        SDKs and Docs in.
     *
     * @return APIEntityCodeGeneration Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function generateSDK(string $apiEntityId, string $template): APIEntityCodeGeneration
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/api-entities/{api_entity_id}/code-generations/generate'
        )
            ->auth('Authorization')
            ->parameters(
                TemplateParam::init('api_entity_id', $apiEntityId),
                HeaderParam::init('Content-Type', 'application/x-www-form-urlencoded'),
                FormParam::init('template', $template)->serializeBy([Platforms::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()->type(APIEntityCodeGeneration::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Download the SDK generated via the Generate SDK endpoint.
     *
     * @param string $apiEntityId The ID of the API Entity for which the SDK was generated.
     * @param string $codegenId The ID of code generation received in the response of the [SDK
     *        generation call](https://www.apimatic.io/api-docs-
     *        preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/code-generation-
     *        imported-apis/generate-sdk).
     *
     * @return string Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function downloadSDK(string $apiEntityId, string $codegenId): string
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/api-entities/{api_entity_id}/code-generations/{codegen_id}/generated-sdk'
        )
            ->auth('Authorization')
            ->parameters(
                TemplateParam::init('api_entity_id', $apiEntityId),
                TemplateParam::init('codegen_id', $codegenId)
            );

        return $this->execute($_reqBuilder);
    }

    /**
     * Get a list of all SDK generations done against an API Version via the Generate SDK endpoint.
     *
     * @param string $apiEntityId The ID of the API Entity for which to list code generations.
     *
     * @return APIEntityCodeGeneration[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listAllCodeGenerationsImported(string $apiEntityId): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/api-entities/{api_entity_id}/code-generations')
            ->auth('Authorization')
            ->parameters(TemplateParam::init('api_entity_id', $apiEntityId));

        $_resHandler = $this->responseHandler()->type(APIEntityCodeGeneration::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Get details on an SDK generation performed via the Generate SDK endpoint.
     *
     * @param string $apiEntityId The ID of the API Entity to fetch the code generation for.
     * @param string $codegenId The ID of the code generation to fetch. The code generation ID is
     *        received in the response of the [SDK generation call](https://www.apimatic.io/api-
     *        docs-preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/code-
     *        generation-imported-apis/generate-sdk).
     *
     * @return APIEntityCodeGeneration Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getACodeGenerationImported(string $apiEntityId, string $codegenId): APIEntityCodeGeneration
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/api-entities/{api_entity_id}/code-generations/{codegen_id}'
        )
            ->auth('Authorization')
            ->parameters(
                TemplateParam::init('api_entity_id', $apiEntityId),
                TemplateParam::init('codegen_id', $codegenId)
            );

        $_resHandler = $this->responseHandler()->type(APIEntityCodeGeneration::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Delete an SDK generation performed for an API Version via the Generate SDK endpoint.
     *
     * @param string $apiEntityId The ID of the API Entity to delete the code generation for.
     * @param string $codegenId The ID of the code generation to delete. The code generation ID is
     *        received in the response of the [SDK generation call](https://www.apimatic.io/api-
     *        docs-preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/code-
     *        generation-imported-apis/generate-sdk).
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteCodeGeneration(string $apiEntityId, string $codegenId): void
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/api-entities/{api_entity_id}/code-generations/{codegen_id}'
        )
            ->auth('Authorization')
            ->parameters(
                TemplateParam::init('api_entity_id', $apiEntityId),
                TemplateParam::init('codegen_id', $codegenId)
            );

        $this->execute($_reqBuilder);
    }
}
