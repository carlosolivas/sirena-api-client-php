# Swagger\Client\ConversationalMessagingApi

All URIs are relative to *https://api.getsirena.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getChannels**](ConversationalMessagingApi.md#getChannels) | **GET** /messaging/channels | 
[**getChannelsByProspectId**](ConversationalMessagingApi.md#getChannelsByProspectId) | **GET** /prospect/{prospectId}/messaging/channels | 
[**getOrdersByProspect**](ConversationalMessagingApi.md#getOrdersByProspect) | **GET** /prospect/{prospectId}/orders | 
[**sendFile**](ConversationalMessagingApi.md#sendFile) | **POST** /prospect/{prospectId}/messaging/{channel}/send-file | 
[**sendMessage**](ConversationalMessagingApi.md#sendMessage) | **POST** /prospect/{prospectId}/messaging/{channel} | 


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

$apiInstance = new Swagger\Client\Api\ConversationalMessagingApi(
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
    echo 'Exception when calling ConversationalMessagingApi->getChannels: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\ConversationalMessagingApi(
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
    echo 'Exception when calling ConversationalMessagingApi->getChannelsByProspectId: ', $e->getMessage(), PHP_EOL;
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

# **getOrdersByProspect**
> \Swagger\Client\Model\OrdersByProspect getOrdersByProspect($prospect_id, $limit)



Returns a filterable list of orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConversationalMessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$limit = 8.14; // float | The maximum number of items that must be returned (A multiple number of 100 and no more than 1000 is recommended)

try {
    $result = $apiInstance->getOrdersByProspect($prospect_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationalMessagingApi->getOrdersByProspect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **limit** | **float**| The maximum number of items that must be returned (A multiple number of 100 and no more than 1000 is recommended) | [optional]

### Return type

[**\Swagger\Client\Model\OrdersByProspect**](../Model/OrdersByProspect.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendFile**
> \Swagger\Client\Model\Interactions sendFile($prospect_id, $channel, $file)



Send a file to a prospect

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConversationalMessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$channel = "channel_example"; // string | Channel of the sending/receiving messages
$file = "/path/to/file.txt"; // \SplFileObject | The file to send to the prospect

try {
    $result = $apiInstance->sendFile($prospect_id, $channel, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationalMessagingApi->sendFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **channel** | **string**| Channel of the sending/receiving messages |
 **file** | **\SplFileObject**| The file to send to the prospect |

### Return type

[**\Swagger\Client\Model\Interactions**](../Model/Interactions.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendMessage**
> \Swagger\Client\Model\Interactions sendMessage($prospect_id, $channel, $event)



Send a conversational message to a prospect

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConversationalMessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$channel = "channel_example"; // string | Channel of the sending/receiving messages
$event = new \Swagger\Client\Model\NewMessage(); // \Swagger\Client\Model\NewMessage | 

try {
    $result = $apiInstance->sendMessage($prospect_id, $channel, $event);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationalMessagingApi->sendMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **channel** | **string**| Channel of the sending/receiving messages |
 **event** | [**\Swagger\Client\Model\NewMessage**](../Model/NewMessage.md)|  |

### Return type

[**\Swagger\Client\Model\Interactions**](../Model/Interactions.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

