
# Transform Via File Request Body

## Structure

`TransformViaFileRequestBody`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `file` | `string` | Required | The API specification file.<br>The type of the specification file should be any of the [supported formats](https://docs.apimatic.io/api-transformer/overview-transformer#supported-input-formats). | getFile(): string | setFile(string file): void |
| `exportFormat` | [`string(ExportFormats)`](../../doc/models/export-formats.md) | Required | The structure contains API specification formats that Transformer can convert to. | getExportFormat(): string | setExportFormat(string exportFormat): void |

## Example (as JSON)

```json
{
  "file": "file2",
  "export_format": "APIMATIC"
}
```

