# Code Generation-External APIs

```php
$codeGenerationExternalApisController = $client->getCodeGenerationExternalApisController();
```

## Class Name

`CodeGenerationExternalApisController`

## Methods

* [Generate SDK Via File](../../doc/controllers/code-generation-external-apis.md#generate-sdk-via-file)
* [Generate SDK Via URL](../../doc/controllers/code-generation-external-apis.md#generate-sdk-via-url)
* [Download Generated SDK](../../doc/controllers/code-generation-external-apis.md#download-generated-sdk)
* [List All Code Generations External](../../doc/controllers/code-generation-external-apis.md#list-all-code-generations-external)
* [Download Input File Codegen](../../doc/controllers/code-generation-external-apis.md#download-input-file-codegen)
* [Get a Code Generation Codegen](../../doc/controllers/code-generation-external-apis.md#get-a-code-generation-codegen)
* [Delete Code Generation 1](../../doc/controllers/code-generation-external-apis.md#delete-code-generation-1)


# Generate SDK Via File

Generate an SDK for an API by by uploading the API specification file.

This endpoint generates and then uploads the generated SDK to APIMatic's cloud storage. An ID for the generation performed is returned as part of the response.

This endpoint does not import an API into APIMatic.

```php
function generateSDKViaFile(FileWrapper $file, string $template): UserCodeGeneration
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `file` | `FileWrapper` | Form, Required | The API specification file.<br>The type of the specification file should be any of the [supported formats](https://docs.apimatic.io/api-transformer/overview-transformer#supported-input-formats). |
| `template` | [`string(Platforms)`](../../doc/models/platforms.md) | Form, Required | The structure contains platforms that APIMatic CodeGen can generate SDKs and Docs in. |

## Response Type

[`UserCodeGeneration`](../../doc/models/user-code-generation.md)

## Example Usage

```php
$file = FileWrapper::createFromPath('dummy_file');

$template = Platforms::CS_NET_STANDARD_LIB;

$result = $codeGenerationExternalApisController->generateSDKViaFile(
    $file,
    $template
);
```


# Generate SDK Via URL

Generate an SDK for an API by providing the URL of the API specification file.

This endpoint generates and then uploads the generated SDK to APIMatic's cloud storage. An ID for the generation performed is returned as part of the response.

This endpoint does not import an API into APIMatic.

```php
function generateSDKViaURL(GenerateSdkViaUrlRequest $body): UserCodeGeneration
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`GenerateSdkViaUrlRequest`](../../doc/models/generate-sdk-via-url-request.md) | Body, Required | Request Body |

## Response Type

[`UserCodeGeneration`](../../doc/models/user-code-generation.md)

## Example Usage

```php
$body = GenerateSdkViaUrlRequestBuilder::init(
    'http://petstore.swagger.io/v2/swagger.json',
    Platforms::CS_NET_STANDARD_LIB
)->build();

$result = $codeGenerationExternalApisController->generateSDKViaURL($body);
```


# Download Generated SDK

Download the SDK generated via the Generate SDK endpoints.

```php
function downloadGeneratedSDK(string $codegenId): string
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `codegenId` | `string` | Template, Required | The ID of code generation received in the response of the [Generate SDK Via File](https://www.apimatic.io/api-docs-preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/code-generation-external-apis/generate-sdk-via-file) or [Generate SDK Via URL ](https://www.apimatic.io/api-docs-preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/code-generation-external-apis/generate-sdk-via-url) calls. |

## Response Type

`string`

## Example Usage

```php
$codegenId = 'codegen_id6';

$result = $codeGenerationExternalApisController->downloadGeneratedSDK($codegenId);
```


# List All Code Generations External

Get a list of all SDK generations performed with external APIs via the Generate SDK endpoints.

```php
function listAllCodeGenerationsExternal(): array
```

## Response Type

[`UserCodeGeneration[]`](../../doc/models/user-code-generation.md)

## Example Usage

```php
$result = $codeGenerationExternalApisController->listAllCodeGenerationsExternal();
```


# Download Input File Codegen

Download the API Specification file used as input for a specific SDK generation performed via the Generate SDK endpoints.

```php
function downloadInputFileCodegen(string $codegenId): string
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `codegenId` | `string` | Template, Required | The ID of the code generation to download the API specification for. The code generation ID is received in the response of the [Generate SDK Via File](https://www.apimatic.io/api-docs-preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/code-generation-external-apis/generate-sdk-via-file) or [Generate SDK Via URL ](https://www.apimatic.io/api-docs-preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/code-generation-external-apis/generate-sdk-via-url) calls |

## Response Type

`string`

## Example Usage

```php
$codegenId = 'codegen_id6';

$result = $codeGenerationExternalApisController->downloadInputFileCodegen($codegenId);
```


# Get a Code Generation Codegen

Get details on an SDK generation performed for an external API via the Generate SDK endpoints.

```php
function getACodeGenerationCodegen(string $codegenId): UserCodeGeneration
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `codegenId` | `string` | Template, Required | The ID of the code generation to fetch. The code generation ID is received in the response of the [Generate SDK Via File](https://www.apimatic.io/api-docs-preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/code-generation-external-apis/generate-sdk-via-file) or [Generate SDK Via URL ](https://www.apimatic.io/api-docs-preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/code-generation-external-apis/generate-sdk-via-url) calls. |

## Response Type

[`UserCodeGeneration`](../../doc/models/user-code-generation.md)

## Example Usage

```php
$codegenId = 'codegen_id6';

$result = $codeGenerationExternalApisController->getACodeGenerationCodegen($codegenId);
```


# Delete Code Generation 1

Delete an SDK generation performed for an API via the Generate SDK endpoints.

```php
function deleteCodeGeneration1(string $codegenId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `codegenId` | `string` | Template, Required | The ID of the code generation to delete. The code generation ID is received in the response of the [Generate SDK Via File](https://www.apimatic.io/api-docs-preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/code-generation-external-apis/generate-sdk-via-file) or [Generate SDK Via URL ](https://www.apimatic.io/api-docs-preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/code-generation-external-apis/generate-sdk-via-url) calls. |

## Response Type

`void`

## Example Usage

```php
$codegenId = 'codegen_id6';

$codeGenerationExternalApisController->deleteCodeGeneration1($codegenId);
```

