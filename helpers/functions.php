<?php

if (!function_exists('currency_symbol'))
{
	function currency_symbol ($currency_code) {
		return Symfony\Component\Intl\Intl::getCurrencyBundle()
											->getCurrencySymbol($currency_code);
	}
}

if (!function_exists('raw_gb_capacity'))
{
	function raw_gb_capacity ($formatted) {
		$formatted = strtolower($formatted);
		if (ends_with($formatted, "tb")) {
			$capacity = (int)str_replace_last("tb", "", $formatted);
			return $capacity * 1000;
		} elseif (ends_with($formatted, "gb")) {
			$capacity = (int)str_replace_last("gb", "", $formatted);
			return $capacity;
		}
		return 0;
	}
}