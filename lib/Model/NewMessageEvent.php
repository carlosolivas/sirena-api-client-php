<?php
/**
 * NewMessageEvent
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
 * NewMessageEvent Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NewMessageEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NewMessageEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'replies_to' => 'string',
        'provider_id' => 'string',
        'content' => 'string',
        'delivered' => 'bool',
        'sender' => 'string',
        'recipient' => 'string',
        'attachment' => 'object',
        'channel_interaction' => '\Swagger\Client\Model\ChannelInteraction',
        'list' => '\Swagger\Client\Model\ListMessage',
        'buttons' => '\Swagger\Client\Model\ButtonsMessage',
        'product_list' => '\Swagger\Client\Model\ProductListMessage',
        'order' => '\Swagger\Client\Model\OrderListMessage'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'replies_to' => null,
        'provider_id' => null,
        'content' => null,
        'delivered' => null,
        'sender' => null,
        'recipient' => null,
        'attachment' => null,
        'channel_interaction' => null,
        'list' => null,
        'buttons' => null,
        'product_list' => null,
        'order' => null
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
        'type' => 'type',
        'replies_to' => 'repliesTo',
        'provider_id' => 'providerId',
        'content' => 'content',
        'delivered' => 'delivered',
        'sender' => 'sender',
        'recipient' => 'recipient',
        'attachment' => 'attachment',
        'channel_interaction' => 'channelInteraction',
        'list' => 'list',
        'buttons' => 'buttons',
        'product_list' => 'productList',
        'order' => 'order'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'replies_to' => 'setRepliesTo',
        'provider_id' => 'setProviderId',
        'content' => 'setContent',
        'delivered' => 'setDelivered',
        'sender' => 'setSender',
        'recipient' => 'setRecipient',
        'attachment' => 'setAttachment',
        'channel_interaction' => 'setChannelInteraction',
        'list' => 'setList',
        'buttons' => 'setButtons',
        'product_list' => 'setProductList',
        'order' => 'setOrder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'replies_to' => 'getRepliesTo',
        'provider_id' => 'getProviderId',
        'content' => 'getContent',
        'delivered' => 'getDelivered',
        'sender' => 'getSender',
        'recipient' => 'getRecipient',
        'attachment' => 'getAttachment',
        'channel_interaction' => 'getChannelInteraction',
        'list' => 'getList',
        'buttons' => 'getButtons',
        'product_list' => 'getProductList',
        'order' => 'getOrder'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['replies_to'] = isset($data['replies_to']) ? $data['replies_to'] : null;
        $this->container['provider_id'] = isset($data['provider_id']) ? $data['provider_id'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['delivered'] = isset($data['delivered']) ? $data['delivered'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
        $this->container['attachment'] = isset($data['attachment']) ? $data['attachment'] : null;
        $this->container['channel_interaction'] = isset($data['channel_interaction']) ? $data['channel_interaction'] : null;
        $this->container['list'] = isset($data['list']) ? $data['list'] : null;
        $this->container['buttons'] = isset($data['buttons']) ? $data['buttons'] : null;
        $this->container['product_list'] = isset($data['product_list']) ? $data['product_list'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Must be \"message\"
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets replies_to
     *
     * @return string
     */
    public function getRepliesTo()
    {
        return $this->container['replies_to'];
    }

    /**
     * Sets replies_to
     *
     * @param string $replies_to The ID of operationId replied
     *
     * @return $this
     */
    public function setRepliesTo($replies_to)
    {
        $this->container['replies_to'] = $replies_to;

        return $this;
    }

    /**
     * Gets provider_id
     *
     * @return string
     */
    public function getProviderId()
    {
        return $this->container['provider_id'];
    }

    /**
     * Sets provider_id
     *
     * @param string $provider_id The ID of the call in the provider.
     *
     * @return $this
     */
    public function setProviderId($provider_id)
    {
        $this->container['provider_id'] = $provider_id;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content Text message
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets delivered
     *
     * @return bool
     */
    public function getDelivered()
    {
        return $this->container['delivered'];
    }

    /**
     * Sets delivered
     *
     * @param bool $delivered Check message as delivered
     *
     * @return $this
     */
    public function setDelivered($delivered)
    {
        $this->container['delivered'] = $delivered;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return string
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param string $sender Sender reference
     *
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return string
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param string $recipient Recipient reference
     *
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets attachment
     *
     * @return object
     */
    public function getAttachment()
    {
        return $this->container['attachment'];
    }

    /**
     * Sets attachment
     *
     * @param object $attachment attachment
     *
     * @return $this
     */
    public function setAttachment($attachment)
    {
        $this->container['attachment'] = $attachment;

        return $this;
    }

    /**
     * Gets channel_interaction
     *
     * @return \Swagger\Client\Model\ChannelInteraction
     */
    public function getChannelInteraction()
    {
        return $this->container['channel_interaction'];
    }

    /**
     * Sets channel_interaction
     *
     * @param \Swagger\Client\Model\ChannelInteraction $channel_interaction channel_interaction
     *
     * @return $this
     */
    public function setChannelInteraction($channel_interaction)
    {
        $this->container['channel_interaction'] = $channel_interaction;

        return $this;
    }

    /**
     * Gets list
     *
     * @return \Swagger\Client\Model\ListMessage
     */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
     * Sets list
     *
     * @param \Swagger\Client\Model\ListMessage $list list
     *
     * @return $this
     */
    public function setList($list)
    {
        $this->container['list'] = $list;

        return $this;
    }

    /**
     * Gets buttons
     *
     * @return \Swagger\Client\Model\ButtonsMessage
     */
    public function getButtons()
    {
        return $this->container['buttons'];
    }

    /**
     * Sets buttons
     *
     * @param \Swagger\Client\Model\ButtonsMessage $buttons buttons
     *
     * @return $this
     */
    public function setButtons($buttons)
    {
        $this->container['buttons'] = $buttons;

        return $this;
    }

    /**
     * Gets product_list
     *
     * @return \Swagger\Client\Model\ProductListMessage
     */
    public function getProductList()
    {
        return $this->container['product_list'];
    }

    /**
     * Sets product_list
     *
     * @param \Swagger\Client\Model\ProductListMessage $product_list product_list
     *
     * @return $this
     */
    public function setProductList($product_list)
    {
        $this->container['product_list'] = $product_list;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \Swagger\Client\Model\OrderListMessage
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \Swagger\Client\Model\OrderListMessage $order order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

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


