<?php include 'app/views/header.php'; ?>

<div class="container mt-4">
    <h2>Add New User</h2>
    <form method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <button class="btn btn-success">Save</button>
        <a href="/" class="btn btn-secondary">Back</a>
    </form>
</div>

<?php include 'app/views/footer.php'; ?>
