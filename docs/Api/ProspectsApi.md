# Swagger\Client\ProspectsApi

All URIs are relative to *https://api.getsirena.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCSAT**](ProspectsApi.md#createCSAT) | **POST** /prospect/{prospectId}/csat | 
[**createInteractionByProspectId**](ProspectsApi.md#createInteractionByProspectId) | **POST** /prospect/{prospectId}/interactions | 
[**deleteProspect**](ProspectsApi.md#deleteProspect) | **DELETE** /prospect/{prospectId} | 
[**deprecatedGetArchivingReasons**](ProspectsApi.md#deprecatedGetArchivingReasons) | **GET** /archiving-reasons | 
[**getContactsSelection**](ProspectsApi.md#getContactsSelection) | **GET** /contacts/selection/{selectionId} | 
[**getInteractionById**](ProspectsApi.md#getInteractionById) | **GET** /prospect/{prospectId}/interaction/{interactionId} | 
[**getInteractions**](ProspectsApi.md#getInteractions) | **GET** /prospects/interactions | 
[**getProspectAdditionalFieldsById**](ProspectsApi.md#getProspectAdditionalFieldsById) | **GET** /prospect/{prospectId}/prospectAdditionalFields | 
[**getProspectById**](ProspectsApi.md#getProspectById) | **GET** /prospect/{prospectId} | 
[**getProspectInteractions**](ProspectsApi.md#getProspectInteractions) | **GET** /prospect/{prospectId}/interactions | 
[**getProspectQuotes**](ProspectsApi.md#getProspectQuotes) | **GET** /prospect/{prospectId}/quotes | 
[**getProspects**](ProspectsApi.md#getProspects) | **GET** /prospects | 
[**getQuoteById**](ProspectsApi.md#getQuoteById) | **GET** /prospect/{prospectId}/quote/{quoteId} | 
[**getQuotes**](ProspectsApi.md#getQuotes) | **GET** /prospects/quotes | 
[**newProspectQuote**](ProspectsApi.md#newProspectQuote) | **POST** /prospect/{prospectId}/quotes | 
[**transferProspect**](ProspectsApi.md#transferProspect) | **POST** /prospect/{prospectId}/transfer | 
[**updateAdditionalData**](ProspectsApi.md#updateAdditionalData) | **PATCH** /prospect/{prospectId}/additionalData | 
[**updateInteractionById**](ProspectsApi.md#updateInteractionById) | **PUT** /prospect/{prospectId}/interaction/{interactionId} | 
[**updateProspectById**](ProspectsApi.md#updateProspectById) | **PATCH** /prospect/{prospectId} | 
[**updateProspectQuote**](ProspectsApi.md#updateProspectQuote) | **PUT** /prospect/{prospectId}/quote/{quoteId} | 


# **createCSAT**
> object createCSAT($prospect_id, $csat)



Add a customer satisfaction rating to the prospect.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$csat = new \Swagger\Client\Model\CSAT(); // \Swagger\Client\Model\CSAT | The customer satisfaction rating for the prospect.

try {
    $result = $apiInstance->createCSAT($prospect_id, $csat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->createCSAT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **csat** | [**\Swagger\Client\Model\CSAT**](../Model/CSAT.md)| The customer satisfaction rating for the prospect. |

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createInteractionByProspectId**
> \Swagger\Client\Model\Interactions createInteractionByProspectId($prospect_id, $event, $format)



Returns a filterable list of interactions related to a prospect.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$event = new \Swagger\Client\Model\NewEvent(); // \Swagger\Client\Model\NewEvent | 
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->createInteractionByProspectId($prospect_id, $event, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->createInteractionByProspectId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **event** | [**\Swagger\Client\Model\NewEvent**](../Model/NewEvent.md)|  |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Interactions**](../Model/Interactions.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProspect**
> \Swagger\Client\Model\Prospect deleteProspect($prospect_id, $format)



Delete a prospect.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->deleteProspect($prospect_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->deleteProspect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Prospect**](../Model/Prospect.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deprecatedGetArchivingReasons**
> \Swagger\Client\Model\ArchivingReasons deprecatedGetArchivingReasons($agent, $format)



DEPRECATED Use /as-user/archiving-reasons

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent = "agent_example"; // string | The agent that has archiving reasons.
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->deprecatedGetArchivingReasons($agent, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->deprecatedGetArchivingReasons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent** | **string**| The agent that has archiving reasons. |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\ArchivingReasons**](../Model/ArchivingReasons.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactsSelection**
> \Swagger\Client\Model\ProspectsPaginated getContactsSelection($selection_id, $fields, $offset, $limit)



Get all contacts for a provided contact selection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$selection_id = "selection_id_example"; // string | The id of the contact selection.
$fields = array("fields_example"); // string[] | The fields to return from prospect. The fields `id`, `status`, `leads`, `accountId`, `account`, `group`, `groupId` and `created` will always be returned.
$offset = 8.14; // float | The offset number to start pagination starting with 0. Only the offset and the next limit number contacts will be returned.
$limit = 8.14; // float | The maximum number of items that must be returned (A multiple number of 100 and no more than 1000 is recommended)

try {
    $result = $apiInstance->getContactsSelection($selection_id, $fields, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->getContactsSelection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **selection_id** | **string**| The id of the contact selection. |
 **fields** | [**string[]**](../Model/string.md)| The fields to return from prospect. The fields &#x60;id&#x60;, &#x60;status&#x60;, &#x60;leads&#x60;, &#x60;accountId&#x60;, &#x60;account&#x60;, &#x60;group&#x60;, &#x60;groupId&#x60; and &#x60;created&#x60; will always be returned. | [optional]
 **offset** | **float**| The offset number to start pagination starting with 0. Only the offset and the next limit number contacts will be returned. | [optional]
 **limit** | **float**| The maximum number of items that must be returned (A multiple number of 100 and no more than 1000 is recommended) | [optional]

### Return type

[**\Swagger\Client\Model\ProspectsPaginated**](../Model/ProspectsPaginated.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInteractionById**
> \Swagger\Client\Model\Interaction getInteractionById($prospect_id, $interaction_id, $format)



Returns an interaction by its prospect and interaction IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$interaction_id = "interaction_id_example"; // string | The id of the interaction.
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->getInteractionById($prospect_id, $interaction_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->getInteractionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **interaction_id** | **string**| The id of the interaction. |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Interaction**](../Model/Interaction.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

$apiInstance = new Swagger\Client\Api\ProspectsApi(
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
    echo 'Exception when calling ProspectsApi->getInteractions: ', $e->getMessage(), PHP_EOL;
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

# **getProspectAdditionalFieldsById**
> \Swagger\Client\Model\ProspectAdditionalFields getProspectAdditionalFieldsById($prospect_id, $format)



Returns the available additional fields for a specific prospect by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->getProspectAdditionalFieldsById($prospect_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->getProspectAdditionalFieldsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\ProspectAdditionalFields**](../Model/ProspectAdditionalFields.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProspectById**
> \Swagger\Client\Model\Prospect getProspectById($prospect_id, $format)



Returns an specific prospect by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->getProspectById($prospect_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->getProspectById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Prospect**](../Model/Prospect.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProspectInteractions**
> \Swagger\Client\Model\Interactions getProspectInteractions($prospect_id, $format, $status, $created_after, $start, $created_before, $end, $via)



Returns a filterable list of interactions related to a prospect.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.
$status = "status_example"; // string | The status to filter interactions.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter interactions by their creation date.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | @deprecated - use createdAfter The start date to filter interactions by their creation date (alias of createdAfter).
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter interactions by their creation date.
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | @deprecated - use createdBefore The end date to filter interactions by their creation date (alias of createdBefore).
$via = array("via_example"); // string[] | 

try {
    $result = $apiInstance->getProspectInteractions($prospect_id, $format, $status, $created_after, $start, $created_before, $end, $via);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->getProspectInteractions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]
 **status** | **string**| The status to filter interactions. | [optional]
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

# **getProspectQuotes**
> \Swagger\Client\Model\Quotes getProspectQuotes($prospect_id, $format, $status, $created_before, $created_after, $accepted_before, $accepted_after, $rejected_before, $rejected_after)



Returns a filterable list of quotes related to a prospect.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.
$status = "status_example"; // string | The status to filter.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter quotes by their creation date.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter quotes by their creation date.
$accepted_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter quotes by their accepted date.
$accepted_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter quotes by their accepted date.
$rejected_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter quotes by their rejected date.
$rejected_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter quotes by their rejected date.

try {
    $result = $apiInstance->getProspectQuotes($prospect_id, $format, $status, $created_before, $created_after, $accepted_before, $accepted_after, $rejected_before, $rejected_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->getProspectQuotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]
 **status** | **string**| The status to filter. | [optional]
 **created_before** | **\DateTime**| The start date to filter quotes by their creation date. | [optional]
 **created_after** | **\DateTime**| The end date to filter quotes by their creation date. | [optional]
 **accepted_before** | **\DateTime**| The start date to filter quotes by their accepted date. | [optional]
 **accepted_after** | **\DateTime**| The end date to filter quotes by their accepted date. | [optional]
 **rejected_before** | **\DateTime**| The start date to filter quotes by their rejected date. | [optional]
 **rejected_after** | **\DateTime**| The end date to filter quotes by their rejected date. | [optional]

### Return type

[**\Swagger\Client\Model\Quotes**](../Model/Quotes.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProspects**
> \Swagger\Client\Model\Prospects getProspects($format, $before, $after, $limit, $search, $phone_number, $category, $status, $agent, $created_after, $start, $created_before, $end, $claimed_after, $claim_start, $claimed_before, $claim_end, $transferred_after, $transfer_start, $transferred_before, $transfer_end, $with_agent, $group, $additional_data)



Returns a filterable list of prospects. ``` If a limit is not specified, the query will return prospects from the last 31 days  If a limit is not specified, but a date or range of dates are provided, the query will return prospects within the date or dates specified. A range of dates is considered valid if the range between them is 31 days or less  Invalid Examples:    ?createdAfter=2020-08-01T01:00:00.000Z&createdBefore=2020-10-01T01:00:00.000Z -> INVALID   ?createdAfter=2020-08-01T01:00:00.000Z&createdBefore=2020-06-01T01:00:00.000Z -> INVALID   ?createdAfter=2020-08-01T01:00:00.000Z&createdBefore=2020-06-01T01:00:00.000Z -> INVALID  Valid Examples:   ?createdAfter=2020-08-01T01:00:00.000Z&createdBefore=2020-09-01T01:00:00.000Z -> VALID   ?createdAfter=2020-08-01T01:00:00.000Z&createdBefore=2020-09-01T01:00:00.000Z -> VALID  If only one of the dates is provided, the comparison will be made with the present date Example:     Assuming that the present date is 2020-10-28T03:00:00.000Z    ?createdAfter=2020-08-01:T03:00:00.000Z -> INVALID   ?createdAfter=2020-09-30:T03:00:00.000Z -> VALID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.
$before = "before_example"; // string | Limits the results only to the prospects created before the one provided in this parameter (not included)
$after = "after_example"; // string | Limits the results only to the prospects created after the one provided in this parameter (not included)
$limit = 8.14; // float | The maximum number of items that must be returned (A multiple number of 100 and no more than 1000 is recommended)
$search = "search_example"; // string | A search string to filter prospects. It can be a phone number, an email address or a name.
$phone_number = "phone_number_example"; // string | A phone number string to filter prospects
$category = "category_example"; // string | The category to filter prospects.
$status = "status_example"; // string | The status to filter prospects.
$agent = "agent_example"; // string | The id of an agent to filter prospects
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter prospects by their creation date
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | @deprecated - use createdAfter The start date to filter prospects by their creation date (alias of createdAfter).
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter prospects by their creation date.
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | @deprecated - use createdBefore The end date to filter prospects by their creation date (alias of createdBefore).
$claimed_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter prospects by their claim date.
$claim_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter prospects by their claim date (alias of claimAfter).
$claimed_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter prospects by their claim date.
$claim_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter prospects by their claim date (alias of claimBefore).
$transferred_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter prospects by their transfer date
$transfer_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter prospects by their transfer date (alias of transferredAfter)
$transferred_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter prospects by their transfer date
$transfer_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter prospects by their transfer date (alias of transferredBefore)
$with_agent = true; // bool | A boolean specifying whether a prospect has an assigned Agent or not
$group = "group_example"; // string | The id of a group to filter prospects
$additional_data = array("additional_data_example"); // string[] | List of filters for additionalData on format `[FIELD][OPERATOR][VALUE]`. * FIELD: Can be any additional data field * OPERATOR: Can be =, >=, >, <=, < or ~ (contains) * VALUE\\: Any string  `/prospects?api-key{API_KEY}&additionalData[]=finance=1` Filter all prospect that have additionalData.finance and is equal to `1`.  `/prospects?api-key{API_KEY}&additionalData[]=birthdate<01/01/2000&additionalData[]=birthdate>=01/01/1990` Filter all prospect that have additionalData.birthdate, is greater or equal than `01/01/1990` and lower than `01/01/2000`.   `/prospects?api-key{API_KEY}&additionalData[]=style~blue` Filter all prospect that have additionalData.style and contains `blue` string.

try {
    $result = $apiInstance->getProspects($format, $before, $after, $limit, $search, $phone_number, $category, $status, $agent, $created_after, $start, $created_before, $end, $claimed_after, $claim_start, $claimed_before, $claim_end, $transferred_after, $transfer_start, $transferred_before, $transfer_end, $with_agent, $group, $additional_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->getProspects: ', $e->getMessage(), PHP_EOL;
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
 **search** | **string**| A search string to filter prospects. It can be a phone number, an email address or a name. | [optional]
 **phone_number** | **string**| A phone number string to filter prospects | [optional]
 **category** | **string**| The category to filter prospects. | [optional]
 **status** | **string**| The status to filter prospects. | [optional]
 **agent** | **string**| The id of an agent to filter prospects | [optional]
 **created_after** | **\DateTime**| The start date to filter prospects by their creation date | [optional]
 **start** | **\DateTime**| @deprecated - use createdAfter The start date to filter prospects by their creation date (alias of createdAfter). | [optional]
 **created_before** | **\DateTime**| The end date to filter prospects by their creation date. | [optional]
 **end** | **\DateTime**| @deprecated - use createdBefore The end date to filter prospects by their creation date (alias of createdBefore). | [optional]
 **claimed_after** | **\DateTime**| The start date to filter prospects by their claim date. | [optional]
 **claim_start** | **\DateTime**| The start date to filter prospects by their claim date (alias of claimAfter). | [optional]
 **claimed_before** | **\DateTime**| The end date to filter prospects by their claim date. | [optional]
 **claim_end** | **\DateTime**| The end date to filter prospects by their claim date (alias of claimBefore). | [optional]
 **transferred_after** | **\DateTime**| The start date to filter prospects by their transfer date | [optional]
 **transfer_start** | **\DateTime**| The start date to filter prospects by their transfer date (alias of transferredAfter) | [optional]
 **transferred_before** | **\DateTime**| The end date to filter prospects by their transfer date | [optional]
 **transfer_end** | **\DateTime**| The end date to filter prospects by their transfer date (alias of transferredBefore) | [optional]
 **with_agent** | **bool**| A boolean specifying whether a prospect has an assigned Agent or not | [optional]
 **group** | **string**| The id of a group to filter prospects | [optional]
 **additional_data** | [**string[]**](../Model/string.md)| List of filters for additionalData on format &#x60;[FIELD][OPERATOR][VALUE]&#x60;. * FIELD: Can be any additional data field * OPERATOR: Can be &#x3D;, &gt;&#x3D;, &gt;, &lt;&#x3D;, &lt; or ~ (contains) * VALUE\\: Any string  &#x60;/prospects?api-key{API_KEY}&amp;additionalData[]&#x3D;finance&#x3D;1&#x60; Filter all prospect that have additionalData.finance and is equal to &#x60;1&#x60;.  &#x60;/prospects?api-key{API_KEY}&amp;additionalData[]&#x3D;birthdate&lt;01/01/2000&amp;additionalData[]&#x3D;birthdate&gt;&#x3D;01/01/1990&#x60; Filter all prospect that have additionalData.birthdate, is greater or equal than &#x60;01/01/1990&#x60; and lower than &#x60;01/01/2000&#x60;.   &#x60;/prospects?api-key{API_KEY}&amp;additionalData[]&#x3D;style~blue&#x60; Filter all prospect that have additionalData.style and contains &#x60;blue&#x60; string. | [optional]

### Return type

[**\Swagger\Client\Model\Prospects**](../Model/Prospects.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuoteById**
> \Swagger\Client\Model\Quote getQuoteById($prospect_id, $quote_id, $format)



Returns a quote by its prospect and quote IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$quote_id = "quote_id_example"; // string | The id of the quote.
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->getQuoteById($prospect_id, $quote_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->getQuoteById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **quote_id** | **string**| The id of the quote. |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Quote**](../Model/Quote.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuotes**
> \Swagger\Client\Model\Quotes getQuotes($format, $before, $after, $limit, $status, $created_before, $created_after, $accepted_before, $accepted_after, $rejected_before, $rejected_after)



Returns a filterable list of quotes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.
$before = "before_example"; // string | Limits the results only to the prospects created before the one provided in this parameter (not included)
$after = "after_example"; // string | Limits the results only to the prospects created after the one provided in this parameter (not included)
$limit = 8.14; // float | The maximum number of items that must be returned (A multiple number of 100 and no more than 1000 is recommended)
$status = "status_example"; // string | The status to filter.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter quotes by their creation date.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter quotes by their creation date.
$accepted_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter quotes by their accepted date.
$accepted_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter quotes by their accepted date.
$rejected_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date to filter quotes by their rejected date.
$rejected_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date to filter quotes by their rejected date.

try {
    $result = $apiInstance->getQuotes($format, $before, $after, $limit, $status, $created_before, $created_after, $accepted_before, $accepted_after, $rejected_before, $rejected_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->getQuotes: ', $e->getMessage(), PHP_EOL;
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
 **status** | **string**| The status to filter. | [optional]
 **created_before** | **\DateTime**| The start date to filter quotes by their creation date. | [optional]
 **created_after** | **\DateTime**| The end date to filter quotes by their creation date. | [optional]
 **accepted_before** | **\DateTime**| The start date to filter quotes by their accepted date. | [optional]
 **accepted_after** | **\DateTime**| The end date to filter quotes by their accepted date. | [optional]
 **rejected_before** | **\DateTime**| The start date to filter quotes by their rejected date. | [optional]
 **rejected_after** | **\DateTime**| The end date to filter quotes by their rejected date. | [optional]

### Return type

[**\Swagger\Client\Model\Quotes**](../Model/Quotes.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newProspectQuote**
> \Swagger\Client\Model\Quote newProspectQuote($prospect_id, $quote, $format)



Create quote for prospect.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$quote = new \Swagger\Client\Model\NewQuote(); // \Swagger\Client\Model\NewQuote | 
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->newProspectQuote($prospect_id, $quote, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->newProspectQuote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **quote** | [**\Swagger\Client\Model\NewQuote**](../Model/NewQuote.md)|  |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Quote**](../Model/Quote.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transferProspect**
> object transferProspect($prospect_id, $transfer)



Transfer a Prospect to a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$transfer = new \Swagger\Client\Model\Transfer(); // \Swagger\Client\Model\Transfer | Define the destination user or group.

try {
    $result = $apiInstance->transferProspect($prospect_id, $transfer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->transferProspect: ', $e->getMessage(), PHP_EOL;
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

# **updateAdditionalData**
> \Swagger\Client\Model\Prospect updateAdditionalData($prospect_id, $additional_data, $format)



Returns a specific update to the Additional Data of a prospect by its ID.  ```   {     \"sirenadev_cotti_quoteStatus\": \"sold\",     \"reference\": 12345   }   ```   Where the key of each field is the key of the additional field you want to change.   The value is the new value you want to set.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$additional_data = new \Swagger\Client\Model\UpdateAdditionalData(); // \Swagger\Client\Model\UpdateAdditionalData | 
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->updateAdditionalData($prospect_id, $additional_data, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->updateAdditionalData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **additional_data** | [**\Swagger\Client\Model\UpdateAdditionalData**](../Model/UpdateAdditionalData.md)|  |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Prospect**](../Model/Prospect.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInteractionById**
> \Swagger\Client\Model\Interaction updateInteractionById($prospect_id, $interaction_id, $event, $format)



Update interaction using events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$interaction_id = "interaction_id_example"; // string | The id of the interaction.
$event = new \Swagger\Client\Model\UpdateEvent(); // \Swagger\Client\Model\UpdateEvent | 
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->updateInteractionById($prospect_id, $interaction_id, $event, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->updateInteractionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **interaction_id** | **string**| The id of the interaction. |
 **event** | [**\Swagger\Client\Model\UpdateEvent**](../Model/UpdateEvent.md)|  |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Interaction**](../Model/Interaction.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProspectById**
> \Swagger\Client\Model\Prospect updateProspectById($prospect_id, $prospect, $format)



Update the prospect basic data and/or add a phone and/or email to the prospect.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$prospect = new \Swagger\Client\Model\UpdateProspect(); // \Swagger\Client\Model\UpdateProspect | 
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->updateProspectById($prospect_id, $prospect, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->updateProspectById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **prospect** | [**\Swagger\Client\Model\UpdateProspect**](../Model/UpdateProspect.md)|  |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Prospect**](../Model/Prospect.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProspectQuote**
> \Swagger\Client\Model\Quote updateProspectQuote($prospect_id, $quote_id, $quote, $format)



Update quote for prospect by prospect and quote IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProspectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prospect_id = "prospect_id_example"; // string | The id of the prospect.
$quote_id = "quote_id_example"; // string | The id of the quote.
$quote = new \Swagger\Client\Model\UpdateQuote(); // \Swagger\Client\Model\UpdateQuote | 
$format = "format_example"; // string | An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.

try {
    $result = $apiInstance->updateProspectQuote($prospect_id, $quote_id, $quote, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProspectsApi->updateProspectQuote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prospect_id** | **string**| The id of the prospect. |
 **quote_id** | **string**| The id of the quote. |
 **quote** | [**\Swagger\Client\Model\UpdateQuote**](../Model/UpdateQuote.md)|  |
 **format** | **string**| An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header. | [optional]

### Return type

[**\Swagger\Client\Model\Quote**](../Model/Quote.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

