@extends('layouts.admin')

@section('title', 'Transport :: Category')
@section('category', 'active')

@section('css')
<link href="{{ url('assets/components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">
<link href="{{ url('assets/components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid" id="container-content">
   <div class="row row-offcanvas row-offcanvas-left">
      @include('includes.sidebar-administration')
      <div class="col-xs-12 col-sm-10 container-trailing">
         <div class="trailing">Administration / Category</div>
      </div>
      <div class="col-xs-12 col-sm-10 content">
         @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
         @endif
         <div class="btn-container">
            <a href="{{ route('category.create') }}" class="btn btn-add">Add New</a>
         </div>
         <div class="container-fluid table-responsive" align="center-block">
            
            <table class="table table-striped table-hover" id="dataTables">
               <thead>
                  <tr>
                     <th>Name</th>
                     <th>Target</th>
                     <th>Fleet</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@stop

@section('js')
<script src="{{ url('assets/components/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function() {
   listManager.listUrl = "{{ route('category.index') }}/list";
   listManager.deleteUrl = "{{ route('category.index') }}";
   listManager.token = "{{ csrf_token() }}";
   listManager.searching = true;
   listManager.bLengthChange = true;
   listManager.dataTable = [
                              { "data": "categoryName" },
                              { "data": "target" },
                              { "data": "fleetName" },
                              { "data": 'action', name: 'action', orderable: false, searchable: false},
                         ];
   listManager.ready();
});
</script>
@endsection