<?= $this->extend('templates/base.php') ?>

<?= $this->section('content') ?>

<div class="jumbotron pt-4">
    <div class="welcome">
        <h1 class="display-4">Bienvenido</h1>
        <p class="lead">by:zusldev</p>
        <hr class="my-4 bg-light">
        <p>En esta biblioteca podrás encontrar libros de diferentes autores y editoriales.</p>
        <p class="lead">
            <a class="btn btn-dark btn-lg" href="https://github.com/zusldev" role="button">Creado por Zusldev -> GitHub</a>
        </p>
    </div>
</div>


<?= $this->endSection() ?>