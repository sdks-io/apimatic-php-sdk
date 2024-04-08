
# Generate Sdk Via Url Request

## Structure

`GenerateSdkViaUrlRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `url` | `string` | Required | The URL for the API specification file.<br><br>**Note:** This URL should be publicly accessible. | getUrl(): string | setUrl(string url): void |
| `template` | [`string(Platforms)`](../../doc/models/platforms.md) | Required | The structure contains platforms that APIMatic CodeGen can generate SDKs and Docs in.<br>**Default**: `Platforms::CS_NET_STANDARD_LIB` | getTemplate(): string | setTemplate(string template): void |

## Example (as JSON)

```json
{
  "url": "http://petstore.swagger.io/v2/swagger.json",
  "template": "CS_NET_STANDARD_LIB"
}
```

