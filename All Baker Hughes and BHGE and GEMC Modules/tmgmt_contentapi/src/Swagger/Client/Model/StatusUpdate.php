<?php

namespace Drupal\tmgmt_contentapi\Swagger\Client\Model;

use ArrayAccess;
use Drupal\tmgmt_contentapi\Swagger\Client\ObjectSerializer;

/**
 * StatusUpdate Class Doc Comment.
 *
 * @category Class
 * @package Drupal\tmgmt_contentapi\Swagger\Client
 * @author Swagger Codegen team
 * @link https://github.com/swagger-api/swagger-codegen
 */
class StatusUpdate implements ModelInterface, ArrayAccess {
  const DISCRIMINATOR = NULL;

  /**
   * The original name of the model.
   *
   * @var string
   */
  protected static $swaggerModelName = 'StatusUpdate';

  /**
   * Array of property to type mappings. Used for (de)serialization.
   *
   * @var string[]
   */
  protected static $swaggerTypes = [
        'update_id' => 'string',
        'job_id' => 'string',
        'request_ids' => 'string[]',
        'acknowledged' => 'bool',
        'status_code' => '\Drupal\tmgmt_contentapi\Swagger\Client\Model\StatusCode',
        'update_time' => '\DateTime',
        'has_error' => 'bool',
        'error_message' => 'string'
    ];

  /**
   * Array of property to format mappings. Used for (de)serialization.
   *
   * @var string[]
   */
  protected static $swaggerFormats = [
        'update_id' => NULL,
        'job_id' => NULL,
        'request_ids' => NULL,
        'acknowledged' => NULL,
        'status_code' => NULL,
        'update_time' => 'date-time',
        'has_error' => NULL,
        'error_message' => NULL
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
        'update_id' => 'updateId',
        'job_id' => 'jobId',
        'request_ids' => 'requestIds',
        'acknowledged' => 'acknowledged',
        'status_code' => 'statusCode',
        'update_time' => 'updateTime',
        'has_error' => 'hasError',
        'error_message' => 'errorMessage'
    ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
        'update_id' => 'setUpdateId',
        'job_id' => 'setJobId',
        'request_ids' => 'setRequestIds',
        'acknowledged' => 'setAcknowledged',
        'status_code' => 'setStatusCode',
        'update_time' => 'setUpdateTime',
        'has_error' => 'setHasError',
        'error_message' => 'setErrorMessage'
    ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
        'update_id' => 'getUpdateId',
        'job_id' => 'getJobId',
        'request_ids' => 'getRequestIds',
        'acknowledged' => 'getAcknowledged',
        'status_code' => 'getStatusCode',
        'update_time' => 'getUpdateTime',
        'has_error' => 'getHasError',
        'error_message' => 'getErrorMessage'
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
    $this->container['update_id'] = isset($data['update_id']) ? $data['update_id'] : NULL;
    $this->container['job_id'] = isset($data['job_id']) ? $data['job_id'] : NULL;
    $this->container['request_ids'] = isset($data['request_ids']) ? $data['request_ids'] : NULL;
    $this->container['acknowledged'] = isset($data['acknowledged']) ? $data['acknowledged'] : NULL;
    $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : NULL;
    $this->container['update_time'] = isset($data['update_time']) ? $data['update_time'] : NULL;
    $this->container['has_error'] = isset($data['has_error']) ? $data['has_error'] : NULL;
    $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : NULL;
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
   * Gets update_id.
   *
   * @return string
   */
  public function getUpdateId() {
    return $this->container['update_id'];
  }

  /**
   * Sets update_id.
   *
   * @param string $update_id
   *   Unique identifier representing a status update.
   *
   * @return $this
   */
  public function setUpdateId($update_id) {
    $this->container['update_id'] = $update_id;

    return $this;
  }

  /**
   * Gets job_id.
   *
   * @return string
   */
  public function getJobId() {
    return $this->container['job_id'];
  }

  /**
   * Sets job_id.
   *
   * @param string $job_id
   *   Unique identifier representing a translation job.
   *
   * @return $this
   */
  public function setJobId($job_id) {
    $this->container['job_id'] = $job_id;

    return $this;
  }

  /**
   * Gets request_ids.
   *
   * @return string[]
   */
  public function getRequestIds() {
    return $this->container['request_ids'];
  }

  /**
   * Sets request_ids.
   *
   * @param string[] $request_ids
   *   ID of translation request that is part of the status update.
   *
   * @return $this
   */
  public function setRequestIds($request_ids) {
    $this->container['request_ids'] = $request_ids;

    return $this;
  }

  /**
   * Gets acknowledged.
   *
   * @return bool
   */
  public function getAcknowledged() {
    return $this->container['acknowledged'];
  }

  /**
   * Sets acknowledged.
   *
   * @param bool $acknowledged
   *   Boolean if update has been acknowledged.
   *
   * @return $this
   */
  public function setAcknowledged($acknowledged) {
    $this->container['acknowledged'] = $acknowledged;

    return $this;
  }

  /**
   * Gets status_code.
   *
   * @return \Drupal\tmgmt_contentapi\Swagger\Client\Model\StatusCode
   */
  public function getStatusCode() {
    return $this->container['status_code'];
  }

  /**
   * Sets status_code.
   *
   * @param \Drupal\tmgmt_contentapi\Swagger\Client\Model\StatusCode $status_code
   *   status_code.
   *
   * @return $this
   */
  public function setStatusCode($status_code) {
    $this->container['status_code'] = $status_code;

    return $this;
  }

  /**
   * Gets update_time.
   *
   * @return \DateTime
   */
  public function getUpdateTime() {
    return $this->container['update_time'];
  }

  /**
   * Sets update_time.
   *
   * @param \DateTime $update_time
   *   Date-Time of the status update.
   *
   * @return $this
   */
  public function setUpdateTime($update_time) {
    $this->container['update_time'] = $update_time;

    return $this;
  }

  /**
   * Gets has_error.
   *
   * @return bool
   */
  public function getHasError() {
    return $this->container['has_error'];
  }

  /**
   * Sets has_error.
   *
   * @param bool $has_error
   *   If error has occurred with this status update.
   *
   * @return $this
   */
  public function setHasError($has_error) {
    $this->container['has_error'] = $has_error;

    return $this;
  }

  /**
   * Gets error_message.
   *
   * @return string
   */
  public function getErrorMessage() {
    return $this->container['error_message'];
  }

  /**
   * Sets error_message.
   *
   * @param string $error_message
   *   Error message.
   *
   * @return $this
   */
  public function setErrorMessage($error_message) {
    $this->container['error_message'] = $error_message;

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
