<?php

namespace app\helpers;

class FinancialHelper
{
	public static function getPriceVariance($price, $oldPrice)
	{
		if (!is_numeric($price) || !is_numeric($oldPrice)) {
			return '--';
		}

		return (($price - $oldPrice) / abs($oldPrice)) * 100;
	}
}
