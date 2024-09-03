# # DigitalWalletToken

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_verification** | [**\OpenAPI\Client\Model\AddressVerification**](AddressVerification.md) |  | [optional]
**card_token** | **string** | Unique identifier of the card. | [optional]
**created_time** | **\DateTime** | Date and time when the digital wallet token object was created, in UTC. | [optional]
**device** | [**\OpenAPI\Client\Model\Device**](Device.md) |  | [optional]
**fulfillment_status** | **string** | Digital wallet token&#39;s provisioning status.  For fulfillment status descriptions, see &lt;&lt;/core-api/digital-wallets-management#postDigitalwallettokentransitions, Create digital wallet token transition&gt;&gt;. | [optional]
**issuer_eligibility_decision** | **string** | The Marqeta platform&#39;s decision as to whether the digital wallet token should be provisioned.  * *0000* – The token should be provisioned.  * *token.activation.verification.required* – Provisioning is pending; further action is required for completion.  For all other values, check the value of the &#x60;fulfillment_status&#x60; field to definitively ascertain the provisioning outcome.  *NOTE:* The value &#x60;invalid.cid&#x60; indicates an invalid CVV2 number. | [optional]
**last_modified_time** | **\DateTime** | Date and time when the digital wallet token object was last modified, in UTC. | [optional]
**metadata** | [**\OpenAPI\Client\Model\DigitalWalletTokenMetadata**](DigitalWalletTokenMetadata.md) |  | [optional]
**state** | **string** | State of the digital wallet token.  For state descriptions, see &lt;&lt;/developer-guides/managing-the-digital-wallet-token-lifecycle#_transitioning_token_states, Transitioning Token States&gt;&gt;. | [optional]
**state_reason** | **string** | Reason why the digital wallet token transitioned to its current state. | [optional]
**token** | **string** | Unique identifier of the digital wallet token. | [optional]
**token_service_provider** | [**\OpenAPI\Client\Model\TokenServiceProvider**](TokenServiceProvider.md) |  | [optional]
**transaction_device** | [**\OpenAPI\Client\Model\TransactionDevice**](TransactionDevice.md) |  | [optional]
**user** | [**\OpenAPI\Client\Model\UserCardHolderResponse**](UserCardHolderResponse.md) |  | [optional]
**wallet_provider_profile** | [**\OpenAPI\Client\Model\WalletProviderProfile**](WalletProviderProfile.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
