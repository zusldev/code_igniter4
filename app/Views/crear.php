<?= $this->extend('templates/base.php') ?>

<?= $this->section('content') ?>

<div class="jumbotron">
  <h1 class="display-4 mt-4">Crear nuevo libro</h1>
  <p class="lead">by:zusldev</p>
  <hr class="my-4">
  <p>En esta biblioteca podrás encontrar libros de diferentes autores y editoriales.</p>

</div>

<form action="<?= site_url('/guardar') ?>" method="post" enctype="multipart/form-data">
  <div class="form-group mb-4">
    <label for="name">Nombre</label>
    <input type="text" name="name" placeholder="Nombre" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="image">Imagen</label>
    <input type="file" name="image" class="form-control-file" id="image">
  </div>
  <button type="submit" class="btn btn-primary mt-3">Agregar</button>
</form>


<?= $this->endSection() ?>