<form method="POST" id="update-user-form-superuser-{{ $user->userid }}">
{{ csrf_field() }}
<fieldset>
	<select name="superuser" id="superuser-{{ $user->userid }}">
		<option value="" @if(($user->superuser) === '') selected @endif >None</option>
		<option value="S" @if(($user->superuser) === 'S') selected @endif >Superuser</option>
		<option value="G" @if(($user->superuser) === 'G') selected @endif >Stageuser</option>
	</select>
	<input type="button" value="Update" class="update-user-form-submit">
</fieldset>
</form>
