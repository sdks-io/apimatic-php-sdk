# APIs Management

```php
$apisManagementController = $client->getApisManagementController();
```

## Class Name

`ApisManagementController`

## Methods

* [Import API Via File](../../doc/controllers/apis-management.md#import-api-via-file)
* [Import API Via URL](../../doc/controllers/apis-management.md#import-api-via-url)
* [Import New API Version Via File](../../doc/controllers/apis-management.md#import-new-api-version-via-file)
* [Import New API Version Via URL](../../doc/controllers/apis-management.md#import-new-api-version-via-url)
* [Inplace API Import Via File](../../doc/controllers/apis-management.md#inplace-api-import-via-file)
* [Inplace API Import Via URL](../../doc/controllers/apis-management.md#inplace-api-import-via-url)
* [Fetch API Entity](../../doc/controllers/apis-management.md#fetch-api-entity)
* [Download API Specification](../../doc/controllers/apis-management.md#download-api-specification)


# Import API Via File

Import an API into the APIMatic Dashboard by uploading the API specification file.

You can also specify [API Metadata](https://docs.apimatic.io/manage-apis/apimatic-metadata) while importing the API using this endpoint. When specifying Metadata, the uploaded file will be a zip file containing the API specification file and the `APIMATIC-META` json file.

```php
function importAPIViaFile(FileWrapper $file): ApiEntity
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `file` | `FileWrapper` | Form, Required | The API specification file.<br>The type of the specification file should be any of the [supported formats](https://docs.apimatic.io/api-transformer/overview-transformer#supported-input-formats). |

## Response Type

[`ApiEntity`](../../doc/models/api-entity.md)

## Example Usage

```php
$file = FileWrapper::createFromPath('dummy_file');

$result = $apisManagementController->importAPIViaFile($file);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | `ApiException` |
| 412 | Precondition Failed | `ApiException` |
| 422 | Unprocessable Entity | `ApiException` |
| 500 | Internal Server Error | `ApiException` |


# Import API Via URL

Import an API into the APIMatic Dashboard by providing the URL of the API specification file.

You can also specify [API Metadata](https://docs.apimatic.io/manage-apis/apimatic-metadata) while importing the API using this endpoint. When specifying Metadata, the URL provided will be that of a zip file containing the API specification file and the `APIMATIC-META` json file.

```php
function importAPIViaURL(ImportApiViaUrlRequest $body): ApiEntity
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ImportApiViaUrlRequest`](../../doc/models/import-api-via-url-request.md) | Body, Required | Request Body |

## Response Type

[`ApiEntity`](../../doc/models/api-entity.md)

## Example Usage

```php
$body = ImportApiViaUrlRequestBuilder::init(
    'https://petstore.swagger.io/v2/swagger.json'
)->build();

$result = $apisManagementController->importAPIViaURL($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | `ApiException` |
| 412 | Precondition Failed | `ApiException` |
| 422 | Unprocessable Entity | `ApiException` |
| 500 | Internal Server Error | `ApiException` |


# Import New API Version Via File

Import a new version for an API, against an existing API Group, by uploading the API specification file.

You can also specify [API Metadata](https://docs.apimatic.io/manage-apis/apimatic-metadata) while importing the API version using this endpoint. When specifying Metadata, the uploaded file will be a zip file containing the API specification file and the `APIMATIC-META` json file.

```php
function importNewAPIVersionViaFile(string $apiGroupId, string $versionOverride, FileWrapper $file): ApiEntity
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apiGroupId` | `string` | Template, Required | The ID of the API Group for which to import a new API version. |
| `versionOverride` | `string` | Form, Required | The version number with which the new API version will be imported. This version number will override the version specified in the API specification file.<br>APIMatic recommends versioning the API with the [versioning scheme](https://docs.apimatic.io/define-apis/basic-settings/#version) documented in the docs. |
| `file` | `FileWrapper` | Form, Required | The API specification file.<br>The type of the specification file should be any of the [supported formats](https://docs.apimatic.io/api-transformer/overview-transformer#supported-input-formats). |

## Response Type

[`ApiEntity`](../../doc/models/api-entity.md)

## Example Usage

```php
$apiGroupId = 'api_group_id6';

$versionOverride = 'version_override2';

$file = FileWrapper::createFromPath('dummy_file');

$result = $apisManagementController->importNewAPIVersionViaFile(
    $apiGroupId,
    $versionOverride,
    $file
);
```


# Import New API Version Via URL

Import a new version for an API, against an existing API Group, by providing the URL of the API specification file.

You can also specify [API Metadata](https://docs.apimatic.io/manage-apis/apimatic-metadata) while importing the API version using this endpoint. When specifying Metadata, the URL provided will be that of a zip file containing the API specification file and the `APIMATIC-META` json file.

```php
function importNewAPIVersionViaURL(string $apiGroupId, ImportApiVersionViaUrlRequest $body): ApiEntity
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apiGroupId` | `string` | Template, Required | The ID of the API Group for which to import a new API version. |
| `body` | [`ImportApiVersionViaUrlRequest`](../../doc/models/import-api-version-via-url-request.md) | Body, Required | Request Body |

## Response Type

[`ApiEntity`](../../doc/models/api-entity.md)

## Example Usage

```php
$apiGroupId = '5c9de181dc6209221416f250';

$body = ImportApiVersionViaUrlRequestBuilder::init(
    '1.2.3',
    'https://petstore.swagger.io/v2/swagger.json'
)->build();

$result = $apisManagementController->importNewAPIVersionViaURL(
    $apiGroupId,
    $body
);
```


# Inplace API Import Via File

Replace an API version of an API Group, by uploading the API specification file that will replace the current version.

You can also specify [API Metadata](https://docs.apimatic.io/manage-apis/apimatic-metadata) while importing the API version using this endpoint. When specifying Metadata, the uploaded file will be a zip file containing the API specification file and the `APIMATIC-META` json file.

```php
function inplaceAPIImportViaFile(string $apiEntityId, FileWrapper $file): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apiEntityId` | `string` | Template, Required | The ID of the API Entity to replace. |
| `file` | `FileWrapper` | Form, Required | The API specification file.<br>The type of the specification file should be any of the [supported formats](https://docs.apimatic.io/api-transformer/overview-transformer#supported-input-formats). |

## Response Type

`void`

## Example Usage

```php
$apiEntityId = 'api_entity_id4';

$file = FileWrapper::createFromPath('dummy_file');

$apisManagementController->inplaceAPIImportViaFile(
    $apiEntityId,
    $file
);
```


# Inplace API Import Via URL

Replace an API version of an API Group, by providing the URL of the API specification file that will replace the current version.

You can also specify [API Metadata](https://docs.apimatic.io/manage-apis/apimatic-metadata) while importing the API version using this endpoint. When specifying Metadata, the URL provided will be that of a zip file containing the API specification file and the `APIMATIC-META` json file.

```php
function inplaceAPIImportViaURL(string $apiEntityId, InplaceImportApiViaUrlRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apiEntityId` | `string` | Template, Required | The ID of the API Entity to replace. |
| `body` | [`InplaceImportApiViaUrlRequest`](../../doc/models/inplace-import-api-via-url-request.md) | Body, Required | Request Body |

## Response Type

`void`

## Example Usage

```php
$apiEntityId = 'api_entity_id4';

$body = InplaceImportApiViaUrlRequestBuilder::init(
    'https://petstore.swagger.io/v2/swagger.json'
)->build();

$apisManagementController->inplaceAPIImportViaURL(
    $apiEntityId,
    $body
);
```


# Fetch API Entity

Fetch an API Entity.

```php
function fetchAPIEntity(string $apiEntityId): ApiEntity
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apiEntityId` | `string` | Template, Required | The ID of the API Entity to fetch. |

## Response Type

[`ApiEntity`](../../doc/models/api-entity.md)

## Example Usage

```php
$apiEntityId = 'api_entity_id4';

$result = $apisManagementController->fetchAPIEntity($apiEntityId);
```


# Download API Specification

Download the API Specification file for a an API Version in any of the API Specification formats supported by APIMatic.

```php
function downloadAPISpecification(string $apiEntityId, string $format): string
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apiEntityId` | `string` | Template, Required | The ID of the API Entity to download. |
| `format` | [`string(ExportFormats)`](../../doc/models/export-formats.md) | Query, Required | The format in which to download the API.<br>The format can be any of the [supported formats](https://docs.apimatic.io/api-transformer/overview-transformer#supported-input-formats). |

## Response Type

`string`

## Example Usage

```php
$apiEntityId = 'api_entity_id4';

$format = ExportFormats::APIMATIC;

$result = $apisManagementController->downloadAPISpecification(
    $apiEntityId,
    $format
);
```

