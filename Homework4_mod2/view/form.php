<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <label for="files">Select files:</label>
        <input type="file" name="photo[]" multiple accept="image/*">
        <br>
        <input type="checkbox" name="target[]" value="jpg">
        <label for="files">jpeg</label>
        <br>
        <input type="checkbox" name="target[]" value="gif">
        <label for="files">gif</label>
        <br>
        <input type="checkbox" name="target[]" value="png">
        <label for="files">png</label>
        <br>
        <input type="submit" id="but1" name="but1" value="Start">

    </form>
</body>

</html>