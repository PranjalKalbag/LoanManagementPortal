var customer_id;
var loan_id;
var bo = true;
function validatelogin()
{
	customer_id = document.loginform.customer_id.value;
	if(customer_id.length<=0)
	{
		alert('Please Enter Valid Customer ID')
		bo = false;
		return false;
	}
	loan_id = document.loginform.loan_id.value;
	if(loan_id.length<=0)
	{
		alert('Please Enter Valid Loan ID')
		bo=false;
		return false;
	}
	
}

