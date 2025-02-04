<?php

namespace Zerotoprod\SpapiTokensSdk\CreateRestrictedDataToken;

use Zerotoprod\DataModel\DataModel;

/**
 * Model of a restricted resource.
 */
class RestrictedResource
{
    use DataModel;

    /**
     * The HTTP method in the restricted resource.
     *
     * @see $method
     */
    public const method = 'method';
    /**
     * The path in the restricted resource. Here are some path examples:
     * - ```/orders/v0/orders```. For getting an RDT for the getOrders operation of the Orders API. For bulk orders.
     * - ```/orders/v0/orders/123-1234567-1234567```. For getting an RDT for the getOrder operation of the Orders API. For a specific order.
     * - ```/orders/v0/orders/123-1234567-1234567/orderItems```. For getting an RDT for the getOrderItems operation of the Orders API. For the order items in a specific order.
     * - ```/mfn/v0/shipments/FBA1234ABC5D```. For getting an RDT for the getShipment operation of the Shipping API. For a specific shipment.
     * - ```/mfn/v0/shipments/{shipmentId}```. For getting an RDT for the getShipment operation of the Shipping API. For any of a selling partner's shipments that you specify when you call the getShipment operation.
     *
     * @see $path
     */
    public const path = 'path';
    /**
     * Indicates the type of Personally Identifiable Information requested. This parameter is required only when getting an RDT for use with the getOrder, getOrders, or getOrderItems operation of the Orders API. For more information, see the [Tokens API Use Case Guide](doc:tokens-api-use-case-guide). Possible values include:
     * - **buyerInfo**. On the order level this includes general identifying information about the buyer and tax-related information. On the order item level this includes gift wrap information and custom order information, if available.
     * - **shippingAddress**. This includes information for fulfilling orders.
     * - **buyerTaxInformation**. This includes information for issuing tax invoices.
     *
     * @see $dataElements
     */
    public const dataElements = 'dataElements';
    /** The HTTP method in the restricted resource. */
    public readonly string $method;
    /** The path in the restricted resource. Here are some path examples:
     * - ```/orders/v0/orders```. For getting an RDT for the getOrders operation of the Orders API. For bulk orders.
     * - ```/orders/v0/orders/123-1234567-1234567```. For getting an RDT for the getOrder operation of the Orders API. For a specific order.
     * - ```/orders/v0/orders/123-1234567-1234567/orderItems```. For getting an RDT for the getOrderItems operation of the Orders API. For the order items in a specific order.
     * - ```/mfn/v0/shipments/FBA1234ABC5D```. For getting an RDT for the getShipment operation of the Shipping API. For a specific shipment.
     * - ```/mfn/v0/shipments/{shipmentId}```. For getting an RDT for the getShipment operation of the Shipping API. For any of a selling partner's shipments that you specify when you call the getShipment operation. */
    public readonly string $path;
    /** Indicates the type of Personally Identifiable Information requested. This parameter is required only when getting an RDT for use with the getOrder, getOrders, or getOrderItems operation of the Orders API. For more information, see the [Tokens API Use Case Guide](doc:tokens-api-use-case-guide). Possible values include:
     * - **buyerInfo**. On the order level this includes general identifying information about the buyer and tax-related information. On the order item level this includes gift wrap information and custom order information, if available.
     * - **shippingAddress**. This includes information for fulfilling orders.
     * - **buyerTaxInformation**. This includes information for issuing tax invoices. */
    public readonly array $dataElements;
}