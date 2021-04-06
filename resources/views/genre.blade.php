<!DOCTYPE html>
<html>
<head>
	<title>Genre</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<div class="col-md-6">
	<h2>Genre</h2>
</div>
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

</html>