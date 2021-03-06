<?php

namespace Drupal\tmgmt_contentapi\Swagger\Client\Model;

use ArrayAccess;
use Drupal\tmgmt_contentapi\Swagger\Client\ObjectSerializer;

/**
 * JobStats Class Doc Comment.
 *
 * @category Class
 * @package Drupal\tmgmt_contentapi\Swagger\Client
 * @author Swagger Codegen team
 * @link https://github.com/swagger-api/swagger-codegen
 */
class JobStats implements ModelInterface, ArrayAccess {
  const DISCRIMINATOR = NULL;

  /**
   * The original name of the model.
   *
   * @var string
   */
  protected static $swaggerModelName = 'JobStats';

  /**
   * Array of property to type mappings. Used for (de)serialization.
   *
   * @var string[]
   */
  protected static $swaggerTypes = [
        'total_requests' => 'int',
        'total_sentout' => 'int',
        'total_in_translation' => 'int',
        'total_error' => 'int',
        'total_received' => 'int',
        'total_completed' => 'int'
    ];

  /**
   * Array of property to format mappings. Used for (de)serialization.
   *
   * @var string[]
   */
  protected static $swaggerFormats = [
        'total_requests' => NULL,
        'total_sentout' => NULL,
        'total_in_translation' => NULL,
        'total_error' => NULL,
        'total_received' => NULL,
        'total_completed' => NULL
    ];

  /**
   * Array of property to type mappings. Used for (de)serialization.
   *
   * @return array
   */
  public static function swaggerTypes() {
    return self::$swaggerTypes;
  }

  /**
   * Array of property to format mappings. Used for (de)serialization.
   *
   * @return array
   */
  public static function swaggerFormats() {
    return self::$swaggerFormats;
  }

  /**
   * Array of attributes where the key is the local name,
   * and the value is the original name.
   *
   * @var string[]
   */
  protected static $attributeMap = [
        'total_requests' => 'totalRequests',
        'total_sentout' => 'totalSentout',
        'total_in_translation' => 'totalInTranslation',
        'total_error' => 'totalError',
        'total_received' => 'totalReceived',
        'total_completed' => 'totalCompleted'
    ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
        'total_requests' => 'setTotalRequests',
        'total_sentout' => 'setTotalSentout',
        'total_in_translation' => 'setTotalInTranslation',
        'total_error' => 'setTotalError',
        'total_received' => 'setTotalReceived',
        'total_completed' => 'setTotalCompleted'
    ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
        'total_requests' => 'getTotalRequests',
        'total_sentout' => 'getTotalSentout',
        'total_in_translation' => 'getTotalInTranslation',
        'total_error' => 'getTotalError',
        'total_received' => 'getTotalReceived',
        'total_completed' => 'getTotalCompleted'
    ];

  /**
   * Array of attributes where the key is the local name,
   * and the value is the original name.
   *
   * @return array
   */
  public static function attributeMap() {
    return self::$attributeMap;
  }

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @return array
   */
  public static function setters() {
    return self::$setters;
  }

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @return array
   */
  public static function getters() {
    return self::$getters;
  }

  /**
   * The original name of the model.
   *
   * @return string
   */
  public function getModelName() {
    return self::$swaggerModelName;
  }

  /**
   * Associative array for storing property values.
   *
   * @var mixed[]
   */
  protected $container = [];

  /**
   * Constructor.
   *
   * @param mixed[] $data
   *   Associated array of property values
   *   initializing the model.
   */
  public function __construct(array $data = NULL) {
    $this->container['total_requests'] = isset($data['total_requests']) ? $data['total_requests'] : NULL;
    $this->container['total_sentout'] = isset($data['total_sentout']) ? $data['total_sentout'] : NULL;
    $this->container['total_in_translation'] = isset($data['total_in_translation']) ? $data['total_in_translation'] : NULL;
    $this->container['total_error'] = isset($data['total_error']) ? $data['total_error'] : NULL;
    $this->container['total_received'] = isset($data['total_received']) ? $data['total_received'] : NULL;
    $this->container['total_completed'] = isset($data['total_completed']) ? $data['total_completed'] : NULL;
  }

  /**
   * Show all the invalid properties with reasons.
   *
   * @return array invalid properties with reasons
   */
  public function listInvalidProperties() {
    $invalidProperties = [];

    return $invalidProperties;
  }

  /**
   * Validate all the properties in the model
   * return true if all passed.
   *
   * @return bool True if all properties are valid
   */
  public function valid() {

    return TRUE;
  }

  /**
   * Gets total_requests.
   *
   * @return int
   */
  public function getTotalRequests() {
    return $this->container['total_requests'];
  }

  /**
   * Sets total_requests.
   *
   * @param int $total_requests
   *   Total number of requests in a job.
   *
   * @return $this
   */
  public function setTotalRequests($total_requests) {
    $this->container['total_requests'] = $total_requests;

    return $this;
  }

  /**
   * Gets total_sentout.
   *
   * @return int
   */
  public function getTotalSentout() {
    return $this->container['total_sentout'];
  }

  /**
   * Sets total_sentout.
   *
   * @param int $total_sentout
   *   Total number of requests sent out as part of a job.
   *
   * @return $this
   */
  public function setTotalSentout($total_sentout) {
    $this->container['total_sentout'] = $total_sentout;

    return $this;
  }

  /**
   * Gets total_in_translation.
   *
   * @return int
   */
  public function getTotalInTranslation() {
    return $this->container['total_in_translation'];
  }

  /**
   * Sets total_in_translation.
   *
   * @param int $total_in_translation
   *   Total number of requests received by translation provider.
   *
   * @return $this
   */
  public function setTotalInTranslation($total_in_translation) {
    $this->container['total_in_translation'] = $total_in_translation;

    return $this;
  }

  /**
   * Gets total_error.
   *
   * @return int
   */
  public function getTotalError() {
    return $this->container['total_error'];
  }

  /**
   * Sets total_error.
   *
   * @param int $total_error
   *   Total number of requests that have an error.
   *
   * @return $this
   */
  public function setTotalError($total_error) {
    $this->container['total_error'] = $total_error;

    return $this;
  }

  /**
   * Gets total_received.
   *
   * @return int
   */
  public function getTotalReceived() {
    return $this->container['total_received'];
  }

  /**
   * Sets total_received.
   *
   * @param int $total_received
   *   Total number of requests returned from translation provider.
   *
   * @return $this
   */
  public function setTotalReceived($total_received) {
    $this->container['total_received'] = $total_received;

    return $this;
  }

  /**
   * Gets total_completed.
   *
   * @return int
   */
  public function getTotalCompleted() {
    return $this->container['total_completed'];
  }

  /**
   * Sets total_completed.
   *
   * @param int $total_completed
   *   Total number of completed requests in a job.
   *
   * @return $this
   */
  public function setTotalCompleted($total_completed) {
    $this->container['total_completed'] = $total_completed;

    return $this;
  }

  /**
   * Returns true if offset exists. False otherwise.
   *
   * @param int $offset
   *   Offset.
   *
   * @return bool
   */
  public function offsetExists($offset) {
    return isset($this->container[$offset]);
  }

  /**
   * Gets offset.
   *
   * @param int $offset
   *   Offset.
   *
   * @return mixed
   */
  public function offsetGet($offset) {
    return isset($this->container[$offset]) ? $this->container[$offset] : NULL;
  }

  /**
   * Sets value based on offset.
   *
   * @param int $offset
   *   Offset.
   * @param mixed $value
   *   Value to be set.
   *
   * @return void
   */
  public function offsetSet($offset, $value) {
    if (is_null($offset)) {
      $this->container[] = $value;
    }
    else {
      $this->container[$offset] = $value;
    }
  }

  /**
   * Unsets offset.
   *
   * @param int $offset
   *   Offset.
   *
   * @return void
   */
  public function offsetUnset($offset) {
    unset($this->container[$offset]);
  }

  /**
   * Gets the string presentation of the object.
   *
   * @return string
   */
  public function __toString() {
    // Use JSON pretty print.
    if (defined('JSON_PRETTY_PRINT')) {
      return json_encode(
        ObjectSerializer::sanitizeForSerialization($this),
        JSON_PRETTY_PRINT
      );
    }

    return json_encode(ObjectSerializer::sanitizeForSerialization($this));
  }

}
