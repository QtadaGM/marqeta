# # AprScheduleEntryCreateReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**margin** | **float** | Number of percentage points added to the prime rate, used to calculate a variable value.  Used for variable values only. | [optional]
**type** | **string** | Indicates whether the APR value is fixed or variable. | [optional] [default to 'FIXED']
**value** | **float** | Percentage value of the APR.  If the APR type is &#x60;FIXED&#x60;, this is the value of the fixed rate. If the APR type is &#x60;VARIABLE&#x60;, the value is calculated by adding the margin to the prime rate that was stored on Marqeta&#39;s credit platform when your credit program was created.  When backdating an APR, this value cannot be greater than the value of the effective APR on the backdated date. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
