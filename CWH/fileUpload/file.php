<?php
$uploadedfilepath="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
       // print_r($_FILES); // See the uploaded file details

        $path = $_FILES['file']['name'];
        $upload_path = "./uploads/" . $path;

        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_path)) {
            echo "File uploaded successfully!";
            $uploadedfilepath=$upload_path;
        } else {
            echo "Failed to upload file.";
        }
    } else {
        echo "No file was uploaded or an error occurred.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <button>Upload</button>
    </form>
    <?php if($uploadedfilepath){
        echo "<h3> Uploaded image is: </h3>";
        echo "<img src='".$uploadedfilepath."' width='300'>";
    }?>

</body>
</html>

