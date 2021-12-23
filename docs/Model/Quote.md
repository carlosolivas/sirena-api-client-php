# Quote

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | [**\Swagger\Client\Model\ObjectId**](ObjectId.md) |  | 
**prospect_id** | [**\Swagger\Client\Model\ObjectId**](ObjectId.md) |  | [optional] 
**status** | **string** |  | 
**items** | [**\Swagger\Client\Model\QuoteItem[]**](QuoteItem.md) |  | [optional] 
**total** | **float** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | 
**rejected_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**accepted_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**additional_data** | **object** | Additional and private data of the prospect. Only returned when the scope prospects:readAdditionalData is authorized. | [optional] 
**finished_at** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


