<?php
/**
 * Libros.php "Toda CLase debe tener un index."
	Libros hereda los
	Gestiona el tránsito de datos entre el modelo principal y la vista principal.
	index() tiene el propósito de recuperar todos los registros-atributos de la base de datos
	el constructor asigna un objeto tipo "LibrosModelo"
	Es importante que el nombre de las funciones comienze con mayuscula, 
	representa un archivo en la carpeta app/modelos/ y app/vista
 */
class Libros extends Controlador //UnLibro
{
  private $model;//interface para vincular 
  function __construct()
  {
	  /*Controlador::modelo() 
	  genera un objeto por omision*/
    $this->model=$this->modelo("LibrosModelo"); //UnLibroModelo
  }
	/*función por omisión */
  public function index(){
	  /*recupera registro-atributos de la base de datos*/
    $data=$this->model->getLibros(); //getUnLibro
    //llamamos a la vista por omision desde Controlador::vista($vista,$datos=[])
    $this->vista("LibrosVista",$data); //UnLibroVista
  }
 }
?>
