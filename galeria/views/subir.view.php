<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/14c899ed1e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Galeria</title>
</head>

<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Subir Foto</h1>
        </div>
    </header>

    <div class="contenedor">
        <form class="formulario" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

            <label for="foto">Select your photo</label>
            <input type="file" id="foto" name="foto">

            <label for="titulo">Titulo de la foto</label>
            <input type="text" id="titulo" name="titulo">

            <label for="texto">Descripcion:</label>
            <textarea name="texto" id="texto" placeholder="Ingresa una Descripcion "></textarea>
            <input type="submit" class="submit" value="Subir Foto">
        </form>
    </div>

    <!-- footer -->
    <footer>
        <p class="copyright">Galeria creada por Julio Renteria - Inntec Digital </p>
    </footer>

</body>

</html>