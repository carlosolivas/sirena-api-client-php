# UpdateQuestionEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Must be \&quot;question\&quot; | 
**answer** | **string** | Answer text to the question, if the status property is \&quot;opened\&quot; this property will be ignored | [optional] 
**delivered** | **bool** | Check this answer as delivered | [optional] 
**cancel_reason** | **string** | Reason wherefore the system can not deliver an answer, if the status property is not \&quot;cancelled\&quot; this property will be ignored | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


