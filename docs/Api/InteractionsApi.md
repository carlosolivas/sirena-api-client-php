# Swagger\Client\InteractionsApi

All URIs are relative to *https://api.getsirena.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInteractions**](InteractionsApi.md#getInteractions) | **GET** /prospects/interactions | 


# **getInteractions**
> \Swagger\Client\Model\Interactions getInteractions($format, $before, $after, $limit, $agent, $status, $created_after, $start, $created_before, $end, $via)



Returns a filterable list of interactions. ``` If a limit is not specified, the query will return interactions from the last 31 days  If a limit is not specified, but a date or range of dates are provided, the query will return interactions within the date or dates specified. A range of dates is considered valid if the range between them is 31 days or less  Invalid Examples:    ?createdAfter=2020-08-01T01:00:00.000Z&createdBefore=2020-10-01T01:00:00.000Z -> INVALID   ?createdAfter=2020-08-01T01:00:00.000Z&createdBefore=2020-06-01T01:00:00.000Z -> INVALID   ?createdAfter=2020-08-01T01:00:00.000Z&createdBefore=2020-06-01T01:00:00.000Z -> INVALID  Valid Examples:   ?createdAfter=2020-08-01T01:00:00.000Z&createdBefore=2020-09-01T01:00:00.000Z -> VALID   ?createdAfter=2020-08-01T01:00:00.000Z&createdBefore=2020-09-01T01:00:00.000Z -> VALID  If only one of the dates is provided, the comparison will be made with the present date Example:     Assuming that the present date is 2020-10-28T03:00:00.000Z    ?createdAfter=2020-08-01:T03:00:00.000Z -> INVALID   ?createdAfter=2020-09-30:T03:00:00.000Z -> VALID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\InteractionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.
$before = "before_example"; // string | Limits the results only to the prospects created before the one provided in this parameter (not included)
$after = "after_example"; // string | Limits the results only to the prospects created after the one provided in this parameter (not included)
$limit = 8.14; // float | The maximum number of items that must be returned (A multiple number of 100 and no more than 1000 is recommended)
$agent = "agent_example"; // string | The id of the agent to filter.
$status = "status_example"; // string | The status to filter.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter interactions by their creation date.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | @deprecated - use createdAfter The start date to filter interactions by their creation date (alias of createdAfter).
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter interactions by their creation date.
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | @deprecated - use createdBefore The end date to filter interactions by their creation date (alias of createdBefore).
$via = array("via_example"); // string[] | 

try {
    $result = $apiInstance->getInteractions($format, $before, $after, $limit, $agent, $status, $created_after, $start, $created_before, $end, $via);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InteractionsApi->getInteractions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]
 **before** | **string**| Limits the results only to the prospects created before the one provided in this parameter (not included) | [optional]
 **after** | **string**| Limits the results only to the prospects created after the one provided in this parameter (not included) | [optional]
 **limit** | **float**| The maximum number of items that must be returned (A multiple number of 100 and no more than 1000 is recommended) | [optional]
 **agent** | **string**| The id of the agent to filter. | [optional]
 **status** | **string**| The status to filter. | [optional]
 **created_after** | **\DateTime**| The start date to filter interactions by their creation date. | [optional]
 **start** | **\DateTime**| @deprecated - use createdAfter The start date to filter interactions by their creation date (alias of createdAfter). | [optional]
 **created_before** | **\DateTime**| The end date to filter interactions by their creation date. | [optional]
 **end** | **\DateTime**| @deprecated - use createdBefore The end date to filter interactions by their creation date (alias of createdBefore). | [optional]
 **via** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Interactions**](../Model/Interactions.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

