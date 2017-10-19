@extends('layouts.app')

@section('content')

<?php
use App\User;
$ad = User::getUser(request('userid'));
$admin = $ad[0]->superuser;

// $userid = 'niles.rowland@lennar.com';
// $job_no = '7461600096';
// $sales_rel_date = '5/30/2014';
// $base_price = '222900.00';
// $homesite_premium = '5000.00';
// $hs_incentive = '4750.00';
// $customer_incentive = '200.00';
// $total_options = '5750.00';
// $plan_id = '746160.2358';
// $elevation = 'A';
// $swing = 'L';
// $stage = 'PR';
?>

<div style="padding: 0px 0px 0px 5px">
<form method="POST" action="/homesite_update">
	{{ csrf_field() }}

	@include('partials.homesite_admin.hidden_vars')
	@include('partials.homesite_admin.homesite_form')

</form>
</div>

@endsection