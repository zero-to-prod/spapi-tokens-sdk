<?php

namespace Zerotoprod\SpapiTokensSdk;

use Zerotoprod\SpapiTokens\SpapiTokens;
use Zerotoprod\SpapiTokensSdk\CreateRestrictedDataToken\CreateRestrictedDataTokenResponse;
use Zerotoprod\SpapiTokensSdk\DataModels\ErrorList;

class SpapiTokensSdk
{
    /**
     * Returns a Restricted Data Token (RDT) for one or more restricted resources that you specify. A restricted resource is the HTTP method and path from a restricted operation that returns Personally Identifiable Information (PII), plus a dataElements value that indicates the type of PII requested. See the Tokens API Use Case Guide for a list of restricted operations. Use the RDT returned here as the access token in subsequent calls to the corresponding restricted operations.
     *
     * *Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 10 |
     *
     * The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).
     *
     * @link https://developer-docs.amazon.com/sp-api/docs/tokens-api-v2021-03-01-reference
     */
    public static function createRestrictedDataToken(string $access_token, string $path, array $dataElements = [], ?string $targetApplication = null, ?string $user_agent = null, string $url = 'https://sellingpartnerapi-na.amazon.com/tokens/2021-03-01/restrictedDataToken'): CreateRestrictedDataTokenResponse|ErrorList
    {
        return CreateRestrictedDataTokenResponse::fromResponse(
            SpapiTokens::restrictedDataToken(
                $access_token,
                $path,
                $dataElements,
                $targetApplication,
                $user_agent,
                $url,
            )
        );
    }
}