
# Transform Via Url Request

This structure puts together the URL of the file to be transformed, along with the desired export format.

## Structure

`TransformViaUrlRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `url` | `string` | Required | The URL for the API specification file.<br><br>**Note:** This URL should be publicly accessible. | getUrl(): string | setUrl(string url): void |
| `exportFormat` | [`string(ExportFormats)`](../../doc/models/export-formats.md) | Required | The structure contains API specification formats that Transformer can convert to. | getExportFormat(): string | setExportFormat(string exportFormat): void |

## Example (as JSON)

```json
{
  "url": "https://petstore.swagger.io/v2/swagger.json",
  "export_format": "APIMATIC"
}
```

