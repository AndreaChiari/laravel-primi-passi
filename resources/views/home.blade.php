<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?= $welcome ?></h1>
    <ul>
        <li><a href="{{ route('mountain')}}">Vai in montagna</a> </li>  
        <li><a href="{{ route('sea')}}">Vai al mare</a> </li>  
        <li><a href="{{ route('vulcan')}}">Vai al vulcano</a> </li>  
    </ul>
</body>

</html>
    