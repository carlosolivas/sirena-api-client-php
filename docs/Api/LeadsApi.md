# Swagger\Client\LeadsApi

All URIs are relative to *https://api.getsirena.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCategories**](LeadsApi.md#getCategories) | **GET** /leads/categories | 
[**getDefaults**](LeadsApi.md#getDefaults) | **GET** /leads/defaults | 
[**newInsuranceLead**](LeadsApi.md#newInsuranceLead) | **POST** /lead/insurance | 
[**newRealEstateLead**](LeadsApi.md#newRealEstateLead) | **POST** /lead/real-estate | 
[**newRetailLead**](LeadsApi.md#newRetailLead) | **POST** /lead/retail | 
[**newSavingPlanLead**](LeadsApi.md#newSavingPlanLead) | **POST** /lead/saving-plan | 
[**newVehicleLead**](LeadsApi.md#newVehicleLead) | **POST** /lead/vehicle | 


# **getCategories**
> \Swagger\Client\Model\Categories getCategories()



Returns information about the lead categories available for lead creation. Note that groups can define custom rules as to when a category is valid for a given lead or not.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Categories**](../Model/Categories.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDefaults**
> \Swagger\Client\Model\Defaults getDefaults()



Returns information about the applicable defaults for lead creation. These defaults are only used if no value is specified when creating a lead. The response includes the default currency and distance unit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDefaults();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getDefaults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Defaults**](../Model/Defaults.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newInsuranceLead**
> \Swagger\Client\Model\ProspectCreated newInsuranceLead($lead, $format)



Processes lead data and returns the matching prospect. If the prospect already exists, previous lead data will not be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead = new \Swagger\Client\Model\Product(); // \Swagger\Client\Model\Product | 
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->newInsuranceLead($lead, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->newInsuranceLead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead** | [**\Swagger\Client\Model\Product**](../Model/Product.md)|  |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\ProspectCreated**](../Model/ProspectCreated.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newRealEstateLead**
> \Swagger\Client\Model\ProspectCreated newRealEstateLead($lead, $format)



Saving real estate industry only. Processes lead data and returns the matching prospect. If the prospect already exists, previous lead data will not be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead = new \Swagger\Client\Model\RealEstateLead(); // \Swagger\Client\Model\RealEstateLead | 
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->newRealEstateLead($lead, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->newRealEstateLead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead** | [**\Swagger\Client\Model\RealEstateLead**](../Model/RealEstateLead.md)|  |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\ProspectCreated**](../Model/ProspectCreated.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newRetailLead**
> \Swagger\Client\Model\ProspectCreated newRetailLead($lead, $format)



Processes lead data and returns the matching prospect. If the prospect already exists, previous lead data will not be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead = new \Swagger\Client\Model\RetailLead(); // \Swagger\Client\Model\RetailLead | 
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->newRetailLead($lead, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->newRetailLead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead** | [**\Swagger\Client\Model\RetailLead**](../Model/RetailLead.md)|  |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\ProspectCreated**](../Model/ProspectCreated.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newSavingPlanLead**
> \Swagger\Client\Model\ProspectCreated newSavingPlanLead($lead, $format)



Saving plan industry only. Processes lead data and returns the matching prospect. If the prospect already exists, previous lead data will not be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead = new \Swagger\Client\Model\SavingPlanLead(); // \Swagger\Client\Model\SavingPlanLead | 
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->newSavingPlanLead($lead, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->newSavingPlanLead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead** | [**\Swagger\Client\Model\SavingPlanLead**](../Model/SavingPlanLead.md)|  |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\ProspectCreated**](../Model/ProspectCreated.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newVehicleLead**
> \Swagger\Client\Model\ProspectCreated newVehicleLead($lead, $format)



Vehicle industry only. Processes lead data and returns the matching prospect. If the prospect already exists, previous lead data will not be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead = new \Swagger\Client\Model\VehicleLead(); // \Swagger\Client\Model\VehicleLead | 
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->newVehicleLead($lead, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->newVehicleLead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead** | [**\Swagger\Client\Model\VehicleLead**](../Model/VehicleLead.md)|  |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\ProspectCreated**](../Model/ProspectCreated.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

