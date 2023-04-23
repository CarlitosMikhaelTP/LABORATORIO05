<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 3</title>
</head>
<body>
<h1>Problema 3:3.	Una empresa dedicada al alquiler de automóviles cobra por día de alquiler a una 
    tarifa determinada. Como oferta promocional, la empresa aplica un descuento igual al 15% del importe 
    bruto. Además, la empresa obsequia 3 lapiceros por cada día de alquiler. Dados la tarifa y el número
     de días de alquiler de un automóvil, diseñe un programa que determine el importe bruto, el importe 
     del descuento, el importe neto a pagar y la cantidad de lapiceros de obsequio (5 puntos). </h1>
    <form method="post" action="">
            <h2>Ingrese la tarifa por día que cobrará a los automóviles:<br><input type="number" name="monto"></h2>
            <h2>Ingrese el número de días que el automóvil estará:<br><input type="number" name="tiempo"></h2>
            <h2>Resultado: <br><h2>
            <input type="submit" name="Calcular" value="Calcular">
    </form>
    <?php
    //declaracion de variables
     $tarifa=$_POST['monto'];
     $Dias=$_POST['tiempo'];
             $CostoBruto=$tarifa*$Dias;
             $Descuento=$CostoBruto*0.15;
             $CostoNeto=$CostoBruto-$Descuento;
             $Lapiceros=$Dias*3;
              echo "<h3>- El monto que se cobrará por día será de : s./$tarifa .</h3>";
              echo "<h3>- El automóvil será alquilado por $Dias días .</h3> <br>"; 
              echo "<h3>- El importe bruto a pagar por $Dias día(s) es de : s./$CostoBruto .</h3>"; 
              echo "<h3>- La empresa aplica un 15% de descuento al importe bruto.</h3>"; 
              echo "<h3>- A usted le corresponde un descuento de : s./$Descuento.</h3>";
              echo "<h3>- Con el descuento el importe neto total a pagar es de : s./$CostoNeto.</h3>";
              echo "<h3>- La empresa adicionalmente le regala 3 lapiceros por día alquilado.</h3>";
              echo "<h3>- A usted le corresponde $Lapiceros lapiceros por los $Dias días de su estadía.</h3>";
    ?>
   
</body>
</html>