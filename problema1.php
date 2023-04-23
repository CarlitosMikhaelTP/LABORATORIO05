<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 1</title>
</head>
<body>
<h1>Problema 1: 1.	Una empresa ha decidido otorgar a sus vendedores una 
        bonificación de S/. 50 por cada hijo en edad escolar. El sueldo bruto se 
        calcula sumando un sueldo básico de S/. 600 más una comisión que es igual 
        al 7.5% del importe total vendido del mes y más la bonificación. Por ley, 
        todo vendedor está sujeto a un descuento del 11% del sueldo bruto. Dados el 
        importe total vendido del mes y la cantidad de hijos en edad escolar, diseñe 
        un programa que determine la comisión, la bonificación, el sueldo bruto, el 
        descuento y el sueldo neto de un vendedor (5 puntos).</h1>
    <form method="post" action="">
            <h2>Ingresar Importe del total vendido del mes:<br><input type="number" name="monto"></h2>
            <h2>Ingresar Su Número de hijos en edad escolar:<br><input type="number" name="hijos"></h2>
            <h2>Resultado: <br><h2>
            <input type="submit" name="Calcular" value="Calcular">
    </form>
    <?php
    //declaracion de variables
     $venta=$_POST['monto'];
     $NumeroHijos=$_POST['hijos'];
             $comision=$venta*0.075;
             $bonificacion=$NumeroHijos*50;
             $SueldoBruto=600+$comision+$bonificacion;
             $SueldoNeto=$SueldoBruto-($SueldoBruto*0.11);
              echo "<h3>Sus ventas del mes son : s./$venta .</h3> <br>";
              echo "<h3>Usted tiene $NumeroHijos hijos en edad escolar.</h3> <br>"; 
              echo "<h3>Le correponde una comisión de : s./$comision por sus ventas de este mes.</h3> <br>"; 
              echo "<h3>Por su número de hijos en edad escolar le corresponde una bonificación de s./$bonificacion .</h3> <br>"; 
              echo "<h3>Usted recibe s./600 mensuales, más la comisión y bonificación percibe un sueldo bruto de : s./$SueldoBruto .</h3> <br>";
              echo "<h3>Descontando 11% de su sueldo bruto, usted percibe un sueldo neto de s./$SueldoNeto .</h3><br>";
    ?>
   
</body>
</html>