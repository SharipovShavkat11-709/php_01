<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"  rel="stylesheet" />
</head>
<body>
    <!-- То что потом добавил-->
<?php 
    $is_image = $url =='/apple/image';
    $is_info = $url=='/apple/info';
    $is_menu_info = $url=='/apple/menu';
    $is_image_t = $url =='/tomato/image';
    $is_info_t = $url=='/tomato/info';
    
    $is_menu_info_t = $url=='/tomato/menu';
?>

<div class="container">
    <div class="row" style="border: 1px solid darkgrey; margin-bottom: 1px">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/apple/menu">Яблоко</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $is_image ? "Яблоки" : ' ' ?>"  href="/apple/image"> Картинка</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/apple/info">Описание</a>
            </li>
        </ul>
    </div>
    <div class="row" style="border: 1px solid darkgrey;">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/tomato/menu">Помидоры</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $is_image_t ? "Помидоры" : ' ' ?>"  href="/tomato/image"> Картинка</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="/tomato/info">Описание</a>
            </li>
        </ul>
    </div>
</div>
</body>
</html>

