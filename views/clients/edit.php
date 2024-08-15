<?php require_once 'views/layout/header.php'; ?>

<div class="container">
    <h2>Editar Cliente</h2>
    <form action="index.php?controller=Client&action=update&id=<?php echo $client['id']; ?>" method="POST">
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $client['name']; ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $client['email']; ?>" required>
        </div>
        <div class="form-group">
            <label for="phone">Teléfono:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $client['phone']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>

<?php require_once 'views/layout/footer.php'; ?>