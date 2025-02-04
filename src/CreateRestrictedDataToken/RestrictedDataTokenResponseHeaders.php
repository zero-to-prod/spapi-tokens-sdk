<?php

namespace Zerotoprod\SpapiTokensSdk\CreateRestrictedDataToken;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;

class RestrictedDataTokenResponseHeaders
{
    use DataModel;

    public const server = 'server';
    public ?string $server = null;

    public const date = 'date';
    public ?string $date = null;

    public const content_type = 'content-type';
    #[Describe(['from' => self::content_type])]
    public ?string $content_type = null;

    public const content_length = 'content-length';
    #[Describe(['from' => self::content_length])]
    public ?string $content_length = null;

    public const connection = 'connection';
    public ?string $connection = null;

    public const x_amz_rid = 'x-amz-rid';
    #[Describe(['from' => self::x_amz_rid])]
    public ?string $x_amz_rid = null;

    /**
     * Your rate limit (requests per second) for this operation.
     *
     * @see $x_amzn_ratelimit_limit
     */
    public const x_amzn_ratelimit_limit = 'x-amzn-ratelimit-limit';
    /** Your rate limit (requests per second) for this operation. */
    #[Describe(['from' => self::x_amzn_ratelimit_limit])]
    public ?string $x_amzn_ratelimit_limit = null;

    /**
     * Unique request reference identifier.
     * @see $x_amzn_requestid
     */
    public const x_amzn_requestid = 'x-amzn-requestid';
    /** Unique request reference identifier. */
    #[Describe(['from' => self::x_amzn_requestid])]
    public ?string $x_amzn_requestid = null;

    public const x_amz_apigw_id = 'x-amz-apigw-id';
    #[Describe(['from' => self::x_amz_apigw_id])]
    public ?string $x_amz_apigw_id = null;

    public const x_amzn_trace_id = 'x-amzn-trace-id';
    #[Describe(['from' => self::x_amzn_trace_id])]
    public ?string $x_amzn_trace_id = null;

    public const vary = 'vary';
    public ?string $vary = null;

    public const strict_transport_security = 'strict-transport-security';
    #[Describe(['from' => self::strict_transport_security])]
    public ?string $strict_transport_security = null;
}