<?php require_once 'views/layout/header.php'; ?>

<div class="container">
    <h2>Editar Producto</h2>
    <form action="index.php?controller=Product&action=update&id=<?php echo htmlspecialchars($product['id']); ?>" method="POST">
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" required>
        </div>
        <div class="form-group">
            <label for="price">Precio:</label>
            <input type="number" class="form-control" id="price" name="price" value="<?php echo htmlspecialchars($product['price']); ?>" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="quantity">Cantidad:</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="<?php echo htmlspecialchars($product['quantity']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>

<?php require_once 'views/layout/footer.php'; ?>