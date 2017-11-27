<?php namespace App\Http\Controllers\Api;

use Illuminate\Routing\Controller as BaseController;
// use App\Models\User;

class UserController extends BaseController
{
	public function __construct()
	{
	}

	public function index()
	{
		$params['field'] 		= isset($_REQUEST['field'])?explode(",",$_REQUEST['field']):'';
		$params['orderBy'] 		= isset($_REQUEST['orderBy'])?$_REQUEST['orderBy']:'';
		$params['orderType'] 	= isset($_REQUEST['orderType'])?$_REQUEST['orderType']:'';
		$params['limit'] 		= isset($_REQUEST['limit'])?(int)$_REQUEST['limit']:'1';
		$params['offset'] 		= isset($_REQUEST['offset'])?(int)$_REQUEST['offset']:'0';
		$params['publishStatus'] = isset($_REQUEST["publishStatus"])?$_REQUEST["publishStatus"]:"";
		$params['sliderTypeId'] = isset($_REQUEST["sliderTypeId"])?$_REQUEST["sliderTypeId"]:"";
		$selector = "*";

		echo json_encode($params);
	}
}
