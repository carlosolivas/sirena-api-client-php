<?php
/**
 * ProductOrder
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
 * ProductOrder Class Doc Comment
 *
 * @category Class
 * @description products in the order
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'brand' => 'string',
        'color' => 'string',
        'category' => 'string',
        'id' => 'string',
        'price' => 'string',
        'name' => 'string',
        'size' => 'string',
        'url' => 'string',
        'description' => 'string',
        'gender' => 'string',
        'sale_price' => 'string',
        'inventory' => 'float',
        'image_url' => 'string',
        'availability' => 'string',
        'age_group' => 'string',
        'retailer_id' => 'string',
        'product_catalog' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'brand' => null,
        'color' => null,
        'category' => null,
        'id' => null,
        'price' => null,
        'name' => null,
        'size' => null,
        'url' => null,
        'description' => null,
        'gender' => null,
        'sale_price' => null,
        'inventory' => null,
        'image_url' => null,
        'availability' => null,
        'age_group' => null,
        'retailer_id' => null,
        'product_catalog' => null
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
        'brand' => 'brand',
        'color' => 'color',
        'category' => 'category',
        'id' => 'id',
        'price' => 'price',
        'name' => 'name',
        'size' => 'size',
        'url' => 'url',
        'description' => 'description',
        'gender' => 'gender',
        'sale_price' => 'sale_price',
        'inventory' => 'inventory',
        'image_url' => 'image_url',
        'availability' => 'availability',
        'age_group' => 'age_group',
        'retailer_id' => 'retailer_id',
        'product_catalog' => 'product_catalog'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brand' => 'setBrand',
        'color' => 'setColor',
        'category' => 'setCategory',
        'id' => 'setId',
        'price' => 'setPrice',
        'name' => 'setName',
        'size' => 'setSize',
        'url' => 'setUrl',
        'description' => 'setDescription',
        'gender' => 'setGender',
        'sale_price' => 'setSalePrice',
        'inventory' => 'setInventory',
        'image_url' => 'setImageUrl',
        'availability' => 'setAvailability',
        'age_group' => 'setAgeGroup',
        'retailer_id' => 'setRetailerId',
        'product_catalog' => 'setProductCatalog'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brand' => 'getBrand',
        'color' => 'getColor',
        'category' => 'getCategory',
        'id' => 'getId',
        'price' => 'getPrice',
        'name' => 'getName',
        'size' => 'getSize',
        'url' => 'getUrl',
        'description' => 'getDescription',
        'gender' => 'getGender',
        'sale_price' => 'getSalePrice',
        'inventory' => 'getInventory',
        'image_url' => 'getImageUrl',
        'availability' => 'getAvailability',
        'age_group' => 'getAgeGroup',
        'retailer_id' => 'getRetailerId',
        'product_catalog' => 'getProductCatalog'
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
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['sale_price'] = isset($data['sale_price']) ? $data['sale_price'] : null;
        $this->container['inventory'] = isset($data['inventory']) ? $data['inventory'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null;
        $this->container['age_group'] = isset($data['age_group']) ? $data['age_group'] : null;
        $this->container['retailer_id'] = isset($data['retailer_id']) ? $data['retailer_id'] : null;
        $this->container['product_catalog'] = isset($data['product_catalog']) ? $data['product_catalog'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand brand
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

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
     * @param string $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets sale_price
     *
     * @return string
     */
    public function getSalePrice()
    {
        return $this->container['sale_price'];
    }

    /**
     * Sets sale_price
     *
     * @param string $sale_price sale_price
     *
     * @return $this
     */
    public function setSalePrice($sale_price)
    {
        $this->container['sale_price'] = $sale_price;

        return $this;
    }

    /**
     * Gets inventory
     *
     * @return float
     */
    public function getInventory()
    {
        return $this->container['inventory'];
    }

    /**
     * Sets inventory
     *
     * @param float $inventory inventory
     *
     * @return $this
     */
    public function setInventory($inventory)
    {
        $this->container['inventory'] = $inventory;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url image_url
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets availability
     *
     * @return string
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param string $availability availability
     *
     * @return $this
     */
    public function setAvailability($availability)
    {
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets age_group
     *
     * @return string
     */
    public function getAgeGroup()
    {
        return $this->container['age_group'];
    }

    /**
     * Sets age_group
     *
     * @param string $age_group age_group
     *
     * @return $this
     */
    public function setAgeGroup($age_group)
    {
        $this->container['age_group'] = $age_group;

        return $this;
    }

    /**
     * Gets retailer_id
     *
     * @return string
     */
    public function getRetailerId()
    {
        return $this->container['retailer_id'];
    }

    /**
     * Sets retailer_id
     *
     * @param string $retailer_id retailer_id
     *
     * @return $this
     */
    public function setRetailerId($retailer_id)
    {
        $this->container['retailer_id'] = $retailer_id;

        return $this;
    }

    /**
     * Gets product_catalog
     *
     * @return object
     */
    public function getProductCatalog()
    {
        return $this->container['product_catalog'];
    }

    /**
     * Sets product_catalog
     *
     * @param object $product_catalog product_catalog
     *
     * @return $this
     */
    public function setProductCatalog($product_catalog)
    {
        $this->container['product_catalog'] = $product_catalog;

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


