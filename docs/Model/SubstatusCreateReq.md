# # SubstatusCreateReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attributes** | [**\OpenAPI\Client\Model\SubstatusCreateReqAttributes[]**](SubstatusCreateReqAttributes.md) | Additional dynamic attributes related to the substatus. | [optional]
**events** | [**\OpenAPI\Client\Model\SubstatusEvent[]**](SubstatusEvent.md) | List of events related to the substatus. |
**resource_token** | **string** | The unique identifier of the user or account for which you want to create a substatus. |
**resource_type** | **string** | Possible values: USER, ACCOUNT. |
**substatus** | **string** | Possible values: HARDSHIP, FRAUD, MLA, SCRA, DECEASED, BANKRUPTCY. |
**token** | **string** | Unique identifier of the substatus. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
