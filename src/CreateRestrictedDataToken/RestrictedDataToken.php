<?php

namespace Zerotoprod\SpapiTokensSdk\CreateRestrictedDataToken;


use Zerotoprod\DataModel\DataModel;

/**
 * The response schema for the createRestrictedDataToken operation.
 */
class RestrictedDataToken
{
    use DataModel;

    /**
     * A Restricted Data Token (RDT). This is a short-lived access token that authorizes calls to restricted operations. Pass this value with the x-amz-access-token header when making subsequent calls to these restricted resources.
     *
     * @see $restrictedDataToken
     */
    public const restrictedDataToken = 'restrictedDataToken';
    /**
     * The lifetime of the Restricted Data Token, in seconds.
     *
     * @see $expiresIn
     */
    public const expiresIn = 'expiresIn';
    /** A Restricted Data Token (RDT). This is a short-lived access token that authorizes calls to restricted operations. Pass this value with the x-amz-access-token header when making subsequent calls to these restricted resources. */
    public readonly string $restrictedDataToken;
    /** The lifetime of the Restricted Data Token, in seconds. */
    public readonly int $expiresIn;
}