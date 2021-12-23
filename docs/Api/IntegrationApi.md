# Swagger\Client\IntegrationApi

All URIs are relative to *https://api.getsirena.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkCredentials**](IntegrationApi.md#checkCredentials) | **GET** /checkCredentials | 
[**getIntegration**](IntegrationApi.md#getIntegration) | **GET** /integration | 
[**getIntegrations**](IntegrationApi.md#getIntegrations) | **GET** /integrations | 


# **checkCredentials**
> checkCredentials($api_key)



Check if API Key exists and if it is enabled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | API Key to check.

try {
    $apiInstance->checkCredentials($api_key);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->checkCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**| API Key to check. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegration**
> \Swagger\Client\Model\Integration getIntegration($format)



Returns the active integration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->getIntegration($format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->getIntegration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Integration**](../Model/Integration.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrations**
> \Swagger\Client\Model\Integrations getIntegrations($format)



Returns the active integration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->getIntegrations($format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->getIntegrations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Integrations**](../Model/Integrations.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

