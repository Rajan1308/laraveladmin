@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/sales') }}">Sale</a> :
@endsection
@section("contentheader_description", $sale->$view_col)
@section("section", "Sales")
@section("section_url", url(config('laraadmin.adminRoute') . '/sales'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Sales Edit : ".$sale->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($sale, ['route' => [config('laraadmin.adminRoute') . '.sales.update', $sale->id ], 'method'=>'PUT', 'id' => 'sale-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'mobile')
					@la_input($module, 'email')
					@la_input($module, 'amount')
					@la_input($module, 'subscription ')
					@la_input($module, 'saleby')
					@la_input($module, 'mobile2')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/sales') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#sale-edit-form").validate({
		
	});
});
</script>
@endpush
