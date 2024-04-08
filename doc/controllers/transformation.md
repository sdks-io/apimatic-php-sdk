# Transformation

```php
$transformationController = $client->getTransformationController();
```

## Class Name

`TransformationController`

## Methods

* [Transform Via File](../../doc/controllers/transformation.md#transform-via-file)
* [Transform Via URL](../../doc/controllers/transformation.md#transform-via-url)
* [Download Transformed File](../../doc/controllers/transformation.md#download-transformed-file)
* [Download Input File Transformation](../../doc/controllers/transformation.md#download-input-file-transformation)
* [List All Transformations](../../doc/controllers/transformation.md#list-all-transformations)
* [Get a Transformation](../../doc/controllers/transformation.md#get-a-transformation)
* [Delete Transformation](../../doc/controllers/transformation.md#delete-transformation)


# Transform Via File

Transform an API into any of the supported API specification formats by uploading the API specification file. This endpoint transforms and then uploads the transformed API specification to APIMatic's cloud storage. An ID for the transformation performed is returned as part of the response.

```php
function transformViaFile(FileWrapper $file, string $exportFormat): Transformation
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `file` | `FileWrapper` | Form, Required | The API specification file.<br>The type of the specification file should be any of the [supported formats](https://docs.apimatic.io/api-transformer/overview-transformer#supported-input-formats). |
| `exportFormat` | [`string(ExportFormats)`](../../doc/models/export-formats.md) | Form, Required | The structure contains API specification formats that Transformer can convert to. |

## Response Type

[`Transformation`](../../doc/models/transformation.md)

## Example Usage

```php
$file = FileWrapper::createFromPath('dummy_file');

$exportFormat = ExportFormats::WSDL;

$result = $transformationController->transformViaFile(
    $file,
    $exportFormat
);
```


# Transform Via URL

Transform an API into any of the supported API specification formats by providing the URL of the API specification file.

This endpoint transforms and then uploads the transformed API specification to APIMatic's cloud storage. An ID for the transformation performed is returned as part of the response.

```php
function transformViaURL(TransformViaUrlRequest $body): Transformation
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`TransformViaUrlRequest`](../../doc/models/transform-via-url-request.md) | Body, Required | Request Body |

## Response Type

[`Transformation`](../../doc/models/transformation.md)

## Example Usage

```php
$body = TransformViaUrlRequestBuilder::init(
    'https://petstore.swagger.io/v2/swagger.json',
    ExportFormats::APIMATIC
)->build();

$result = $transformationController->transformViaURL($body);
```


# Download Transformed File

Download the transformed API specification file transformed via the Transformation endpoints.

```php
function downloadTransformedFile(string $transformationId): string
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `transformationId` | `string` | Template, Required | The ID of transformation received in the response of the [Transform Via File ](https://www.apimatic.io/api-docs-preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/transformation/transform-via-file) or [Transform Via URL  ](https://www.apimatic.io/api-docs-preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/transformation/transform-via-url) calls. |

## Response Type

`string`

## Example Usage

```php
$transformationId = 'transformation_id6';

$result = $transformationController->downloadTransformedFile($transformationId);
```


# Download Input File Transformation

Download the API Specification file used as input for a particular Transformation performed via the Transformation endpoints.

```php
function downloadInputFileTransformation(string $transformationId): string
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `transformationId` | `string` | Template, Required | The ID of the transformation to download the API specification for. The transformation ID is received in the response of the [Transform Via File ](https://www.apimatic.io/api-docs-preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/transformation/transform-via-file) or [Transform Via URL](https://www.apimatic.io/api-docs-preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/transformation/transform-via-url) calls. |

## Response Type

`string`

## Example Usage

```php
$transformationId = 'transformation_id6';

$result = $transformationController->downloadInputFileTransformation($transformationId);
```


# List All Transformations

Get a list of all API transformations performed.

```php
function listAllTransformations(): array
```

## Response Type

[`Transformation[]`](../../doc/models/transformation.md)

## Example Usage

```php
$result = $transformationController->listAllTransformations();
```


# Get a Transformation

Get details on a particular Transformation performed via the Transformation endpoints.

```php
function getATransformation(string $transformationId): Transformation
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `transformationId` | `string` | Template, Required | The ID of the transformation to fetch. The transformation ID is received in the response of the [Transform Via File ](https://www.apimatic.io/api-docs-preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/transformation/transform-via-file) or [Transform Via URL  ](https://www.apimatic.io/api-docs-preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/transformation/transform-via-url) calls. |

## Response Type

[`Transformation`](../../doc/models/transformation.md)

## Example Usage

```php
$transformationId = 'transformation_id6';

$result = $transformationController->getATransformation($transformationId);
```


# Delete Transformation

Delete a particular Transformation performed for an API via the Transformation endpoints.

```php
function deleteTransformation(string $transformationId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `transformationId` | `string` | Template, Required | The ID of the transformation to delete. The transformation ID is received in the response of the [Transform Via File ](https://www.apimatic.io/api-docs-preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/transformation/transform-via-file) or [Transform Via URL](https://www.apimatic.io/api-docs-preview/dashboard/60eea3b7a73395c3052d961b/v/3_0#/http/api-endpoints/transformation/transform-via-url) calls. |

## Response Type

`void`

## Example Usage

```php
$transformationId = 'transformation_id6';

$transformationController->deleteTransformation($transformationId);
```

