<?php

namespace Drupal\tmgmt_contentapi\Swagger\Client\Model;

use ArrayAccess;
use Drupal\tmgmt_contentapi\Swagger\Client\ObjectSerializer;

/**
 * Request Class Doc Comment.
 *
 * @category Class
 * @package Drupal\tmgmt_contentapi\Swagger\Client
 * @author Swagger Codegen team
 * @link https://github.com/swagger-api/swagger-codegen
 */
class Request implements ModelInterface, ArrayAccess {
  const DISCRIMINATOR = NULL;

  /**
   * The original name of the model.
   *
   * @var string
   */
  protected static $swaggerModelName = 'Request';

  /**
   * Array of property to type mappings. Used for (de)serialization.
   *
   * @var string[]
   */
  protected static $swaggerTypes = [
        'request_id' => 'string',
        'job_id' => 'string',
        'request_name' => 'string',
        'status_code' => '\Drupal\tmgmt_contentapi\Swagger\Client\Model\StatusCode',
        'has_error' => 'bool',
        'latest_error_message' => 'string',
        'source_native_id' => 'string',
        'source_native_language_code' => 'string',
        'target_native_id' => 'string',
        'target_native_language_code' => 'string',
        'created_date' => '\DateTime',
        'modified_date' => '\DateTime',
        'word_count' => 'int',
        'file_id' => 'string',
        'file_type' => 'string'
    ];

  /**
   * Array of property to format mappings. Used for (de)serialization.
   *
   * @var string[]
   */
  protected static $swaggerFormats = [
        'request_id' => NULL,
        'job_id' => NULL,
        'request_name' => NULL,
        'status_code' => NULL,
        'has_error' => NULL,
        'latest_error_message' => NULL,
        'source_native_id' => NULL,
        'source_native_language_code' => NULL,
        'target_native_id' => NULL,
        'target_native_language_code' => NULL,
        'created_date' => 'date-time',
        'modified_date' => 'date-time',
        'word_count' => NULL,
        'file_id' => NULL,
        'file_type' => NULL
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
        'request_id' => 'requestId',
        'job_id' => 'jobId',
        'request_name' => 'requestName',
        'status_code' => 'statusCode',
        'has_error' => 'hasError',
        'latest_error_message' => 'latestErrorMessage',
        'source_native_id' => 'sourceNativeId',
        'source_native_language_code' => 'sourceNativeLanguageCode',
        'target_native_id' => 'targetNativeId',
        'target_native_language_code' => 'targetNativeLanguageCode',
        'created_date' => 'createdDate',
        'modified_date' => 'modifiedDate',
        'word_count' => 'wordCount',
        'file_id' => 'fileId',
        'file_type' => 'fileType'
    ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
        'request_id' => 'setRequestId',
        'job_id' => 'setJobId',
        'request_name' => 'setRequestName',
        'status_code' => 'setStatusCode',
        'has_error' => 'setHasError',
        'latest_error_message' => 'setLatestErrorMessage',
        'source_native_id' => 'setSourceNativeId',
        'source_native_language_code' => 'setSourceNativeLanguageCode',
        'target_native_id' => 'setTargetNativeId',
        'target_native_language_code' => 'setTargetNativeLanguageCode',
        'created_date' => 'setCreatedDate',
        'modified_date' => 'setModifiedDate',
        'word_count' => 'setWordCount',
        'file_id' => 'setFileId',
        'file_type' => 'setFileType'
    ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
        'request_id' => 'getRequestId',
        'job_id' => 'getJobId',
        'request_name' => 'getRequestName',
        'status_code' => 'getStatusCode',
        'has_error' => 'getHasError',
        'latest_error_message' => 'getLatestErrorMessage',
        'source_native_id' => 'getSourceNativeId',
        'source_native_language_code' => 'getSourceNativeLanguageCode',
        'target_native_id' => 'getTargetNativeId',
        'target_native_language_code' => 'getTargetNativeLanguageCode',
        'created_date' => 'getCreatedDate',
        'modified_date' => 'getModifiedDate',
        'word_count' => 'getWordCount',
        'file_id' => 'getFileId',
        'file_type' => 'getFileType'
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
    $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : NULL;
    $this->container['job_id'] = isset($data['job_id']) ? $data['job_id'] : NULL;
    $this->container['request_name'] = isset($data['request_name']) ? $data['request_name'] : NULL;
    $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : NULL;
    $this->container['has_error'] = isset($data['has_error']) ? $data['has_error'] : NULL;
    $this->container['latest_error_message'] = isset($data['latest_error_message']) ? $data['latest_error_message'] : NULL;
    $this->container['source_native_id'] = isset($data['source_native_id']) ? $data['source_native_id'] : NULL;
    $this->container['source_native_language_code'] = isset($data['source_native_language_code']) ? $data['source_native_language_code'] : NULL;
    $this->container['target_native_id'] = isset($data['target_native_id']) ? $data['target_native_id'] : NULL;
    $this->container['target_native_language_code'] = isset($data['target_native_language_code']) ? $data['target_native_language_code'] : NULL;
    $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : NULL;
    $this->container['modified_date'] = isset($data['modified_date']) ? $data['modified_date'] : NULL;
    $this->container['word_count'] = isset($data['word_count']) ? $data['word_count'] : NULL;
    $this->container['file_id'] = isset($data['file_id']) ? $data['file_id'] : NULL;
    $this->container['file_type'] = isset($data['file_type']) ? $data['file_type'] : NULL;
  }

  /**
   * Show all the invalid properties with reasons.
   *
   * @return array invalid properties with reasons
   */
  public function listInvalidProperties() {
    $invalidProperties = [];

    if ($this->container['request_id'] === NULL) {
      $invalidProperties[] = "'request_id' can't be null";
    }
    if ($this->container['job_id'] === NULL) {
      $invalidProperties[] = "'job_id' can't be null";
    }
    if ($this->container['request_name'] === NULL) {
      $invalidProperties[] = "'request_name' can't be null";
    }
    if ($this->container['source_native_id'] === NULL) {
      $invalidProperties[] = "'source_native_id' can't be null";
    }
    if ($this->container['source_native_language_code'] === NULL) {
      $invalidProperties[] = "'source_native_language_code' can't be null";
    }
    if ($this->container['target_native_language_code'] === NULL) {
      $invalidProperties[] = "'target_native_language_code' can't be null";
    }
    return $invalidProperties;
  }

  /**
   * Validate all the properties in the model
   * return true if all passed.
   *
   * @return bool True if all properties are valid
   */
  public function valid() {

    if ($this->container['request_id'] === NULL) {
      return FALSE;
    }
    if ($this->container['job_id'] === NULL) {
      return FALSE;
    }
    if ($this->container['request_name'] === NULL) {
      return FALSE;
    }
    if ($this->container['source_native_id'] === NULL) {
      return FALSE;
    }
    if ($this->container['source_native_language_code'] === NULL) {
      return FALSE;
    }
    if ($this->container['target_native_language_code'] === NULL) {
      return FALSE;
    }
    return TRUE;
  }

  /**
   * Gets request_id.
   *
   * @return string
   */
  public function getRequestId() {
    return $this->container['request_id'];
  }

  /**
   * Sets request_id.
   *
   * @param string $request_id
   *   Unique identifier representing the translation request.
   *
   * @return $this
   */
  public function setRequestId($request_id) {
    $this->container['request_id'] = $request_id;

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
   * Gets request_name.
   *
   * @return string
   */
  public function getRequestName() {
    return $this->container['request_name'];
  }

  /**
   * Sets request_name.
   *
   * @param string $request_name
   *   Name of the translation request.
   *
   * @return $this
   */
  public function setRequestName($request_name) {
    $this->container['request_name'] = $request_name;

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
   *   If the translation request currently has an error.
   *
   * @return $this
   */
  public function setHasError($has_error) {
    $this->container['has_error'] = $has_error;

    return $this;
  }

  /**
   * Gets latest_error_message.
   *
   * @return string
   */
  public function getLatestErrorMessage() {
    return $this->container['latest_error_message'];
  }

  /**
   * Sets latest_error_message.
   *
   * @param string $latest_error_message
   *   The message for the most recent error affecting a translation request.
   *
   * @return $this
   */
  public function setLatestErrorMessage($latest_error_message) {
    $this->container['latest_error_message'] = $latest_error_message;

    return $this;
  }

  /**
   * Gets source_native_id.
   *
   * @return string
   */
  public function getSourceNativeId() {
    return $this->container['source_native_id'];
  }

  /**
   * Sets source_native_id.
   *
   * @param string $source_native_id
   *   Source ID of the request in the content system.
   *
   * @return $this
   */
  public function setSourceNativeId($source_native_id) {
    $this->container['source_native_id'] = $source_native_id;

    return $this;
  }

  /**
   * Gets source_native_language_code.
   *
   * @return string
   */
  public function getSourceNativeLanguageCode() {
    return $this->container['source_native_language_code'];
  }

  /**
   * Sets source_native_language_code.
   *
   * @param string $source_native_language_code
   *   Source language code of the request in the content system.
   *
   * @return $this
   */
  public function setSourceNativeLanguageCode($source_native_language_code) {
    $this->container['source_native_language_code'] = $source_native_language_code;

    return $this;
  }

  /**
   * Gets target_native_id.
   *
   * @return string
   */
  public function getTargetNativeId() {
    return $this->container['target_native_id'];
  }

  /**
   * Sets target_native_id.
   *
   * @param string $target_native_id
   *   Target ID of the request in the content system.
   *
   * @return $this
   */
  public function setTargetNativeId($target_native_id) {
    $this->container['target_native_id'] = $target_native_id;

    return $this;
  }

  /**
   * Gets target_native_language_code.
   *
   * @return string
   */
  public function getTargetNativeLanguageCode() {
    return $this->container['target_native_language_code'];
  }

  /**
   * Sets target_native_language_code.
   *
   * @param string $target_native_language_code
   *   Target language code of the request in the content system.
   *
   * @return $this
   */
  public function setTargetNativeLanguageCode($target_native_language_code) {
    $this->container['target_native_language_code'] = $target_native_language_code;

    return $this;
  }

  /**
   * Gets created_date.
   *
   * @return \DateTime
   */
  public function getCreatedDate() {
    return $this->container['created_date'];
  }

  /**
   * Sets created_date.
   *
   * @param \DateTime $created_date
   *   Date-time signature of when the translation request was created.
   *
   * @return $this
   */
  public function setCreatedDate($created_date) {
    $this->container['created_date'] = $created_date;

    return $this;
  }

  /**
   * Gets modified_date.
   *
   * @return \DateTime
   */
  public function getModifiedDate() {
    return $this->container['modified_date'];
  }

  /**
   * Sets modified_date.
   *
   * @param \DateTime $modified_date
   *   Date-time signature of when the translation request was last modified.
   *
   * @return $this
   */
  public function setModifiedDate($modified_date) {
    $this->container['modified_date'] = $modified_date;

    return $this;
  }

  /**
   * Gets word_count.
   *
   * @return int
   */
  public function getWordCount() {
    return $this->container['word_count'];
  }

  /**
   * Sets word_count.
   *
   * @param int $word_count
   *   Word count in translation request.
   *
   * @return $this
   */
  public function setWordCount($word_count) {
    $this->container['word_count'] = $word_count;

    return $this;
  }

  /**
   * Gets file_id.
   *
   * @return string
   */
  public function getFileId() {
    return $this->container['file_id'];
  }

  /**
   * Sets file_id.
   *
   * @param string $file_id
   *   ID of source file if file exists.
   *
   * @return $this
   */
  public function setFileId($file_id) {
    $this->container['file_id'] = $file_id;

    return $this;
  }

  /**
   * Gets file_type.
   *
   * @return string
   */
  public function getFileType() {
    return $this->container['file_type'];
  }

  /**
   * Sets file_type.
   *
   * @param string $file_type
   *   MIME type of the source file of the request. This should be left empty for name-value-pair requests.
   *
   * @return $this
   */
  public function setFileType($file_type) {
    $this->container['file_type'] = $file_type;

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
