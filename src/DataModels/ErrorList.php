<?php

namespace Zerotoprod\SpapiTokensSdk\DataModels;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

/**
 * A list of error responses returned when a request is unsuccessful.
 *
 * @link https://github.com/zero-to-prod/spapi-tokens-sdk
 */
class ErrorList
{
    use DataModel;

    /**
     * @see  $errors
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const errors = 'errors';
    /**
     * @var array<int|string, Error>
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    #[Describe(['cast' => [DataModelHelper::class, 'mapOf'], 'type' => Error::class])]
    public readonly array $errors;
}