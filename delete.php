<?php require_once "connection.php";?>
<?php  
    $id = $_GET["id"] ?? 0;
    if($id){
        $query = "DELETE FROM applications WHERE id = {$id}";
        $result = mysqli_query($connection, $query);
        if($result){
            header("Location: ". "index.php");
        }
    }
   

?>