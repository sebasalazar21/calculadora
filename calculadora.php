<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>calculadora php</title>
</head>
<body>
    <div class="container">
    <h1>calculadora</h1> <br>
    <form method="post">
        numero1:
        <input type="number" name="numero1" min="-100000" max="100000"required>
        numero2:
        <input type="number" name="numero2" min="-100000" max="100000"required>
        <br>
        <input type="radio"  name="opcion" value="sumar" class="from-check-input"required>sumar
        <input type="radio"  name="opcion" value="restar"class="from-check-input"required> restar
        <input type="radio"  name="opcion" value="multiplicar"class="from-check-input"required> multiplicar
        <input type="radio"  name="opcion" value="dividir"class="from-check-input"required> dividir
        <br><br>
        <input type="submit" value="calcular" class="btn btn-success">
        <input type="reset" value="limpiar" class="btn btn-danger">

    </form>
    <hr>
</div>
<div class="container"> 
    <?php
      if($_POST){
          function sumar (){
              echo $_POST["numero1"]+$_POST["numero2"];
          }
          function restar (){
            echo $_POST["numero1"]-$_POST["numero2"];
        }
        function multiplicar (){
            echo $_POST["numero1"]*$_POST["numero2"];
        }
        function dividir (){
            echo $_POST["numero1"]/$_POST["numero2"];
        }
        switch ($_POST["opcion"]){
            case "sumar":
                sumar ();
            break;
            case "restar":
                restar();
            break;
            case "multiplicar":
                multiplicar();
            break;
            case "dividir":
                dividir();
            break;
            
        }
      }
    ?>
</div>  
</body>
</html>