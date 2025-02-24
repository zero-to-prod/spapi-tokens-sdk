<?php

namespace Zerotoprod\SpapiTokensSdk\CreateRestrictedDataToken;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

/**
 * The request schema for the createRestrictedDataToken operation.
 *
 * @link https://github.com/zero-to-prod/spapi-tokens-sdk
 */
class CreateRestrictedDataTokenRequest
{
    use DataModel;

    /**
     * The application ID for the target application to which access is being delegated.
     *
     * @see  $targetApplication
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const targetApplication = 'targetApplication';
    /**
     * A list of restricted resources.
     * Maximum: 50
     *
     * @see  $restrictedResources
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const restrictedResources = 'restrictedResources';
    /**
     * The application ID for the target application to which access is being delegated.
     *
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public readonly string $targetApplication;
    /**
     * A list of restricted resources.
     * Maximum: 50
     *
     * @var array<int|string, RestrictedResource>
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    #[Describe(['cast' => [DataModelHelper::class, 'mapOf'], 'type' => RestrictedResource::class])]
    public readonly array $restrictedResources;
}