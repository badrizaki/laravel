<?php 

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Datatables;

class HomeController extends BaseController
{
    protected $redirectTo = ''; // REDIRECT URL
    protected $redirectIndex = 'home'; // View index
    protected $redirectEditable = ''; // vied add and update

    /**
    * Send data to view
    */
    protected function getList()
    {
        // return Index::all(); 
    }

    /**
    * list ajax for datatables
    */
    protected function listAjax()
    {
        /*
        $index = new \App\Models\Index(); 
        $index = $index->select(['indexId', 'indexName', 'created_at', 'updated_at']);

        return Datatables::of($index)
            ->addColumn('action', function ($index)
            {
                return '<a href="#edit-'.$index->indexId.'" class="btn btn-xs btn-primary" onclick="popupManager.update(\''.$index->indexId.'\');"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->editColumn('id', 'ID: {{$indexId}}')
            ->make(true);
        */
    }

    public function listOrder(Request $request)
    {
        $resultJson = array("draw" => $request->draw, "recordsTotal" => 0, "recordsFiltered" => 0, "data" => "");
        $data[] = array(
            'invoice' => "53431",
            'user' => 'Steve N. Horton',
            'order_date' => date('D M Y'),
            'amount' => '45.00',
            'status' => 'Refunded',
            'tracking_number' => '-'
        );

        $data[] = array(
            'invoice' => "53432",
            'user' => 'Charles S Boyle',
            'order_date' => date('D M Y'),
            'amount' => '245.00',
            'status' => 'Paid',
            'tracking_number' => '-'
        );

        $data[] = array(
            'invoice' => "53433",
            'user' => 'Lucy Doe',
            'order_date' => date('D M Y'),
            'amount' => '100.00',
            'status' => 'Shipped',
            'tracking_number' => '-'
        );

        $data[] = array(
            'invoice' => "53434",
            'user' => 'Teresa L. Doe',
            'order_date' => date('D M Y'),
            'amount' => '56.00',
            'status' => 'Paid',
            'tracking_number' => '-'
        );

        $data[] = array(
            'invoice' => "53435",
            'user' => 'Teresa L. Doe',
            'order_date' => date('D M Y'),
            'amount' => '40.00',
            'status' => 'Shipped',
            'tracking_number' => '-'
        );

        $resultJson = array(
            "draw" => $request->draw,
            "recordsTotal" => count($data),
            "recordsFiltered" => count($data),
            "data" => $data
        );
        return response()->json($resultJson);
    }

    protected function find($id)
    {
        // return Index::find($id);
    }

    protected function validateData(Request $request, $id)
    {
        /*if($id > 0) return null;
        return Validator::make($request->all(), [
            'url' => 'required|mimetypes:image/jpeg,image/jpg'
        ]);*/
    }

    protected function saveData(Request $request, $id)
    {
        /*$item = new Index();
        
        if($id > 0)
            $item = Index::find($id);
        else
            $item->url = '';

        $item->title = $request->title;
        $item->description = $request->description;
        $item->link_text = $request->link_text;
        $item->link_url = $request->link_url;
        $item->save();*/
    }
}
