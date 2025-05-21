<?php include 'app/views/header.php'; ?>

<div class="container mt-4">
    <h2>Edit User</h2>
    <form method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="<?= htmlspecialchars($this->user->name) ?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="<?= htmlspecialchars($this->user->email) ?>" class="form-control" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="/" class="btn btn-secondary">Back</a>
    </form>
</div>

<?php include 'app/views/footer.php'; ?>
