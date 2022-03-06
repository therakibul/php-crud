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
    <title>index.html</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center my-3 text-warning">PHP CRUD Application</h3>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="enter your name*">
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="mobile" id="mobile"
                            placeholder="enter your phone number*">
                    </div>
                    <div class="mb-3">
                        <label for="reference" class="form-label">Reference</label>
                        <input type="text" class="form-control" name="reference" id="reference"
                            placeholder="any reference*">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="qualifacation" class="form-label">Qualification</label>
                        <input type="text" class="form-control" name="qualifacation" id="qualifacation"
                            placeholder="qualification*">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email id</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="your email*">
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label">Apply for position</label>
                        <input type="text" class="form-control" name="position" id="position"
                            placeholder="apply for position*">
                    </div>
                </div>
            </div>
            <input class="btn btn-primary btn-lg btn-block w-100" type="submit" name="register" value="Add Record">
        </form>
        <?php require_once "create.php";?>
        <?php  
            $select_query = "SELECT * FROM applications";
            $query = mysqli_query($connection, $select_query);
        ?>


        <table class="table mt-2">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>DEGREE</th>
                <th>MOBILE</th>
                <th>EMAIL</th>
                <th>REFERENCE</th>
                <th>POST</th>
                <th colspan="2">OPERATOR</th>
            </tr>

            <?php
                    while($row = mysqli_fetch_assoc($query)){
                        ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['degree'];?></td>
                <td><?php echo $row['mobile'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['refer'];?></td>
                <td><?php echo $row['jobpost'];?></td>
                <td><a class="text-warning" href="update.php?id=<?php echo $row['id'];?>" data-toggle="tooltip"
                        data-placement="top" title="Update"><i class='fa fa-edit'></i></a>
                </td>
                <td><a class="text-danger" href="delete.php?id=<?php echo $row['id'];?>" data-toggle="tooltip"
                        data-placement="top" title="Delete"><i class='fa fa-trash'></i></td>
            </tr>
            <?php
                }

            ?>


        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">

    </script>
</body>

</html>