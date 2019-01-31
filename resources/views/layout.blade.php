<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ambiente</title>
</head>
<body>
Bienvenido <?php echo $nombre ?? "Invitado" ?>
<nav>
<ul>
<li><a href="/ambiente">Ambiente</a></li>
<li><a href="/horarios">horarios</a></li>
<li><a href="/perfil">perfil</a></li>
</ul>
</nav>
    @yield('content')
</body>
</html>