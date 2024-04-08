
# Inplace Import Api Via Url Request

Contains a url field to allow Apis to be imported via url

## Structure

`InplaceImportApiViaUrlRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `url` | `string` | Required | The URL for the API specification file.<br><br>**Note:** This URL should be publicly accessible. | getUrl(): string | setUrl(string url): void |

## Example (as JSON)

```json
{
  "url": "https://petstore.swagger.io/v2/swagger.json"
}
```

