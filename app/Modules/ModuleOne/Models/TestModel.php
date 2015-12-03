<?php namespace App\Modules\ModuleOne\Models;

use Illuminate\Database\Eloquent\Model;


class TestModel extends Model
{
	/**
	 * Added just to demonstrate that models work
	 * @return String
	 */
	public function getAny()
	{
		return 'Dummy entry';
	}
}