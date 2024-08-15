<?php require_once 'views/layout/header.php';
$a = $clients;
?>

<div class="container">
    <h2>Clientes</h2>
    <a href="index.php?controller=Client&action=create" class="btn btn-primary">Agregar Cliente</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($a as $client) { ?>
                <tr>
                    <td><?php echo $client['id']; ?></td>
                    <td><?php echo $client['name']; ?></td>
                    <td><?php echo $client['email']; ?></td>
                    <td><?php echo $client['phone']; ?></td>
                    <td>
                        <a href="index.php?controller=Client&action=edit&id=<?php echo $client['id']; ?>" class="btn btn-warning">Editar</a>
                        <a href="index.php?controller=Client&action=delete&id=<?php echo $client['id']; ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php require_once 'views/layout/footer.php'; ?>