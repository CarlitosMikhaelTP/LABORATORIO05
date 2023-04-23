<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 2</title>
</head>
<body>
<h1>Problema 2: 2.	Una fábrica de gaseosas ha decidido rebajar el precio de su gaseosa de 3 litros en 
    5% con la finalidad de igualar los precios de la competencia. Adicionalmente, ofrece un descuento
     especial igual al 7% del importe de la compra. Además, como incentivo especial, obsequia dos caramelos 
     por cada gaseosa adquirida. Dados el precio actual de la gaseosa y la cantidad de unidades adquiridas, 
     diseñe un programa que determine el nuevo precio de la gaseosa, el importe de la compra, el importe del 
     descuento, el importe a pagar y el obsequio (5 puntos).</h1>
    <form method="post" action="">
            <h2>Ingrese el precio al que quiere vender cada gaseosa de 3L:<br>
            <input type="number" name="costoInicial"></h2>
            <h2>Ingrese la cantidad de gasesosas de 3 litros que comprará(con el 5% de dsct cada una):<br>
            <input type="number" name="cantidad"></h2>
            <h2>Resultado: <br><h2>
            <input type="submit" name="Calcular" value="Calcular">
    </form>
    <?php
    //declaracion de variables
     $precioGaseosa=$_POST['costoInicial']; //PRECIO NORMAL DE GASESOSA 3L
     $NumeroGaseosas=$_POST['cantidad'];//CANTIDAD DE GASEOSAS QUE PEDIREMOS
             $precioInicial=$NumeroGaseosas*$precioGaseosa;//PRECIO SIN DESCUENTO DE LA COMPRA
             $descuento=$precioGaseosa*0.05*$NumeroGaseosas;//DESCUENTO DE GASEOSAS
             $Importe=$precioInicial-$descuento;//PRECIO CON PRIMER DSCTO DE VARIAS GASEOSAS
             $descuento2=$Importe*0.07;//VALOR DE SEGUNDO DESCUENTO
             $Importe2=$Importe-$descuento2;//PRECIO TOTAL CON SEGUNDO DSCTO
             $Obsequio=$NumeroGaseosas*2;//CARAMELOS TOTALES POR LA CANTIDAD DE GASEOSA
              echo "<h3>Usted fijo el precio de la gaseosa de 3L a : s./$precioGaseosa .</h3>";
              echo "<h3>Usted escogió comprar $NumeroGaseosas gaseosa(s).</h3>"; 
              echo "<h3>El total inicial de su compra es de : s./$precioInicial.</h3>"; 
              echo "<h3>Cada gaseosa tiene un descuento del 5%.</h3>"; 
              echo "<h3>Por su compra tiene un descuento de : s./$descuento.</h3>";
              echo "<h3>El precio con el primer descuento de su compra es de : s./$Importe.</h3>";
              echo "<h3>El precio de la compra total tiene un descuento adicional del 7%.</h3>";
              echo "<h3>Por su compra ahora tiene un descuento total de : s./$descuento2 !!</h3>";
              echo "<h3>El precio total a pagar por su compra con el último descuento es de : s./$Importe2 !! </h3>";
              echo "<h3>Adicionalmente le corresponde 2 caramelos por cada gaseosa.</h3>";
              echo "<h3>Usted recibe de regalo $Obsequio caramelos por $NumeroGaseosas gaseosas compradas.</h3>";
    ?>
   
</body>
</html>