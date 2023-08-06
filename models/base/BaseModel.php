<?php

namespace app\models\base;

use yii\base\Model;

class BaseModel extends Model
{
	public function isEmpty()
	{
		$empty = true;
		foreach ($this->attributes as $val) {
			if (!empty($val)) {
				$empty = false;
				break;
			}
		}

		return $empty;
	}
}
