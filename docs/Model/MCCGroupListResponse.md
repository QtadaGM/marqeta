# # MCCGroupListResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**count** | **int** | The number of resources to retrieve.  This field is returned if there are resources in your returned array. | [optional]
**data** | [**\OpenAPI\Client\Model\MccGroupModel[]**](MccGroupModel.md) | An array of MCC group objects.  Objects are returned as appropriate to your query. | [optional]
**end_index** | **int** | The sort order index of the last resource in the returned array.  This field is returned if there are resources in your returned array. | [optional]
**is_more** | **bool** | A value of &#x60;true&#x60; indicates that more unreturned resources exist. A value of &#x60;false&#x60; indicates that no more unreturned resources exist.  This field is returned if there are resources in your returned array. | [optional] [default to false]
**start_index** | **int** | The sort order index of the first resource in the returned array.  This field is returned if there are resources in your returned array. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)