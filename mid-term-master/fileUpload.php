<html>
<head>
        <title>Upload Photo</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="topnav"> 
            <p id="top-header"><i>Nadhila Catering</i></p>      
            <a href="upload.html" action="upload.html">Add Photo</a>
            <a href="transaction.html" action="transaction.html">Transaction</a>
            <a class="active" href="#home">Home</a> 
</div>
<?php
    $target_path = "photos/";

    $target_path = $target_path . basename(
        $_FILES['uploadphoto']['name']
    );

    if(move_uploaded_file($_FILES['uploadphoto']['tmp_name'], $target_path)){
        echo "The photo " . basename($_FILES['uploadphoto']['name']) . " has been uploaded";
    }else{
        echo "There was an error uploading file, please try again!";
    }
?>

<div class="fixed">
            <footer>
                 Based in Blitar &copy; Nadhila Catering
            </footer>
</div>
</body>
</html>


