<?php  
    if(isset($_POST["register"])){
        $name = $_POST["name"];
        $mobile = $_POST["mobile"];
        $reference = $_POST["reference"];
        $qualifacation = $_POST["qualifacation"];
        $email = $_POST["email"];
        $position = $_POST["position"];

        $query = "INSERT INTO applications(";
        $query .= "name, degree, mobile, email, refer, jobpost";
        $query .= ") VALUES (";
        $query .= "'{$name}', '{$qualifacation}', '{$mobile}', '{$email}', '{$reference}', '{$position}'";
        $query .= ")";
        
        $result = mysqli_query($connection, $query);
        if($result){
?>
<script>
alert("Insert Successfull");
</script>
<?php
                }else{
                    ?>
<script>
alert("There is an error");
</script>
<?php
        }
    }

?>