<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class BaseController extends Controller
{
    use RESTfull;

	public function __construct()
    {
        $this->middleware('auth');
        $this->Auth = new \Auth();
        $this->Config = new \Config();
    }

    public function index()
    {
        $list = $this->getList();
        return view($this->redirectIndexPath(), compact('list'));
    }

    public function listData()
    {
        return $this->listAjax();
    }

    public function create()
    {
        return $this->edit(0);
    }

    public function edit($id)
    {
        $item = $this->find($id);
        $lookupTable = $this->getLookUp();
        return view($this->redirectEditablePath(), compact('item', 'id', 'lookupTable'));
    }
	
	public function store(Request $request)
    {
        return $this->save($request, 0);
    }

    public function update(Request $request, $id)
    {
        return $this->save($request, $id);
    }

    public function show($id)
    {
        $item = $this->find($id);
        $lookupTable = $this->getLookUp();
        return view($this->redirectShowPath(), compact('item', 'id', 'lookupTable'));
    }

    public function destroy($id)
    {
        $item = $this->find($id);
        $item->delete();

        Session::flash('message', 'Successfully deleted the item!');
        $response = [
            'statusCode' => '200',
            'message' => 'Successfully deleted the item!'
        ];
        return response()->json($response); 
        // return Redirect::to($this->redirectPath());
    }

    protected function getList()
    {
        return null;
    }

    protected function listAjax()
    {
        return null;
    }

    protected function getLookUp()
    {
        return null;
    }
    
    protected function find($id) {
        return null;
    }

    public function save(Request $request, $id)
    {
        $validator = $this->validateData($request, $id);
        if ($validator != null && $validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        } else {
            $this->saveData($request, $id);
            Session::flash('message', 'Successfully saved the item!');
            return Redirect::to($this->redirectPath());
        }
    }

    protected function validateData(Request $request, $id)
    {
        return null;
    }

    protected function saveData(Request $request, $id) { }
}


