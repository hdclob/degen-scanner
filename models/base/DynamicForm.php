<?php

namespace app\models\base;

use yii\base\DynamicModel;

class DynamicForm extends DynamicModel
{
	protected $formName;
	
	public function formName()
	{
		if (empty($this->formName)) {
			return parent::formName();
		}

		return $this->formName;
	}

	public function setFormName($name)
	{
		$this->formName = $name;
	}
}
