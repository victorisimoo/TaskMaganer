<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $query = "SELECT * FROM task WHERE id = '$id'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) >= 1){
            $row = mysqli_fetch_array($result);
            $title = $row['title'];
            $description = $row['description'];
        }
    }

    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
   
        $query = "update task set title = '$title', description = '$description' where id = '$id'";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'Task updated successfully';
        $_SESSION['message_type'] = 'info';
        header("Location: index.php");
    }
?>

<?php include("includes/header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit_task.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-label">
                        <input type="text" name="title" value="<?php echo $title; ?>" 
                        class="form-control" placeholder="Update title">
                    </div>
                    <div class="form-label">
                        <textarea name="description" rows="2" class="form-control" placeholder="Update description"><?php echo $description; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" name="update">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>