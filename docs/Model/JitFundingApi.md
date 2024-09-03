# # JitFundingApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_name_verification** | [**\OpenAPI\Client\Model\JitAccountNameVerification**](JitAccountNameVerification.md) |  | [optional]
**acting_user_token** | **string** | User who conducted the transaction.  Can be a child user configured to share its parent&#39;s account balance. | [optional]
**address_verification** | [**\OpenAPI\Client\Model\JitAddressVerification**](JitAddressVerification.md) |  | [optional]
**amount** | **float** | Requested amount of funding. |
**balances** | [**array<string,\OpenAPI\Client\Model\CardholderBalance>**](CardholderBalance.md) | Contains the GPA&#39;s balance details. | [optional]
**business_token** | **string** | Holder of the business account that was funded. | [optional]
**decline_reason** | **string** | Reason why the transaction was declined. | [optional]
**incremental_authorization_jit_funding_tokens** | **string[]** | Array of tokens referencing the JIT Funding tokens of all previous associated incremental authorization JIT Funding requests. Useful for ascertaining the final transaction amount when the original amount was incremented. | [optional]
**jit_account_name_verification** | [**\OpenAPI\Client\Model\JitAccountNameVerification**](JitAccountNameVerification.md) |  | [optional]
**memo** | **string** | Additional information that describes the JIT Funding transaction. | [optional]
**method** | **string** | JIT Funding response type. See &lt;&lt;/core-api/gateway-jit-funding-messages#_the_jit_funding_object, The jit_funding object&gt;&gt; for the purpose, funding event type, and description of each method. |
**original_jit_funding_token** | **string** | Unique identifier of the first associated JIT Funding message. Useful for correlating related JIT Funding messages (that is, those associated with the same GPA order). Not included in the first of any set of related messages. | [optional]
**tags** | **string** | Customer-defined tags related to the JIT Funding transaction. | [optional]
**token** | **string** | Existing JIT Funding token matching the &#x60;funding.gateway_log.transaction_id&#x60; field of the associated GPA order.  *NOTE:* The &#x60;transaction_id&#x60; field updates if a subsequent JIT Funding message associated with that GPA order is sent. If multiple JIT Funding messages are associated with the same GPA order, the &#x60;transaction_id&#x60; field matches the token of the most recent message. |
**user_token** | **string** | Holder of the user account that was funded. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
