
# Authentication

This Structure encapsulates all details of API authentication.

## Structure

`Authentication`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Auth Id | getId(): string | setId(string id): void |
| `authType` | `string` | Required | Auth Type | getAuthType(): string | setAuthType(string authType): void |
| `scopes` | [`AuthScope[]`](../../doc/models/auth-scope.md) | Required | Scope | getScopes(): array | setScopes(array scopes): void |
| `parameters` | `string[]` | Required | Auth Params | getParameters(): array | setParameters(array parameters): void |
| `authScopes` | `string[]` | Required | Auth Scopes | getAuthScopes(): array | setAuthScopes(array authScopes): void |
| `authGrantTypes` | `string[]` | Required | Auth Grant Types | getAuthGrantTypes(): array | setAuthGrantTypes(array authGrantTypes): void |
| `paramFormats` | `array` | Required | Paramater Formats | getParamFormats(): array | setParamFormats(array paramFormats): void |

## Example (as JSON)

```json
{
  "id": "5be0a21a83b41d0d8cdcd80f",
  "authType": "None",
  "scopes": [],
  "parameters": [],
  "authScopes": [],
  "authGrantTypes": [],
  "paramFormats": {}
}
```

