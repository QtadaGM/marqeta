<?php
/**
 * ProgramFundingApi
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Core API
 *
 * Marqeta's Core API endpoints, conveniently annotated to enable code generation (including SDKs), test cases, and documentation. Currently in beta.
 *
 * The version of the OpenAPI document: 3.0.19
 * Contact: support@marqeta.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * ProgramFundingApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProgramFundingApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getProgramFundings
     *
     * List program fundings
     *
     * @param  int $count Number of program funding resources to retrieve. (optional, default to 5)
     * @param  int $start_index Sort order index of the first resource in the returned array. (optional, default to 0)
     * @param  string $start_date Start date for filtering program funding entries. (optional)
     * @param  string $end_date End date for filtering program funding entries. (optional)
     * @param  string $short_code Short code for filtering program funding entries. (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\ProgramFundingPage|\OpenAPI\Client\Model\Error
     */
    public function getProgramFundings($count = 5, $start_index = 0, $start_date = null, $end_date = null, $short_code = null)
    {
        list($response) = $this->getProgramFundingsWithHttpInfo($count, $start_index, $start_date, $end_date, $short_code);
        return $response;
    }

    /**
     * Operation getProgramFundingsWithHttpInfo
     *
     * List program fundings
     *
     * @param  int $count Number of program funding resources to retrieve. (optional, default to 5)
     * @param  int $start_index Sort order index of the first resource in the returned array. (optional, default to 0)
     * @param  string $start_date Start date for filtering program funding entries. (optional)
     * @param  string $end_date End date for filtering program funding entries. (optional)
     * @param  string $short_code Short code for filtering program funding entries. (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\ProgramFundingPage|\OpenAPI\Client\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProgramFundingsWithHttpInfo($count = 5, $start_index = 0, $start_date = null, $end_date = null, $short_code = null)
    {
        $request = $this->getProgramFundingsRequest($count, $start_index, $start_date, $end_date, $short_code);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\ProgramFundingPage' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ProgramFundingPage', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\OpenAPI\Client\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\ProgramFundingPage';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ProgramFundingPage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProgramFundingsAsync
     *
     * List program fundings
     *
     * @param  int $count Number of program funding resources to retrieve. (optional, default to 5)
     * @param  int $start_index Sort order index of the first resource in the returned array. (optional, default to 0)
     * @param  string $start_date Start date for filtering program funding entries. (optional)
     * @param  string $end_date End date for filtering program funding entries. (optional)
     * @param  string $short_code Short code for filtering program funding entries. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProgramFundingsAsync($count = 5, $start_index = 0, $start_date = null, $end_date = null, $short_code = null)
    {
        return $this->getProgramFundingsAsyncWithHttpInfo($count, $start_index, $start_date, $end_date, $short_code)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProgramFundingsAsyncWithHttpInfo
     *
     * List program fundings
     *
     * @param  int $count Number of program funding resources to retrieve. (optional, default to 5)
     * @param  int $start_index Sort order index of the first resource in the returned array. (optional, default to 0)
     * @param  string $start_date Start date for filtering program funding entries. (optional)
     * @param  string $end_date End date for filtering program funding entries. (optional)
     * @param  string $short_code Short code for filtering program funding entries. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProgramFundingsAsyncWithHttpInfo($count = 5, $start_index = 0, $start_date = null, $end_date = null, $short_code = null)
    {
        $returnType = '\OpenAPI\Client\Model\ProgramFundingPage';
        $request = $this->getProgramFundingsRequest($count, $start_index, $start_date, $end_date, $short_code);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getProgramFundings'
     *
     * @param  int $count Number of program funding resources to retrieve. (optional, default to 5)
     * @param  int $start_index Sort order index of the first resource in the returned array. (optional, default to 0)
     * @param  string $start_date Start date for filtering program funding entries. (optional)
     * @param  string $end_date End date for filtering program funding entries. (optional)
     * @param  string $short_code Short code for filtering program funding entries. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getProgramFundingsRequest($count = 5, $start_index = 0, $start_date = null, $end_date = null, $short_code = null)
    {
        if ($count !== null && $count > 100) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling ProgramFundingApi.getProgramFundings, must be smaller than or equal to 100.');
        }
        if ($count !== null && $count < 1) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling ProgramFundingApi.getProgramFundings, must be bigger than or equal to 1.');
        }

        if ($start_index !== null && $start_index < 0) {
            throw new \InvalidArgumentException('invalid value for "$start_index" when calling ProgramFundingApi.getProgramFundings, must be bigger than or equal to 0.');
        }


        $resourcePath = '/admin/programs/funding';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($count !== null) {
            if('form' === 'form' && is_array($count)) {
                foreach($count as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['count'] = $count;
            }
        }
        // query params
        if ($start_index !== null) {
            if('form' === 'form' && is_array($start_index)) {
                foreach($start_index as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['start_index'] = $start_index;
            }
        }
        // query params
        if ($start_date !== null) {
            if('form' === 'form' && is_array($start_date)) {
                foreach($start_date as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['start_date'] = $start_date;
            }
        }
        // query params
        if ($end_date !== null) {
            if('form' === 'form' && is_array($end_date)) {
                foreach($end_date as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['end_date'] = $end_date;
            }
        }
        // query params
        if ($short_code !== null) {
            if('form' === 'form' && is_array($short_code)) {
                foreach($short_code as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['short_code'] = $short_code;
            }
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getProgramFundingsByShortCode
     *
     * List program fundings
     *
     * @param  int $count Number of program funding resources to retrieve. (optional, default to 5)
     * @param  int $start_index Sort order index of the first resource in the returned array. (optional, default to 0)
     * @param  string $start_date Start date for filtering program funding entries. (optional)
     * @param  string $end_date End date for filtering program funding entries. (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\ProgramFundingPage|\OpenAPI\Client\Model\Error
     */
    public function getProgramFundingsByShortCode($count = 5, $start_index = 0, $start_date = null, $end_date = null)
    {
        list($response) = $this->getProgramFundingsByShortCodeWithHttpInfo($count, $start_index, $start_date, $end_date);
        return $response;
    }

    /**
     * Operation getProgramFundingsByShortCodeWithHttpInfo
     *
     * List program fundings
     *
     * @param  int $count Number of program funding resources to retrieve. (optional, default to 5)
     * @param  int $start_index Sort order index of the first resource in the returned array. (optional, default to 0)
     * @param  string $start_date Start date for filtering program funding entries. (optional)
     * @param  string $end_date End date for filtering program funding entries. (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\ProgramFundingPage|\OpenAPI\Client\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProgramFundingsByShortCodeWithHttpInfo($count = 5, $start_index = 0, $start_date = null, $end_date = null)
    {
        $request = $this->getProgramFundingsByShortCodeRequest($count, $start_index, $start_date, $end_date);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\ProgramFundingPage' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ProgramFundingPage', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\OpenAPI\Client\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\ProgramFundingPage';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ProgramFundingPage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProgramFundingsByShortCodeAsync
     *
     * List program fundings
     *
     * @param  int $count Number of program funding resources to retrieve. (optional, default to 5)
     * @param  int $start_index Sort order index of the first resource in the returned array. (optional, default to 0)
     * @param  string $start_date Start date for filtering program funding entries. (optional)
     * @param  string $end_date End date for filtering program funding entries. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProgramFundingsByShortCodeAsync($count = 5, $start_index = 0, $start_date = null, $end_date = null)
    {
        return $this->getProgramFundingsByShortCodeAsyncWithHttpInfo($count, $start_index, $start_date, $end_date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProgramFundingsByShortCodeAsyncWithHttpInfo
     *
     * List program fundings
     *
     * @param  int $count Number of program funding resources to retrieve. (optional, default to 5)
     * @param  int $start_index Sort order index of the first resource in the returned array. (optional, default to 0)
     * @param  string $start_date Start date for filtering program funding entries. (optional)
     * @param  string $end_date End date for filtering program funding entries. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProgramFundingsByShortCodeAsyncWithHttpInfo($count = 5, $start_index = 0, $start_date = null, $end_date = null)
    {
        $returnType = '\OpenAPI\Client\Model\ProgramFundingPage';
        $request = $this->getProgramFundingsByShortCodeRequest($count, $start_index, $start_date, $end_date);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getProgramFundingsByShortCode'
     *
     * @param  int $count Number of program funding resources to retrieve. (optional, default to 5)
     * @param  int $start_index Sort order index of the first resource in the returned array. (optional, default to 0)
     * @param  string $start_date Start date for filtering program funding entries. (optional)
     * @param  string $end_date End date for filtering program funding entries. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getProgramFundingsByShortCodeRequest($count = 5, $start_index = 0, $start_date = null, $end_date = null)
    {
        if ($count !== null && $count > 100) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling ProgramFundingApi.getProgramFundingsByShortCode, must be smaller than or equal to 100.');
        }
        if ($count !== null && $count < 1) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling ProgramFundingApi.getProgramFundingsByShortCode, must be bigger than or equal to 1.');
        }

        if ($start_index !== null && $start_index < 0) {
            throw new \InvalidArgumentException('invalid value for "$start_index" when calling ProgramFundingApi.getProgramFundingsByShortCode, must be bigger than or equal to 0.');
        }


        $resourcePath = '/programs/funding';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($count !== null) {
            if('form' === 'form' && is_array($count)) {
                foreach($count as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['count'] = $count;
            }
        }
        // query params
        if ($start_index !== null) {
            if('form' === 'form' && is_array($start_index)) {
                foreach($start_index as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['start_index'] = $start_index;
            }
        }
        // query params
        if ($start_date !== null) {
            if('form' === 'form' && is_array($start_date)) {
                foreach($start_date as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['start_date'] = $start_date;
            }
        }
        // query params
        if ($end_date !== null) {
            if('form' === 'form' && is_array($end_date)) {
                foreach($end_date as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['end_date'] = $end_date;
            }
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
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
