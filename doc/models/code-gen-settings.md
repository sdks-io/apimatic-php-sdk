
# Code Gen Settings

APIMatic’s code generation engine has various code generation configurations to customise the behaviour and outlook across the generated SDKS. This structure encapsulates all settings for CodeGeneration.

## Structure

`CodeGenSettings`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `isAsync` | `bool` | Required | Generate asynchronous code for API Calls and deserialization | getIsAsync(): bool | setIsAsync(bool isAsync): void |
| `useHttpMethodPrefix` | `bool` | Required | Use HTTP Method prefixes for endpoint wrappers | getUseHttpMethodPrefix(): bool | setUseHttpMethodPrefix(bool useHttpMethodPrefix): void |
| `useModelPrefix` | `bool` | Required | Use "Model" postfixes for generated class names | getUseModelPrefix(): bool | setUseModelPrefix(bool useModelPrefix): void |
| `useEnumPrefix` | `bool` | Required | Use "Enum" postfixes for enumerated types | getUseEnumPrefix(): bool | setUseEnumPrefix(bool useEnumPrefix): void |
| `useConstructorsForConfig` | `bool` | Required | - | getUseConstructorsForConfig(): bool | setUseConstructorsForConfig(bool useConstructorsForConfig): void |
| `useCommonSdkLibrary` | `bool` | Required | Use common SDK library to reduce code duplication | getUseCommonSdkLibrary(): bool | setUseCommonSdkLibrary(bool useCommonSdkLibrary): void |
| `generateInterfaces` | `bool` | Required | Generates interfaces for controller classes in the generated SDKs | getGenerateInterfaces(): bool | setGenerateInterfaces(bool generateInterfaces): void |
| `generateAppveyorConfig` | `bool` | Required | Generate Appveyor configuration file | getGenerateAppveyorConfig(): bool | setGenerateAppveyorConfig(bool generateAppveyorConfig): void |
| `generateCircleConfig` | `bool` | Required | Generate CircleCI configuration file | getGenerateCircleConfig(): bool | setGenerateCircleConfig(bool generateCircleConfig): void |
| `generateJenkinsConfig` | `bool` | Required | Generate Jenkins configuration file | getGenerateJenkinsConfig(): bool | setGenerateJenkinsConfig(bool generateJenkinsConfig): void |
| `generateTravisConfig` | `bool` | Required | Generate Travis CI configuration file | getGenerateTravisConfig(): bool | setGenerateTravisConfig(bool generateTravisConfig): void |
| `androidUseAppManifest` | `bool` | Required | Use "AndroidManifest.xml" for config variables in Android | getAndroidUseAppManifest(): bool | setAndroidUseAppManifest(bool androidUseAppManifest): void |
| `iosUseAppInfoPlist` | `bool` | Required | Use "App-Info.plist" file for config variables in iOS | getIosUseAppInfoPlist(): bool | setIosUseAppInfoPlist(bool iosUseAppInfoPlist): void |
| `iosGenerateCoreData` | `bool` | Required | Generate "CoreData" schema and entity classes in iOS? | getIosGenerateCoreData(): bool | setIosGenerateCoreData(bool iosGenerateCoreData): void |
| `runscopeEnabled` | `bool` | Required | Enable runscope | getRunscopeEnabled(): bool | setRunscopeEnabled(bool runscopeEnabled): void |
| `collapseParamsToArray` | `bool` | Required | Collect Parameters as arrays | getCollapseParamsToArray(): bool | setCollapseParamsToArray(bool collapseParamsToArray): void |
| `preserveParameterOrder` | `bool` | Required | Attempts to preserve parameter order for endpoints | getPreserveParameterOrder(): bool | setPreserveParameterOrder(bool preserveParameterOrder): void |
| `appendContentHeaders` | `bool` | Required | Append JSON/XML accept and content-type headers | getAppendContentHeaders(): bool | setAppendContentHeaders(bool appendContentHeaders): void |
| `modelSerializationIsJSON` | `bool` | Required | - | getModelSerializationIsJSON(): bool | setModelSerializationIsJSON(bool modelSerializationIsJSON): void |
| `nullify404` | `bool` | Required | Return a null value on HTTP 404 | getNullify404(): bool | setNullify404(bool nullify404): void |
| `validateRequiredParameters` | `bool` | Required | Validate required parameters to be Not Null | getValidateRequiredParameters(): bool | setValidateRequiredParameters(bool validateRequiredParameters): void |
| `enableAdditionalModelProperties` | `bool` | Required | Allow models to have additional runtime properties | getEnableAdditionalModelProperties(): bool | setEnableAdditionalModelProperties(bool enableAdditionalModelProperties): void |
| `javaUsePropertiesConfig` | `bool` | Required | - | getJavaUsePropertiesConfig(): bool | setJavaUsePropertiesConfig(bool javaUsePropertiesConfig): void |
| `useControllerPrefix` | `bool` | Required | Use "Controller" postfixes for generated controller classes | getUseControllerPrefix(): bool | setUseControllerPrefix(bool useControllerPrefix): void |
| `useExceptionPrefix` | `bool` | Required | Use Exception Prefixes | getUseExceptionPrefix(): bool | setUseExceptionPrefix(bool useExceptionPrefix): void |
| `parameterArrayFormat` | `string` | Required | Parameter Array format with index or without | getParameterArrayFormat(): string | setParameterArrayFormat(string parameterArrayFormat): void |
| `objCHttpClient` | `string` | Required | Configure the HTTP client for Objective C | getObjCHttpClient(): string | setObjCHttpClient(string objCHttpClient): void |
| `cSharpHttpClient` | `string` | Required | Configure the HTTP client for C# | getCSharpHttpClient(): string | setCSharpHttpClient(string cSharpHttpClient): void |
| `androidHttpClient` | `string` | Required | Configure the HTTP client for  Android | getAndroidHttpClient(): string | setAndroidHttpClient(string androidHttpClient): void |
| `nodeHttpClient` | `string` | Required | Configure the HTTP client for node | getNodeHttpClient(): string | setNodeHttpClient(string nodeHttpClient): void |
| `phpHttpClient` | `string` | Required | Configure the HTTP client for PHP | getPhpHttpClient(): string | setPhpHttpClient(string phpHttpClient): void |
| `bodySerialization` | `int` | Required | - | getBodySerialization(): int | setBodySerialization(int bodySerialization): void |
| `arraySerialization` | `string` | Required | Specify type of array serialisation | getArraySerialization(): string | setArraySerialization(string arraySerialization): void |
| `timeout` | `int` | Required | This option specifies the duration (in seconds) after which requests would timeout | getTimeout(): int | setTimeout(int timeout): void |
| `enableLogging` | `bool` | Required | Enabling this generates code in the SDKs for logging events in the API cycle using a library. | getEnableLogging(): bool | setEnableLogging(bool enableLogging): void |
| `enableHttpCache` | `bool` | Required | Enabling caching of responses (not available in all languages) | getEnableHttpCache(): bool | setEnableHttpCache(bool enableHttpCache): void |
| `retries` | `int` | Required | Specify number of retries | getRetries(): int | setRetries(int retries): void |
| `retryInterval` | `int` | Required | Specify retry interval in case of failures | getRetryInterval(): int | setRetryInterval(int retryInterval): void |
| `generateAdvancedDocs` | `bool` | Required | Generate advanced read me files | getGenerateAdvancedDocs(): bool | setGenerateAdvancedDocs(bool generateAdvancedDocs): void |
| `storeTimezoneInformation` | `bool` | Required | Store Timezone information for the generation | getStoreTimezoneInformation(): bool | setStoreTimezoneInformation(bool storeTimezoneInformation): void |
| `enablePhpComposerVersionString` | `bool` | Required | Use "Controller" postfixes for generated controller classes | getEnablePhpComposerVersionString(): bool | setEnablePhpComposerVersionString(bool enablePhpComposerVersionString): void |
| `securityProtocols` | `string[]` | Required | Specify Security Protocols | getSecurityProtocols(): array | setSecurityProtocols(array securityProtocols): void |
| `underscoreNumbers` | `bool` | Required | Use underscores before and after numbers for underscore case | getUnderscoreNumbers(): bool | setUnderscoreNumbers(bool underscoreNumbers): void |
| `useSingletonPattern` | `bool` | Required | Allow usage of a Singleton Pattern | getUseSingletonPattern(): bool | setUseSingletonPattern(bool useSingletonPattern): void |
| `disableLinting` | `bool` | Required | Files/dependencies used for linting are not generated if this option is enabled | getDisableLinting(): bool | setDisableLinting(bool disableLinting): void |
| `allowSkippingSSLCertVerification` | `bool` | Required | Create a configuration option in SDKs to optionally skip certificate verification when establishing HTTPS connections. | getAllowSkippingSSLCertVerification(): bool | setAllowSkippingSSLCertVerification(bool allowSkippingSSLCertVerification): void |
| `applyCustomizations` | `string[]` | Required | Apply Customisations | getApplyCustomizations(): array | setApplyCustomizations(array applyCustomizations): void |
| `doNotSplitWords` | `string[]` | Required | Enabling this will stop splitting of words when converting identifiers from API specification to language-specific identifiers. | getDoNotSplitWords(): array | setDoNotSplitWords(array doNotSplitWords): void |
| `sortResources` | `bool` | Required | Sorts resources such as endpoints, endpoint groups and models in generated documentation | getSortResources(): bool | setSortResources(bool sortResources): void |
| `enableGlobalUserAgent` | `bool` | Required | Enable a global user agent | getEnableGlobalUserAgent(): bool | setEnableGlobalUserAgent(bool enableGlobalUserAgent): void |

## Example (as JSON)

```json
{
  "isAsync": true,
  "useHttpMethodPrefix": true,
  "useModelPrefix": false,
  "useEnumPrefix": true,
  "useConstructorsForConfig": false,
  "useCommonSdkLibrary": false,
  "generateInterfaces": false,
  "generateAppveyorConfig": false,
  "generateCircleConfig": false,
  "generateJenkinsConfig": false,
  "generateTravisConfig": false,
  "androidUseAppManifest": false,
  "iosUseAppInfoPlist": false,
  "iosGenerateCoreData": false,
  "runscopeEnabled": false,
  "collapseParamsToArray": false,
  "preserveParameterOrder": true,
  "appendContentHeaders": true,
  "modelSerializationIsJSON": true,
  "nullify404": false,
  "validateRequiredParameters": false,
  "enableAdditionalModelProperties": false,
  "javaUsePropertiesConfig": false,
  "useControllerPrefix": true,
  "useExceptionPrefix": true,
  "parameterArrayFormat": "ParamArrayWithIndex",
  "objCHttpClient": "UNIREST",
  "cSharpHttpClient": "UNIREST",
  "androidHttpClient": "ANDROID_OK",
  "nodeHttpClient": "NODE_REQUEST",
  "phpHttpClient": "UNIREST",
  "bodySerialization": 0,
  "arraySerialization": "Indexed",
  "timeout": 0,
  "enableLogging": false,
  "enableHttpCache": false,
  "retries": 0,
  "retryInterval": 1,
  "generateAdvancedDocs": true,
  "storeTimezoneInformation": false,
  "enablePhpComposerVersionString": false,
  "securityProtocols": [
    "Ssl3",
    "Tls"
  ],
  "underscoreNumbers": true,
  "useSingletonPattern": true,
  "disableLinting": false,
  "allowSkippingSSLCertVerification": false,
  "applyCustomizations": [],
  "doNotSplitWords": [],
  "sortResources": false,
  "enableGlobalUserAgent": true
}
```

