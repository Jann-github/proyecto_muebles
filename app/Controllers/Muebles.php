<?php namespace App\Controllers;
use App\Models\MueblesModel;
class Muebles extends BaseController
{
	public function index()
	{
		return view('crudMuebles');
	}

	public function mostrarMuebles() {
		$muebles =  new MueblesModel();
		$datos = $muebles->muestraMuebles();
		echo json_encode($datos);
	}

	//--------------------------------------------------------------------

}
