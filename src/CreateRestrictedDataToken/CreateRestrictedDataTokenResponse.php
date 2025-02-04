<?php

namespace Zerotoprod\SpapiTokensSdk\CreateRestrictedDataToken;

use Zerotoprod\Arr\Arr;
use Zerotoprod\CurlHelperSdk\DataModels\Info;
use Zerotoprod\DataModel\DataModel;
use Zerotoprod\SpapiTokensSdk\DataModels\ErrorList;

/**
 * The response schema for the createRestrictedDataToken operation.
 */
class CreateRestrictedDataTokenResponse
{
    use DataModel;

    public const info = 'info';
    public Info $info;

    public const error = 'error';
    public ?string $error = null;

    public const headers = 'headers';
    public RestrictedDataTokenResponseHeaders $headers;

    public const response = 'response';
    public RestrictedDataToken|ErrorList $response;

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