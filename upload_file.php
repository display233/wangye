<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>哈哈</title>
</head>

<body>
    
    <?php
	move_uploaded_file($_FILES["file"]["tmp_name"],$_FILES["file"]["name"])
?>
    
</body>

</html>