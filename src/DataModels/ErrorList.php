<?php

namespace Zerotoprod\SpapiTokensSdk\DataModels;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

/**
 * A list of error responses returned when a request is unsuccessful.
 */
class ErrorList
{
    use DataModel;

    /** @see $errors */
    public const errors = 'errors';
    /**
     * @var array<int|string, Error>
     */
    #[Describe(['cast' => [DataModelHelper::class, 'mapOf'], 'type' => Error::class])]
    public readonly array $errors;
}