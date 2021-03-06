<?php

namespace Drupal\tmgmt_contentapi\Swagger\Client\Model;

use ArrayAccess;
use Drupal\tmgmt_contentapi\Swagger\Client\ObjectSerializer;

/**
 * Job Class Doc Comment.
 *
 * @category Class
 * @package Drupal\tmgmt_contentapi\Swagger\Client
 * @author Swagger Codegen team
 * @link https://github.com/swagger-api/swagger-codegen
 */
class Job implements ModelInterface, ArrayAccess {
  const DISCRIMINATOR = NULL;

  /**
   * The original name of the model.
   *
   * @var string
   */
  protected static $swaggerModelName = 'Job';

  /**
   * Array of property to type mappings. Used for (de)serialization.
   *
   * @var string[]
   */
  protected static $swaggerTypes = [
        'job_id' => 'string',
        'job_name' => 'string',
        'description' => 'string',
        'status_code' => '\Drupal\tmgmt_contentapi\Swagger\Client\Model\StatusCode',
        'has_error' => 'bool',
        'latest_error_message' => 'string',
        'submitter_id' => 'string',
        'creator_id' => 'string',
        'provider_id' => 'string',
        'po_reference' => 'string',
        'due_date' => '\DateTime',
        'created_date' => '\DateTime',
        'modified_date' => '\DateTime',
        'archived' => 'bool',
        'job_stats' => '\Drupal\tmgmt_contentapi\Swagger\Client\Model\JobStats',
        'custom_data' => 'string',
        'should_quote' => 'bool'
    ];

  /**
   * Array of property to format mappings. Used for (de)serialization.
   *
   * @var string[]
   */
  protected static $swaggerFormats = [
        'job_id' => NULL,
        'job_name' => NULL,
        'description' => NULL,
        'status_code' => NULL,
        'has_error' => NULL,
        'latest_error_message' => NULL,
        'submitter_id' => NULL,
        'creator_id' => NULL,
        'provider_id' => NULL,
        'po_reference' => NULL,
        'due_date' => 'date-time',
        'created_date' => 'date-time',
        'modified_date' => 'date-time',
        'archived' => NULL,
        'job_stats' => NULL,
        'custom_data' => NULL,
        'should_quote' => NULL
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
        'job_id' => 'jobId',
        'job_name' => 'jobName',
        'description' => 'description',
        'status_code' => 'statusCode',
        'has_error' => 'hasError',
        'latest_error_message' => 'latestErrorMessage',
        'submitter_id' => 'submitterId',
        'creator_id' => 'creatorId',
        'provider_id' => 'providerId',
        'po_reference' => 'poReference',
        'due_date' => 'dueDate',
        'created_date' => 'createdDate',
        'modified_date' => 'modifiedDate',
        'archived' => 'archived',
        'job_stats' => 'jobStats',
        'custom_data' => 'customData',
        'should_quote' => 'shouldQuote'
    ];

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   *
   * @var string[]
   */
  protected static $setters = [
        'job_id' => 'setJobId',
        'job_name' => 'setJobName',
        'description' => 'setDescription',
        'status_code' => 'setStatusCode',
        'has_error' => 'setHasError',
        'latest_error_message' => 'setLatestErrorMessage',
        'submitter_id' => 'setSubmitterId',
        'creator_id' => 'setCreatorId',
        'provider_id' => 'setProviderId',
        'po_reference' => 'setPoReference',
        'due_date' => 'setDueDate',
        'created_date' => 'setCreatedDate',
        'modified_date' => 'setModifiedDate',
        'archived' => 'setArchived',
        'job_stats' => 'setJobStats',
        'custom_data' => 'setCustomData',
        'should_quote' => 'setShouldQuote'
    ];

  /**
   * Array of attributes to getter functions (for serialization of requests)
   *
   * @var string[]
   */
  protected static $getters = [
        'job_id' => 'getJobId',
        'job_name' => 'getJobName',
        'description' => 'getDescription',
        'status_code' => 'getStatusCode',
        'has_error' => 'getHasError',
        'latest_error_message' => 'getLatestErrorMessage',
        'submitter_id' => 'getSubmitterId',
        'creator_id' => 'getCreatorId',
        'provider_id' => 'getProviderId',
        'po_reference' => 'getPoReference',
        'due_date' => 'getDueDate',
        'created_date' => 'getCreatedDate',
        'modified_date' => 'getModifiedDate',
        'archived' => 'getArchived',
        'job_stats' => 'getJobStats',
        'custom_data' => 'getCustomData',
        'should_quote' => 'getShouldQuote'
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
    $this->container['job_id'] = isset($data['job_id']) ? $data['job_id'] : NULL;
    $this->container['job_name'] = isset($data['job_name']) ? $data['job_name'] : NULL;
    $this->container['description'] = isset($data['description']) ? $data['description'] : NULL;
    $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : NULL;
    $this->container['has_error'] = isset($data['has_error']) ? $data['has_error'] : NULL;
    $this->container['latest_error_message'] = isset($data['latest_error_message']) ? $data['latest_error_message'] : NULL;
    $this->container['submitter_id'] = isset($data['submitter_id']) ? $data['submitter_id'] : NULL;
    $this->container['creator_id'] = isset($data['creator_id']) ? $data['creator_id'] : NULL;
    $this->container['provider_id'] = isset($data['provider_id']) ? $data['provider_id'] : NULL;
    $this->container['po_reference'] = isset($data['po_reference']) ? $data['po_reference'] : NULL;
    $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : NULL;
    $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : NULL;
    $this->container['modified_date'] = isset($data['modified_date']) ? $data['modified_date'] : NULL;
    $this->container['archived'] = isset($data['archived']) ? $data['archived'] : NULL;
    $this->container['job_stats'] = isset($data['job_stats']) ? $data['job_stats'] : NULL;
    $this->container['custom_data'] = isset($data['custom_data']) ? $data['custom_data'] : NULL;
    $this->container['should_quote'] = isset($data['should_quote']) ? $data['should_quote'] : FALSE;
  }

  /**
   * Show all the invalid properties with reasons.
   *
   * @return array invalid properties with reasons
   */
  public function listInvalidProperties() {
    $invalidProperties = [];

    if ($this->container['job_name'] === NULL) {
      $invalidProperties[] = "'job_name' can't be null";
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

    if ($this->container['job_name'] === NULL) {
      return FALSE;
    }
    return TRUE;
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
   * Gets job_name.
   *
   * @return string
   */
  public function getJobName() {
    return $this->container['job_name'];
  }

  /**
   * Sets job_name.
   *
   * @param string $job_name
   *   The name of the translation job.
   *
   * @return $this
   */
  public function setJobName($job_name) {
    $this->container['job_name'] = $job_name;

    return $this;
  }

  /**
   * Gets description.
   *
   * @return string
   */
  public function getDescription() {
    return $this->container['description'];
  }

  /**
   * Sets description.
   *
   * @param string $description
   *   A description of the translation job.
   *
   * @return $this
   */
  public function setDescription($description) {
    $this->container['description'] = $description;

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
   *   The most recent error message affecting the translation request.
   *
   * @return $this
   */
  public function setLatestErrorMessage($latest_error_message) {
    $this->container['latest_error_message'] = $latest_error_message;

    return $this;
  }

  /**
   * Gets submitter_id.
   *
   * @return string
   */
  public function getSubmitterId() {
    return $this->container['submitter_id'];
  }

  /**
   * Sets submitter_id.
   *
   * @param string $submitter_id
   *   The ID of the user who is submitting the translation job.
   *
   * @return $this
   */
  public function setSubmitterId($submitter_id) {
    $this->container['submitter_id'] = $submitter_id;

    return $this;
  }

  /**
   * Gets creator_id.
   *
   * @return string
   */
  public function getCreatorId() {
    return $this->container['creator_id'];
  }

  /**
   * Sets creator_id.
   *
   * @param string $creator_id
   *   The ID of the user who is creating the translation job.
   *
   * @return $this
   */
  public function setCreatorId($creator_id) {
    $this->container['creator_id'] = $creator_id;

    return $this;
  }

  /**
   * Gets provider_id.
   *
   * @return string
   */
  public function getProviderId() {
    return $this->container['provider_id'];
  }

  /**
   * Sets provider_id.
   *
   * @param string $provider_id
   *   The ID of the provider that the translation job will be submitted to.
   *
   * @return $this
   */
  public function setProviderId($provider_id) {
    $this->container['provider_id'] = $provider_id;

    return $this;
  }

  /**
   * Gets po_reference.
   *
   * @return string
   */
  public function getPoReference() {
    return $this->container['po_reference'];
  }

  /**
   * Sets po_reference.
   *
   * @param string $po_reference
   *   Purchase Order (PO) Reference of the translation job.
   *
   * @return $this
   */
  public function setPoReference($po_reference) {
    $this->container['po_reference'] = $po_reference;

    return $this;
  }

  /**
   * Gets due_date.
   *
   * @return \DateTime
   */
  public function getDueDate() {
    return $this->container['due_date'];
  }

  /**
   * Sets due_date.
   *
   * @param \DateTime $due_date
   *   Due date of the translation job.
   *
   * @return $this
   */
  public function setDueDate($due_date) {
    $this->container['due_date'] = $due_date;

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
   *   Date-time signature of when the translation job was created.
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
   *   Date-time signature of when the translation job was last modified.
   *
   * @return $this
   */
  public function setModifiedDate($modified_date) {
    $this->container['modified_date'] = $modified_date;

    return $this;
  }

  /**
   * Gets archived.
   *
   * @return bool
   */
  public function getArchived() {
    return $this->container['archived'];
  }

  /**
   * Sets archived.
   *
   * @param bool $archived
   *   If the translation job has been archived.
   *
   * @return $this
   */
  public function setArchived($archived) {
    $this->container['archived'] = $archived;

    return $this;
  }

  /**
   * Gets job_stats.
   *
   * @return \Drupal\tmgmt_contentapi\Swagger\Client\Model\JobStats
   */
  public function getJobStats() {
    return $this->container['job_stats'];
  }

  /**
   * Sets job_stats.
   *
   * @param \Drupal\tmgmt_contentapi\Swagger\Client\Model\JobStats $job_stats
   *   job_stats.
   *
   * @return $this
   */
  public function setJobStats($job_stats) {
    $this->container['job_stats'] = $job_stats;

    return $this;
  }

  /**
   * Gets custom_data.
   *
   * @return string
   */
  public function getCustomData() {
    return $this->container['custom_data'];
  }

  /**
   * Sets custom_data.
   *
   * @param string $custom_data
   *   User specified custom data.
   *
   * @return $this
   */
  public function setCustomData($custom_data) {
    $this->container['custom_data'] = $custom_data;

    return $this;
  }

  /**
   * Gets should_quote.
   *
   * @return bool
   */
  public function getShouldQuote() {
    return $this->container['should_quote'];
  }

  /**
   * Sets should_quote.
   *
   * @param bool $should_quote
   *   Request a quote for the job before translation proceeds.  TODO -  describe how quoting happens outside of REST API.
   *
   * @return $this
   */
  public function setShouldQuote($should_quote) {
    $this->container['should_quote'] = $should_quote;

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
