<tr>
	<td>{{ $user->first_name }}</td>
	<td>{{ $user->last_name }}</td>
	<td>{{ $user->email }}</td>
	<td id="table-column-user_status-{{ $user->userid }}">{{ $user->user_status }}</td>
	<td id="table-column-superuser-{{ $user->userid }}">{{ $user->superuser }}</td>
	<td>@include('partials/user_admin/superuser_form')</td>
	<td>@include('partials/user_admin/status_form')</td>

</tr>