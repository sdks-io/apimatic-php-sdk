
# Platforms Template

## Structure

`PlatformsTemplate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `template` | [`string(Platforms)`](../../doc/models/platforms.md) | Required | The structure contains platforms that APIMatic CodeGen can generate SDKs and Docs in.<br>**Default**: `Platforms::CS_NET_STANDARD_LIB` | getTemplate(): string | setTemplate(string template): void |

## Example (as JSON)

```json
{
  "template": "CS_NET_STANDARD_LIB"
}
```

