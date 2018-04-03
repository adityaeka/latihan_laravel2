<form action="" method="post">
	{!! csrf_field() !!} <!-- automatic generate <input type="hidden" name="token" value=""> -->
	<table>
		<tr>
			<td>Book Name</td><td>:</td><td><input type="text" name="book_name" size="40" required="" value="{{ $row->book_name }}"></td>
		</tr>
		<tr>
			<td>Book Code</td><td>:</td><td><input type="text" name="book_code" size="40" required="" value="{{ $row->book_code }}"></td>
		</tr>
		<tr>
			<td>Author</td><td>:</td><td><input type="text" name="authors_id" size="40" required="" value="{{ $row->authors_id }}"></td>
		</tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td>
			<td>
				<input type="submit" value="Simpan">
			</td>
		</tr>
	</table>
</form>