<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>formulario</title>
  <link rel="stylesheet" href="css/bulma.css">
  <link rel="stylesheet" href="css/bulma.css.map">
  <link rel="stylesheet" href="css/bulma.min.css">
  <link rel="stylesheet" href="css/estilo.css">




</head>
<body>


  <div class="container"  >



    <form class="" action="insert.php"method="post">

      <label for="">nombre del producto</label>
      <input type="text" class="input is-primary" name="produc"
      required
      pattern="^[a-zA-Z]{}$">
      <br><br>


      <label for="">precio</label>
      <input type="number" class="input is-primary" name="pri"
      required
      pattern="^[0-9,.]{}$">
      <br><br>



      <br><br>
      <br>
      <button type="submit" class="button is-success" name="button">verificar</button>
    </form>



  </div>

</body>
</html>
