<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 4</title>
</head>
<body>
<h1>Problema 4: 4.	Una tienda ha puesto en oferta la venta de conos de CD de 100 unidades ofreciendo 
    dos descuentos de 5%. El primer descuento se aplica al importe de la compra. El segundo descuento 
    se aplica a la resta del importe de la compra menos el importe del primer descuento. Dados el 
    precio del cono y la cantidad de conos adquiridos, diseñe un programa que determine el importe de 
    la compra, el importe del descuento total y el importe a pagar (5 puntos). </h1>
    <form method="post" action="">
            <h2>Ingrese el precio al que venderás los conos de CD de 100 unidades :<br><input type="number" name="monto"></h2>
            <h2>Ingrese el número de conos de CD que comprará :<br><input type="number" name="cantidad"></h2>
            <h2>Resultado: <br><h2>
            <input type="submit" name="Calcular" value="Calcular">
    </form>
    <?php
    //declaracion de variables
     $tarifa=$_POST['monto'];
     $CantidadConos=$_POST['cantidad'];
             $CostoBruto=$tarifa*$CantidadConos;
             $Descuento=$CostoBruto*0.05;
             $CostoNeto=$CostoBruto-$Descuento;
             $Descuento2=$CostoBruto-$CostoNeto;
             $CostoNeto2=$CostoNeto-($CostoNeto*($Descuento2/100));
              echo "<h3>- El costo de cada cono de CD es de : s./$tarifa .</h3>";
              echo "<h3>- La cantidad de conos de CD es de $CantidadConos.</h3> <br>"; 
              echo "<h3>- El importe bruto a pagar es de : s./$CostoBruto .</h3>"; 
              echo "<h3>- La tienda aplica un 5% de descuento al importe bruto.</h3>"; 
              echo "<h3>- A usted le corresponde un descuento de : s./$Descuento.</h3>";
              echo "<h3>- Con el descuento el importe a pagar es de : s./$CostoNeto.</h3>";
              echo "<h3>- La tienda le aplica un descuento a la resta del importe de la compra menos el importe del primer descuento. </h3>";
              echo "<h3>- A usted le corresponde un segundo descuento de : $Descuento2 % en su compra.</h3>";
              echo "<h3>- A usted le corresponde pagar en total con el segundo descuento : s./$CostoNeto2.</h3>";
    ?>
   
</body>
</html>