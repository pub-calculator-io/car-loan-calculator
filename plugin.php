<?php
/*
Plugin Name: Car Loan Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/car-loan-calculator/
Description: Free car loan calculator uses the formula PMT = (R × A) / (1 - (1+R)^-n) to help buyers calculate a car payment, analyze interest rates, and understand the total cost of an auto loan.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_car_loan_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Car Loan Calculator by Calculator.iO";

function display_ci_car_loan_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/car-loan-calculator/" target="_blank"><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48"></a> Car Loan Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_car_loan_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_car_loan_calculator', 'display_ci_car_loan_calculator' );