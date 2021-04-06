<!DOCTYPE html>
<html>
<head>
	<title>Rent</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>
    <div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Menu</h3>
                        
                        <li><a href="/personal_data">Personal Data</a></li>
                        

						<table class="table table-striped">
							<thead class="thead-dark">
								<tr>
								<th scope="col">No</th>
								<th scope="col">ID</th>
								<th scope="col">Nama</th>
								<th scope="col">Alamat</th>
								<th scope="col">Nomor Ponsel</th>
								<th scope="col">Email</th>
								</tr>
							</thead>
							<tbody>
								@foreach( $personal_data as $personal_data )
								<tr>
									<th scope="row">{{$loop->iteration}}</th>
									<td>{{$personal_data->id}}</td>
									<td>{{$personal_data->name}}</td>
									<td>{{$personal_data->address}}</td>
									<td>{{$personal_data->phone}}</td>
									<td>{{$personal_data->email}}</td>
									
								</tr>
								@endforeach 
							</tbody>
						</table>
						<p>Jika belum mempunyai Account</p>
                        <li><a href="/rent_book">Rent Book</a></li>	
</html>