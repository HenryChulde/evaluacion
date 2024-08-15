<?php require_once 'views/layout/header.php'; ?>

<div class="container">
    <h2>Proveedores</h2>
    <a href="index.php?controller=Supplier&action=create" class="btn btn-primary">Agregar Proveedor</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email de Contacto</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($suppliers as $supplier) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($supplier['id']); ?></td>
                    <td><?php echo htmlspecialchars($supplier['name']); ?></td>
                    <td><?php echo htmlspecialchars($supplier['contact_email']); ?></td>
                    <td><?php echo htmlspecialchars($supplier['phone']); ?></td>
                    <td><?php echo htmlspecialchars($supplier['address']); ?></td>
                    <td>
                        <a href="index.php?controller=Supplier&action=edit&id=<?php echo htmlspecialchars($supplier['id']); ?>" class="btn btn-warning">Editar</a>
                        <a href="index.php?controller=Supplier&action=delete&id=<?php echo htmlspecialchars($supplier['id']); ?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este proveedor?');">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php require_once 'views/layout/footer.php'; ?>