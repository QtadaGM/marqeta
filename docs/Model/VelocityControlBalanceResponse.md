# # VelocityControlBalanceResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Indicates whether the velocity control is active. | [optional]
**amount_limit** | **float** | Maximum monetary sum that can be cleared within the time period defined by the &#x60;velocity_window&#x60; field. |
**approvals_only** | **bool** | If set to &#x60;true&#x60;, only approved transactions are subject to control. | [optional]
**association** | [**\OpenAPI\Client\Model\SpendControlAssociation**](SpendControlAssociation.md) |  | [optional]
**available** | [**\OpenAPI\Client\Model\Available**](Available.md) |  |
**currency_code** | **string** | Three-character ISO 4217 currency code. |
**include_cashback** | **bool** | If set to &#x60;true&#x60;, the cashback components of point-of-sale transactions are subject to control. | [optional]
**include_credits** | **bool** | If set to &#x60;true&#x60;, original credit transactions (OCT) are subject to control. | [optional]
**include_purchases** | **bool** | If set to &#x60;true&#x60;, the following transactions are subject to control:  * *Account funding:* All account funding transactions * *Cashback:* Only the purchase component of cashback transactions * *Purchase transactions:* All authorizations, PIN debit transactions, and incremental transactions * *Quasi-cash:* All quasi-cash transactions * *Refunds:* All refund transactions (see &lt;&lt;/developer-guides/controlling-spending#_controls_to_limit_amount_and_frequency_of_spending, Controls to limit amount and frequency of spending&gt;&gt; for more information) * *Reversals:* All reversal transactions | [optional]
**include_transfers** | **bool** | If set to &#x60;true&#x60;, account-to-account transfers are subject to control. Account-to-account transfers are not currently supported. | [optional]
**include_withdrawals** | **bool** | If set to &#x60;true&#x60;, ATM withdrawals are subject to control. | [optional]
**merchant_scope** | [**\OpenAPI\Client\Model\MerchantScope**](MerchantScope.md) |  | [optional]
**money_in_transaction** | [**\OpenAPI\Client\Model\MoneyInTransaction**](MoneyInTransaction.md) |  | [optional]
**name** | **string** | Description of how the velocity control restricts spending, for example, \&quot;Max spend of $500 per day\&quot; or \&quot;Max spend of $5000 per month for non-exempt employees\&quot;. | [optional]
**token** | **string** | Unique identifier of the velocity control. | [optional]
**usage_limit** | **int** | Maximum number of times a card can be used within the time period defined by the &#x60;velocity_window&#x60; field. | [optional]
**velocity_window** | **string** | Defines the time period to which the &#x60;amount_limit&#x60; and &#x60;usage_limit&#x60; fields apply:  * *DAY* – one day; days begin at 00:00:00 UTC. * *WEEK* – one week; weeks begin Sundays at 00:00:00 UTC. * *MONTH* – one month; months begin on the first day of month at 00:00:00 UTC. * *LIFETIME* – forever; time period never expires. * *TRANSACTION* – a single transaction. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
