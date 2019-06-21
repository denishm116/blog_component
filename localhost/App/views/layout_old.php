<html>
<head>
    <title><?=$this->e($title)?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
<nav class="navbar">
    <ul>
        <li><a href="/">Главная</a></li>
        <li><a href="/about">О нас</a></li>
        </ul>
</nav>
<?=$this->section('content')?>
</div>
</body>
</html>