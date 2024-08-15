<?php require_once 'views/layout/header.php'; ?>

<div class="container">
    <h2>Productos</h2>
    <a href="index.php?controller=Product&action=create" class="btn btn-primary">Agregar Producto</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($product['id']); ?></td>
                    <td><?php echo htmlspecialchars($product['name']); ?></td>
                    <td><?php echo htmlspecialchars($product['price']); ?></td>
                    <td><?php echo htmlspecialchars($product['quantity']); ?></td>
                    <td>
                        <a href="index.php?controller=Product&action=edit&id=<?php echo htmlspecialchars($product['id']); ?>" class="btn btn-warning">Editar</a>
                        <a href="index.php?controller=Product&action=delete&id=<?php echo htmlspecialchars($product['id']); ?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?');">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php require_once 'views/layout/footer.php'; ?>