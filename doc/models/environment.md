
# Environment

An environment consists of a set of servers with base URL values. The environment can be changed programatically allowing rapid switching between different environments. For example the user can specify a Production and Testing Environment and switch between them in the generated SDK.

## Structure

`Environment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Unique Environment Identifier | getId(): string | setId(string id): void |
| `name` | `string` | Required | Environment Name | getName(): string | setName(string name): void |
| `servers` | [`Server[]`](../../doc/models/server.md) | Required | The user can specify multiple servers within an environment. A server comprises of a name and a url. | getServers(): array | setServers(array servers): void |

## Example (as JSON)

```json
{
  "id": "5be0a21a83b41d0d8cdcd832",
  "name": "production",
  "servers": [
    {
      "id": "5be0a21a83b41d0d8cdcd831",
      "name": "default",
      "url": "{defaultServerUrl}"
    }
  ]
}
```

