
# Import Validation Summary

## Structure

`ImportValidationSummary`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `success` | `bool` | Required | - | getSuccess(): bool | setSuccess(bool success): void |
| `errors` | `string[]` | Required | - | getErrors(): array | setErrors(array errors): void |
| `warnings` | `string[]` | Required | - | getWarnings(): array | setWarnings(array warnings): void |
| `messages` | `string[]` | Required | - | getMessages(): array | setMessages(array messages): void |

## Example (as JSON)

```json
{
  "success": true,
  "errors": [],
  "warnings": [],
  "messages": [
    "One or more elements in the API specification has a missing description field."
  ]
}
```

