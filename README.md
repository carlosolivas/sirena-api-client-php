# SwaggerClient-php
Sirena API for lead providers, messaging and prospect data manipulation.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.10.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [https://www.sirena.app](https://www.sirena.app)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//sirena-api-client-php.git"
    }
  ],
  "require": {
    "/sirena-api-client-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.getsirena.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActAsUserApi* | [**archiveProspectAsUser**](docs/Api/ActAsUserApi.md#archiveprospectasuser) | **POST** /prospect/{prospectId}/as-user/archive | 
*ActAsUserApi* | [**getArchivingReasons**](docs/Api/ActAsUserApi.md#getarchivingreasons) | **GET** /as-user/archiving-reasons | 
*ActAsUserApi* | [**getProspectLabels**](docs/Api/ActAsUserApi.md#getprospectlabels) | **GET** /as-user/labels | 
*ActAsUserApi* | [**getTransferable**](docs/Api/ActAsUserApi.md#gettransferable) | **GET** /as-user/transfer | 
*ActAsUserApi* | [**labelProspect**](docs/Api/ActAsUserApi.md#labelprospect) | **POST** /prospect/{prospectId}/as-user/label | 
*ActAsUserApi* | [**transferProspectAsUser**](docs/Api/ActAsUserApi.md#transferprospectasuser) | **POST** /prospect/{prospectId}/as-user/transfer | 
*AgentsApi* | [**getAgents**](docs/Api/AgentsApi.md#getagents) | **GET** /agents | 
*AgentsApi* | [**getResponseTime**](docs/Api/AgentsApi.md#getresponsetime) | **POST** /agents/{agentId}/response-time | 
*AgentsApi* | [**isWorking**](docs/Api/AgentsApi.md#isworking) | **GET** /agents/{agentId}/is-working | 
*ConversationalMessagingApi* | [**getChannels**](docs/Api/ConversationalMessagingApi.md#getchannels) | **GET** /messaging/channels | 
*ConversationalMessagingApi* | [**getChannelsByProspectId**](docs/Api/ConversationalMessagingApi.md#getchannelsbyprospectid) | **GET** /prospect/{prospectId}/messaging/channels | 
*ConversationalMessagingApi* | [**getOrdersByProspect**](docs/Api/ConversationalMessagingApi.md#getordersbyprospect) | **GET** /prospect/{prospectId}/orders | 
*ConversationalMessagingApi* | [**sendFile**](docs/Api/ConversationalMessagingApi.md#sendfile) | **POST** /prospect/{prospectId}/messaging/{channel}/send-file | 
*ConversationalMessagingApi* | [**sendMessage**](docs/Api/ConversationalMessagingApi.md#sendmessage) | **POST** /prospect/{prospectId}/messaging/{channel} | 
*CustomAppsApi* | [**postEvent**](docs/Api/CustomAppsApi.md#postevent) | **POST** /apps/event | 
*CustomAppsApi* | [**sendNotification**](docs/Api/CustomAppsApi.md#sendnotification) | **POST** /apps/notifications | 
*GroupsApi* | [**getGroupById**](docs/Api/GroupsApi.md#getgroupbyid) | **GET** /group/{groupId} | 
*GroupsApi* | [**getGroups**](docs/Api/GroupsApi.md#getgroups) | **GET** /groups | 
*GroupsApi* | [**getOnlineAgents**](docs/Api/GroupsApi.md#getonlineagents) | **GET** /group/{groupId}/agents/online | 
*GroupsApi* | [**getResponseTime**](docs/Api/GroupsApi.md#getresponsetime) | **POST** /groups/{groupId}/response-time | 
*GroupsApi* | [**isWorking**](docs/Api/GroupsApi.md#isworking) | **GET** /groups/{groupId}/is-working | 
*IndustriesApi* | [**getIndustries**](docs/Api/IndustriesApi.md#getindustries) | **GET** /industries | 
*IntegrationApi* | [**checkCredentials**](docs/Api/IntegrationApi.md#checkcredentials) | **GET** /checkCredentials | 
*IntegrationApi* | [**getIntegration**](docs/Api/IntegrationApi.md#getintegration) | **GET** /integration | 
*IntegrationApi* | [**getIntegrations**](docs/Api/IntegrationApi.md#getintegrations) | **GET** /integrations | 
*InteractionsApi* | [**getInteractions**](docs/Api/InteractionsApi.md#getinteractions) | **GET** /prospects/interactions | 
*LeadsApi* | [**getCategories**](docs/Api/LeadsApi.md#getcategories) | **GET** /leads/categories | 
*LeadsApi* | [**getDefaults**](docs/Api/LeadsApi.md#getdefaults) | **GET** /leads/defaults | 
*LeadsApi* | [**newInsuranceLead**](docs/Api/LeadsApi.md#newinsurancelead) | **POST** /lead/insurance | 
*LeadsApi* | [**newRealEstateLead**](docs/Api/LeadsApi.md#newrealestatelead) | **POST** /lead/real-estate | 
*LeadsApi* | [**newRetailLead**](docs/Api/LeadsApi.md#newretaillead) | **POST** /lead/retail | 
*LeadsApi* | [**newSavingPlanLead**](docs/Api/LeadsApi.md#newsavingplanlead) | **POST** /lead/saving-plan | 
*LeadsApi* | [**newVehicleLead**](docs/Api/LeadsApi.md#newvehiclelead) | **POST** /lead/vehicle | 
*NotificationsApi* | [**deactivateSubscription**](docs/Api/NotificationsApi.md#deactivatesubscription) | **DELETE** /notifications/subscription/{subscriptionId} | 
*NotificationsApi* | [**deactivateSubscriptionsByApiKey**](docs/Api/NotificationsApi.md#deactivatesubscriptionsbyapikey) | **DELETE** /notifications/subscriptions | 
*NotificationsApi* | [**getActiveSubscriptionById**](docs/Api/NotificationsApi.md#getactivesubscriptionbyid) | **GET** /notifications/subscription/{subscriptionId} | 
*NotificationsApi* | [**getActiveSubscriptions**](docs/Api/NotificationsApi.md#getactivesubscriptions) | **GET** /notifications/subscriptions | 
*NotificationsApi* | [**getTopics**](docs/Api/NotificationsApi.md#gettopics) | **GET** /notifications/topics | 
*NotificationsApi* | [**newSubscription**](docs/Api/NotificationsApi.md#newsubscription) | **POST** /notifications/subscriptions | 
*ProspectsApi* | [**createCSAT**](docs/Api/ProspectsApi.md#createcsat) | **POST** /prospect/{prospectId}/csat | 
*ProspectsApi* | [**createInteractionByProspectId**](docs/Api/ProspectsApi.md#createinteractionbyprospectid) | **POST** /prospect/{prospectId}/interactions | 
*ProspectsApi* | [**deleteProspect**](docs/Api/ProspectsApi.md#deleteprospect) | **DELETE** /prospect/{prospectId} | 
*ProspectsApi* | [**deprecatedGetArchivingReasons**](docs/Api/ProspectsApi.md#deprecatedgetarchivingreasons) | **GET** /archiving-reasons | 
*ProspectsApi* | [**getContactsSelection**](docs/Api/ProspectsApi.md#getcontactsselection) | **GET** /contacts/selection/{selectionId} | 
*ProspectsApi* | [**getInteractionById**](docs/Api/ProspectsApi.md#getinteractionbyid) | **GET** /prospect/{prospectId}/interaction/{interactionId} | 
*ProspectsApi* | [**getInteractions**](docs/Api/ProspectsApi.md#getinteractions) | **GET** /prospects/interactions | 
*ProspectsApi* | [**getProspectAdditionalFieldsById**](docs/Api/ProspectsApi.md#getprospectadditionalfieldsbyid) | **GET** /prospect/{prospectId}/prospectAdditionalFields | 
*ProspectsApi* | [**getProspectById**](docs/Api/ProspectsApi.md#getprospectbyid) | **GET** /prospect/{prospectId} | 
*ProspectsApi* | [**getProspectInteractions**](docs/Api/ProspectsApi.md#getprospectinteractions) | **GET** /prospect/{prospectId}/interactions | 
*ProspectsApi* | [**getProspectQuotes**](docs/Api/ProspectsApi.md#getprospectquotes) | **GET** /prospect/{prospectId}/quotes | 
*ProspectsApi* | [**getProspects**](docs/Api/ProspectsApi.md#getprospects) | **GET** /prospects | 
*ProspectsApi* | [**getQuoteById**](docs/Api/ProspectsApi.md#getquotebyid) | **GET** /prospect/{prospectId}/quote/{quoteId} | 
*ProspectsApi* | [**getQuotes**](docs/Api/ProspectsApi.md#getquotes) | **GET** /prospects/quotes | 
*ProspectsApi* | [**newProspectQuote**](docs/Api/ProspectsApi.md#newprospectquote) | **POST** /prospect/{prospectId}/quotes | 
*ProspectsApi* | [**transferProspect**](docs/Api/ProspectsApi.md#transferprospect) | **POST** /prospect/{prospectId}/transfer | 
*ProspectsApi* | [**updateAdditionalData**](docs/Api/ProspectsApi.md#updateadditionaldata) | **PATCH** /prospect/{prospectId}/additionalData | 
*ProspectsApi* | [**updateInteractionById**](docs/Api/ProspectsApi.md#updateinteractionbyid) | **PUT** /prospect/{prospectId}/interaction/{interactionId} | 
*ProspectsApi* | [**updateProspectById**](docs/Api/ProspectsApi.md#updateprospectbyid) | **PATCH** /prospect/{prospectId} | 
*ProspectsApi* | [**updateProspectQuote**](docs/Api/ProspectsApi.md#updateprospectquote) | **PUT** /prospect/{prospectId}/quote/{quoteId} | 
*QuotesApi* | [**getProspectQuotes**](docs/Api/QuotesApi.md#getprospectquotes) | **GET** /prospect/{prospectId}/quotes | 
*QuotesApi* | [**getQuoteById**](docs/Api/QuotesApi.md#getquotebyid) | **GET** /prospect/{prospectId}/quote/{quoteId} | 
*QuotesApi* | [**getQuotes**](docs/Api/QuotesApi.md#getquotes) | **GET** /prospects/quotes | 
*QuotesApi* | [**newProspectQuote**](docs/Api/QuotesApi.md#newprospectquote) | **POST** /prospect/{prospectId}/quotes | 
*QuotesApi* | [**updateProspectQuote**](docs/Api/QuotesApi.md#updateprospectquote) | **PUT** /prospect/{prospectId}/quote/{quoteId} | 
*TransactionalMessagingApi* | [**getChannels**](docs/Api/TransactionalMessagingApi.md#getchannels) | **GET** /messaging/channels | 
*TransactionalMessagingApi* | [**getChannelsByProspectId**](docs/Api/TransactionalMessagingApi.md#getchannelsbyprospectid) | **GET** /prospect/{prospectId}/messaging/channels | 
*TransactionalMessagingApi* | [**sendTemplateMessage**](docs/Api/TransactionalMessagingApi.md#sendtemplatemessage) | **POST** /prospect/{prospectId}/messaging/{channel}/notification | 


## Documentation For Models

 - [Agent](docs/Model/Agent.md)
 - [Agents](docs/Model/Agents.md)
 - [ArchivingReason](docs/Model/ArchivingReason.md)
 - [ArchivingReasons](docs/Model/ArchivingReasons.md)
 - [AttachmentTypes](docs/Model/AttachmentTypes.md)
 - [ButtonsMessage](docs/Model/ButtonsMessage.md)
 - [ButtonsMessageButtons](docs/Model/ButtonsMessageButtons.md)
 - [CSAT](docs/Model/CSAT.md)
 - [Categories](docs/Model/Categories.md)
 - [Category](docs/Model/Category.md)
 - [Channel](docs/Model/Channel.md)
 - [ChannelInteraction](docs/Model/ChannelInteraction.md)
 - [Channels](docs/Model/Channels.md)
 - [CommunicationChannel](docs/Model/CommunicationChannel.md)
 - [CustomEvent](docs/Model/CustomEvent.md)
 - [CustomEventData](docs/Model/CustomEventData.md)
 - [CustomEventResponseOk](docs/Model/CustomEventResponseOk.md)
 - [CustomEventType](docs/Model/CustomEventType.md)
 - [Defaults](docs/Model/Defaults.md)
 - [Error](docs/Model/Error.md)
 - [GenericLead](docs/Model/GenericLead.md)
 - [Group](docs/Model/Group.md)
 - [GroupNode](docs/Model/GroupNode.md)
 - [GroupTree](docs/Model/GroupTree.md)
 - [GroupUserTransferable](docs/Model/GroupUserTransferable.md)
 - [Groups](docs/Model/Groups.md)
 - [Industries](docs/Model/Industries.md)
 - [Industry](docs/Model/Industry.md)
 - [Integration](docs/Model/Integration.md)
 - [Integrations](docs/Model/Integrations.md)
 - [Interaction](docs/Model/Interaction.md)
 - [InteractionMedium](docs/Model/InteractionMedium.md)
 - [Interactions](docs/Model/Interactions.md)
 - [LabelProspect](docs/Model/LabelProspect.md)
 - [Lead](docs/Model/Lead.md)
 - [LeadData](docs/Model/LeadData.md)
 - [ListMessage](docs/Model/ListMessage.md)
 - [ListMessageButton](docs/Model/ListMessageButton.md)
 - [ListMessageSection](docs/Model/ListMessageSection.md)
 - [ListMessageSectionRow](docs/Model/ListMessageSectionRow.md)
 - [MessageMedium](docs/Model/MessageMedium.md)
 - [MoneyAmount](docs/Model/MoneyAmount.md)
 - [MoneyAmountEstimate](docs/Model/MoneyAmountEstimate.md)
 - [NewCallEvent](docs/Model/NewCallEvent.md)
 - [NewEvent](docs/Model/NewEvent.md)
 - [NewMessage](docs/Model/NewMessage.md)
 - [NewMessageEvent](docs/Model/NewMessageEvent.md)
 - [NewNoteEvent](docs/Model/NewNoteEvent.md)
 - [NewQuestionEvent](docs/Model/NewQuestionEvent.md)
 - [NewQuote](docs/Model/NewQuote.md)
 - [NewSubscription](docs/Model/NewSubscription.md)
 - [NewTemplateMessage](docs/Model/NewTemplateMessage.md)
 - [Nin](docs/Model/Nin.md)
 - [NotificationData](docs/Model/NotificationData.md)
 - [NotificationPlatforms](docs/Model/NotificationPlatforms.md)
 - [NotificationResponseOk](docs/Model/NotificationResponseOk.md)
 - [NotificationTarget](docs/Model/NotificationTarget.md)
 - [ObjectId](docs/Model/ObjectId.md)
 - [OnlineAgents](docs/Model/OnlineAgents.md)
 - [OrderByProspect](docs/Model/OrderByProspect.md)
 - [OrderListMessage](docs/Model/OrderListMessage.md)
 - [OrdersByProspect](docs/Model/OrdersByProspect.md)
 - [Product](docs/Model/Product.md)
 - [ProductItemOrderListMessage](docs/Model/ProductItemOrderListMessage.md)
 - [ProductListMessage](docs/Model/ProductListMessage.md)
 - [ProductListMessageSection](docs/Model/ProductListMessageSection.md)
 - [ProductListMessageSectionProductItem](docs/Model/ProductListMessageSectionProductItem.md)
 - [ProductOrder](docs/Model/ProductOrder.md)
 - [Prospect](docs/Model/Prospect.md)
 - [ProspectAdditionalField](docs/Model/ProspectAdditionalField.md)
 - [ProspectAdditionalFields](docs/Model/ProspectAdditionalFields.md)
 - [ProspectCreated](docs/Model/ProspectCreated.md)
 - [ProspectLabel](docs/Model/ProspectLabel.md)
 - [ProspectLabels](docs/Model/ProspectLabels.md)
 - [ProspectStatus](docs/Model/ProspectStatus.md)
 - [Prospects](docs/Model/Prospects.md)
 - [ProspectsPaginated](docs/Model/ProspectsPaginated.md)
 - [Quote](docs/Model/Quote.md)
 - [QuoteItem](docs/Model/QuoteItem.md)
 - [Quotes](docs/Model/Quotes.md)
 - [RealEstateLead](docs/Model/RealEstateLead.md)
 - [RealEstateProduct](docs/Model/RealEstateProduct.md)
 - [RetailLead](docs/Model/RetailLead.md)
 - [SavingPlanLead](docs/Model/SavingPlanLead.md)
 - [SavingPlanProduct](docs/Model/SavingPlanProduct.md)
 - [Subscription](docs/Model/Subscription.md)
 - [Subscriptions](docs/Model/Subscriptions.md)
 - [SubscriptionsModified](docs/Model/SubscriptionsModified.md)
 - [Topic](docs/Model/Topic.md)
 - [Topics](docs/Model/Topics.md)
 - [TransactionalTemplate](docs/Model/TransactionalTemplate.md)
 - [TransactionalTemplates](docs/Model/TransactionalTemplates.md)
 - [Transfer](docs/Model/Transfer.md)
 - [UpdateAdditionalData](docs/Model/UpdateAdditionalData.md)
 - [UpdateEvent](docs/Model/UpdateEvent.md)
 - [UpdateMessageEvent](docs/Model/UpdateMessageEvent.md)
 - [UpdateProspect](docs/Model/UpdateProspect.md)
 - [UpdateQuestionEvent](docs/Model/UpdateQuestionEvent.md)
 - [UpdateQuote](docs/Model/UpdateQuote.md)
 - [VehicleLead](docs/Model/VehicleLead.md)
 - [VehicleProduct](docs/Model/VehicleProduct.md)


## Documentation For Authorization


## ApiKey

- **Type**: API key
- **API key parameter name**: api-key
- **Location**: URL query string


## Author

it@sirena.app


