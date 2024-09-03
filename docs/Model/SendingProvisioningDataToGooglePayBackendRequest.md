# # SendingProvisioningDataToGooglePayBackendRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_setting** | **int** | Indicates if the Funding Primary Account Number (FPAN) will be attempted.  * *1* - FPAN save will be attempted. * *0* - FPAN save will not be attempted. |
**card_token** | **string** | Unique identifier of the card resource. |
**client_session_id** | **string** | String provided by Google Wallet that identifies the client session. |
**integrator_id** | **string** | Google-assigned string that uniquely identifies both the integrator that is initiating the session and the issuer of the card. |
**public_device_id** | **string** | String provided by Google Wallet that identifies the Android device that will receive the digital wallet token. |
**public_wallet_id** | **string** | String provided by Google Wallet that identifies the device-scoped wallet that receives the digital wallet token. |
**server_session_id** | **string** | String provided by Google Wallet that identifies the backend session. |
**token_setting** | **int** | Indicates if tokenization will be attempted.  * *1* - Tokenization will be attempted. * *0* - Tokenization will not be attempted. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
