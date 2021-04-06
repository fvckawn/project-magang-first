
<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>	
	

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Data Diri</h3>
					</div>
					
					<div class="panel-body">
                        <form method="post" action="/store" class="form-horizontal">
							@csrf
							<div class="form-group">
								<label class="control-label col-md-3">ID</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="id" required>
							</div>
						<form method="post" class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-md-3">Nama</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="nama" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Alamat</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="alamat" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Nomor Ponsel</label>
							<div class="col-md-7">
								<input type="number" class="form-control" name="noponsel" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Email</label>
							<div class="col-md-7">
							<input type="text" class="form-control" name="email" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-7 col-md-offset-3">
							<button type="submit" class="btn btn-primary" name="daftar">Daftar</button>

						</form>

					
				</div>
			</div>
		</div>

	</div>
</div>


</body>
</html>