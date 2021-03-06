<?php
/**
 * Lead
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Sirena API
 *
 * Sirena API for lead providers, messaging and prospect data manipulation.
 *
 * OpenAPI spec version: 1.10.0
 * Contact: it@sirena.app
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.22
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Lead Class Doc Comment
 *
 * @category Class
 * @description Lead data. Note that a contact channel (phone or email) or a recorded call **MUST** be provided.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Lead implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Lead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'priority' => 'float',
        'provider' => 'string',
        'provider_lead_id' => 'string',
        'utm_source' => 'string',
        'utm_medium' => 'string',
        'utm_campaign' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'phones' => 'string[]',
        'emails' => 'string[]',
        'call_in' => 'object',
        'category' => 'string',
        'nin' => '\Swagger\Client\Model\Nin[]',
        'address' => 'string',
        'sub_locality' => 'string',
        'locality' => 'string',
        'region' => 'string',
        'country' => 'string',
        'zip_code' => 'string',
        'listing_title' => 'string',
        'listing_url' => 'string',
        'comments' => 'string',
        'company' => 'string',
        'store' => 'string',
        'agent' => 'string',
        'lead_id' => 'string',
        'source' => 'string',
        'medium' => 'string',
        'campaign' => 'string',
        'history' => '\Swagger\Client\Model\NewEvent[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'priority' => null,
        'provider' => null,
        'provider_lead_id' => null,
        'utm_source' => null,
        'utm_medium' => null,
        'utm_campaign' => null,
        'first_name' => null,
        'last_name' => null,
        'phones' => null,
        'emails' => 'email',
        'call_in' => null,
        'category' => null,
        'nin' => null,
        'address' => null,
        'sub_locality' => null,
        'locality' => null,
        'region' => null,
        'country' => null,
        'zip_code' => null,
        'listing_title' => null,
        'listing_url' => null,
        'comments' => null,
        'company' => null,
        'store' => null,
        'agent' => null,
        'lead_id' => null,
        'source' => null,
        'medium' => null,
        'campaign' => null,
        'history' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'priority' => 'priority',
        'provider' => 'provider',
        'provider_lead_id' => 'providerLeadId',
        'utm_source' => 'utmSource',
        'utm_medium' => 'utmMedium',
        'utm_campaign' => 'utmCampaign',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'phones' => 'phones',
        'emails' => 'emails',
        'call_in' => 'callIn',
        'category' => 'category',
        'nin' => 'nin',
        'address' => 'address',
        'sub_locality' => 'subLocality',
        'locality' => 'locality',
        'region' => 'region',
        'country' => 'country',
        'zip_code' => 'zipCode',
        'listing_title' => 'listingTitle',
        'listing_url' => 'listingUrl',
        'comments' => 'comments',
        'company' => 'company',
        'store' => 'store',
        'agent' => 'agent',
        'lead_id' => 'leadId',
        'source' => 'source',
        'medium' => 'medium',
        'campaign' => 'campaign',
        'history' => 'history'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'priority' => 'setPriority',
        'provider' => 'setProvider',
        'provider_lead_id' => 'setProviderLeadId',
        'utm_source' => 'setUtmSource',
        'utm_medium' => 'setUtmMedium',
        'utm_campaign' => 'setUtmCampaign',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'phones' => 'setPhones',
        'emails' => 'setEmails',
        'call_in' => 'setCallIn',
        'category' => 'setCategory',
        'nin' => 'setNin',
        'address' => 'setAddress',
        'sub_locality' => 'setSubLocality',
        'locality' => 'setLocality',
        'region' => 'setRegion',
        'country' => 'setCountry',
        'zip_code' => 'setZipCode',
        'listing_title' => 'setListingTitle',
        'listing_url' => 'setListingUrl',
        'comments' => 'setComments',
        'company' => 'setCompany',
        'store' => 'setStore',
        'agent' => 'setAgent',
        'lead_id' => 'setLeadId',
        'source' => 'setSource',
        'medium' => 'setMedium',
        'campaign' => 'setCampaign',
        'history' => 'setHistory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'priority' => 'getPriority',
        'provider' => 'getProvider',
        'provider_lead_id' => 'getProviderLeadId',
        'utm_source' => 'getUtmSource',
        'utm_medium' => 'getUtmMedium',
        'utm_campaign' => 'getUtmCampaign',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'phones' => 'getPhones',
        'emails' => 'getEmails',
        'call_in' => 'getCallIn',
        'category' => 'getCategory',
        'nin' => 'getNin',
        'address' => 'getAddress',
        'sub_locality' => 'getSubLocality',
        'locality' => 'getLocality',
        'region' => 'getRegion',
        'country' => 'getCountry',
        'zip_code' => 'getZipCode',
        'listing_title' => 'getListingTitle',
        'listing_url' => 'getListingUrl',
        'comments' => 'getComments',
        'company' => 'getCompany',
        'store' => 'getStore',
        'agent' => 'getAgent',
        'lead_id' => 'getLeadId',
        'source' => 'getSource',
        'medium' => 'getMedium',
        'campaign' => 'getCampaign',
        'history' => 'getHistory'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['provider_lead_id'] = isset($data['provider_lead_id']) ? $data['provider_lead_id'] : null;
        $this->container['utm_source'] = isset($data['utm_source']) ? $data['utm_source'] : null;
        $this->container['utm_medium'] = isset($data['utm_medium']) ? $data['utm_medium'] : null;
        $this->container['utm_campaign'] = isset($data['utm_campaign']) ? $data['utm_campaign'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['phones'] = isset($data['phones']) ? $data['phones'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['call_in'] = isset($data['call_in']) ? $data['call_in'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['nin'] = isset($data['nin']) ? $data['nin'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['sub_locality'] = isset($data['sub_locality']) ? $data['sub_locality'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null;
        $this->container['listing_title'] = isset($data['listing_title']) ? $data['listing_title'] : null;
        $this->container['listing_url'] = isset($data['listing_url']) ? $data['listing_url'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['store'] = isset($data['store']) ? $data['store'] : null;
        $this->container['agent'] = isset($data['agent']) ? $data['agent'] : null;
        $this->container['lead_id'] = isset($data['lead_id']) ? $data['lead_id'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['medium'] = isset($data['medium']) ? $data['medium'] : null;
        $this->container['campaign'] = isset($data['campaign']) ? $data['campaign'] : null;
        $this->container['history'] = isset($data['history']) ? $data['history'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['utm_source'] === null) {
            $invalidProperties[] = "'utm_source' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets priority
     *
     * @return float
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param float $priority The priority of the Lead
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string $provider The name/key to identify the provider of the lead.
     *
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets provider_lead_id
     *
     * @return string
     */
    public function getProviderLeadId()
    {
        return $this->container['provider_lead_id'];
    }

    /**
     * Sets provider_lead_id
     *
     * @param string $provider_lead_id The ID of the lead in the provider.
     *
     * @return $this
     */
    public function setProviderLeadId($provider_lead_id)
    {
        $this->container['provider_lead_id'] = $provider_lead_id;

        return $this;
    }

    /**
     * Gets utm_source
     *
     * @return string
     */
    public function getUtmSource()
    {
        return $this->container['utm_source'];
    }

    /**
     * Sets utm_source
     *
     * @param string $utm_source Identify the advertiser, site, publication, etc. that is sending traffic to your property.
     *
     * @return $this
     */
    public function setUtmSource($utm_source)
    {
        $this->container['utm_source'] = $utm_source;

        return $this;
    }

    /**
     * Gets utm_medium
     *
     * @return string
     */
    public function getUtmMedium()
    {
        return $this->container['utm_medium'];
    }

    /**
     * Sets utm_medium
     *
     * @param string $utm_medium The advertising or marketing medium.
     *
     * @return $this
     */
    public function setUtmMedium($utm_medium)
    {
        $this->container['utm_medium'] = $utm_medium;

        return $this;
    }

    /**
     * Gets utm_campaign
     *
     * @return string
     */
    public function getUtmCampaign()
    {
        return $this->container['utm_campaign'];
    }

    /**
     * Sets utm_campaign
     *
     * @param string $utm_campaign The individual campaign name, slogan, promo code, etc. for a product.
     *
     * @return $this
     */
    public function setUtmCampaign($utm_campaign)
    {
        $this->container['utm_campaign'] = $utm_campaign;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets phones
     *
     * @return string[]
     */
    public function getPhones()
    {
        return $this->container['phones'];
    }

    /**
     * Sets phones
     *
     * @param string[] $phones phones
     *
     * @return $this
     */
    public function setPhones($phones)
    {
        $this->container['phones'] = $phones;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return string[]
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param string[] $emails emails
     *
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets call_in
     *
     * @return object
     */
    public function getCallIn()
    {
        return $this->container['call_in'];
    }

    /**
     * Sets call_in
     *
     * @param object $call_in @deprecated use NewCallEvent An object representing an inbound phone call. Connected calls should provide a recording and its associated metadata.
     *
     * @return $this
     */
    public function setCallIn($call_in)
    {
        $this->container['call_in'] = $call_in;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category The category of the lead. Use the Categories endpoint to see the available categories. If skipped, the default category is used.
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets nin
     *
     * @return \Swagger\Client\Model\Nin[]
     */
    public function getNin()
    {
        return $this->container['nin'];
    }

    /**
     * Sets nin
     *
     * @param \Swagger\Client\Model\Nin[] $nin National Identification Number
     *
     * @return $this
     */
    public function setNin($nin)
    {
        $this->container['nin'] = $nin;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address Full street address.
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets sub_locality
     *
     * @return string
     */
    public function getSubLocality()
    {
        return $this->container['sub_locality'];
    }

    /**
     * Sets sub_locality
     *
     * @param string $sub_locality County / other sub-division of a locality, such as communes departments, etc.
     *
     * @return $this
     */
    public function setSubLocality($sub_locality)
    {
        $this->container['sub_locality'] = $sub_locality;

        return $this;
    }

    /**
     * Gets locality
     *
     * @return string
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param string $locality City / Municipality.
     *
     * @return $this
     */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region State / Province.
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets zip_code
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string $zip_code Zip Code / Postal Code.
     *
     * @return $this
     */
    public function setZipCode($zip_code)
    {
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets listing_title
     *
     * @return string
     */
    public function getListingTitle()
    {
        return $this->container['listing_title'];
    }

    /**
     * Sets listing_title
     *
     * @param string $listing_title The title of the listing page.
     *
     * @return $this
     */
    public function setListingTitle($listing_title)
    {
        $this->container['listing_title'] = $listing_title;

        return $this;
    }

    /**
     * Gets listing_url
     *
     * @return string
     */
    public function getListingUrl()
    {
        return $this->container['listing_url'];
    }

    /**
     * Sets listing_url
     *
     * @param string $listing_url The URL of the listing page.
     *
     * @return $this
     */
    public function setListingUrl($listing_url)
    {
        $this->container['listing_url'] = $listing_url;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string $comments Any comments worth making to the agent, from the lead or from the acquisition channel.
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company If the lead has an assigned company, indicate it's name or code. Usually, it's the name of the company under the general account.
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets store
     *
     * @return string
     */
    public function getStore()
    {
        return $this->container['store'];
    }

    /**
     * Sets store
     *
     * @param string $store If the lead has an assigned store, indicate it's name or code. Usually is the name of the branch inside the company.
     *
     * @return $this
     */
    public function setStore($store)
    {
        $this->container['store'] = $store;

        return $this;
    }

    /**
     * Gets agent
     *
     * @return string
     */
    public function getAgent()
    {
        return $this->container['agent'];
    }

    /**
     * Sets agent
     *
     * @param string $agent If the lead has an assigned agent, indicate it's name or code.
     *
     * @return $this
     */
    public function setAgent($agent)
    {
        $this->container['agent'] = $agent;

        return $this;
    }

    /**
     * Gets lead_id
     *
     * @return string
     */
    public function getLeadId()
    {
        return $this->container['lead_id'];
    }

    /**
     * Sets lead_id
     *
     * @param string $lead_id @deprecated - use providerLeadId The ID of the lead in the provider.
     *
     * @return $this
     */
    public function setLeadId($lead_id)
    {
        $this->container['lead_id'] = $lead_id;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source @deprecated - use utmSource Identify the advertiser, site, publication, etc. that is sending traffic to your property.
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets medium
     *
     * @return string
     */
    public function getMedium()
    {
        return $this->container['medium'];
    }

    /**
     * Sets medium
     *
     * @param string $medium @deprecated - use utmMedium The contact medium where the lead came from.
     *
     * @return $this
     */
    public function setMedium($medium)
    {
        $this->container['medium'] = $medium;

        return $this;
    }

    /**
     * Gets campaign
     *
     * @return string
     */
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * Sets campaign
     *
     * @param string $campaign @deprecated - use utmCampaign The individual campaign name, slogan, promo code, etc. for a product.
     *
     * @return $this
     */
    public function setCampaign($campaign)
    {
        $this->container['campaign'] = $campaign;

        return $this;
    }

    /**
     * Gets history
     *
     * @return \Swagger\Client\Model\NewEvent[]
     */
    public function getHistory()
    {
        return $this->container['history'];
    }

    /**
     * Sets history
     *
     * @param \Swagger\Client\Model\NewEvent[] $history Ordered list of lead events
     *
     * @return $this
     */
    public function setHistory($history)
    {
        $this->container['history'] = $history;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


