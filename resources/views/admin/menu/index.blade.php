<?php
    $arrMenu=[1,2,3,4,5,6,7,4,3,2,1,7];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Menu</title>
</head>

<body>
    @foreach ($arrMenu as $arr)
    <p>This is menu {{ $arr }}</p>
    @endforeach
</body>

</html>