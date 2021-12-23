# Swagger\Client\ActAsUserApi

All URIs are relative to *https://api.getsirena.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveProspectAsUser**](ActAsUserApi.md#archiveProspectAsUser) | **POST** /prospect/{prospectId}/as-user/archive | 
[**getArchivingReasons**](ActAsUserApi.md#getArchivingReasons) | **GET** /as-user/archiving-reasons | 
[**getProspectLabels**](ActAsUserApi.md#getProspectLabels) | **GET** /as-user/labels | 
[**getTransferable**](ActAsUserApi.md#getTransferable) | **GET** /as-user/transfer | 
[**labelProspect**](ActAsUserApi.md#labelProspect) | **POST** /prospect/{prospectId}/as-user/label | 
[**transferProspectAsUser**](ActAsUserApi.md#transferProspectAsUser) | **POST** /prospect/{prospectId}/as-user/transfer | 


# **archiveProspectAsUser**
> \Swagger\Client\Model\Prospect archiveProspectAsUser($prospect_id, $prospect)



Archives a Prospect with an archiving reason. The integration (linked to the apiKey) must have a user configured. Also, the integrationType scope must have `integration:act-as-user`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ActAsUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$prospect = new \Swagger\Client\Model\UpdateProspect(); // \Swagger\Client\Model\UpdateProspect | The archiving reason that can be used

try {
    $result = $apiInstance->archiveProspectAsUser($prospect_id, $prospect);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActAsUserApi->archiveProspectAsUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **prospect** | [**\Swagger\Client\Model\UpdateProspect**](../Model/UpdateProspect.md)| The archiving reason that can be used |

### Return type

[**\Swagger\Client\Model\Prospect**](../Model/Prospect.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchivingReasons**
> \Swagger\Client\Model\ArchivingReasons getArchivingReasons($format)



Returns the available archiving reasons for an agent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ActAsUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->getArchivingReasons($format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActAsUserApi->getArchivingReasons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\ArchivingReasons**](../Model/ArchivingReasons.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProspectLabels**
> \Swagger\Client\Model\ProspectLabels getProspectLabels($format)



Returns the available prospect labels for an agent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ActAsUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->getProspectLabels($format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActAsUserApi->getProspectLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\ProspectLabels**](../Model/ProspectLabels.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransferable**
> \Swagger\Client\Model\GroupUserTransferable getTransferable($format)



Returns transferable groups and users available to user integration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ActAsUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->getTransferable($format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActAsUserApi->getTransferable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\GroupUserTransferable**](../Model/GroupUserTransferable.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **labelProspect**
> \Swagger\Client\Model\Prospect labelProspect($prospect_id, $label, $format)



Label a prospect.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ActAsUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$label = new \Swagger\Client\Model\LabelProspect(); // \Swagger\Client\Model\LabelProspect | The label that can be used
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->labelProspect($prospect_id, $label, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActAsUserApi->labelProspect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **label** | [**\Swagger\Client\Model\LabelProspect**](../Model/LabelProspect.md)| The label that can be used |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Prospect**](../Model/Prospect.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transferProspectAsUser**
> object transferProspectAsUser($prospect_id, $transfer)



Transfer a Prospect to a group or user. The integration (linked to the apiKey) must have a user configured. Also, the integrationType scope must have `integration:act-as-user`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ActAsUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$transfer = new \Swagger\Client\Model\Transfer(); // \Swagger\Client\Model\Transfer | Define the destination user or group.

try {
    $result = $apiInstance->transferProspectAsUser($prospect_id, $transfer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActAsUserApi->transferProspectAsUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **transfer** | [**\Swagger\Client\Model\Transfer**](../Model/Transfer.md)| Define the destination user or group. |

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

