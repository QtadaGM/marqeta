# # JournalEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_token** | **string** | Unique identifier of the credit account associated with the credit card used to make the journal entry. |
**amount** | **float** | Amount of the journal entry. |
**card_token** | **string** | Unique identifier of the credit card used to make the journal entry. | [optional]
**created_time** | **\DateTime** | Date and time when the journal entry was created on Marqeta&#39;s credit platform, in UTC. |
**currency_code** | [**\OpenAPI\Client\Model\CurrencyCode**](CurrencyCode.md) |  |
**detail_object** | **object** |  | [optional]
**detail_token** | **string** | Unique identifier of the journal entry&#39;s full details. |
**dispute_token** | **string** | Unique identifier of the dispute, if the journal entry is disputed. | [optional]
**group** | **string** | Group to which the journal entry belongs. |
**id** | **string** | Eight-digit numeric identifier of the journal entry, an alternate identifier to the UUID that is useful for remembering and referencing. |
**impact_time** | **\DateTime** | Date and time when the journal entry impacts the account balance.  For purchases, this is the time of the authorization.  For purchase authorization clearings, this is the time when the transaction is settled. |
**memo** | **string** | Merchant name or description for the journal entry. | [optional]
**original_currency** | [**\OpenAPI\Client\Model\OriginalCurrency**](OriginalCurrency.md) |  | [optional]
**related_token** | **string** | Unique identifier of the original journal entry. If the current journal entry is the original, this field is returned empty. | [optional]
**request_time** | **\DateTime** | For purchases, the date and time of the authorization, which is when the user initiates the journal entry.  For other journal entry groups, equivalent to &#x60;impact_time&#x60;. |
**root_token** | **string** | Unique identifier of the root journal entry. If the current journal entry is the root, this field is returned empty. | [optional]
**status** | **string** | Status of the journal entry when it was initially recorded and had an impact on the balance, either &#x60;PENDING&#x60; or &#x60;POSTED&#x60;. This field is immutable and may not represent the current status.  To view the current status of purchases, refunds, OCTs, and payments, see the &#x60;detail_object.state&#x60; field. These journal entries start in &#x60;PENDING&#x60; and can transition to &#x60;CLEARED&#x60;, &#x60;DECLINED&#x60;, or &#x60;ERROR&#x60;. This transition of status is only sent through webhook event notifications.  Journal entries that are final transactions, such as clearings, start and remain in a &#x60;POSTED&#x60; state.  *NOTE*: &#x60;CLEARED&#x60;, &#x60;DECLINED&#x60;, and &#x60;ERROR&#x60; are special statuses that do not have an impact on the account balance, and are not recorded in the journal. For these special statuses, &#x60;impact_time&#x60;, &#x60;request_time&#x60;, &#x60;created_time&#x60;, &#x60;token&#x60;, and &#x60;id&#x60; are returned blank. |
**token** | **string** | Unique identifier of the journal entry. |
**type** | **string** | Journal entry event type. |
**user_token** | **string** | Unique identifier of the credit user. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
