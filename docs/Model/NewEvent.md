# NewEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Must be \&quot;note\&quot; | 
**provider_id** | **string** | The ID of the call in the provider. | [optional] 
**utm_source** | **string** | Identify the advertiser, site, publication, etc. that is sending traffic to your property. | [optional] 
**started_at** | [**\DateTime**](\DateTime.md) | Date and time when the call started. | [optional] 
**duration** | **float** | Duration of call in milliseconds. | [optional] 
**recording_url** | **string** | Complete path to the recorded file URL. Supported audio formats are MP3, WAV and AAC. | [optional] 
**replies_to** | **string** | The ID of operationId replied | [optional] 
**content** | **string** | Note text | [optional] 
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


