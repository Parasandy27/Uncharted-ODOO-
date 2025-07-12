<?php 
include('../database/db.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $des = $_POST['des'];
    $category = $_POST['category'];
    $color = $_POST['color'];
    $size = $_POST['size'];
    $img = $_FILES['img']['name'];

    $query ="INSERT INTO product(name, size, price, des, img , cat) VALUES ('$name', '$size', '$price', '$des', '$img', '$category')";
    $query_run = mysqli_query($conn, $query);


    if($query_run){
        move_uploaded_file($_FILES['img']['tmp_name'], "upload/".$_FILES['img']['name']);
        $_SESSION['status'] = "Product Added";
        header('Location: sell.php');
        echo "Product Added";
    }else {
        # code...
        $_SESSION['status'] = "Product Not Added";
        header('Location: sell.php');
        echo "error";
    }
}
else{
    echo "Error";
}

?>