
# Custom Header Signature



Documentation for accessing and setting credentials for Authorization.

## Auth Credentials

| Name | Type | Description | Setter | Getter |
|  --- | --- | --- | --- | --- |
| Authorization | `string` | Auth Header. Provide your Auth key in the format `X-Auth-Key {auth-key}`. | `authorization` | `getAuthorization()` |



**Note:** Auth credentials can be set using `CustomHeaderAuthenticationCredentialsBuilder::init()` in `customHeaderAuthenticationCredentials` method in the client builder and accessed through `getCustomHeaderAuthenticationCredentials` method in the client instance.

## Usage Example

### Client Initialization

You must provide credentials in the client as shown in the following code snippet.

```php
$client = ApimaticAPIClientBuilder::init()
    ->customHeaderAuthenticationCredentials(
        CustomHeaderAuthenticationCredentialsBuilder::init(
            'Authorization'
        )
    )
    ->build();
```


