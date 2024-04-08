
# Auth Scope

## Structure

`AuthScope`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Scope Id | getId(): string | setId(string id): void |
| `name` | `string` | Required | Scope Name | getName(): string | setName(string name): void |
| `value` | `string` | Required | Scope Value | getValue(): string | setValue(string value): void |
| `description` | `string` | Required | Scope Description | getDescription(): string | setDescription(string description): void |

## Example (as JSON)

```json
{
  "id": "5be0a21a83b41d0d8cdcd81d",
  "name": "readpets",
  "value": "read:pets",
  "description": "read your pets"
}
```

