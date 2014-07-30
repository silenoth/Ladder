
<?php
//$rand = range(1, 10);
//shuffle($rand);
//foreach ($rand as $val) {
//    echo $val . '<br />';
//}


//
// $num = Array();
// reset($num);
// for($i=1;$i<=10;$i++)
// {
//   $num[$i]=rand(1,100);
//    if($i>1)
//    {
//       for($x=1; $x<$i; $x++)
//       {
//         if($num[$i]==$num[$x])
//         {
//           $i--;
//           break;
//         }
//      }
//   }
// }
// foreach($num as $valor)
// {
//   echo "$valor<BR>";
// }

// $ar=array(0,1,2,3,4,5,6,8);
//shuffle($ar);
//print array_shift($ar);
//echo '<br/>';
//shuffle($ar);
//print array_shift($ar);
//echo '<br/>';
//shuffle($ar);
//print array_shift($ar);
//echo '<br/>';
//shuffle($ar);
//print array_shift($ar);
//echo '<br/>';
//shuffle($ar);
//print array_shift($ar);
//echo '<br/>';
//shuffle($ar);
//print array_shift($ar);
//echo '<br/>';
//shuffle($ar);
//print array_shift($ar);
//echo '<br/>';
//shuffle($ar);
//print array_shift($ar);
//echo '<br/>';
//shuffle($ar);
//print array_shift($ar);
//echo '<br/>';

//$para  = 'silenoth@gmail.com' . ', '; // atención a la coma
$para = 'satanichails@gmail.com';

// Asunto
$titulo = 'Atencion con cambio de tarifas';

// Cuerpo o mensaje
$mensaje = '
<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<title>Atención con el Cambio de Tarifas y Comisiones</title>
</head>
<style type="text/css">
    .button{
        color: #fff;
        font-size: 14px;
        border: 0;
        background-color: #0080FF;
        padding: 10px;;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        cursor:pointer;
    }
</style>
<body>
<div style="margin:20px;">Header
    <div class="well">
      <h1>Saludos {{usuario}}, bienvenido a {{sitio}}</h1>
      <h3>Ahora solo nos queda confirmar tu email</h3>
      <a href="{{url}}"><button class="button">Confirmar mail</button></a>
    </div>
</div>
</body>
</html>
';

// Cabecera que especifica que es un HMTL
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'From: Recordatorio <tarifas@example.com>' . "\r\n";
//$cabeceras .= 'Cc: archivotarifas@example.com' . "\r\n";
//$cabeceras .= 'Bcc: copiaoculta@example.com' . "\r\n";

// enviamos el correo!
mail($para, $titulo, $mensaje, $cabeceras);
