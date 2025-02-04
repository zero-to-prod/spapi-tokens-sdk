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
     * @param  string       $access_token        The access token to create the RDT
     * @param  string       $path                The path in the restricted resource. Here are some path examples:
     *                                           - /orders/v0/orders. For getting an RDT for the getOrders operation of the Orders API. For bulk orders.
     *                                           - /orders/v0/orders/123-1234567-1234567. For getting an RDT for the getOrder operation of the Orders API. For a specific order.
     *                                           - /orders/v0/orders/123-1234567-1234567/orderItems. For getting an RDT for the getOrderItems operation of the Orders API. For the order items in a specific order.
     *                                           - /mfn/v0/shipments/FBA1234ABC5D. For getting an RDT for the getShipment operation of the Shipping API. For a specific shipment.
     *                                           - /mfn/v0/shipments/{shipmentId}. For getting an RDT for the getShipment operation of the Shipping API. For any of a selling partner's shipments that you specify when you call the getShipment operation.
     * @param  array        $dataElements        Indicates the type of Personally Identifiable Information requested. This parameter is required only when getting an RDT for use with the getOrder, getOrders, or getOrderItems operation of the Orders API. For more information, see the Tokens API Use Case Guide. Possible values include:
     *                                           - buyerInfo. On the order level this includes general identifying information about the buyer and tax-related information. On the order item level this includes gift wrap information and custom order information, if available.
     *                                           - shippingAddress. This includes information for fulfilling orders.
     *                                           - buyerTaxInformation. This includes information for issuing tax invoices
     * @param  string|null  $targetApplication   The application ID for the target application to which access is being delegated.
     * @param  string|null  $user_agent          The user agent for the request.
     * @param  string       $url                 The URL for the api
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