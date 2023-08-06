<?php

namespace app\helpers;

class DateTimeHelper
{
	public static function getTimeAgoString($dateTimeString)
	{
		$currentTime = time();
		$timeAgo = strtotime($dateTimeString);
		$timeDifference = $currentTime - $timeAgo;
		$secondsAgo = floor($timeDifference / 1000);
		$minutesAgo = floor($secondsAgo / 60);
		$hoursAgo = floor($minutesAgo / 60);
		$daysAgo = floor($hoursAgo / 24);

		if ($secondsAgo < 60) {
			return "{$secondsAgo} second" . ($secondsAgo === 1 ? '' : 's');
		}
		if ($minutesAgo < 60) {
			return "{$minutesAgo} minute" . ($minutesAgo === 1 ? '' : 's');
		}
		if ($hoursAgo < 24) {
			return "{$hoursAgo} hour" . ($hoursAgo === 1 ? '' : 's');
		}
		return "{$daysAgo} day" . ($daysAgo === 1 ? '' : 's');
	}
}
