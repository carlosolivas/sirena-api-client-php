# Prospect

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | [**\Swagger\Client\Model\ObjectId**](ObjectId.md) |  | 
**created** | [**\DateTime**](\DateTime.md) |  | 
**account** | **string** |  | 
**account_id** | [**\Swagger\Client\Model\ObjectId**](ObjectId.md) |  | 
**group** | **string** |  | 
**group_id** | [**\Swagger\Client\Model\ObjectId**](ObjectId.md) |  | 
**initial_group** | **string** |  | [optional] 
**initial_group_id** | [**\Swagger\Client\Model\ObjectId**](ObjectId.md) |  | [optional] 
**first_name** | **string** |  | [optional] 
**last_name** | **string** |  | [optional] 
**category** | **string** | The unique name identifier of the prospect category. | [optional] 
**status** | [**\Swagger\Client\Model\ProspectStatus**](ProspectStatus.md) |  | 
**nin** | [**\Swagger\Client\Model\Nin[]**](Nin.md) | National Identification Number | [optional] 
**user_made** | **bool** |  | [optional] 
**archiving_reason** | **string** | When the prospect is archived this property contains the code of the reason why it was filed. | [optional] 
**phones** | **string[]** |  | [optional] 
**emails** | **string[]** |  | [optional] 
**additional_data** | **object** | Additional and private data of the prospect. Only returned when the scope prospects:readAdditionalData is authorized. | [optional] 
**merged** | **bool** | If true, it means that the lead was merged with an existent prospect in Sirena | [optional] 
**absence_message** | **string** | If message is present, it means that the target agent/s were not working and a absence message was configured for the group | [optional] 
**leads** | [**\Swagger\Client\Model\LeadData[]**](LeadData.md) |  | 
**agent** | [**\Swagger\Client\Model\Agent**](Agent.md) |  | [optional] 
**assigned** | [**\DateTime**](\DateTime.md) |  | [optional] 
**next_reminder** | [**\DateTime**](\DateTime.md) |  | [optional] 
**first_contacted_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**sent_working_hour_message** | [**\DateTime**](\DateTime.md) |  | [optional] 
**facebook_due_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**instagram_due_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**whats_app_due_at** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


