
<!DOCTYPE html>
<html>
<head>
	<title>Rent Book</title>
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
						<h3 class="panel-title">Rent Book</h3>
					</div>
					<div class="panel-body">
                        <form method="post" class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-md-3">ID</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="id" required>
							</div>
						<form method="post" class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-md-3">Personal Data ID</label>
							<div class="col-md-7">
								<input type="number" class="form-control" name="personal data id" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Book Id</label>
							<div class="col-md-7">
								<input type="number" class="form-control" name="book id" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Date Awal</label>
							<div class="col-md-7">
								<input type="date" class="form-control" name="date awl" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Date Akhir</label>
							<div class="col-md-7">
							<input type="date" class="form-control" name="date akhir" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-7 col-md-offset-3">
							<button class="btn btn-primary" name="rent">Rent</button>

						</form>

					
				</div>
			</div>
		</div>

	</div>
</div>


</body>
</html>