
<form method="POST" class="form-horizontal" id="update-user-form-user_status-{{ $user->userid }}">
{{ csrf_field() }}
	<fieldset>
		<select name="user_status" id="user_status-{{ $user->userid }}">
			<option value="Inactive" @if(($user->user_status) === 'Inactive') selected @endif>Inactive</option>
			<option value="Active"@if(($user->user_status) === 'Active') selected @endif>Active</option>
		</select>
		<input type="button" value="Update" class="update-user-form-submit">
	</fieldset>
</form>