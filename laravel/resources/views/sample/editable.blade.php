@extends('layouts.admin')

@section('title', 'Transport :: Category')
@section('category', 'active')

@section('content')
<div class="container-fluid" id="container-content">
   	<div class="row row-offcanvas row-offcanvas-left">
		@include('includes.sidebar-administration')
		<div class="col-xs-12 col-sm-10 container-trailing">
			<div class="trailing">Administration / Category / {{ ($id == 0 ? 'Add' : 'Update') }}</div>
		</div>
		<div class="col-xs-12 col-sm-10 content">
			<div class="panel panel-primary">
				<div class="panel-heading">Category {{ ($id == 0 ? 'Add' : 'Update') }}</div>
				<form method="POST" class="form-horizontal" action="{{ url(route('category.index') . ($id == 0 ? '' : '/' . $id)) }}" enctype="multipart/form-data">
					<div class="panel-body">
						@if ($errors->any())
						<div class="alert alert-danger">
						    <ul>
						        @foreach ($errors->all() as $error)
						            <li>{{ $error }}</li>
						        @endforeach
						    </ul>
						</div>
						@endif
					    {{ csrf_field() }}
					    @if($id != 0)
					    <input name="_method" type="hidden" value="PUT">
						@endif
						<div class="row">
							<div class="col-lg-8">

					            <div class="form-group">
					               <label for="Name" class="col-sm-2 control-label">Name</label>
					               <div class="col-sm-10">
					                  <input type="text" name="categoryName" class="form-control" id="Name" placeholder="Name" required="" value="{{ old('categoryName', isset($item) ? $item->categoryName : '') }}" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Target" class="col-sm-2 control-label">Target</label>
					               <div class="col-sm-10">
					                  <input type="text" name="target" class="form-control" id="Target" placeholder="Target" value="{{ old('target', isset($item) ? $item->target : '') }}"/>
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Fleet" class="col-sm-2 control-label">Fleet</label>
					               <div class="col-sm-4" class="form-control">
					                  <select name="fleetId" class="form-control" id="Fleet" placeholder="Fleet">
					                     @foreach ($lookupTable['fleets'] as $fleet)
					                     <option value="{{ $fleet->fleetId }}">{{ $fleet->fleetName }}</option>
					                     @endforeach
					                  </select>
					               </div>
					            </div>

					      	</div>
					    </div>
					</div>
					<div class="panel-footer">
						<div class="col-lg-2">
							<button class="btn btn-md btn-block btn-primary" type="submit">Save</button>
						</div>
						<div class="col-lg-2">
							<a href="{{ route('category.index') }}" class="btn btn-md btn-block btn-default">Cancel</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</form>
			</div>
      	</div>
  	</div>
</div>
@endsection