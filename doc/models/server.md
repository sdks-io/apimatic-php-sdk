
# Server

The user can specify multiple servers within an environment. A server comprises of a name and a URL. The names of the hosts remain consistent over different environments but their values may vary. The URL values can contain any number of parameters defined.

## Structure

`Server`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Unique Server identifier | getId(): string | setId(string id): void |
| `name` | `string` | Required | Server Name | getName(): string | setName(string name): void |
| `url` | `string` | Required | Server URL | getUrl(): string | setUrl(string url): void |

## Example (as JSON)

```json
{
  "id": "5be0a21a83b41d0d8cdcd831",
  "name": "default",
  "url": "{defaultServerUrl}"
}
```

