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
class UnLibro extends Controlador //UnLibro
{
    private $model; // Interfaz para vincular

    function __construct()
    {
        // Asigna un objeto del modelo UnlibroModelo.
        $this->model = $this->modelo("UnlibroModelo");
    }

    // Método por omisión.
    public function index($id = 1) // Agregar parámetro $id con valor por defecto 1
    {
        // Recupera el registro con el ID especificado de la base de datos.
        $data = $this->model->getUnLibro($id); // Pasar el ID al método del modelo
        // Llama a la vista por omisión desde Controlador::vista($vista, $datos=[]).
        $this->vista("Unlibrovista", $data);
    }
}

?>
