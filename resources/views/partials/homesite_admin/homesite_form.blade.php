<table class="borders_left" border="0">
	<tr>
		<td colspan="5" style="font-weight: bold; text-align=center; color:blue;">LENNAR</td>
	</tr>
	<tr>
		<td colspan="5" style="font-weight: bold; text-align=center;">Homesite Admin Update</td>
	</tr>
	<tr>
		<td colspan="5">&nbsp;</td>
	</tr>
	<tr>
		<td>Homesite Job #</td>
		<td colspan="2">{{ $job_no }}</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>User Email</td>
		<td colspan="2">{{ $userid }}</td>
		<td style="text-align:center;text-decoration:underline">OTO Values</td>
		<td style="text-align:center;text-decoration:underline">JDE Values</td>
	</tr>
	<tr>
		<td>Sale Release Date</td>
		<td colspan="2">
			<input type="text" name="sales_rel_date" class="datepicker3" value="{{ $sales_rel_date }}" >
		</td>
		<td style="text-align:center;text-decoration:underline">{{ $sales_rel_date }}</td>
		<td style="text-align:center;text-decoration:underline">{{ $sales_rel_date }}</td>
	</tr>
	<tr>
		<td>Base Price</td>
		<td colspan="2">
			<input type="text" name="base_price" value="{{ $base_price }}">
		</td>
		<td style="text-align:right">{{ $base_price }}</td>
		<td style="text-align:right">{{ $base_price }}</td>
	</tr>
	<tr>
		<td>Homesite Premium</td>
		<td colspan="2">
			<input type="text" name="homesite_premium" value="{{ $homesite_premium }}" >
		</td>
		<td style="text-align:right">{{ $homesite_premium }}</td>
		<td style="text-align:right">{{ $homesite_premium }}</td>
	</tr>
	<tr>
		<td>Incentive Price Reduction</td>
		<td colspan="2">
			<input type="text" name="hs_incentive" value="{{ $hs_incentive }}">
		</td>
		<td style="text-align:right">{{ $hs_incentive }}</td>
		<td style="text-align:right">{{ $hs_incentive }}</td>
	</tr>
	<tr>
		<td>Incentive Options</td>
		<td colspan="2">
			<input type="text" name="c_inc" value="{{ $c_inc }}">
		</td>
		<td style="text-align:right">{{ $c_inc }}</td>
		<td style="text-align:right">{{ $c_inc }}</td>
	</tr>
	<tr>
		<td>Total Options</td>
		<td colspan="2">
			<input type="text" name="tot_opt" value="{{ $tot_opt }}">
		</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>Plan ID</td>
		<td colspan="2">{{ $plan_id }}</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>Homesite Elevation</td>
		<td colspan="2">{{ $elevation }}</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>Homesite Swing</td>
		<td colspan="2">{{ $swing }}</td>
		<td>OTO-{{ $swing }}</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>Construction Stage</td>
		<td colspan="2">
			<select name="stage">
				<option selected value="{{ $stage }}">{{ $stage }}</option>
			</select>
		</td>
		<td>OTO-{{ $stage }}</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td colspan="5">&nbsp;</td>
	</tr>
	<tr>
		<td>Prevent JDE Updates? </td>
		<td colspan="2">
			<input name="jde_update" id="jde_update" type="checkbox" >
		</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td colspan="5">&nbsp;</td>
	</tr>

	@if ($admin == 'S')
		@include('partials.homesite_admin.superuser_row')
	@endif

	<tr>
		<td colspan="5">&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td align="center">
			<input type="submit" name="sub" id="sub" value="Update Homesite">
		</td>
		<td>&nbsp;</td>
		<td align="center">
			<input type="submit" name="substage" id="substage" value="Update Stage Only">
		</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td colspan="5">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="5">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="5" style="font-size:9 text-align=center;">{{ $_SERVER['HTTP_HOST'] }}</td>
	</tr>

</table>
