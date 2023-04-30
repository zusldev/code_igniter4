<?= $this->extend('templates/base.php') ?>

<?= $this->section('content') ?>

<div class="books">


  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center">Libros</h1>
        <div class="container">
          <div class="row">
            <div class="col-12 mt-2 mb-4">
              <a href="<?= base_url('crear') ?>" class="btn btn-primary">Agregar</a>
            </div>
            <!-- Search -->
            <div class="col-12 mt-2 mb-4 search">
              <form action="/libros/search" method="POST">
                <div class="input-group">
                  <input type="text" class="form-control" name="search" placeholder="Buscar libro" aria-label="Buscar libro" aria-describedby="button-addon2">
                  <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Buscar</button>
                </div>
              </form>
            </div>
            <!-- End Search -->
            <div class="col-12 text-center orderBy">
              <div class="container">
                <a class="btn btn-primary">ASC</a>
                <a class="btn btn-primary">DESC</a>
              </div>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($books)) : ?>
                <?php foreach ($books as $book) : ?>
                  <tr>
                    <td><?= $book['id'] ?></td>
                    <td><?= $book['name'] ?></td>
                    <td><?= $book['image'] ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php else : ?>
                <tr>
                  <td colspan="3" class="text-center">No hay libros</td>
                </tr>
              <?php endif ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>



<?= $this->endSection() ?>