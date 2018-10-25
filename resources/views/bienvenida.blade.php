<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<h1>Reto calculadora</h1>
<form action="mcalculadora" method="POST">

     @csrf
  <label for="Nombre">Introduce tu nombre</label>
  <input type="text" name="nombre">
  <p>El nombre introducido aparecera en la calculadora</p>
  <br>
  
  
  

  <input type="submit" value="Enviar">
</form>













</body>
</html>