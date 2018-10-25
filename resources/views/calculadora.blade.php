<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>



    <h1>La calculadora de {{$nombre}}</h1>

    <form action="/calculadora" method="POST">

       @csrf
       <input type="hidden" name="nombre" value="{{$nombre}}">
       @if(isset($numero1) && isset($numero2))
       <label for="numero1">Numero 1</label>
       <input type="number" name="numero1" value="{{$numero1}}">
       <br>
       <label for="numero2">Numero 2</label>
       <input type="number" name="numero2" value="{{$numero2}}">
       @else
       <label for="numero1">Numero 1</label>
       <input type="number" name="numero1">
       <br>
       <label for="numero2">Numero 2</label>
       <input type="number" name="numero2">
       @endif

       <br>

       <input type="submit" value="sumar" name="operacion">
       <input type="submit" value="restar" name="operacion">
       <input type="submit" value="multiplicar" name="operacion">
       <input type="submit" value="dividir" name="operacion">
       <input type="submit" value="potencia" name="operacion">
   </form>

   @if(isset($resultado) && $error)
   <h1>Resultado</h1>
   <br>
   <h1 style="color: red">{{$resultado}}</h1>
   @else
   <h1>Resultado</h1>
   <br>
   <h1>{{$resultado}}</h1>
   @endif












</body>
</html>