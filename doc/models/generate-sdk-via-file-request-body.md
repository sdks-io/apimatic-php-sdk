
# Generate SDK Via File Request Body

## Structure

`GenerateSDKViaFileRequestBody`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `file` | `string` | Required | The API specification file.<br>The type of the specification file should be any of the [supported formats](https://docs.apimatic.io/api-transformer/overview-transformer#supported-input-formats). | getFile(): string | setFile(string file): void |
| `template` | [`string(Platforms)`](../../doc/models/platforms.md) | Required | The structure contains platforms that APIMatic CodeGen can generate SDKs and Docs in.<br>**Default**: `Platforms::CS_NET_STANDARD_LIB` | getTemplate(): string | setTemplate(string template): void |

## Example (as JSON)

```json
{
  "file": "file4",
  "template": "CS_NET_STANDARD_LIB"
}
```

