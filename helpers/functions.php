<?php

if (!function_exists('currency_symbol'))
{
	function currency_symbol ($currency_code) {
		return Symfony\Component\Intl\Intl::getCurrencyBundle()
											->getCurrencySymbol($currency_code);
	}
}