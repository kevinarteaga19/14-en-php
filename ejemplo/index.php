<?php
//Usuario//
require_once __DIR__.'/bootstrap/app.php';

/*use App\Model\Usuario;

$usuario = new Usuario('Alan Turing');

$usuario->establecerNombre("David Hilbert");

echo $usuario->obtenerNombre();*/

//Mouse//

use App\Model\Mouse;

$mouse = new Mouse('', '' ,'' , '');

echo "Clase Mouse--->".'</br>';

$mouse->establecerTamanio("Mediano");

echo $mouse->obtenerTamanio().'</br>';

$mouse->establecerColor("Negro");

echo $mouse->obtenerColor().'</br>';

$mouse->establecerMarca("Logitech");

echo $mouse->obtenerMarca().'</br>';

$mouse->establecerPeso("53 gramos");

echo $mouse->obtenerPeso().'</br>';

//Niño//

use App\Model\Niño;

$niño = new Niño('', '' ,'' , '');

echo "Clase Niño--->".'</br>';

$niño->establecerEdad("10");

echo $niño->obtenerEdad().'</br>';

$niño->establecerNombre("Marco");

echo $niño->obtenerNombre().'</br>';

$niño->establecerApellido("Aguirre");

echo $niño->obtenerApellido().'</br>';

$niño->establecerDni("71863425");

echo $niño->obtenerDni().'</br>';

//Pelicula//

use App\Model\Pelicula;

$pelicula = new Pelicula('', '' ,'' , '');

echo "Clase Pelicula--->".'</br>';

$pelicula->establecerTitulo("La noche del demonio");

echo $pelicula->obtenerTitulo().'</br>';

$pelicula->establecerGenero("Terror");

echo $pelicula->obtenerGenero().'</br>';

$pelicula->establecerDirector("James Wan");

echo $pelicula->obtenerDirector().'</br>';

$pelicula->establecerAnioLanzamiento("2010");

echo $pelicula->obtenerAnioLanzamiento().'</br>';

//Perro//

use App\Model\Perro;

$perro = new Perro('', '' ,'' , '');

echo "Clase Perro--->".'</br>';

$perro->establecerColor("Tricolor");

echo $perro->obtenerColor().'</br>';

$perro->establecerRaza("Pitbull");

echo $perro->obtenerRaza().'</br>';

$perro->establecerNombre("Zambo");

echo $perro->obtenerNombre().'</br>';

$perro->establecerTamanio("Grande");

echo $perro->obtenerTamanio().'</br>';

//Persona//

use App\Model\Persona;

$persona = new Persona('', '' ,'' , '', '');

echo "Clase Persona--->".'</br>';

$persona->establecerNombre("Julio");

echo $persona->obtenerNombre().'</br>';

$persona->establecerApellido("Perez");

echo $persona->obtenerApellido().'</br>';

$persona->establecerEstatura("1.85 cm");

echo $persona->obtenerEstatura().'</br>';

$persona->establecerNacionalidad("Peruana");

echo $persona->obtenerNacionalidad().'</br>';

$persona->establecerTipoSangre("A+");

echo $persona->obtenerTipoSangre().'</br>';

//PLaneta//

use App\Model\Planeta;

$planeta = new Planeta('', '' ,'');

echo "Clase Planeta--->".'</br>';

$planeta->establecerColor("Azul y Verder");

echo $planeta->obtenerColor().'</br>';

$planeta->establecerNumeroSatelites("1");

echo $planeta->obtenerNumeroSatelites().'</br>';

$planeta->establecerNombre("Tierra");

echo $planeta->obtenerNombre().'</br>';

//PlayStation//

use App\Model\PlayStation;

$playstation = new PlayStation('', '' ,'' , '');

echo "Clase Play Station--->".'</br>';

$playstation->establecerColor("Negro");

echo $playstation->obtenerColor().'</br>';

$playstation->establecerColeccion("Plus");

echo $playstation->obtenerColeccion().'</br>';

$playstation->establecerAlmacenamiento("8TB");

echo $playstation->obtenerAlmacenamiento().'</br>';

$playstation->establecerTamanio("Grande");

echo $playstation->obtenerTamanio().'</br>';

//Profesor//

use App\Model\Profesor;

$profesor = new Profesor('', '' ,'');

echo "Clase Profesor--->".'</br>';

$profesor->establecerNombre("Freddy");

echo $profesor->obtenerNombre().'</br>';

$profesor->establecerCodigo("2018267498");

echo $profesor->obtenerCodigo().'</br>';

$profesor->establecerAsignatura("POO");

echo $profesor->obtenerAsignatura().'</br>';

//Ropa//

use App\Model\Ropa;

$ropa = new Ropa('', '' ,'','');

echo "Clase Ropa--->".'</br>';

$ropa->establecerColor("Verde");

echo $ropa->obtenerColor().'</br>';

$ropa->establecerMarca("HyM");

echo $ropa->obtenerMarca().'</br>';

$ropa->establecerTipoTela("Algodon");

echo $ropa->obtenerTipoTela().'</br>';

$ropa->establecerTipoPrenda("Polo");

echo $ropa->obtenerTipoPrenda().'</br>';

//Router//

use App\Model\Router;

$router = new Router('', '' ,'' ,'');

echo "Clase Router--->".'</br>';

$router->establecerTamanio("Mediano");

echo $router->obtenerTamanio().'</br>';

$router->establecerColor("Blanco");

echo $router->obtenerColor().'</br>';

$router->establecerMarca("Tenda AC10");

echo $router->obtenerMarca().'</br>';

$router->establecerIp("182.168.1.1");

echo $router->obtenerIp().'</br>';

//Sirvienta//

use App\Model\Sirvienta;

$sirvienta = new Sirvienta('', '' ,'' ,'');

echo "Clase Sirvienta--->".'</br>';

$sirvienta->establecerNombre("Natcha");

echo $sirvienta->obtenerNombre().'</br>';

$sirvienta->establecerApellido("Manzano");

echo $sirvienta->obtenerApellido().'</br>';

$sirvienta->establecerEdad("25");

echo $sirvienta->obtenerEdad().'</br>';

$sirvienta->establecerDireccion("Tarapaca #247");

echo $sirvienta->obtenerDireccion().'</br>';

//Switch//

use App\Model\Swich;

$swich = new Swich('', '' ,'' ,'');

echo "Clase Switch--->".'</br>';

$swich->establecerTamanio("Mediano");

echo $swich->obtenerTamanio().'</br>';

$swich->establecerColor("Negro");

echo $swich->obtenerColor().'</br>';

$swich->establecerMarca("Cisco");

echo $swich->obtenerMarca().'</br>';

$swich->establecerPeso("2 kg");

echo $swich->obtenerPeso().'</br>';

//Teclado//

use App\Model\Teclado;

$teclado = new Teclado('', '' ,'' ,'');

echo "Clase Teclado--->".'</br>';

$teclado->establecerMarca("Casio");

echo $teclado->obtenerMarca().'</br>';

$teclado->establecerColor("Negro");

echo $teclado->obtenerColor().'</br>';

$teclado->establecerTipo("Cisco");

echo $teclado->obtenerTipo().'</br>';

$teclado->establecerPrecio("Ergonimico");

echo $teclado->obtenerPrecio().'</br>';

//Usb//

use App\Model\Usb;

$usb = new Usb('', '' ,'' ,'');

echo "Clase Usb--->".'</br>';

$usb->establecerTamanio("Pequeño");

echo $usb->obtenerTamanio().'</br>';

$usb->establecerMarca("Toshiba TransMemory");

echo $usb->obtenerMarca().'</br>';

$usb->establecerCapacidad("16gb");

echo $usb->obtenerCapacidad().'</br>';

$usb->establecerColor("Negro");

echo $usb->obtenerColor().'</br>';






