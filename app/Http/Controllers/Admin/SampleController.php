<?php 

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Datatables;

class SampleController extends BaseController
{
    protected $redirectTo = 'membership/category'; // REDIRECT URL
    protected $redirectIndex = 'category.index'; // View category
    protected $redirectEditable = 'category.editable'; // vied add and update

    /**
    * Send data to view
    */
    protected function getList()
    {
        // return \App\Models\Category::all(); 
    }

    /**
    * list ajax for datatables
    */
    protected function listAjax()
    {
        $category = new \App\Models\Category(); 
        $category = $category->join('customers', 'customers.customerId', '=', 'categories.customerId')->join('fleet', 'categories.fleetId', '=', 'fleet.fleetId')->select(['categories.categoryId', 'categories.customerId', 'categories.categoryName', 'categories.target', 'categories.fleetId', 'customers.name', 'fleet.fleetId', 'fleet.fleetName']);

        return Datatables::of($category)
            ->addColumn('action', function ($category)
            {
                $action = '';
                $action .= '<a href="'.route('category.index').'/'.$category->categoryId.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>&nbsp;&nbsp;&nbsp;';
                $action .= '<a href="#" class="btn btn-xs btn-primary" onClick="listManager.delete(\''.$category->categoryId.'\')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
                return $action;
            })
            ->editColumn('id', 'ID: {{$categoryId}}')
            ->make(true);
    }

    protected function getLookUp()
    {
        $data['fleets'] = \App\Models\Fleet::all();
        return $data; // data
    }

    protected function find($id)
    {
        return \App\Models\Category::find($id);
    }

    protected function validateData(Request $request, $id)
    {
        if($id > 0) return null;
        return Validator::make($request->all(), [
            'categoryName' => 'required|string|max:20',
            'target' => 'nullable|string|max:100',
            'fleetId' => 'nullable|numeric|max:20',
        ]);
    }

    protected function saveData(Request $request, $id)
    {
        $item = new \App\Models\Category();
        
        if($id > 0) $item = $item->find($id);

        $item->customerId = $this->Auth::user()->customerId;
        $item->categoryName = $request->categoryName;
        $item->target = $request->target;
        $item->fleetId = $request->fleetId;
        $item->save();
    }
}