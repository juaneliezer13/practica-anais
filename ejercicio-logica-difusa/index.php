<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Logica difusa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
 <main>
  <div class="container">
   <div class="row">
    <div class="col-md-4 left-box">
     <div class="container-fluid title-box">
      <div class="row">
       <div class="col-md-12">
        <br>
        <br>
        <h2 class="text-left">Buscar animales</h2>
      </div>
    </div>
  </div>
  <br>
  <div class="container-fluid form-box">
    <div class="row">
     <div class="col-md-12">
      <form action="#" class="text-center">
       <div class="form-group">
        <input type="text" class="form-control input-lg" placeholder="Nombre de animal...">
      </div>
      <div class="form-group">
        <input type="text" class="form-control input-lg" placeholder="Especie...">
      </div>
      <div class="form-group">
        <select class="form-control input-lg selectpicker show-tick" multiple data-selected-text-format="count > 3" data-style="btn-danger" data-live-search="true">
          <option value="" selected disabled>Caracteristicas</option>
          <option value="Pelo blanco">Pelo blanco</option>
          <option value="Cuatro patas">Cuatro patas</option>
          <option value="Cola">Cola</option>
        </select>
      </div>
      <button type="submit" class="btn btn-danger btn-block">BUSCAR</button>
    </form>
  </div>
</div>
</div>
</div>
<div class="col-md-8 right-box">
 <div class="container-fluid title-box">
  <div class="row">
   <div class="col-md-12">
    <br>
    <h3 class="text-left">Coincidencias</h3>
  </div>
</div>
</div>
<div class="container-fluid">
  <div class="row">
   <div class="col-sm-4">
    <div class="card">
     <img class="card-img-top img-fluid" src="http://placehold.it/200/999/fff" alt="Card image cap" width="100%">
     <div class="card-body">
      <h4 class="card-title"><strong>Nombre:</strong> Avestruz</h4>
      <p class="card-text"><strong>Especie:</strong> Aves</p>
      <p class="card-text"><small class="text-muted"><strong>Descripcion: </strong>Larga cabeza y corredora rapida.</small></p>
    </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card">
   <img class="card-img-top img-fluid" src="http://placehold.it/200/999/fff" alt="Card image cap" width="100%">
   <div class="card-body">
    <h4 class="card-title"><strong>Nombre:</strong> Avestruz</h4>
    <p class="card-text"><strong>Especie:</strong> Aves</p>
    <p class="card-text"><small class="text-muted"><strong>Descripcion: </strong>Larga cabeza y corredora rapida.</small></p>
  </div>
</div>
</div>
<div class="col-sm-4">
  <div class="card">
   <img class="card-img-top img-fluid" src="http://placehold.it/200/999/fff" alt="Card image cap" width="100%">
   <div class="card-body">
    <h4 class="card-title"><strong>Nombre:</strong> Avestruz</h4>
    <p class="card-text"><strong>Especie:</strong> Aves</p>
    <p class="card-text"><small class="text-muted"><strong>Descripcion: </strong>Larga cabeza y corredora rapida.</small></p>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</main>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/i18n/defaults-es_ES.min.js"></script>
</body>
</html>