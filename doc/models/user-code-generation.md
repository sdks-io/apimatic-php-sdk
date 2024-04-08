
# User Code Generation

The Code Generation structure encapsulates all the  the details of an SDK generation performed by a user.

## Structure

`UserCodeGeneration`

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
| `userId` | `string` | Required | Unique User Identifier | getUserId(): string | setUserId(string userId): void |
| `inputFile` | `string` | Required | API Specification file in a supported format | getInputFile(): string | setInputFile(string inputFile): void |

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
  "userId": "5afc60380b9949253c6b7776",
  "inputFile": "https://api.apimatic.io/code-generations/5be08d7b83b41d0d8cdb3958/input-file"
}
```

