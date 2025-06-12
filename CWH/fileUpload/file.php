<?php
$uploadedfilepath = "";
$uploadDir = "./uploads/";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $path = basename($_FILES['file']['name']);
        $upload_path = $uploadDir . $path;

        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_path)) {
            echo "File uploaded successfully!";
            $uploadedfilepath = $upload_path;
        } else {
            echo "Failed to upload file.";
        }
    } else {
        echo "No file was uploaded or an error occurred.";
    }
}

// Get all image files from the uploads directory
$images = array_diff(scandir($uploadDir), array('.', '..'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Images</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <button type="submit">Upload</button>
    </form>

    <?php
    if ($uploadedfilepath) {
    echo "<h3>Newly Uploaded Image:</h3>";
    echo "<img src='" . $uploadedfilepath . "' width='300'>";
    }
    ?>

    <h3>All Uploaded Images:</h3>
    <?php
    foreach ($images as $image) {
        echo "<img src='" . $uploadDir . $image . "' width='200' style='margin:10px;'>";
    }
?>
</body>
</html>
