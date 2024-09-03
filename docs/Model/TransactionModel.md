# # TransactionModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_funding** | [**\OpenAPI\Client\Model\AccountFunding**](AccountFunding.md) |  | [optional]
**account_name_verification** | [**\OpenAPI\Client\Model\AccountNameVerificationModel**](AccountNameVerificationModel.md) |  | [optional]
**acquirer** | [**\OpenAPI\Client\Model\Acquirer**](Acquirer.md) |  | [optional]
**acquirer_fee_amount** | **float** | Indicates the amount of the acquirer fee. Account holders are sometimes charged an acquirer fee for card use at ATMs, fuel dispensers, and so on. | [optional]
**acquirer_reference_data** | **string** |  | [optional]
**acquirer_reference_id** | **string** | Acquirer-assigned unique identifier of the transaction. Useful for settlement and reconciliation. | [optional]
**acting_user_token** | **string** | Unique identifier of the user who conducted the transaction. This might be a child user configured to share its parent&#39;s account balance. |
**address_verification** | [**\OpenAPI\Client\Model\AddressVerificationModel**](AddressVerificationModel.md) |  | [optional]
**advice_reason_code** | **string** |  | [optional]
**advice_reason_details** | **string** |  | [optional]
**amount** | **float** | Amount of the transaction. |
**amount_to_be_released** | **float** | Amount of original authorization to be released. This field appears in final clearing transactions where the clearing amount is lower than the authorization amount. | [optional]
**approval_code** | **string** | Unique identifier assigned to an authorization, printed on the receipt at point of sale. | [optional]
**atc_information** | [**\OpenAPI\Client\Model\AtcInformation**](AtcInformation.md) |  | [optional]
**auto_reload** | [**\OpenAPI\Client\Model\AutoReloadModel**](AutoReloadModel.md) |  | [optional]
**bank_transfer_token** | **string** |  | [optional]
**batch_number** | **string** | The batch number of the transaction. | [optional]
**billpay** | [**\OpenAPI\Client\Model\BillPayResponse**](BillPayResponse.md) |  | [optional]
**business** | [**\OpenAPI\Client\Model\BusinessMetadata**](BusinessMetadata.md) |  | [optional]
**business_token** | **string** | Unique identifier of the business that owns the account that funded the transaction. | [optional]
**card** | [**\OpenAPI\Client\Model\CardResponse**](CardResponse.md) |  | [optional]
**card_acceptor** | [**\OpenAPI\Client\Model\TransactionCardAcceptor**](TransactionCardAcceptor.md) |  | [optional]
**card_holder_model** | [**\OpenAPI\Client\Model\UserCardHolderResponse**](UserCardHolderResponse.md) |  | [optional]
**card_product_token** | **string** | Unique identifier of the card product. | [optional]
**card_security_code_verification** | [**\OpenAPI\Client\Model\CardSecurityCodeVerification**](CardSecurityCodeVerification.md) |  | [optional]
**card_token** | **string** | Unique identifier of the card. Useful when a single account holder has multiple cards. | [optional]
**cardholder_authentication_data** | [**\OpenAPI\Client\Model\CardholderAuthenticationData**](CardholderAuthenticationData.md) |  | [optional]
**cash_back_amount** | **float** | Amount of cash back requested by the cardholder during the transaction. Included in the total transaction amount. | [optional]
**chargeback** | [**\OpenAPI\Client\Model\ChargebackResponse**](ChargebackResponse.md) |  | [optional]
**clearing_record_sequence_number** | **string** | A sequence number that identifies a specific clearing message among multiple clearing messages for an authorization. | [optional]
**created_time** | **\DateTime** | Date and time when the Marqeta platform created the transaction entry, in UTC format. For example, when Marqeta processed the clearing record for a refund. | [optional]
**currency_code** | **string** | Currency type of the transaction. | [optional]
**currency_conversion** | [**\OpenAPI\Client\Model\CurrencyConversion**](CurrencyConversion.md) |  | [optional]
**deferred_settlement_days** | **string** |  | [optional]
**digital_wallet_token** | [**\OpenAPI\Client\Model\DigitalWalletToken**](DigitalWalletToken.md) |  | [optional]
**digital_wallet_token_transaction_service_provider_info** | [**\OpenAPI\Client\Model\DigitalServiceProvider**](DigitalServiceProvider.md) |  | [optional]
**direct_deposit** | [**\OpenAPI\Client\Model\DepositDepositResponse**](DepositDepositResponse.md) |  | [optional]
**dispute** | [**\OpenAPI\Client\Model\DisputeModel**](DisputeModel.md) |  | [optional]
**duration** | **int** | Duration of the transaction on Marqeta&#39;s servers, in milliseconds. | [optional]
**enhanced_data_token** | **string** | The enhanced commercial card data token for the transaction. | [optional]
**fee** | [**\OpenAPI\Client\Model\Fee**](Fee.md) |  | [optional]
**fee_transfer** | [**\OpenAPI\Client\Model\FeeTransferResponse**](FeeTransferResponse.md) |  | [optional]
**fees** | [**\OpenAPI\Client\Model\NetworkFeeModel[]**](NetworkFeeModel.md) | List of fees associated with the transaction.  This array is returned if it exists in the resource. | [optional]
**fraud** | [**\OpenAPI\Client\Model\FraudView**](FraudView.md) |  | [optional]
**from_account** | **string** | Specifies the account type for ATM transactions. | [optional]
**gpa** | [**\OpenAPI\Client\Model\CardholderBalance**](CardholderBalance.md) |  | [optional]
**gpa_order** | [**\OpenAPI\Client\Model\GpaResponse**](GpaResponse.md) |  | [optional]
**gpa_order_unload** | [**\OpenAPI\Client\Model\GpaReturns**](GpaReturns.md) |  | [optional]
**identifier** | **string** | Sequential identifier of the transaction. | [optional]
**incremental_authorization_transaction_tokens** | **string[]** | An array of incremental authorization transaction tokens. | [optional]
**interchange_rate_descriptor** | **string** |  | [optional]
**is_final_clearing** | **bool** | Indicates the final clearing event for an authorization. If the final cleared amount is lower than the authorized amount, you must release the hold on the funds per the value in the &#x60;amount_to_be_released&#x60; field. | [optional]
**is_preauthorization** | **bool** | Indicates if the transaction is a pre-authorization. | [optional] [default to false]
**isa_indicator** | **string** | The international service assessment indicator indicates if an ISA fee is applicable to the transaction. | [optional]
**issuer_interchange_amount** | **float** | The amount of interchange charged by the card issuer. | [optional]
**issuer_payment_node** | **string** | Unique identifier of the Marqeta platform server that received the transaction from the card network. | [optional]
**issuer_received_time** | **string** | Date and time when the Marqeta platform received the transaction from the card network, in UTC. | [optional]
**local_transaction_date** | **\DateTime** | Indicates the local time of the transaction at the card acceptor&#39;s location. You can use this field to determine the correct time of the transaction when filing a dispute. | [optional]
**merchant** | [**\OpenAPI\Client\Model\MerchantResponseModel**](MerchantResponseModel.md) |  | [optional]
**merchant_initiated_original_trace_id** | **string** | Unique network identification value formed by combining the 6- to 9-character Mastercard Banknet Reference Number and the 4-digit settlement date for recurring payments and other merchant-initiated transactions. | [optional]
**msa_order_unload** | [**\OpenAPI\Client\Model\MsaReturns**](MsaReturns.md) |  | [optional]
**multi_clearing_sequence_count** | **string** | If an authorization has multiple clearing transactions, this field displays their total number. For example, if an authorization has four clearing transactions, the sequence count is &#x60;04&#x60;. | [optional]
**multi_clearing_sequence_number** | **string** | If an authorization has multiple clearing transactions, this field displays the sequence number for the clearing transaction. For example, if this is the second clearing transaction of four, the sequence number is &#x60;02&#x60;. | [optional]
**national_net_cpd_of_original** | **string** |  | [optional]
**network** | **string** | Indicates which card network was used to complete the transactions. | [optional]
**network_metadata** | [**\OpenAPI\Client\Model\NetworkMetadata**](NetworkMetadata.md) |  | [optional]
**network_reference_id** | **string** | Network-assigned unique identifier of the transaction. Useful for settlement and reconciliation. | [optional]
**original_credit** | [**\OpenAPI\Client\Model\OriginalCredit**](OriginalCredit.md) |  | [optional]
**peer_transfer** | [**\OpenAPI\Client\Model\PeerTransferResponse**](PeerTransferResponse.md) |  | [optional]
**polarity** | **string** | Indicates whether the transaction is credit or debit. | [optional]
**pos** | [**\OpenAPI\Client\Model\Pos**](Pos.md) |  | [optional]
**preceding_related_transaction_token** | **string** | Returned for final transaction types.  Unique identifier of the preceding related transaction. Useful for identifying the transaction that preceded the current one.  For example, &#x60;authorization&#x60;, a temporary transaction type, precedes and is completed by &#x60;authorization.clearing&#x60;, a final transaction type. In this case, the &#x60;authorization&#x60; token is returned with this field. For which transaction types are temporary or final, see &lt;&lt;/core-api/event-types#_transaction_events, Transaction events in Event Types&gt;&gt;. | [optional]
**preceding_transaction** | [**\OpenAPI\Client\Model\PrecedingTransaction**](PrecedingTransaction.md) |  | [optional]
**program** | [**\OpenAPI\Client\Model\Program**](Program.md) |  | [optional]
**program_transfer** | [**\OpenAPI\Client\Model\ProgramTransferResponse**](ProgramTransferResponse.md) |  | [optional]
**real_time_fee_group** | [**\OpenAPI\Client\Model\RealTimeFeeGroup**](RealTimeFeeGroup.md) |  | [optional]
**request_amount** | **float** | Merchant-requested amount, including any fees. | [optional]
**response** | [**\OpenAPI\Client\Model\Response**](Response.md) |  | [optional]
**settlement_date** | **\DateTime** | Date and time when funds were moved for a transaction, in UTC. For example, in the case of a refund, when funds were credited to the cardholder. | [optional]
**settlement_indicator** | **string** | Indicates the settlement service used for the transaction. | [optional]
**standin_approved_by** | **string** | Indicates which party approved a transaction: the card network using stand-in processing, or Marqeta using Commando Mode. Returned only when a transaction is approved. | [optional]
**standin_by** | **string** | Indicates which party approved a transaction: the card network using stand-in processing, or Marqeta using Commando Mode. | [optional]
**standin_reason** | **string** | Indicates why the card network handled a transaction requiring stand-in processing. | [optional]
**state** | **string** | Current state of the transaction. For more information about the &#x60;state&#x60; field, see &lt;&lt;/developer-guides/about-transactions#_the_transaction_lifecycle, The transaction lifecycle&gt;&gt;. |
**store** | [**\OpenAPI\Client\Model\StoreResponseModel**](StoreResponseModel.md) |  | [optional]
**subnetwork** | **string** | Indicates which subnetwork was used to complete the transaction. Possible values include the following:  * *VISANET* – Used for VisaNet signature-based transactions. * *VISANETDEBIT* – Used for VisaNet Debit PIN-based transaction. * *VISAINTERLINK* – Used for Visa Interlink PIN-based transactions. * *VISAPLUS* – Used for ATM withdrawals on Visa. * *MAESTRO* – Used for PIN-based transactions on Mastercard. * *CIRRUS* – Used for ATM withdrawals on Mastercard. * *MASTERCARDDEBIT* – Used for signature-based transactions on Mastercard. * *GATEWAY_JIT* – Used for Gateway JIT Funding transactions. * *MANAGED_JIT* – Used for Managed JIT Funding transactions or for transactions that occur while Commando Mode is enabled. | [optional]
**token** | **string** | Unique identifier of the transaction, formatted as a UUID.  *NOTE:* For subsequent related transactions, this token value appears as the &#x60;preceding_related_transaction_token&#x60;. | [readonly]
**transaction_attributes** | **array<string,string>** | Additional transaction attributes. | [optional]
**transaction_metadata** | [**\OpenAPI\Client\Model\TransactionMetadata**](TransactionMetadata.md) |  | [optional]
**type** | **string** | Transaction event type. For more information about the &#x60;type&#x60; field, see &lt;&lt;/core-api/event-types#_transaction_events, Transaction events&gt;&gt;. | [readonly]
**user** | [**\OpenAPI\Client\Model\CardholderMetadata**](CardholderMetadata.md) |  | [optional]
**user_token** | **string** | Unique identifier of the user who owns the account that funded the transaction; subsequent related transactions retain the same &#x60;user_token&#x60;, even if the card used to complete the transaction moves to another user. | [optional]
**user_transaction_time** | **\DateTime** | Date and time when the user initiated the transaction, in UTC. For example, when a merchant performed the original authorization for a refund. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)