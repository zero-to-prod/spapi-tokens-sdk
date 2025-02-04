<?php

namespace Zerotoprod\SpapiTokensSdk\DataModels;

use Zerotoprod\DataModel\DataModel;

/**
 * An error response returned when the request is unsuccessful.
 */
class Error
{
    use DataModel;

    /**
     * An error code that identifies the type of error that occurred.
     *
     * @see $code
     */
    public const code = 'code';
    /**
     * A message that describes the error condition.
     *
     * @see $message
     */
    public const message = 'message';
    /**
     * Additional details that can help the caller understand or fix the issue.
     *
     * @see $details
     */
    public const details = 'details';
    /** An error code that identifies the type of error that occurred. */
    public readonly string $code;
    /** A message that describes the error condition. */
    public readonly string $message;
    /** Additional details that can help the caller understand or fix the issue. */
    public readonly string $details;
}