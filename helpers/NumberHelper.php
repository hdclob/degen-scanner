<?php

namespace app\helpers;

class NumberHelper
{
	const THOUSAND = 1000;
	const MILLION = 1000000;
	const BILLION = 1000000000;
	const TRILLION = 1000000000000;

	public static function abbreviateNumber($number)
	{
		if (!is_numeric($number)) {
			return '--';
		}

		if ($number >= static::TRILLION) {
			return round(($number / static::TRILLION), 2) . 'T';
		}
		if ($number >= static::BILLION) {
			return round(($number / static::BILLION), 2) . 'B';
		}
		if ($number >= static::MILLION) {
			return round(($number / static::MILLION), 2) . 'M';
		}
		if ($number >= static::THOUSAND) {
			return round(($number / static::THOUSAND), 2) . 'k';
		}
		return round($number, 2);
	}
}
