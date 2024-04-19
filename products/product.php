<?php
include('../connection/config.php');

if(isset($_POST['submit']))
{
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_image = $_POST['p_image'];

    $insert ="INSERT INTO product(p_name,p_price,p_image)VALUES('$p_name','$p_price','$p_image')";
    $result = mysqli_query($conn,$insert);
    if($result)
    {
        echo "product inserted";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">PRODUCT PAGE</h1>

    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Porduct_name</label>
                <input type="text" name="p_name" class="form-control" placeholder="Enter Your product_name" id="exampleInputEmail1" aria-describedby="emailHelp">

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Product_price</label>
                    <input type="text" name="p_price" placeholder="Enter Your Product_price" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Product_image</label>
                    <input type="text" name="p_image" placeholder="Enter Your Product_image" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

