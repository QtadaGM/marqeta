# # ProgramTransfer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Amount of program transfer. |
**business_token** | **string** | Unique identifier of the business. Pass either a &#x60;business_token&#x60; or a &#x60;user_token&#x60;, not both.  Send a &#x60;GET&#x60; request to &#x60;/businesses&#x60; to retrieve business tokens. | [optional]
**currency_code** | **string** | Three-digit ISO 4217 currency code. |
**fees** | [**\OpenAPI\Client\Model\FeeModel[]**](FeeModel.md) | Contains attributes that define characteristics of one or more fees. This array is returned in the response when it is included in the request. | [optional]
**memo** | **string** | Memo or note describing the program transfer. | [optional]
**tags** | **string** | Comma-delimited list of tags describing the program transfer. | [optional]
**token** | **string** | Unique identifier of the program transfer.  If you do not include a token, the system will generate one automatically. This token is necessary for use in other API calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated. | [optional]
**type_token** | **string** | Unique identifier of the program transfer type.  Send a &#x60;GET&#x60; request to &#x60;/programtransfers/types&#x60; to retrieve program transfer type tokens. |
**user_token** | **string** | Unique identifier of the user. Pass either a &#x60;user_token&#x60; or a &#x60;business_token&#x60;, not both.  Send a &#x60;GET&#x60; request to &#x60;/users&#x60; to retrieve business tokens. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
