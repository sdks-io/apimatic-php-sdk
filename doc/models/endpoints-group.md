
# Endpoints Group

This structure encapsulates all the attributes of an API Endpoints Group.

## Structure

`EndpointsGroup`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `description` | `string` | Required | - | getDescription(): string | setDescription(string description): void |

## Example (as JSON)

```json
{
  "name": "Petstore",
  "description": "Everything about your pets"
}
```

