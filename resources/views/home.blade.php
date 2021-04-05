
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Book List</title>
 	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
 </head>
 <body style="background-color: azure;">
<section class="kontent" style="background-color: azure;">
	<div class="container">
		
			<div class="col-md-6">
				<h2>Book List</h2>
			</div>
            
			<li><a href="/genre">Genre</a></li>
			<li><a href="/rent">Rent</a></li>
			<title>Book list</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/style.css">
	<div class="panel-body">
		<p>Berikut adalah daftar buku Perustakaan Sinar Abadi</p>
		<table class="table">
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
	
	</div>
</section>

 </body>
 </html>
    