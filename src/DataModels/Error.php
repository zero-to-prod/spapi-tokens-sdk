<?php

namespace Zerotoprod\SpapiTokensSdk\DataModels;

use Zerotoprod\DataModel\DataModel;

/**
 * An error response returned when the request is unsuccessful.
 *
 * @link https://github.com/zero-to-prod/spapi-tokens-sdk
 */
class Error
{
    use DataModel;

    /**
     * An error code that identifies the type of error that occurred.
     *
     * @see  $code
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const code = 'code';
    /**
     * A message that describes the error condition.
     *
     * @see  $message
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const message = 'message';
    /**
     * Additional details that can help the caller understand or fix the issue.
     *
     * @see  $details
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const details = 'details';
    /**
     * An error code that identifies the type of error that occurred.
     *
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public readonly string $code;
    /**
     * A message that describes the error condition.
     *
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public readonly string $message;
    /**
     * Additional details that can help the caller understand or fix the issue.
     *
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public readonly string $details;
}