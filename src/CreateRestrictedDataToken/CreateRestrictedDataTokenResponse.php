<?php

namespace Zerotoprod\SpapiTokensSdk\CreateRestrictedDataToken;

use Zerotoprod\Arr\Arr;
use Zerotoprod\CurlHelperSdk\DataModels\Info;
use Zerotoprod\DataModel\DataModel;
use Zerotoprod\SpapiTokensSdk\DataModels\ErrorList;

/**
 * The response schema for the createRestrictedDataToken operation.
 *
 * @link https://github.com/zero-to-prod/spapi-tokens-sdk
 */
class CreateRestrictedDataTokenResponse
{
    use DataModel;

    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const info = 'info';
    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public Info $info;

    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const error = 'error';
    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public ?string $error = null;

    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const headers = 'headers';
    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public RestrictedDataTokenResponseHeaders $headers;

    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public const response = 'response';
    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public RestrictedDataToken|ErrorList $response;

    /**
     * @link https://github.com/zero-to-prod/spapi-tokens-sdk
     */
    public static function fromResponse(array $response): self
    {
        return self::from([
            self::info => $response['info'],
            self::error => $response['error'] ?? null,
            self::headers => Arr::mapKeys(
                $response['headers'] ?? [],
                static function ($key) {
                    return strtolower($key);
                }
            ),
            self::response => $response['info']['http_code'] === 200
                ? RestrictedDataToken::from($response['response'])
                : ErrorList::from($response['response'])
        ]);
    }
}