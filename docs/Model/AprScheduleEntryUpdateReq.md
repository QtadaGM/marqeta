# # AprScheduleEntryUpdateReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apply_next_cycle** | **bool** | Whether the APR can be ignored for the current billing cycle and applied on the next. | [optional] [default to false]
**effective_date** | **\DateTime** | Date and time when the APR goes into effect, in UTC.  If you do not include a date-time value, the system uses the date and time when the API request was received.  *NOTE:* When passing multiple &#x60;schedule&#x60; objects, this field is required in all objects but the first. If you do not include &#x60;effective_date&#x60; in the first &#x60;schedule&#x60;, the system uses the date and time when the API request was received. | [optional]
**margin** | **float** | Number of percentage points added to the prime rate, used to calculate a variable value.  Used for variable values only. | [optional]
**type** | **string** | Indicates whether the APR value is fixed or variable. | [optional] [default to 'FIXED']
**value** | **float** | Percentage value of the APR.  If the APR type is &#x60;FIXED&#x60;, this is the value of the fixed rate. If the APR type is &#x60;VARIABLE&#x60;, the value is calculated by adding the margin to the prime rate that was stored on Marqeta&#39;s credit platform when your credit program was created.  When backdating an APR, this value cannot be greater than the value of the effective APR on the backdated date. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
