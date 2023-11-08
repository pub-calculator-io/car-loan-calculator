# Car Loan Calculator WordPress Widget by [Calculator.iO](https://www.calculator.io/ "Calculator.iO Homepage")

Free car loan calculator uses the formula PMT = (R × A) / (1 - (1+R)^-n) to help buyers calculate a car payment, analyze interest rates, and understand the total cost of an auto loan.

![Car Loan Calculator Input Form](/assets/images/screenshot-1.png "Car Loan Calculator Input Form")
![Car Loan Calculator Calculation Results](/assets/images/screenshot-2.png "Car Loan Calculator Calculation Results")

## Installation

1. [Download](https://github.com/pub-calculator-io/age-calculator/archive/refs/heads/master.zip) the ZIP file of this repository.
2. Upload the /car-loan-calculator-master/ folder to the /wp-content/plugins/ directory.
3. Activate the [Car Loan Calculator](https://www.calculator.io/car-loan-calculator/ "Car Loan Calculator Homepage") plugin through the "Plugins" menu in WordPress.

## Usage
* Add the shortcode `[ci_car_loan_calculator]` to your page or post and configure default mortgage parameters.
* If you are using widgets, just add the Car Loan Calculator to the sidebar through the `Appearance -> Widgets -> Car Loan Calculator` menu in WordPress.
* Add the following code: `<?php display_ci_car_loan_calculator(); ?>` to your template where you would like the Car Loan Calculator to appear.

## Libraries in Use
1. https://mathjs.org/
2. https://katex.org/
3. https://github.com/aFarkas/lazysizes
4. https://github.com/RobinHerbots/Inputmask
5. https://air-datepicker.com/
6. https://www.chartjs.org/