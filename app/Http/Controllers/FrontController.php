<?php namespace Basquet\Http\Controllers;

use Basquet\Http\Requests;
use Basquet\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FrontController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
	}


}
