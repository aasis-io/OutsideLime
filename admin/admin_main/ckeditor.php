<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <textarea name="editor" id="editor" cols="30" rows="10"></textarea>
    </form>


    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    <script>
        CKEDITOR.replace('editor', {
            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserUploadUrl: "upload.php",
            language: "en"
        });
    </script>
</body>

</html>