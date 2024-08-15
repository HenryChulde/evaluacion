<?php require_once 'views/layout/header.php'; ?>

<div class="container">
    <h2>Agregar Producto</h2>
    <form action="index.php?controller=Product&action=store" method="POST">
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="price">Precio:</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="quantity">Cantidad:</label>
            <input type="number" class="form-control" id="quantity" name="quantity" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

<?php require_once 'views/layout/footer.php'; ?>