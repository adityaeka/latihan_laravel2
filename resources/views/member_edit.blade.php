<form action="" method="post">
	{!! csrf_field() !!} <!-- automatic generate <input type="hidden" name="token" value=""> -->
	<table>
		<tr>
			<td>Name</td><td>:</td><td><input type="text" name="name" size="40" required="" value="{{ $row->name }}"></td>
		</tr>
		<tr>
			<td>Address</td><td>:</td><td><input type="text" name="address" size="40" required="" value="{{ $row->address }}"></td>
		</tr>
		<tr>
			<td>Phone</td><td>:</td><td><input type="text" name="phone" size="40" required="" value="{{ $row->phone }}"></td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td>
			<td>
				<input type="submit" value="Simpan">
			</td>
		</tr>
	</table>
</form>