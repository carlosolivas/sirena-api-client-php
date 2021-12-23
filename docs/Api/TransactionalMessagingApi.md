# Swagger\Client\TransactionalMessagingApi

All URIs are relative to *https://api.getsirena.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getChannels**](TransactionalMessagingApi.md#getChannels) | **GET** /messaging/channels | 
[**getChannelsByProspectId**](TransactionalMessagingApi.md#getChannelsByProspectId) | **GET** /prospect/{prospectId}/messaging/channels | 
[**sendTemplateMessage**](TransactionalMessagingApi.md#sendTemplateMessage) | **POST** /prospect/{prospectId}/messaging/{channel}/notification | 


# **getChannels**
> \Swagger\Client\Model\Channels getChannels($format)



This endpoint returns the channels (communication channels) available in the scope of the apiKey provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\TransactionalMessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->getChannels($format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalMessagingApi->getChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Channels**](../Model/Channels.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelsByProspectId**
> \Swagger\Client\Model\Channels getChannelsByProspectId($prospect_id, $format)



Given an ProspectID, this endpoint returns the channels (communication channels) available for that prospect.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\TransactionalMessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->getChannelsByProspectId($prospect_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalMessagingApi->getChannelsByProspectId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Channels**](../Model/Channels.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTemplateMessage**
> \Swagger\Client\Model\Interactions sendTemplateMessage($prospect_id, $channel, $event)



Send a transactional template message to a prospect

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\TransactionalMessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$channel = "channel_example"; // string | Channel of the sending/receiving messages
$event = new \Swagger\Client\Model\NewTemplateMessage(); // \Swagger\Client\Model\NewTemplateMessage | 

try {
    $result = $apiInstance->sendTemplateMessage($prospect_id, $channel, $event);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalMessagingApi->sendTemplateMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **channel** | **string**| Channel of the sending/receiving messages |
 **event** | [**\Swagger\Client\Model\NewTemplateMessage**](../Model/NewTemplateMessage.md)|  |

### Return type

[**\Swagger\Client\Model\Interactions**](../Model/Interactions.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

