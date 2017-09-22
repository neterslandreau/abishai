@extends('layouts.app')

@section('content')
<div class="container">

	<h2><small>User Administration</small></h2>
	<form class="form-inline" id="user-form" method="POST">
	{{ csrf_field() }}
		<div class="form-group col-xs-6">
			<input class="form-control" type="text" name="email" id="user-form-email" placeholder="Enter user email or login">
			<button type="submit" class="btn btn-default">Go</button>
		</div>
	</form>
</div>


@if (isset($users) && count($users))

<div id="user-results" class="container">

<div style="height:80px;">
	<div id="ua-success" class="alert alert-success col-xs-12" style="display:none"></div>
</div>

@include('partials/user_admin/table_start')
	@foreach ($users as $user)

		@include('partials/user_admin/user_row')

	@endforeach

@include('partials/user_admin/table_end')

</div>
@elseif (isset($users) && !count($users))
<div class="container">
<div class="col-xs-4 text-danger">User not found!</div>
</div>
@endif
@endsection
