<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{asset('/js/change_img.js') }}"></script>
</head>
<body>
    
<form>
    <input type="file" accept='image/*' onchange="previewImage(this);">
</form>
    <p>Preview:<br>
    <img id="preview" src="/storage/images/20210404037.png" style="max-width:200px;">
    </p>
</body>
</html>