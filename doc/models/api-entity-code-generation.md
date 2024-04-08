
# API Entity Code Generation

The Code Generation structure encapsulates all the  the details of an SDK generation performed against an API Entity

## Structure

`APIEntityCodeGeneration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Unique Code Generation Identifier | getId(): string | setId(string id): void |
| `template` | [`string(Platforms)`](../../doc/models/platforms.md) | Required | The structure contains platforms that APIMatic CodeGen can generate SDKs and Docs in.<br>**Default**: `Platforms::CS_NET_STANDARD_LIB` | getTemplate(): string | setTemplate(string template): void |
| `generatedFile` | `string` | Required | The generated SDK | getGeneratedFile(): string | setGeneratedFile(string generatedFile): void |
| `generatedOn` | `DateTime` | Required | Generation Date and Time | getGeneratedOn(): \DateTime | setGeneratedOn(\DateTime generatedOn): void |
| `hashCode` | `string` | Required | The md5 hash of the API Description | getHashCode(): string | setHashCode(string hashCode): void |
| `codeGenerationSource` | `string` | Required | Generation Source | getCodeGenerationSource(): string | setCodeGenerationSource(string codeGenerationSource): void |
| `codeGenVersion` | `string` | Required | Generation Version | getCodeGenVersion(): string | setCodeGenVersion(string codeGenVersion): void |
| `success` | `bool` | Required | Generation Status | getSuccess(): bool | setSuccess(bool success): void |
| `apiEntityId` | `string` | Required | Unique API Entity Identifier | getApiEntityId(): string | setApiEntityId(string apiEntityId): void |

## Example (as JSON)

```json
{
  "id": "5be08b2d83b41d0d8cdb3289",
  "template": "CS_NET_STANDARD_LIB",
  "generatedFile": "https://api.apimatic.io/code-generations/5be08b2d83b41d0d8cdb3289/generated-sdk",
  "generatedOn": "04/03/2024 15:46:32",
  "hashCode": "77BDA4F625EF512B336D0A77CE2BB2B6",
  "codeGenerationSource": "Api",
  "codeGenVersion": "1",
  "success": true,
  "apiEntityId": "5be012963270e339f88005d0"
}
```

