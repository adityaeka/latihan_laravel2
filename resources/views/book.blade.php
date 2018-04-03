<!DOCTYPE html>
<html>
<head>
	<title>Book</title>
</head>
<body>
	<p>
		<a href="{{ url('book/create') }}">Tambah Data</a>
	</p>
	<table width="600px" cellspacing="0" cellpadding="10" border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Book Name</th>
				<th>Book Code</th>
				<th>Author</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($books as $book)
			<tr>
				<td>{{ $book->id }}</td>
				<td>{{ $book->book_name }}</td>
				<td>{{ $book->book_code }}</td>
				<td>{{ $book->authors_id }}</td>
				<td>
					<a href="{{ url('book/edit/'.$book->id) }}">Edit</a> /
					<a href="{{ url('book/delete/'.$book->id) }}">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<p>
		{!! $books->appends($_GET)->links() !!}
	</p>
</body>
</html>