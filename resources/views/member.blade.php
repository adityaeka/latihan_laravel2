<!DOCTYPE html>
<html>
<head>
	<title>Member</title>
</head>
<body>
	<p>
		<a href="{{ url('member/create') }}">Tambah Data</a>
	</p>
	<table width="600px" cellspacing="0" cellpadding="10" border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Address</th>
				<th>Phone</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($members as $member)
			<tr>
				<td>{{ $member->id }}</td>
				<td>{{ $member->name }}</td>
				<td>{{ $member->address }}</td>
				<td>{{ $member->phone }}</td>
				<td>
					<a href="{{ url('member/edit/'.$member->id) }}">Edit</a> /
					<a href="{{ url('member/delete/'.$member->id) }}">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<p>
		{!! $members->appends($_GET)->links() !!}
	</p>
</body>
</html>