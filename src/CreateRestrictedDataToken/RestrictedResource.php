<?php

namespace Zerotoprod\SpapiTokensSdk\CreateRestrictedDataToken;

use Zerotoprod\DataModel\DataModel;

/**
 * The request schema for the createRestrictedDataToken operation.
 *
 * @link https://github.com/zero-to-prod/spapi-tokens-sdk
 */
class RestrictedResource
{
    use DataModel;

    /**
     * The HTTP method (GET, PUT, POST, DELETE)
     *
     * @see  $method
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const method = 'method';
    /**
     * The HTTP method (GET, PUT, POST, DELETE)
     *
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public readonly string $method;
    /**
     * The resource path
     *
     * @see  $path
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const path = 'path';
    /**
     * The resource path
     *
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public readonly string $path;

    /**
     * Array of data elements
     *
     * @see  $dataElements
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const dataElements = 'dataElements';
    /**
     * Array of data elements
     *
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public readonly array $dataElements;
}
