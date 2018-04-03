<!DOCTYPE html>
<html>
<head>
	<title>Author</title>
</head>
<body>
	<p>
		<a href="{{ url('author/create') }}">Tambah Data</a>
	</p>
	<table width="600px" cellspacing="0" cellpadding="10" border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Author Name</th>
				<th>Author Code</th>
				<th>Region</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($authors as $author)
			<tr>
				<td>{{ $author->id }}</td>
				<td>{{ $author->author_name }}</td>
				<td>{{ $author->author_code }}</td>
				<td>{{ $author->author_region }}</td>
				<td>
					<a href="{{ url('author/edit/'.$author->id) }}">Edit</a> /
					<a href="{{ url('author/delete/'.$author->id) }}">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<p>
		{!! $authors->appends($_GET)->links() !!}
	</p>
</body>
</html>