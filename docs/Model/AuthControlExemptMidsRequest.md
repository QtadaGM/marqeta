# # AuthControlExemptMidsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**association** | [**\OpenAPI\Client\Model\SpendControlAssociation**](SpendControlAssociation.md) |  | [optional]
**end_time** | **\DateTime** | Date and time when the exception ends, in UTC. | [optional]
**merchant_group_token** | **string** | Unique identifier of the merchant group to be exempted. This field is required if there is no entry in the &#x60;mid&#x60; field. Pass either this field or the &#x60;mid&#x60; field, not both.  For information about merchant groups, see &lt;&lt;/core-api/merchant-groups, Merchant Groups&gt;&gt;. | [optional]
**mid** | **string** | Merchant to be exempted. This field is required if there is no entry in the &#x60;merchant_group_token&#x60; field. Use either this field or the &#x60;merchant_group_token&#x60; field, not both. | [optional]
**name** | **string** | Name of the merchant identifier authorization control exemption. |
**start_time** | **\DateTime** | Date and time when the exception starts, in UTC. | [optional]
**token** | **string** | Unique identifier of the merchant identifier authorization control exemption.  If you do not include a token, the system will generate one automatically. This token is necessary for use in other API calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
