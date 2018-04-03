<form action="" method="post">
	{!! csrf_field() !!} <!-- automatic generate <input type="hidden" name="token" value=""> -->
	<table>
		<tr>
			<td>Author Name</td><td>:</td><td><input type="text" name="author_name" size="40" required=""></td>
		</tr>
		<tr>
			<td>Author Code</td><td>:</td><td><input type="text" name="author_code" size="40" required=""></td>
		</tr>
		<tr>
			<td>Author Region</td><td>:</td><td><input type="text" name="author_region" size="40" required=""></td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td>
			<td>
				<input type="submit" value="Tambah">
			</td>
		</tr>
	</table>
</form>