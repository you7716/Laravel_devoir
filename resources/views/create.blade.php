




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
    <title>Laravel 9 CRUD Application - buildwithphp.com</title>
  </head>
  <body>




<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8 my-4">
		<div class="float-start">
			<h4>Add New Etudiant</h4>
		</div>
		<div class="float-end">
			<a class="btn btn-sm btn-warning" href=""><i class="fa fa-chevron-left"></i> Back</a>
		</div>
	</div>
	<div class="col-lg-2"></div>
</div>

<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8">
		<form method="post" action="{{ route('store') }}">
			@csrf
			<div class="mb-3">
				<label class="form-label fw-bold">Nom</label>
				<input type="text" class="form-control" placeholder="Enter Title" name="nom" required>
			</div>
			<div class="mb-3">
				<label class="form-label fw-bold">Prenom</label>
				<input type="text" class="form-control" placeholder="Enter contenue" name="prenom" required>
			</div>
			
			<div class="mb-3">
				<label class="form-label fw-bold">Semestre</label>
             <select name="semestre"  class="form-control col-md-8">
                            <option value=""></option>
                            <option value="semestre1">semestre1</option>
                            <option value="semestre2">semestre2</option>
             </select>
             			</div>
            <div class="mb-3">
				<label class="form-label fw-bold">Matiere</label>
				 <select name="matiere"  class="form-control col-md-8">
                            <option value=""></option>
                            <option value="php">php</option>
                            <option value="laravel">laravel</option>
                            <option value="java">java</option>
                            <option value="Devops">Devops</option>
                            <option value="Devops">PythonTheBest</option>
                    </select>
                			</div>

            <div class="mb-3">
				<label class="form-label fw-bold">Notes</label>
				<input type="text" class="form-control" placeholder="Enter contenue" name="note" required>
			</div>
            <div class="mb-3">
				<label class="form-label fw-bold">Examen</label>
				<input type="text" class="form-control" placeholder="Enter contenue" name="examen" required>
			</div>
			<div class="mb-3">
				<button type="Save" class="btn btn-sm btn-success">
					<i class="fa fa-floppy-o"></i> Submit
				</button>
			</div>
		</form>
	</div>
	<div class="col-lg-2"></div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>