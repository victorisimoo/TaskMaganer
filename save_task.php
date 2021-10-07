<?php

    include('db.php');

    # obtencion de los datos obtenidos del POST
    if(isset($_POST['save_task'])){
        $title = $_POST['title'];
        $description = $_POST['description'];

        # envia los datos a la base de datos
        $query = "insert into task(title, description) values ('$title', '$description')";
        $result = mysqli_query($conn, $query);

        # verifica si los datos han sido enviados
        if(!$result){
            die("Query failed");
        }
        
        $_SESSION['message'] = 'Task saved successfully';
        $_SESSION['message_type'] = 'success';

        # redirecciona a la pantalla principal
        header("Location: index.php");
    }
?>