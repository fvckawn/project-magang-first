
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Book List</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 </head>
 
			<div class="col-md-6">
				<h1>Book List</h1>
			</div>
          
			
			<title>Book list</title>
			<div class="col-md-7">
				<p>Daftar Buku Milik Perpustakaan Sinar Abadi</p>
			</div>
		
		<table class="table table-striped">
			<thead class="thead-dark">
				<tr>
				<th scope="col">No</th>
				<th scope="col">ID</th>
				<th scope="col">Nama Buku</th>
				<th scope="col">Genre ID</th>
				<th scope="col">Penulis</th>
				<th scope="col">Tahun Terbit</th>
				<th scope="col">Status</th>
				</tr>
			</thead>
			<tbody>
				@foreach( $book as $boo )
				<tr>
					<th scope="row">{{$loop->iteration}}</th>
					<td>{{$boo->id}}</td>
					<td>{{$boo->name}}</td>
					<td>{{$boo->genre_id}}</td>
					<td>{{$boo->writer}}</td>
					<td>{{$boo->year}}</td>
					<td>{{$boo->status}}</td>
				</tr>
				@endforeach 
			</tbody>
		</table>	
	
		<li><a href="/genre">Genre</a></li>
		<li><a href="/rent">Rent</a></li>

 
 </html>
    