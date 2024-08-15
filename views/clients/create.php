<?php require_once 'views/layout/header.php'; ?>

<div class="container">
    <h2>Agregar Cliente</h2>
    <form action="index.php?controller=Client&action=store" method="POST">
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Teléfono:</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

<?php require_once 'views/layout/footer.php'; ?>