<?php

/*
 * Clase para crear captcha dando la calve y tamaño deseado
 */

class Captcha
{
	// Tipos de fuentes para utilizar
	var $fuentes = array(
						array("f" => "ididthis.ttf", "t" => "14"),
						array("f" => "edosz.ttf", "t" => "18")
						);
	
	// Se inicia el captcha
	function Captcha()
	{
		$this->fondo = array(255, 255, 255);
		$this->frente = array(0, 0, 128);
	}
	
	// Se genera la imagen del captcha
	function generar_captcha($clave, $tam_x = 120, $tam_y = 70)
	{
		// Se toma un tipo de fuente de forma aleatoria
		$rand_fuente = rand(0, count($this->fuentes) - 1);
		$fuente = $this->fuentes[$rand_fuente]["f"];
		$tam_fuente = $this->fuentes[$rand_fuente]["t"];
		
		// Envio del header de imagen en formato PNG
		header("Content-type: image/png");
		
		// Validar que se puede crear una imagen (requiere GD)
		if (function_exists("imagecreatetruecolor")){
			$imagen = imagecreatetruecolor($tam_x, $tam_y);
		}
		else{
			$imagen = imagecreate($tam_x, $tam_y) or die ("No se puede iniciar GD para crear una imagen");
		}
		
		// Si existe el Anti-Alias se activa en la imagen
		if (function_exists("imageantialias")){
			imageantialias($imagen, true);
		}
		
		// Se toman de forma aleatoria los colores de fondo (claro) y texto (oscuro)
		$this->fondo = imagecolorallocate($imagen, rand(224, 256), rand(224, 256), rand(224, 256));
		$this->frente = imagecolorallocate($imagen, rand(0, 4), rand(0, 4), rand(64, 128));
		
		// Se rellena la imagen con el color de fondo
		imagefill($imagen, 0, 0, $this->fondo);
		
		// Se genera un angulo aleatorio para girar el texto
		$maximo_angulo = 30;
		$angulo = rand(-100 * $maximo_angulo, 100 * $maximo_angulo) / 100.0;
		
		// Se coloca el texto en la imagen con su color, tipo de fuente y angulo
		if (function_exists("imagettftext") && $fuente != ""){
			$caja_texto = imagettfbbox($tam_fuente, $angulo, $fuente, $clave);
			$min_x = min($caja_texto[0], $caja_texto[2], $caja_texto[4], $caja_texto[6]);
			$max_x = max($caja_texto[0], $caja_texto[2], $caja_texto[4], $caja_texto[6]);
			$min_y = min($caja_texto[1], $caja_texto[3], $caja_texto[5], $caja_texto[7]);
			$max_y = max($caja_texto[1], $caja_texto[3], $caja_texto[5], $caja_texto[7]);
			$x = max(0, ($caja_texto[0] - $min_x) + rand(0, $tam_x - ($max_x - $min_x)));
			$y = max(0, ($caja_texto[1] - $min_y) + rand(0, $tam_y - ($max_y - $min_y)));
			imagettftext($imagen, $tam_fuente, $angulo, $x, $y, $this->frente, $fuente, $clave);
		}
		else{
			imagestring($imagen, 5, rand(0, $tam_x - 65), rand(0, $tam_y - 15), $clave, $this->frente);
			if (function_exists("imagerotate")){
				$imagen = imagerotate($imagen, $angulo, $this->fondo);
			}
		}
		
		// Se agregan lineas para dificultar la lectura del texto (para evitar el uso de bots)
		$this->generar_ruido($imagen, (int)($tam_x / 15), 'x');
		$this->generar_ruido($imagen, (int)($tam_y / 15), 'y');
		
		// Se crea y muestra la imagen
		imagepng($imagen);
	}
	
	// Se generan lineas de ruido a una imagen, se puede especificar la cantidad y eje donde se colocaran
	function generar_ruido($imagen, $cantidad = 5, $rango = 'y')
	{
		// Se toma el tamaño de la imagen
		$x = imagesx($imagen);
		$y = imagesy($imagen);
		
		// Se crean las lineas de ruido deseadas
		for ($i = 0; $i < $cantidad; $i++)
		{
			// Se toma un color aleatorio (entre claro y oscuro)
			$color = imagecolorallocate($imagen, rand(64, 192), rand(64, 192), rand(64, 192));
			
			// Se colocan las lineas en un eje de forma aleatoria
			if ($rango == 'y')
			{
				$linea = rand(0, $x);
				imageline($imagen, $linea, 0, $linea + rand(-10, 10), $y, $color);
			}
			else
			{
				$linea = rand(0, $y);
				imageline($imagen, 0, $linea, $x, $linea + rand(-10, 10), $color);
			}
		}
	}
}

?>