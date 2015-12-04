<?php namespace App\Modules\ModuleOne\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ModuleOne\Models\TestModel;

/**
 * IndexController
 *
 * Controller to house all the functionality directly
 * related to the ModuleOne.
 */
class IndexController extends Controller
{
	function __construct( TestModel $testModel )
	{
		$this->testModel = $testModel;
	}

	public function index()
	{
		// ModuleOne is the module name and dummy is the blade file
		// you can specify ModuleOne::someFolder.file if your file exists
		// inside a folder. Also the blade will use the same syntax i.e.
		// ModuleName::viewName
		return view('ModuleOne::dummy');
	}

	public function modelTest()
	{
		// Added just to demonstrate that models work
		return $this->testModel->getAny();
	}
}
