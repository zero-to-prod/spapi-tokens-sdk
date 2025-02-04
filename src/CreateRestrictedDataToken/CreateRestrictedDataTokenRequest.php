<?php

namespace Zerotoprod\SpapiTokensSdk\CreateRestrictedDataToken;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

/**
 * The request schema for the createRestrictedDataToken operation.
 */
class CreateRestrictedDataTokenRequest
{
    use DataModel;

    /**
     * The application ID for the target application to which access is being delegated.
     *
     * @see $targetApplication
     */
    public const targetApplication = 'targetApplication';
    /**
     * A list of restricted resources.
     * Maximum: 50
     *
     * @see $restrictedResources
     */
    public const restrictedResources = 'restrictedResources';
    /** The application ID for the target application to which access is being delegated. */
    public readonly string $targetApplication;
    /**
     * A list of restricted resources.
     * Maximum: 50
     *
     * @var array<int|string, RestrictedResource>
     */
    #[Describe(['cast' => [DataModelHelper::class, 'mapOf'], 'type' => RestrictedResource::class])]
    public readonly array $restrictedResources;
}