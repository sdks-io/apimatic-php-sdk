
# Parameter

Parameters are options passed with the endpoint

## Structure

`Parameter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `optional` | `bool` | Required | If parameter is optional | getOptional(): bool | setOptional(bool optional): void |
| `type` | `string` | Required | Type of Parameter | getType(): string | setType(string type): void |
| `constant` | `bool` | Required | IF Parameter is constant | getConstant(): bool | setConstant(bool constant): void |
| `isArray` | `bool` | Required | If Param is collected as array | getIsArray(): bool | setIsArray(bool isArray): void |
| `isStream` | `bool` | Required | - | getIsStream(): bool | setIsStream(bool isStream): void |
| `isAttribute` | `bool` | Required | - | getIsAttribute(): bool | setIsAttribute(bool isAttribute): void |
| `isMap` | `bool` | Required | - | getIsMap(): bool | setIsMap(bool isMap): void |
| `attributes` | [`Attributes`](../../doc/models/attributes.md) | Required | The structure contain attribute details of a parameter type. | getAttributes(): Attributes | setAttributes(Attributes attributes): void |
| `nullable` | `bool` | Required | If Parameter is nullable | getNullable(): bool | setNullable(bool nullable): void |
| `id` | `string` | Required | Unique Parameter identifier | getId(): string | setId(string id): void |
| `name` | `string` | Required | Parameter Name | getName(): string | setName(string name): void |
| `description` | `string` | Required | Parameter Description | getDescription(): string | setDescription(string description): void |
| `defaultValue` | `string` | Required | Default Values of a Parameter | getDefaultValue(): string | setDefaultValue(string defaultValue): void |
| `paramFormat` | `string` | Required | Specify Parameter Format | getParamFormat(): string | setParamFormat(string paramFormat): void |

## Example (as JSON)

```json
{
  "optional": false,
  "type": "test\\r\\nstringEncoding",
  "constant": false,
  "isArray": false,
  "isStream": false,
  "isAttribute": false,
  "isMap": false,
  "attributes": {
    "id": "5be1603083b41d0b50110551"
  },
  "nullable": false,
  "id": "5a4e8675b724bb198c289f7a",
  "name": "body",
  "description": "description8",
  "defaultValue": "defaultValue4",
  "ParamFormat": "Body"
}
```

