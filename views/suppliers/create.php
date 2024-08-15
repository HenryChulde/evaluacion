<?php require_once 'views/layout/header.php'; ?>

<div class="container">
    <h2>Agregar Proveedor</h2>
    <form action="index.php?controller=Supplier&action=store" method="POST">
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="contact_email">Email de Contacto:</label>
            <input type="email" class="form-control" id="contact_email" name="contact_email">
        </div>
        <div class="form-group">
            <label for="phone">Teléfono:</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="address">Dirección:</label>
            <textarea class="form-control" id="address" name="address"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

<?php require_once 'views/layout/footer.php'; ?>