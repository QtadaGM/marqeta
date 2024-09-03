# # Pos

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_data_input_capability** | **string** | How the terminal accepts card data. | [optional]
**card_holder_presence** | **bool** | Whether the cardholder was present during the transaction. | [optional] [default to false]
**card_presence** | **bool** | Whether the card was present during the transaction. | [optional] [default to false]
**cardholder_authentication_method** | **string** | Method used to authenticate the cardholder. | [optional]
**country_code** | **string** | Country code of the card acceptor or terminal. | [optional]
**is_installment** | **bool** | Whether the transaction is an installment payment. | [optional] [default to false]
**is_recurring** | **bool** | Whether the transaction is recurring. | [optional] [default to false]
**pan_entry_mode** | **string** | Method used for capturing the card primary account number (PAN) during the transaction. | [optional]
**partial_approval_capable** | **bool** | Indicates whether the card acceptor or terminal supports partial-approval transactions. | [optional] [default to false]
**pin_entry_mode** | **string** | Indicates whether the card acceptor or terminal can capture card personal identification numbers (PINs).  *NOTE:* This field does not indicate whether a PIN was entered. | [optional]
**pin_present** | **bool** | Indicates whether the cardholder entered a PIN during the transaction. | [optional] [default to false]
**purchase_amount_only** | **bool** | Indicates whether the card acceptor or terminal supports purchase-only approvals. | [optional] [default to false]
**special_condition_indicator** | **string** | Indicates a higher-risk operation, such as a quasi-cash or cryptocurrency transaction.  These transactions typically involve non-financial institutions. | [optional]
**terminal_attendance** | **string** | Whether the card acceptor/terminal was attended. | [optional]
**terminal_id** | **string** | Card acceptor or terminal identification number. | [optional]
**terminal_location** | **string** | Location of the card acceptor/terminal. | [optional]
**terminal_type** | **string** | Type of card acceptor/terminal. | [optional]
**transaction_initiated_by** | **string** | Specifies whether the transaction was initiated by a cardholder or a merchant. | [optional]
**zip** | **string** | United States ZIP code of the card acceptor or terminal. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
