function calculate(){
	const amount = input.get('amount').gt(0).val();
	const termLoan = input.get('term').gt(0).val();
	const interest = input.get('interest').gt(0).val();
	if(!input.valid()) return;

	const monthlyPayment = calculatePayment(amount, termLoan, interest);

	output.val(currencyFormat(monthlyPayment)).set('monthly-payment');
	output.val(currencyFormat(monthlyPayment * termLoan)).set('total');
	output.val(currencyFormat(monthlyPayment * termLoan - amount)).set('total-interest');

}

function calculatePayment(finAmount, finMonths, finInterest){
	var result = 0;

	if(finInterest == 0){
		result = finAmount / finMonths;
	}
	else{
		var i = ((finInterest/100) / 12),
			i_to_m = Math.pow((i + 1), finMonths),
			p = finAmount * ((i * i_to_m) / (i_to_m - 1));
		result = Math.round(p * 100) / 100;
	}

	return result;
}

function currencyFormat(price){
	return '$' + price.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
