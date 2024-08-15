<?php require_once 'views/layout/header.php'; ?>

<div class="container">
    <h2>Editar Proveedor</h2>
    <form action="index.php?controller=Supplier&action=update&id=<?php echo htmlspecialchars($supplier['id']); ?>" method="POST">
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($supplier['name']); ?>" required>
        </div>
        <div class="form-group">
            <label for="contact_email">Email de Contacto:</label>
            <input type="email" class="form-control" id="contact_email" name="contact_email" value="<?php echo htmlspecialchars($supplier['contact_email']); ?>">
        </div>
        <div class="form-group">
            <label for="phone">Teléfono:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($supplier['phone']); ?>">
        </div>
        <div class="form-group">
            <label for="address">Dirección:</label>
            <textarea class="form-control" id="address" name="address"><?php echo htmlspecialchars($supplier['address']); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>

<?php require_once 'views/layout/footer.php'; ?>