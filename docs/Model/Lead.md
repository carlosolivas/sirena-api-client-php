# Lead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**priority** | **float** | The priority of the Lead | [optional] 
**provider** | **string** | The name/key to identify the provider of the lead. | [optional] 
**provider_lead_id** | **string** | The ID of the lead in the provider. | [optional] 
**utm_source** | **string** | Identify the advertiser, site, publication, etc. that is sending traffic to your property. | 
**utm_medium** | **string** | The advertising or marketing medium. | [optional] 
**utm_campaign** | **string** | The individual campaign name, slogan, promo code, etc. for a product. | [optional] 
**first_name** | **string** |  | [optional] 
**last_name** | **string** |  | [optional] 
**phones** | **string[]** |  | [optional] 
**emails** | **string[]** |  | [optional] 
**call_in** | **object** | @deprecated use NewCallEvent An object representing an inbound phone call. Connected calls should provide a recording and its associated metadata. | [optional] 
**category** | **string** | The category of the lead. Use the Categories endpoint to see the available categories. If skipped, the default category is used. | [optional] 
**nin** | [**\Swagger\Client\Model\Nin[]**](Nin.md) | National Identification Number | [optional] 
**address** | **string** | Full street address. | [optional] 
**sub_locality** | **string** | County / other sub-division of a locality, such as communes departments, etc. | [optional] 
**locality** | **string** | City / Municipality. | [optional] 
**region** | **string** | State / Province. | [optional] 
**country** | **string** |  | [optional] 
**zip_code** | **string** | Zip Code / Postal Code. | [optional] 
**listing_title** | **string** | The title of the listing page. | [optional] 
**listing_url** | **string** | The URL of the listing page. | [optional] 
**comments** | **string** | Any comments worth making to the agent, from the lead or from the acquisition channel. | [optional] 
**company** | **string** | If the lead has an assigned company, indicate it&#39;s name or code. Usually, it&#39;s the name of the company under the general account. | [optional] 
**store** | **string** | If the lead has an assigned store, indicate it&#39;s name or code. Usually is the name of the branch inside the company. | [optional] 
**agent** | **string** | If the lead has an assigned agent, indicate it&#39;s name or code. | [optional] 
**lead_id** | **string** | @deprecated - use providerLeadId The ID of the lead in the provider. | [optional] 
**source** | **string** | @deprecated - use utmSource Identify the advertiser, site, publication, etc. that is sending traffic to your property. | [optional] 
**medium** | **string** | @deprecated - use utmMedium The contact medium where the lead came from. | [optional] 
**campaign** | **string** | @deprecated - use utmCampaign The individual campaign name, slogan, promo code, etc. for a product. | [optional] 
**history** | [**\Swagger\Client\Model\NewEvent[]**](NewEvent.md) | Ordered list of lead events | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


