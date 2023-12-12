<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
        <form action="./create_model.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name" required>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Age" name="age" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Image URL" name="image_url" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create</button>
            </div>
        </form>
    </div>
<?php require_once('partial/footer.php'); ?>