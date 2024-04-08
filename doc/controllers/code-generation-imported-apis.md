# Code Generation-Imported APIs

```php
$codeGenerationImportedApisController = $client->getCodeGenerationImportedApisController();
```

## Class Name

`CodeGenerationImportedApisController`

## Methods

* [Generate SDK](../../doc/controllers/code-generation-imported-apis.md#generate-sdk)
* [Download SDK](../../doc/controllers/code-generation-imported-apis.md#download-sdk)
* [List All Code Generations Imported](../../doc/controllers/code-generation-imported-apis.md#list-all-code-generations-imported)
* [Get a Code Generation Imported](../../doc/controllers/code-generation-imported-apis.md#get-a-code-generation-imported)
* [Delete Code Generation](../../doc/controllers/code-generation-imported-apis.md#delete-code-generation)


# Generate SDK

Generate an SDK for an API Version.

This endpoint generates and then uploads the generated SDK to APIMatic's cloud storage. An ID for the generation performed is returned as part of the response.

```php
function generateSDK(string $apiEntityId, string $template): APIEntityCodeGeneration
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apiEntityId` | `string` | Template, Required | The ID of the API Entity to generate the SDK for. |
| `template` | [`string(Platforms)`](../../doc/models/platforms.md) | Form, Required | The structure contains platforms that APIMatic CodeGen can generate SDKs and Docs in. |

## Response Type

[`APIEntityCodeGeneration`](../../doc/models/api-entity-code-generation.md)

## Example Usage

```php
$apiEntityId = 'api_entity_id4';

$template = Platforms::CS_NET_STANDARD_LIB;

$result = $codeGenerationImportedApisController->generateSDK(
    $apiEntityId,
    $template
);
```


# Download SDK

Download the SDK generated via the Generate SDK endpoint.

```php
function downloadSDK(string $apiEntityId, string $codegenId): string
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apiEntityId` | `string` | Template, Required | The ID of the API Entity for which the SDK was generated. |
| `codegenId` | `string` | Template, Required | The ID of code generation received in the response of the [SDK generation call](https://www.apimatic.io/api-docs-preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/code-generation-imported-apis/generate-sdk). |

## Response Type

`string`

## Example Usage

```php
$apiEntityId = 'api_entity_id4';

$codegenId = 'codegen_id6';

$result = $codeGenerationImportedApisController->downloadSDK(
    $apiEntityId,
    $codegenId
);
```


# List All Code Generations Imported

Get a list of all SDK generations done against an API Version via the Generate SDK endpoint.

```php
function listAllCodeGenerationsImported(string $apiEntityId): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apiEntityId` | `string` | Template, Required | The ID of the API Entity for which to list code generations. |

## Response Type

[`APIEntityCodeGeneration[]`](../../doc/models/api-entity-code-generation.md)

## Example Usage

```php
$apiEntityId = 'api_entity_id4';

$result = $codeGenerationImportedApisController->listAllCodeGenerationsImported($apiEntityId);
```


# Get a Code Generation Imported

Get details on an SDK generation performed via the Generate SDK endpoint.

```php
function getACodeGenerationImported(string $apiEntityId, string $codegenId): APIEntityCodeGeneration
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apiEntityId` | `string` | Template, Required | The ID of the API Entity to fetch the code generation for. |
| `codegenId` | `string` | Template, Required | The ID of the code generation to fetch. The code generation ID is received in the response of the [SDK generation call](https://www.apimatic.io/api-docs-preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/code-generation-imported-apis/generate-sdk). |

## Response Type

[`APIEntityCodeGeneration`](../../doc/models/api-entity-code-generation.md)

## Example Usage

```php
$apiEntityId = 'api_entity_id4';

$codegenId = 'codegen_id6';

$result = $codeGenerationImportedApisController->getACodeGenerationImported(
    $apiEntityId,
    $codegenId
);
```


# Delete Code Generation

Delete an SDK generation performed for an API Version via the Generate SDK endpoint.

```php
function deleteCodeGeneration(string $apiEntityId, string $codegenId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apiEntityId` | `string` | Template, Required | The ID of the API Entity to delete the code generation for. |
| `codegenId` | `string` | Template, Required | The ID of the code generation to delete. The code generation ID is received in the response of the [SDK generation call](https://www.apimatic.io/api-docs-preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/code-generation-imported-apis/generate-sdk). |

## Response Type

`void`

## Example Usage

```php
$apiEntityId = 'api_entity_id4';

$codegenId = 'codegen_id6';

$codeGenerationImportedApisController->deleteCodeGeneration(
    $apiEntityId,
    $codegenId
);
```

