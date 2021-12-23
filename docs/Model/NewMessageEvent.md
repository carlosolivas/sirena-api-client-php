# NewMessageEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Must be \&quot;message\&quot; | 
**replies_to** | **string** | The ID of operationId replied | [optional] 
**provider_id** | **string** | The ID of the call in the provider. | [optional] 
**content** | **string** | Text message | [optional] 
**delivered** | **bool** | Check message as delivered | [optional] 
**sender** | **string** | Sender reference | [optional] 
**recipient** | **string** | Recipient reference | [optional] 
**attachment** | **object** |  | [optional] 
**channel_interaction** | [**\Swagger\Client\Model\ChannelInteraction**](ChannelInteraction.md) |  | [optional] 
**list** | [**\Swagger\Client\Model\ListMessage**](ListMessage.md) |  | [optional] 
**buttons** | [**\Swagger\Client\Model\ButtonsMessage**](ButtonsMessage.md) |  | [optional] 
**product_list** | [**\Swagger\Client\Model\ProductListMessage**](ProductListMessage.md) |  | [optional] 
**order** | [**\Swagger\Client\Model\OrderListMessage**](OrderListMessage.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


