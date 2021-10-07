<?php include("db.php")?>
<?php include("includes/header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Title..."
                        autofocus>
                    </div>

                    <div class="form-group">
                        <textarea name="description" id="" rows="2" class="form-control" 
                        placeholder="Description..."></textarea>
                    </div>

                    <input type="submit" class="btn btn-success btn-block" name="save_task" 
                    value="Save">
                </form>
            </div>
        </div>
        <div class="col-md-8">

        </div>
    </div>
</div>

<?php include("includes/footer.php")?>