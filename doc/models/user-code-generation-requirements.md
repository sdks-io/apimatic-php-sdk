
# User Code Generation Requirements

## Structure

`UserCodeGenerationRequirements`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `userId` | `string` | Required | Unique User Identifier | getUserId(): string | setUserId(string userId): void |
| `inputFile` | `string` | Required | API Specification file in a supported format | getInputFile(): string | setInputFile(string inputFile): void |

## Example (as JSON)

```json
{
  "userId": "5afc60380b9949253c6b7776",
  "inputFile": "https://api.apimatic.io/code-generations/5be08d7b83b41d0d8cdb3958/input-file"
}
```

