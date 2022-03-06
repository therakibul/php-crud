<?php require_once "connection.php";?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Update</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center my-3 text-warning">Apply for Web Developer Job</h3>
        <?php  
            $id = $_GET["id"] ?? 0;
            
            $select_query = "SELECT * FROM applications WHERE id={$id}";
            $query = mysqli_query($connection, $select_query);
            $result = mysqli_fetch_array($query);
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                            value="<?php echo $result["name"];?>" placeholder="enter your name*">
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="mobile" value="<?php echo $result["mobile"];?>"
                            id="mobile" placeholder="enter your phone number*">
                    </div>
                    <div class="mb-3">
                        <label for="reference" class="form-label">Reference</label>
                        <input type="text" class="form-control" name="reference" value="<?php echo $result["refer"];?>"
                            id="reference" placeholder="any reference*">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="qualifacation" class="form-label">Qualification</label>
                        <input type="text" class="form-control" name="qualifacation"
                            value="<?php echo $result["degree"];?>" id="qualifacation" placeholder="qualification*">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email id</label>
                        <input type="text" class="form-control" name="email" id="email"
                            value="<?php echo $result["email"];?>" placeholder="your email*">
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label">Apply for position</label>
                        <input type="text" class="form-control" name="position" value="<?php echo $result["jobpost"];?>"
                            id="position" placeholder="apply for position*">
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                    </div>
                </div>
            </div>
            <input class="btn btn-primary btn-lg btn-block w-100" type="submit" name="update" value="Update">
        </form>

        <?php
            if(isset($_POST["update"])){
                $id = $_POST["id"];
                $name = $_POST["name"];
                $mobile = $_POST["mobile"];
                $reference = $_POST["reference"];
                $qualifacation = $_POST["qualifacation"];
                $email = $_POST["email"];
                $position = $_POST["position"];

                echo $id, $name;
                $query = "UPDATE applications SET name='{$name}', degree='{$qualifacation}', mobile='{$mobile}', email='{$email}', refer='{$reference}', jobpost='{$position}' WHERE id = {$id}";
                $result = mysqli_query($connection, $query);
                if($result){
                    header("Location: ". "index.php");
                    die();
                }else{
                    ?>
        <script>
        alert("Can't update");
        </script>
        <?php
                }

            }
    ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>