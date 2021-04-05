<!DOCTYPE html>
<html>
<head>
	<title>Genre</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body style="background-color: azure;">
    <div class="container">
	<h3 class="panel-title">Genre</h3>
	<title>Genre</title>
	<div class="panel-body">
		<table class="table">
			<thead class="thead-dark">
				<tr>
				<th scope="col">NO</th>
				<th scope="col">ID</th>
				<th scope="col">Nama Genre</th>
				
				</tr>
			</thead>
			<tbody>
				@foreach( $genre as $gen )
				<tr>
					<th scope="row">{{$loop->iteration}}</th>
					<td>{{$gen->id}}</td>
					<td>{{$gen->name}}</td>
					
				</tr>
				@endforeach 
			</tbody>
		</table>	
	
					
			
			
		
	</div>
</body>
</html>