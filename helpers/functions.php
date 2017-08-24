<?php

if (!function_exists('currency_symbol'))
{
	/**
	 * Converts currency codes into currency symbols for display.
	 *
	 * @param $currency_code
	 *
	 * @return null|string
	 */
	function currency_symbol ($currency_code) {
		return Symfony\Component\Intl\Intl::getCurrencyBundle()
											->getCurrencySymbol($currency_code);
	}
}

if (!function_exists('raw_gb_capacity'))
{
	/**
	 * Gets the actual storage capacity in gigabytes
	 * from formatted strings such as '4TB', '250GB', etc.
	 *
	 * @param $formatted
	 *
	 * @return int
	 */
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