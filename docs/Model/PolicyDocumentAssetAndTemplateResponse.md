# # PolicyDocumentAssetAndTemplateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asset_created_time** | **\DateTime** | Date and time when the asset was created. | [optional]
**asset_token** | **string** | Unique identifier of the asset, which is the version of a document that is based on the template and contains finalized values. The values are finalized when the bundle containing the document is created. | [optional]
**asset_urls** | [**\OpenAPI\Client\Model\PolicyDocumentAssetURLs**](PolicyDocumentAssetURLs.md) |  | [optional]
**template_created_time** | **\DateTime** | Date and time when the template was created. | [optional]
**template_token** | **string** | Unique identifier of the template, which is the version of a document that serves as an initial disclosure but does not contain finalized values. Values are finalized in the asset version of the document. | [optional]
**template_urls** | [**\OpenAPI\Client\Model\PolicyDocumentTemplateURLs**](PolicyDocumentTemplateURLs.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
