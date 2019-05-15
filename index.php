<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="css/bulma.css">
  <link rel="stylesheet" href="css/bulma.css.map">
  <link rel="stylesheet" href="css/bulma.min.css">
  <link rel="stylesheet" href="css/estilo.css">


  <title></title>
</head>
<body>
  <div class="container">


    <table class="table">

      <thead>
        <tr>
          <th>NOMBRE DEL  PRODUCTO</th>
          <th>PRECIO</th>
          <th>DISPONIBILIDAD</th>


        </tr>
      </thead>


      <tr>
        <td>agua pura</td>
        <td>13.00</td>
        <td>disponible</td>
        <td><a class="button is-success">editar</a></td>
        <td><a class="button is-danger">eliminar</a></td>



      </tr>

      <tr>
        <td>coca-cola lata</td>
        <td>5.00</td>
        <td>no disponible</td>
        <td><a class="button is-success">editar</a></td>
        <td><a class="button is-danger">eliminar</a></td>
      </tr>

      <tr>
        <td>margarina mirasol libra</td>
        <td>8.50</td>
        <td>disponible</td>
        <form class="" action="formulario2.php" method="post">
          <td><a class="button is-success" type="submit">editar</a></td>

        </form>
        <td><a class="button is-danger">eliminar</a></td>
      </tr>

    </table>
    <br>
    <form class="" action="" method="post">

      <a class="button is-link is-rounded">agregar producto</a>
    </form>


  </div>

</body>
</html>
