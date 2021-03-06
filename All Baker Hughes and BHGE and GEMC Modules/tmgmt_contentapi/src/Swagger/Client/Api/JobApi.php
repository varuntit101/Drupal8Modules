<?php

namespace Drupal\tmgmt_contentapi\Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Drupal\tmgmt_contentapi\Swagger\Client\ApiException;
use Drupal\tmgmt_contentapi\Swagger\Client\Configuration;
use Drupal\tmgmt_contentapi\Swagger\Client\HeaderSelector;
use Drupal\tmgmt_contentapi\Swagger\Client\ObjectSerializer;

/**
 * JobApi Class Doc Comment.
 *
 * @category Class
 * @package Drupal\tmgmt_contentapi\Swagger\Client
 * @author Swagger Codegen team
 * @link https://github.com/swagger-api/swagger-codegen
 */
class JobApi {
  /**
   * @var \GuzzleHttp\ClientInterface
   */
  protected $client;

  /**
   * @var \Drupal\tmgmt_contentapi\Swagger\Client\Configuration
   */
  protected $config;

  /**
   * @param \GuzzleHttp\ClientInterface $client
   * @param \Drupal\tmgmt_contentapi\Swagger\Client\Configuration $config
   * @param \Drupal\tmgmt_contentapi\Swagger\Client\HeaderSelector $selector
   */
  public function __construct(
        ClientInterface $client = NULL,
        Configuration $config = NULL,
        HeaderSelector $selector = NULL
    ) {
    $this->client = $client ?: new Client();
    $this->config = $config ?: new Configuration();
    $this->headerSelector = $selector ?: new HeaderSelector();
  }

  /**
   * @return \Drupal\tmgmt_contentapi\Swagger\Client\Configuration
   */
  public function getConfig() {
    return $this->config;
  }

  /**
   * Operation jobsGet.
   *
   * Query all jobs.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $fetch_type
   *   Specifies what level of detail is returned for a job. (optional, default to full)
   * @param bool $include_archived
   *   Include archived jobs in job listing. (optional, default to false)
   *
   * @throws \Drupal\tmgmt_contentapi\Swagger\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   *
   * @return \Drupal\tmgmt_contentapi\Swagger\Client\Model\Job[]
   */
  public function jobsGet($authorization, $fetch_type = 'full', $include_archived = 'false') {
    list($response) = $this->jobsGetWithHttpInfo($authorization, $fetch_type, $include_archived);
    return $response;
  }

  /**
   * Operation jobsGetWithHttpInfo.
   *
   * Query all jobs.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $fetch_type
   *   Specifies what level of detail is returned for a job. (optional, default to full)
   * @param bool $include_archived
   *   Include archived jobs in job listing. (optional, default to false)
   *
   * @throws \Drupal\tmgmt_contentapi\Swagger\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   *
   * @return array of \Drupal\tmgmt_contentapi\Swagger\Client\Model\Job[], HTTP status code, HTTP response headers (array of strings)
   */
  public function jobsGetWithHttpInfo($authorization, $fetch_type = 'full', $include_archived = 'false') {
    $returnType = '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job[]';
    $request = $this->jobsGetRequest($authorization, $fetch_type, $include_archived);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      }
      catch (RequestException $e) {
        throw new ApiException(
        "[{$e->getCode()}] {$e->getMessage()}",
        $e->getCode(),
        $e->getResponse() ? $e->getResponse()->getHeaders() : NULL,
        $e->getResponse() ? $e->getResponse()->getBody()->getContents() : NULL
          );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
        sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
        ),
        $statusCode,
        $response->getHeaders(),
        $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        // Stream goes to serializer.
        $content = $responseBody;
      }
      else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
    ];

    }
    catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job[]',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 400:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 401:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 500:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation jobsGetAsync.
   *
   * Query all jobs.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $fetch_type
   *   Specifies what level of detail is returned for a job. (optional, default to full)
   * @param bool $include_archived
   *   Include archived jobs in job listing. (optional, default to false)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function jobsGetAsync($authorization, $fetch_type = 'full', $include_archived = 'false') {
    return $this->jobsGetAsyncWithHttpInfo($authorization, $fetch_type, $include_archived)
      ->then(
            function ($response) {
                return $response[0];
            }
        );
  }

  /**
   * Operation jobsGetAsyncWithHttpInfo.
   *
   * Query all jobs.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $fetch_type
   *   Specifies what level of detail is returned for a job. (optional, default to full)
   * @param bool $include_archived
   *   Include archived jobs in job listing. (optional, default to false)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function jobsGetAsyncWithHttpInfo($authorization, $fetch_type = 'full', $include_archived = 'false') {
    $returnType = '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job[]';
    $request = $this->jobsGetRequest($authorization, $fetch_type, $include_archived);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
            function ($response) use ($returnType) {
                $responseBody = $response->getBody();
              if ($returnType === '\SplFileObject') {
                // Stream goes to serializer.
                $content = $responseBody;
              }
              else {
                  $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                  $content = json_decode($content);
                }
              }

                return [
                    ObjectSerializer::deserialize($content, $returnType, []),
                    $response->getStatusCode(),
                    $response->getHeaders()
                ];
            },
            function ($exception) {
                $response = $exception->getResponse();
                $statusCode = $response->getStatusCode();
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $exception->getRequest()->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }
        );
  }

  /**
   * Create request for operation 'jobsGet'.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $fetch_type
   *   Specifies what level of detail is returned for a job. (optional, default to full)
   * @param bool $include_archived
   *   Include archived jobs in job listing. (optional, default to false)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function jobsGetRequest($authorization, $fetch_type = 'full', $include_archived = 'false') {
    // Verify the required parameter 'authorization' is set.
    if ($authorization === NULL) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $authorization when calling jobsGet'
      );
    }

    $resourcePath = '/jobs';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // Query params.
    if ($fetch_type !== NULL) {
      $queryParams['fetchType'] = ObjectSerializer::toQueryValue($fetch_type);
    }
    // Query params.
    if ($include_archived !== NULL) {
      $queryParams['includeArchived'] = ObjectSerializer::toQueryValue($include_archived);
    }
    // Header params.
    if ($authorization !== NULL) {
      $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
    }

    // Body params.
    $_tempBody = NULL;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/json']
      );
    }
    else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/json'],
        ['application/json']
        );
    }

    // For model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present.
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually.
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    }
    elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
    ];
        }
        // For HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      }
      elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      }
      else {
        // For HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // This endpoint requires API key authentication.
    $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
    if ($apiKey !== NULL) {
      $headers['Authorization'] = $apiKey;
    }
    // This endpoint requires API key authentication.
    $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
    if ($apiKey !== NULL) {
      $headers['x-api-key'] = $apiKey;
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
        $defaultHeaders,
        $headerParams,
        $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
        'GET',
        $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
        $headers,
        $httpBody
    );
  }

  /**
   * Operation jobsJobIdArchivePut.
   *
   * Archive a job.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the specified job. (required)
   *
   * @throws \Drupal\tmgmt_contentapi\Swagger\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   *
   * @return \Drupal\tmgmt_contentapi\Swagger\Client\Model\Job
   */
  public function jobsJobIdArchivePut($authorization, $job_id) {
    list($response) = $this->jobsJobIdArchivePutWithHttpInfo($authorization, $job_id);
    return $response;
  }

  /**
   * Operation jobsJobIdArchivePutWithHttpInfo.
   *
   * Archive a job.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the specified job. (required)
   *
   * @throws \Drupal\tmgmt_contentapi\Swagger\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   *
   * @return array of \Drupal\tmgmt_contentapi\Swagger\Client\Model\Job, HTTP status code, HTTP response headers (array of strings)
   */
  public function jobsJobIdArchivePutWithHttpInfo($authorization, $job_id) {
    $returnType = '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job';
    $request = $this->jobsJobIdArchivePutRequest($authorization, $job_id);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      }
      catch (RequestException $e) {
        throw new ApiException(
        "[{$e->getCode()}] {$e->getMessage()}",
        $e->getCode(),
        $e->getResponse() ? $e->getResponse()->getHeaders() : NULL,
        $e->getResponse() ? $e->getResponse()->getBody()->getContents() : NULL
          );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
        sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
        ),
        $statusCode,
        $response->getHeaders(),
        $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        // Stream goes to serializer.
        $content = $responseBody;
      }
      else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
    ];

    }
    catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 400:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 401:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 404:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 500:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation jobsJobIdArchivePutAsync.
   *
   * Archive a job.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the specified job. (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function jobsJobIdArchivePutAsync($authorization, $job_id) {
    return $this->jobsJobIdArchivePutAsyncWithHttpInfo($authorization, $job_id)
      ->then(
            function ($response) {
                return $response[0];
            }
        );
  }

  /**
   * Operation jobsJobIdArchivePutAsyncWithHttpInfo.
   *
   * Archive a job.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the specified job. (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function jobsJobIdArchivePutAsyncWithHttpInfo($authorization, $job_id) {
    $returnType = '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job';
    $request = $this->jobsJobIdArchivePutRequest($authorization, $job_id);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
            function ($response) use ($returnType) {
                $responseBody = $response->getBody();
              if ($returnType === '\SplFileObject') {
                // Stream goes to serializer.
                $content = $responseBody;
              }
              else {
                  $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                  $content = json_decode($content);
                }
              }

                return [
                    ObjectSerializer::deserialize($content, $returnType, []),
                    $response->getStatusCode(),
                    $response->getHeaders()
                ];
            },
            function ($exception) {
                $response = $exception->getResponse();
                $statusCode = $response->getStatusCode();
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $exception->getRequest()->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }
        );
  }

  /**
   * Create request for operation 'jobsJobIdArchivePut'.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the specified job. (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function jobsJobIdArchivePutRequest($authorization, $job_id) {
    // Verify the required parameter 'authorization' is set.
    if ($authorization === NULL) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $authorization when calling jobsJobIdArchivePut'
      );
    }
    // Verify the required parameter 'job_id' is set.
    if ($job_id === NULL) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $job_id when calling jobsJobIdArchivePut'
      );
    }

    $resourcePath = '/jobs/{jobId}/archive';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // Header params.
    if ($authorization !== NULL) {
      $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
    }

    // Path params.
    if ($job_id !== NULL) {
      $resourcePath = str_replace(
        '{' . 'jobId' . '}',
        ObjectSerializer::toPathValue($job_id),
        $resourcePath
      );
    }

    // Body params.
    $_tempBody = NULL;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/json']
      );
    }
    else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/json'],
        ['application/json']
        );
    }

    // For model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present.
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually.
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    }
    elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
    ];
        }
        // For HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      }
      elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      }
      else {
        // For HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // This endpoint requires API key authentication.
    $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
    if ($apiKey !== NULL) {
      $headers['Authorization'] = $apiKey;
    }
    // This endpoint requires API key authentication.
    $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
    if ($apiKey !== NULL) {
      $headers['x-api-key'] = $apiKey;
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
        $defaultHeaders,
        $headerParams,
        $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
        'PUT',
        $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
        $headers,
        $httpBody
    );
  }

  /**
   * Operation jobsJobIdDelete.
   *
   * Delete a job.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the specified job. (required)
   *
   * @throws \Drupal\tmgmt_contentapi\Swagger\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   *
   * @return \Drupal\tmgmt_contentapi\Swagger\Client\Model\Job
   */
  public function jobsJobIdDelete($authorization, $job_id) {
    list($response) = $this->jobsJobIdDeleteWithHttpInfo($authorization, $job_id);
    return $response;
  }

  /**
   * Operation jobsJobIdDeleteWithHttpInfo.
   *
   * Delete a job.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the specified job. (required)
   *
   * @throws \Drupal\tmgmt_contentapi\Swagger\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   *
   * @return array of \Drupal\tmgmt_contentapi\Swagger\Client\Model\Job, HTTP status code, HTTP response headers (array of strings)
   */
  public function jobsJobIdDeleteWithHttpInfo($authorization, $job_id) {
    $returnType = '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job';
    $request = $this->jobsJobIdDeleteRequest($authorization, $job_id);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      }
      catch (RequestException $e) {
        throw new ApiException(
        "[{$e->getCode()}] {$e->getMessage()}",
        $e->getCode(),
        $e->getResponse() ? $e->getResponse()->getHeaders() : NULL,
        $e->getResponse() ? $e->getResponse()->getBody()->getContents() : NULL
          );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
        sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
        ),
        $statusCode,
        $response->getHeaders(),
        $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        // Stream goes to serializer.
        $content = $responseBody;
      }
      else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
    ];

    }
    catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 400:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 401:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 404:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 500:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation jobsJobIdDeleteAsync.
   *
   * Delete a job.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the specified job. (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function jobsJobIdDeleteAsync($authorization, $job_id) {
    return $this->jobsJobIdDeleteAsyncWithHttpInfo($authorization, $job_id)
      ->then(
            function ($response) {
                return $response[0];
            }
        );
  }

  /**
   * Operation jobsJobIdDeleteAsyncWithHttpInfo.
   *
   * Delete a job.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the specified job. (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function jobsJobIdDeleteAsyncWithHttpInfo($authorization, $job_id) {
    $returnType = '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job';
    $request = $this->jobsJobIdDeleteRequest($authorization, $job_id);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
            function ($response) use ($returnType) {
                $responseBody = $response->getBody();
              if ($returnType === '\SplFileObject') {
                // Stream goes to serializer.
                $content = $responseBody;
              }
              else {
                  $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                  $content = json_decode($content);
                }
              }

                return [
                    ObjectSerializer::deserialize($content, $returnType, []),
                    $response->getStatusCode(),
                    $response->getHeaders()
                ];
            },
            function ($exception) {
                $response = $exception->getResponse();
                $statusCode = $response->getStatusCode();
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $exception->getRequest()->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }
        );
  }

  /**
   * Create request for operation 'jobsJobIdDelete'.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the specified job. (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function jobsJobIdDeleteRequest($authorization, $job_id) {
    // Verify the required parameter 'authorization' is set.
    if ($authorization === NULL) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $authorization when calling jobsJobIdDelete'
      );
    }
    // Verify the required parameter 'job_id' is set.
    if ($job_id === NULL) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $job_id when calling jobsJobIdDelete'
      );
    }

    $resourcePath = '/jobs/{jobId}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // Header params.
    if ($authorization !== NULL) {
      $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
    }

    // Path params.
    if ($job_id !== NULL) {
      $resourcePath = str_replace(
        '{' . 'jobId' . '}',
        ObjectSerializer::toPathValue($job_id),
        $resourcePath
      );
    }

    // Body params.
    $_tempBody = NULL;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/json']
      );
    }
    else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/json'],
        ['application/json']
        );
    }

    // For model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present.
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually.
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    }
    elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
    ];
        }
        // For HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      }
      elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      }
      else {
        // For HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // This endpoint requires API key authentication.
    $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
    if ($apiKey !== NULL) {
      $headers['Authorization'] = $apiKey;
    }
    // This endpoint requires API key authentication.
    $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
    if ($apiKey !== NULL) {
      $headers['x-api-key'] = $apiKey;
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
        $defaultHeaders,
        $headerParams,
        $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
        'DELETE',
        $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
        $headers,
        $httpBody
    );
  }

  /**
   * Operation jobsJobIdGet.
   *
   * Query job information.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the job being queried. (required)
   * @param string $fetch_type
   *   Specifies what level of detail is returned for a job. (optional, default to full)
   *
   * @throws \Drupal\tmgmt_contentapi\Swagger\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   *
   * @return \Drupal\tmgmt_contentapi\Swagger\Client\Model\Job
   */
  public function jobsJobIdGet($authorization, $job_id, $fetch_type = 'full') {
    list($response) = $this->jobsJobIdGetWithHttpInfo($authorization, $job_id, $fetch_type);
    return $response;
  }

  /**
   * Operation jobsJobIdGetWithHttpInfo.
   *
   * Query job information.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the job being queried. (required)
   * @param string $fetch_type
   *   Specifies what level of detail is returned for a job. (optional, default to full)
   *
   * @throws \Drupal\tmgmt_contentapi\Swagger\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   *
   * @return array of \Drupal\tmgmt_contentapi\Swagger\Client\Model\Job, HTTP status code, HTTP response headers (array of strings)
   */
  public function jobsJobIdGetWithHttpInfo($authorization, $job_id, $fetch_type = 'full') {
    $returnType = '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job';
    $request = $this->jobsJobIdGetRequest($authorization, $job_id, $fetch_type);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      }
      catch (RequestException $e) {
        throw new ApiException(
        "[{$e->getCode()}] {$e->getMessage()}",
        $e->getCode(),
        $e->getResponse() ? $e->getResponse()->getHeaders() : NULL,
        $e->getResponse() ? $e->getResponse()->getBody()->getContents() : NULL
          );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
        sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
        ),
        $statusCode,
        $response->getHeaders(),
        $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        // Stream goes to serializer.
        $content = $responseBody;
      }
      else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
    ];

    }
    catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 400:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 401:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 404:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 500:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation jobsJobIdGetAsync.
   *
   * Query job information.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the job being queried. (required)
   * @param string $fetch_type
   *   Specifies what level of detail is returned for a job. (optional, default to full)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function jobsJobIdGetAsync($authorization, $job_id, $fetch_type = 'full') {
    return $this->jobsJobIdGetAsyncWithHttpInfo($authorization, $job_id, $fetch_type)
      ->then(
            function ($response) {
                return $response[0];
            }
        );
  }

  /**
   * Operation jobsJobIdGetAsyncWithHttpInfo.
   *
   * Query job information.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the job being queried. (required)
   * @param string $fetch_type
   *   Specifies what level of detail is returned for a job. (optional, default to full)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function jobsJobIdGetAsyncWithHttpInfo($authorization, $job_id, $fetch_type = 'full') {
    $returnType = '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job';
    $request = $this->jobsJobIdGetRequest($authorization, $job_id, $fetch_type);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
            function ($response) use ($returnType) {
                $responseBody = $response->getBody();
              if ($returnType === '\SplFileObject') {
                // Stream goes to serializer.
                $content = $responseBody;
              }
              else {
                  $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                  $content = json_decode($content);
                }
              }

                return [
                    ObjectSerializer::deserialize($content, $returnType, []),
                    $response->getStatusCode(),
                    $response->getHeaders()
                ];
            },
            function ($exception) {
                $response = $exception->getResponse();
                $statusCode = $response->getStatusCode();
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $exception->getRequest()->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }
        );
  }

  /**
   * Create request for operation 'jobsJobIdGet'.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the job being queried. (required)
   * @param string $fetch_type
   *   Specifies what level of detail is returned for a job. (optional, default to full)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function jobsJobIdGetRequest($authorization, $job_id, $fetch_type = 'full') {
    // Verify the required parameter 'authorization' is set.
    if ($authorization === NULL) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $authorization when calling jobsJobIdGet'
      );
    }
    // Verify the required parameter 'job_id' is set.
    if ($job_id === NULL) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $job_id when calling jobsJobIdGet'
      );
    }

    $resourcePath = '/jobs/{jobId}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // Query params.
    if ($fetch_type !== NULL) {
      $queryParams['fetchType'] = ObjectSerializer::toQueryValue($fetch_type);
    }
    // Header params.
    if ($authorization !== NULL) {
      $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
    }

    // Path params.
    if ($job_id !== NULL) {
      $resourcePath = str_replace(
        '{' . 'jobId' . '}',
        ObjectSerializer::toPathValue($job_id),
        $resourcePath
      );
    }

    // Body params.
    $_tempBody = NULL;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/json']
      );
    }
    else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/json'],
        ['application/json']
        );
    }

    // For model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present.
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually.
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    }
    elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
    ];
        }
        // For HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      }
      elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      }
      else {
        // For HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // This endpoint requires API key authentication.
    $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
    if ($apiKey !== NULL) {
      $headers['Authorization'] = $apiKey;
    }
    // This endpoint requires API key authentication.
    $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
    if ($apiKey !== NULL) {
      $headers['x-api-key'] = $apiKey;
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
        $defaultHeaders,
        $headerParams,
        $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
        'GET',
        $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
        $headers,
        $httpBody
    );
  }

  /**
   * Operation jobsJobIdPut.
   *
   * Update a job's information.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the job being updated. (required)
   * @param \Drupal\tmgmt_contentapi\Swagger\Client\Model\UpdateJob $job
   *   The job being updated. (required)
   *
   * @throws \Drupal\tmgmt_contentapi\Swagger\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   *
   * @return \Drupal\tmgmt_contentapi\Swagger\Client\Model\Job
   */
  public function jobsJobIdPut($authorization, $job_id, $job) {
    list($response) = $this->jobsJobIdPutWithHttpInfo($authorization, $job_id, $job);
    return $response;
  }

  /**
   * Operation jobsJobIdPutWithHttpInfo.
   *
   * Update a job's information.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the job being updated. (required)
   * @param \Drupal\tmgmt_contentapi\Swagger\Client\Model\UpdateJob $job
   *   The job being updated. (required)
   *
   * @throws \Drupal\tmgmt_contentapi\Swagger\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   *
   * @return array of \Drupal\tmgmt_contentapi\Swagger\Client\Model\Job, HTTP status code, HTTP response headers (array of strings)
   */
  public function jobsJobIdPutWithHttpInfo($authorization, $job_id, $job) {
    $returnType = '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job';
    $request = $this->jobsJobIdPutRequest($authorization, $job_id, $job);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      }
      catch (RequestException $e) {
        throw new ApiException(
        "[{$e->getCode()}] {$e->getMessage()}",
        $e->getCode(),
        $e->getResponse() ? $e->getResponse()->getHeaders() : NULL,
        $e->getResponse() ? $e->getResponse()->getBody()->getContents() : NULL
          );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
        sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
        ),
        $statusCode,
        $response->getHeaders(),
        $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        // Stream goes to serializer.
        $content = $responseBody;
      }
      else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
    ];

    }
    catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 400:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 401:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 404:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 500:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation jobsJobIdPutAsync.
   *
   * Update a job's information.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the job being updated. (required)
   * @param \Drupal\tmgmt_contentapi\Swagger\Client\Model\UpdateJob $job
   *   The job being updated. (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function jobsJobIdPutAsync($authorization, $job_id, $job) {
    return $this->jobsJobIdPutAsyncWithHttpInfo($authorization, $job_id, $job)
      ->then(
            function ($response) {
                return $response[0];
            }
        );
  }

  /**
   * Operation jobsJobIdPutAsyncWithHttpInfo.
   *
   * Update a job's information.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the job being updated. (required)
   * @param \Drupal\tmgmt_contentapi\Swagger\Client\Model\UpdateJob $job
   *   The job being updated. (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function jobsJobIdPutAsyncWithHttpInfo($authorization, $job_id, $job) {
    $returnType = '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job';
    $request = $this->jobsJobIdPutRequest($authorization, $job_id, $job);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
            function ($response) use ($returnType) {
                $responseBody = $response->getBody();
              if ($returnType === '\SplFileObject') {
                // Stream goes to serializer.
                $content = $responseBody;
              }
              else {
                  $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                  $content = json_decode($content);
                }
              }

                return [
                    ObjectSerializer::deserialize($content, $returnType, []),
                    $response->getStatusCode(),
                    $response->getHeaders()
                ];
            },
            function ($exception) {
                $response = $exception->getResponse();
                $statusCode = $response->getStatusCode();
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $exception->getRequest()->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }
        );
  }

  /**
   * Create request for operation 'jobsJobIdPut'.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the job being updated. (required)
   * @param \Drupal\tmgmt_contentapi\Swagger\Client\Model\UpdateJob $job
   *   The job being updated. (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function jobsJobIdPutRequest($authorization, $job_id, $job) {
    // Verify the required parameter 'authorization' is set.
    if ($authorization === NULL) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $authorization when calling jobsJobIdPut'
      );
    }
    // Verify the required parameter 'job_id' is set.
    if ($job_id === NULL) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $job_id when calling jobsJobIdPut'
      );
    }
    // Verify the required parameter 'job' is set.
    if ($job === NULL) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $job when calling jobsJobIdPut'
      );
    }

    $resourcePath = '/jobs/{jobId}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // Header params.
    if ($authorization !== NULL) {
      $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
    }

    // Path params.
    if ($job_id !== NULL) {
      $resourcePath = str_replace(
        '{' . 'jobId' . '}',
        ObjectSerializer::toPathValue($job_id),
        $resourcePath
      );
    }

    // Body params.
    $_tempBody = NULL;
    if (isset($job)) {
      $_tempBody = $job;
    }

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/json']
      );
    }
    else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/json'],
        ['application/json']
        );
    }

    // For model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present.
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually.
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    }
    elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
    ];
        }
        // For HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      }
      elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      }
      else {
        // For HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // This endpoint requires API key authentication.
    $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
    if ($apiKey !== NULL) {
      $headers['Authorization'] = $apiKey;
    }
    // This endpoint requires API key authentication.
    $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
    if ($apiKey !== NULL) {
      $headers['x-api-key'] = $apiKey;
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
        $defaultHeaders,
        $headerParams,
        $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
        'PUT',
        $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
        $headers,
        $httpBody
    );
  }

  /**
   * Operation jobsJobIdSubmitPut.
   *
   * Send/Submit job to provider.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the specified job. (required)
   * @param \Drupal\tmgmt_contentapi\Swagger\Client\Model\ProviderId $body
   *   The ID of the provider the job will be sent to. This information can be omitted if the site has only one translation provider. (required)
   *
   * @throws \Drupal\tmgmt_contentapi\Swagger\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   *
   * @return \Drupal\tmgmt_contentapi\Swagger\Client\Model\Job
   */
  public function jobsJobIdSubmitPut($authorization, $job_id, $body) {
    list($response) = $this->jobsJobIdSubmitPutWithHttpInfo($authorization, $job_id, $body);
    return $response;
  }

  /**
   * Operation jobsJobIdSubmitPutWithHttpInfo.
   *
   * Send/Submit job to provider.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the specified job. (required)
   * @param \Drupal\tmgmt_contentapi\Swagger\Client\Model\ProviderId $body
   *   The ID of the provider the job will be sent to. This information can be omitted if the site has only one translation provider. (required)
   *
   * @throws \Drupal\tmgmt_contentapi\Swagger\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   *
   * @return array of \Drupal\tmgmt_contentapi\Swagger\Client\Model\Job, HTTP status code, HTTP response headers (array of strings)
   */
  public function jobsJobIdSubmitPutWithHttpInfo($authorization, $job_id, $body) {
    $returnType = '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job';
    $request = $this->jobsJobIdSubmitPutRequest($authorization, $job_id, $body);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      }
      catch (RequestException $e) {
        throw new ApiException(
        "[{$e->getCode()}] {$e->getMessage()}",
        $e->getCode(),
        $e->getResponse() ? $e->getResponse()->getHeaders() : NULL,
        $e->getResponse() ? $e->getResponse()->getBody()->getContents() : NULL
          );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
        sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
        ),
        $statusCode,
        $response->getHeaders(),
        $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        // Stream goes to serializer.
        $content = $responseBody;
      }
      else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
    ];

    }
    catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 400:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 401:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 404:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 500:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation jobsJobIdSubmitPutAsync.
   *
   * Send/Submit job to provider.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the specified job. (required)
   * @param \Drupal\tmgmt_contentapi\Swagger\Client\Model\ProviderId $body
   *   The ID of the provider the job will be sent to. This information can be omitted if the site has only one translation provider. (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function jobsJobIdSubmitPutAsync($authorization, $job_id, $body) {
    return $this->jobsJobIdSubmitPutAsyncWithHttpInfo($authorization, $job_id, $body)
      ->then(
            function ($response) {
                return $response[0];
            }
        );
  }

  /**
   * Operation jobsJobIdSubmitPutAsyncWithHttpInfo.
   *
   * Send/Submit job to provider.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the specified job. (required)
   * @param \Drupal\tmgmt_contentapi\Swagger\Client\Model\ProviderId $body
   *   The ID of the provider the job will be sent to. This information can be omitted if the site has only one translation provider. (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function jobsJobIdSubmitPutAsyncWithHttpInfo($authorization, $job_id, $body) {
    $returnType = '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job';
    $request = $this->jobsJobIdSubmitPutRequest($authorization, $job_id, $body);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
            function ($response) use ($returnType) {
                $responseBody = $response->getBody();
              if ($returnType === '\SplFileObject') {
                // Stream goes to serializer.
                $content = $responseBody;
              }
              else {
                  $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                  $content = json_decode($content);
                }
              }

                return [
                    ObjectSerializer::deserialize($content, $returnType, []),
                    $response->getStatusCode(),
                    $response->getHeaders()
                ];
            },
            function ($exception) {
                $response = $exception->getResponse();
                $statusCode = $response->getStatusCode();
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $exception->getRequest()->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }
        );
  }

  /**
   * Create request for operation 'jobsJobIdSubmitPut'.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the specified job. (required)
   * @param \Drupal\tmgmt_contentapi\Swagger\Client\Model\ProviderId $body
   *   The ID of the provider the job will be sent to. This information can be omitted if the site has only one translation provider. (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function jobsJobIdSubmitPutRequest($authorization, $job_id, $body) {
    // Verify the required parameter 'authorization' is set.
    if ($authorization === NULL) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $authorization when calling jobsJobIdSubmitPut'
      );
    }
    // Verify the required parameter 'job_id' is set.
    if ($job_id === NULL) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $job_id when calling jobsJobIdSubmitPut'
      );
    }
    // Verify the required parameter 'body' is set.
    if ($body === NULL) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $body when calling jobsJobIdSubmitPut'
      );
    }

    $resourcePath = '/jobs/{jobId}/submit';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // Header params.
    if ($authorization !== NULL) {
      $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
    }

    // Path params.
    if ($job_id !== NULL) {
      $resourcePath = str_replace(
        '{' . 'jobId' . '}',
        ObjectSerializer::toPathValue($job_id),
        $resourcePath
      );
    }

    // Body params.
    $_tempBody = NULL;
    if (isset($body)) {
      $_tempBody = $body;
    }

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/json']
      );
    }
    else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/json'],
        ['application/json']
        );
    }

    // For model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present.
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually.
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    }
    elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
    ];
        }
        // For HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      }
      elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      }
      else {
        // For HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // This endpoint requires API key authentication.
    $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
    if ($apiKey !== NULL) {
      $headers['Authorization'] = $apiKey;
    }
    // This endpoint requires API key authentication.
    $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
    if ($apiKey !== NULL) {
      $headers['x-api-key'] = $apiKey;
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
        $defaultHeaders,
        $headerParams,
        $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
        'PUT',
        $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
        $headers,
        $httpBody
    );
  }

  /**
   * Operation jobsJobIdUnarchivePut.
   *
   * Unarchive a job.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the specified job. (required)
   *
   * @throws \Drupal\tmgmt_contentapi\Swagger\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   *
   * @return \Drupal\tmgmt_contentapi\Swagger\Client\Model\Job
   */
  public function jobsJobIdUnarchivePut($authorization, $job_id) {
    list($response) = $this->jobsJobIdUnarchivePutWithHttpInfo($authorization, $job_id);
    return $response;
  }

  /**
   * Operation jobsJobIdUnarchivePutWithHttpInfo.
   *
   * Unarchive a job.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the specified job. (required)
   *
   * @throws \Drupal\tmgmt_contentapi\Swagger\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   *
   * @return array of \Drupal\tmgmt_contentapi\Swagger\Client\Model\Job, HTTP status code, HTTP response headers (array of strings)
   */
  public function jobsJobIdUnarchivePutWithHttpInfo($authorization, $job_id) {
    $returnType = '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job';
    $request = $this->jobsJobIdUnarchivePutRequest($authorization, $job_id);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      }
      catch (RequestException $e) {
        throw new ApiException(
        "[{$e->getCode()}] {$e->getMessage()}",
        $e->getCode(),
        $e->getResponse() ? $e->getResponse()->getHeaders() : NULL,
        $e->getResponse() ? $e->getResponse()->getBody()->getContents() : NULL
          );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
        sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
        ),
        $statusCode,
        $response->getHeaders(),
        $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        // Stream goes to serializer.
        $content = $responseBody;
      }
      else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
    ];

    }
    catch (ApiException $e) {
      switch ($e->getCode()) {
        case 200:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 400:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 401:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 404:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 500:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation jobsJobIdUnarchivePutAsync.
   *
   * Unarchive a job.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the specified job. (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function jobsJobIdUnarchivePutAsync($authorization, $job_id) {
    return $this->jobsJobIdUnarchivePutAsyncWithHttpInfo($authorization, $job_id)
      ->then(
            function ($response) {
                return $response[0];
            }
        );
  }

  /**
   * Operation jobsJobIdUnarchivePutAsyncWithHttpInfo.
   *
   * Unarchive a job.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the specified job. (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function jobsJobIdUnarchivePutAsyncWithHttpInfo($authorization, $job_id) {
    $returnType = '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job';
    $request = $this->jobsJobIdUnarchivePutRequest($authorization, $job_id);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
            function ($response) use ($returnType) {
                $responseBody = $response->getBody();
              if ($returnType === '\SplFileObject') {
                // Stream goes to serializer.
                $content = $responseBody;
              }
              else {
                  $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                  $content = json_decode($content);
                }
              }

                return [
                    ObjectSerializer::deserialize($content, $returnType, []),
                    $response->getStatusCode(),
                    $response->getHeaders()
                ];
            },
            function ($exception) {
                $response = $exception->getResponse();
                $statusCode = $response->getStatusCode();
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $exception->getRequest()->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }
        );
  }

  /**
   * Create request for operation 'jobsJobIdUnarchivePut'.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param string $job_id
   *   The ID of the specified job. (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function jobsJobIdUnarchivePutRequest($authorization, $job_id) {
    // Verify the required parameter 'authorization' is set.
    if ($authorization === NULL) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $authorization when calling jobsJobIdUnarchivePut'
      );
    }
    // Verify the required parameter 'job_id' is set.
    if ($job_id === NULL) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $job_id when calling jobsJobIdUnarchivePut'
      );
    }

    $resourcePath = '/jobs/{jobId}/unarchive';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // Header params.
    if ($authorization !== NULL) {
      $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
    }

    // Path params.
    if ($job_id !== NULL) {
      $resourcePath = str_replace(
        '{' . 'jobId' . '}',
        ObjectSerializer::toPathValue($job_id),
        $resourcePath
      );
    }

    // Body params.
    $_tempBody = NULL;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/json']
      );
    }
    else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/json'],
        ['application/json']
        );
    }

    // For model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present.
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually.
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    }
    elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
    ];
        }
        // For HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      }
      elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      }
      else {
        // For HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // This endpoint requires API key authentication.
    $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
    if ($apiKey !== NULL) {
      $headers['Authorization'] = $apiKey;
    }
    // This endpoint requires API key authentication.
    $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
    if ($apiKey !== NULL) {
      $headers['x-api-key'] = $apiKey;
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
        $defaultHeaders,
        $headerParams,
        $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
        'PUT',
        $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
        $headers,
        $httpBody
    );
  }

  /**
   * Operation jobsPost.
   *
   * Create a new job.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param \Drupal\tmgmt_contentapi\Swagger\Client\Model\CreateJob $body
   *   Created job object (required)
   *
   * @throws \Drupal\tmgmt_contentapi\Swagger\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   *
   * @return \Drupal\tmgmt_contentapi\Swagger\Client\Model\Job
   */
  public function jobsPost($authorization, $body) {
    list($response) = $this->jobsPostWithHttpInfo($authorization, $body);
    return $response;
  }

  /**
   * Operation jobsPostWithHttpInfo.
   *
   * Create a new job.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param \Drupal\tmgmt_contentapi\Swagger\Client\Model\CreateJob $body
   *   Created job object (required)
   *
   * @throws \Drupal\tmgmt_contentapi\Swagger\Client\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   *
   * @return array of \Drupal\tmgmt_contentapi\Swagger\Client\Model\Job, HTTP status code, HTTP response headers (array of strings)
   */
  public function jobsPostWithHttpInfo($authorization, $body) {
    $returnType = '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job';
    $request = $this->jobsPostRequest($authorization, $body);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      }
      catch (RequestException $e) {
        throw new ApiException(
        "[{$e->getCode()}] {$e->getMessage()}",
        $e->getCode(),
        $e->getResponse() ? $e->getResponse()->getHeaders() : NULL,
        $e->getResponse() ? $e->getResponse()->getBody()->getContents() : NULL
          );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
        sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
        ),
        $statusCode,
        $response->getHeaders(),
        $response->getBody()
        );
      }

      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        // Stream goes to serializer.
        $content = $responseBody;
      }
      else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
    ];

    }
    catch (ApiException $e) {
      switch ($e->getCode()) {
        case 201:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 400:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 401:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;

        case 500:
          $data = ObjectSerializer::deserialize(
          $e->getResponseBody(),
          '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Error',
          $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Operation jobsPostAsync.
   *
   * Create a new job.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param \Drupal\tmgmt_contentapi\Swagger\Client\Model\CreateJob $body
   *   Created job object (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function jobsPostAsync($authorization, $body) {
    return $this->jobsPostAsyncWithHttpInfo($authorization, $body)
      ->then(
            function ($response) {
                return $response[0];
            }
        );
  }

  /**
   * Operation jobsPostAsyncWithHttpInfo.
   *
   * Create a new job.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param \Drupal\tmgmt_contentapi\Swagger\Client\Model\CreateJob $body
   *   Created job object (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Promise\PromiseInterface
   */
  public function jobsPostAsyncWithHttpInfo($authorization, $body) {
    $returnType = '\Drupal\tmgmt_contentapi\Swagger\Client\Model\Job';
    $request = $this->jobsPostRequest($authorization, $body);

    return $this->client
      ->sendAsync($request, $this->createHttpClientOption())
      ->then(
            function ($response) use ($returnType) {
                $responseBody = $response->getBody();
              if ($returnType === '\SplFileObject') {
                // Stream goes to serializer.
                $content = $responseBody;
              }
              else {
                  $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                  $content = json_decode($content);
                }
              }

                return [
                    ObjectSerializer::deserialize($content, $returnType, []),
                    $response->getStatusCode(),
                    $response->getHeaders()
                ];
            },
            function ($exception) {
                $response = $exception->getResponse();
                $statusCode = $response->getStatusCode();
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $exception->getRequest()->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }
        );
  }

  /**
   * Create request for operation 'jobsPost'.
   *
   * @param string $authorization
   *   Oauth2 token (required)
   * @param \Drupal\tmgmt_contentapi\Swagger\Client\Model\CreateJob $body
   *   Created job object (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function jobsPostRequest($authorization, $body) {
    // Verify the required parameter 'authorization' is set.
    if ($authorization === NULL) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $authorization when calling jobsPost'
      );
    }
    // Verify the required parameter 'body' is set.
    if ($body === NULL) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $body when calling jobsPost'
      );
    }

    $resourcePath = '/jobs';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // Header params.
    if ($authorization !== NULL) {
      $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
    }

    // Body params.
    $_tempBody = NULL;
    if (isset($body)) {
      $_tempBody = $body;
    }

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/json']
      );
    }
    else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/json'],
        ['application/json']
        );
    }

    // For model (json/xml)
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present.
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually.
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    }
    elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
    ];
        }
        // For HTTP post (form)
        $httpBody = new MultipartStream($multipartContents);

      }
      elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      }
      else {
        // For HTTP post (form)
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // This endpoint requires API key authentication.
    $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
    if ($apiKey !== NULL) {
      $headers['Authorization'] = $apiKey;
    }
    // This endpoint requires API key authentication.
    $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
    if ($apiKey !== NULL) {
      $headers['x-api-key'] = $apiKey;
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
        $defaultHeaders,
        $headerParams,
        $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
        'POST',
        $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
        $headers,
        $httpBody
    );
  }

  /**
   * Create http client option.
   *
   * @throws \RuntimeException on file opening failure
   *
   * @return array of http client options
   */
  protected function createHttpClientOption() {
    $options = [];
    if ($this->config->getDebug()) {
      $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
      if (!$options[RequestOptions::DEBUG]) {
        throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
      }
    }

    return $options;
  }

}
