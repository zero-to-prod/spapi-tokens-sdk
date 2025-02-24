<?php

namespace Zerotoprod\SpapiTokensSdk\CreateRestrictedDataToken;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;

/**
 * @link https://github.com/zero-to-prod/spapi-tokens-sdk
 */
class RestrictedDataTokenResponseHeaders
{
    use DataModel;

    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const server = 'server';
    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public ?string $server = null;

    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const date = 'date';
    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public ?string $date = null;

    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const content_type = 'content-type';
    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    #[Describe(['from' => self::content_type])]
    public ?string $content_type = null;

    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const content_length = 'content-length';
    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    #[Describe(['from' => self::content_length])]
    public ?string $content_length = null;

    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const connection = 'connection';
    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public ?string $connection = null;

    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const x_amz_rid = 'x-amz-rid';
    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    #[Describe(['from' => self::x_amz_rid])]
    public ?string $x_amz_rid = null;

    /**
     * Your rate limit (requests per second) for this operation.
     *
     * @see  $x_amzn_ratelimit_limit
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const x_amzn_ratelimit_limit = 'x-amzn-ratelimit-limit';
    /**
     * Your rate limit (requests per second) for this operation.
     *
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    #[Describe(['from' => self::x_amzn_ratelimit_limit])]
    public ?string $x_amzn_ratelimit_limit = null;

    /**
     * Unique request reference identifier.
     *
     * @see  $x_amzn_requestid
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const x_amzn_requestid = 'x-amzn-requestid';
    /**
     * Unique request reference identifier.
     *
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    #[Describe(['from' => self::x_amzn_requestid])]
    public ?string $x_amzn_requestid = null;

    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const x_amz_apigw_id = 'x-amz-apigw-id';
    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    #[Describe(['from' => self::x_amz_apigw_id])]
    public ?string $x_amz_apigw_id = null;

    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const x_amzn_trace_id = 'x-amzn-trace-id';
    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    #[Describe(['from' => self::x_amzn_trace_id])]
    public ?string $x_amzn_trace_id = null;

    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const vary = 'vary';
    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public ?string $vary = null;

    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const strict_transport_security = 'strict-transport-security';
    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    #[Describe(['from' => self::strict_transport_security])]
    public ?string $strict_transport_security = null;
}