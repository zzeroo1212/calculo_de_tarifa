<?php


    //      variables / capturando datos 

    error_reporting(0);

    $empleado = $_POST['Txempleado'];
    $horas = $_POST['Txhoras'];
    $categoria = $_POST['selcategoria'];


    //  proceso de los calculos 



    switch ($categoria) {

      case 'jefe':
        $pagohoras = 50;
        break;

      case 'administrativo':
        $pagohoras = 30;
        break;

      case 'operario';
        $pagohoras = 15;
        break;

      case 'junior';
        $pagohoras = 5;
        break;
    }

    //////////////////////////////////////
    $salario_bruto = $pagohoras * $horas;
    $descuento = $salario_bruto * 15 / 100;
    $salario_neto = $salario_bruto - $descuento;


///////////////////////////////////////////////////////




    ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css.css">
  <title>tarifa_de_elpleados</title>
  <link rel="stylesheet" href="tarifa.php">
</head>

<body>
  <h2> calculo de tarifa </h2>

  <div>

    <img src="img-oficina.jpg" alt="img-oficina">


  </div>

  <!-- POR PANTALLA  falta la table /teble/-->


  
  <div class="contenedor_pantalla">

     <form action="tarifa.php">   

    <table>

      <tr class="tr_pan">

        <td class="td_pan">   nombre </td>
        <td class="td_pan">   <?php echo $empleado; ?>   </td>

      </tr>

      <tr class="tr_pan">

        <td class="td_pan">  categoria </td>
        <td class="td_pan">  <?php echo $categoria;?>   </td>


      </tr>


      <tr class="tr_pan">

        <td class="td_pan"> sueldo bruto </td>

        <td class="td_pan"> <?php echo $salario_bruto; ?> </td>


      </tr>


      <tr class="tr_pan">

        <td class="td_pan"> descuento</td>

        <td class="td_pan"><?php echo $descuento; ?></td>


      </tr>

      <tr class="tr_pan">

        <TD class="td_pan"> salario neto </TD>

        <td class="td_pan"><?php echo $salario_neto; ?> </td>



      </tr>

    </table>
  </form>
 
  </div>
















</body>

</html>


 
