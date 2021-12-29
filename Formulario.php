<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Proyecto</title>
</head>
<body>
<H1>Registro de Usuario<h1>
		<form  action="Guardar.php" method ="post">
            
        Nombre    <input type="text" name="nombre"> <br>
        Apellido  <input type="text" name="apellido"><br>
        Usuario   <input type="text" name="username"><br>
        Password <input type="password" name="password"><br>
                 <input type="hidden" name="reg" value="yes">
                 <input type="submit" value="REGISTRARME">
            
            
		</form>
</body>
</html>