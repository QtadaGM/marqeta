# # LedgerEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_token** | **string** | Unique identifier of the credit account associated with the credit card used to make the ledger entry. |
**amount** | **float** | Amount of the ledger entry. |
**card_token** | **string** | Unique identifier of the credit card used to make the ledger entry. |
**created_time** | **\DateTime** | Date and time when the ledger entry was created on Marqeta&#39;s credit platform, in UTC. |
**currency_code** | [**\OpenAPI\Client\Model\CurrencyCode**](CurrencyCode.md) |  |
**detail_object** | **object** | Contains the ledger entry&#39;s full details. The fields returned in this object vary based on the ledger entry group.  The following lists each ledger entry group and the specific fields returned for each group.  * Purchases and refunds: see the &lt;&lt;/core-api/transactions#getTransactions, transactions&gt;&gt; response fields.  * Disputes: see the &lt;&lt;/core-api/credit-disputes#retrieveDispute, account disputes response fields.&gt;&gt;  * Original credit transaction (OCT): see the &lt;&lt;/core-api/push-to-card-payments#_create_push_to_card_disbursement, Push-to-Card disbursement&gt;&gt; fields.  * Rewards: see the &lt;&lt;/core-api/credit-account-rewards#createReward, account reward&gt;&gt; response fields.  * Payments: see the &lt;&lt;/core-api/credit-account-payments#retrievePayment, account payment&gt;&gt; response fields.  * Balance refunds: see the &lt;&lt;/core-api/credit-balance-refunds#createBalanceRefund, balance refund&gt;&gt; response fields.  * Adjustments: see the &lt;&lt;/core-api/credit-account-adjustments#retrieveAdjustment, account adjustment&gt;&gt; response fields.  * Interest and fees: see fields below. | [optional]
**detail_token** | **string** | Unique identifier of the ledger entry&#39;s full details. |
**dispute_token** | **string** | Unique identifier of the dispute, if the ledger entry is disputed. | [optional]
**group** | **string** | Group to which the ledger entry belongs. |
**id** | **string** | Eight-digit numeric identifier of the ledger entry, an alternate identifier to the UUID that is useful for remembering and referencing. |
**impact_time** | **\DateTime** | Date and time when the ledger entry impacts the account balance.  For purchases, this is the time of the authorization.  For purchase authorization clearings, this is the time when the transaction is settled. |
**memo** | **string** | Merchant name or description for the ledger entry. |
**original_currency** | [**\OpenAPI\Client\Model\OriginalCurrency**](OriginalCurrency.md) |  | [optional]
**related_token** | **string** | Unique identifier of the original ledger entry. If the current ledger entry is the original, this field is returned empty. | [optional]
**request_time** | **\DateTime** | For purchases, the date and time of the authorization, which is when the user initiates the ledger entry.  For other ledger entry groups, equivalent to &#x60;impact_time&#x60;. |
**root_token** | **string** | Unique identifier of the root ledger entry. If the current ledger entry is the root, this field is returned empty. | [optional]
**status** | **string** | Status of the ledger entry when it was initially recorded and had an impact on the balance, either &#x60;PENDING&#x60; or &#x60;POSTED&#x60;. This field is immutable and may not represent the current status.  To view the current status of purchases, refunds, OCTs, and payments, see the &#x60;detail_object.state&#x60; field. These journal entries start in &#x60;PENDING&#x60; and can transition to &#x60;CLEARED&#x60;, &#x60;DECLINED&#x60;, or &#x60;ERROR&#x60;. This transition of status is only sent through webhook event notifications.  Ledger entries that are final transactions, such as clearings, start and remain in a &#x60;POSTED&#x60; state.  *NOTE*: &#x60;CLEARED&#x60;, &#x60;DECLINED&#x60;, and &#x60;ERROR&#x60; are special statuses that do not have an impact on the account balance, and are not recorded in the ledger. For these special statuses, &#x60;impact_time&#x60;, &#x60;request_time&#x60;, &#x60;created_time&#x60;, &#x60;token&#x60;, and &#x60;id&#x60; are returned blank. |
**token** | **string** | Unique identifier of the ledger entry. |
**type** | **string** | Ledger entry event type. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
