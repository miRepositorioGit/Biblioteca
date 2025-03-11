<?php
/**
 * LibrosModelo.php gestiona una interfaz para el RecordSet.
 * Define un objeto tipo MySQLdb()
 * y retorna un arrgeglo idexado con registro-atributos de la tabla: libros
 * 
 */
class UnlibroModelo
{
  private $objMySQLdb; // Define objeto tipo MySQLdb

  // Define una instancia tipo MySQLdb() para acceder a la base de datos
  function __construct()
  {
    $this->objMySQLdb = new MySQLdb();
  }

  // Retorna un RecordSet (arreglo de registros-atributos) de la base de datos
  public function getUnLibro($id = 1) // Agregar parámetro $id con valor por defecto 1
  {
    // Consulta SQL para recuperar el registro con el ID especificado
    $data = $this->objMySQLdb->querySelect("SELECT * FROM libros WHERE ID = $id");

    // Verificar si el registro existe
    if (empty($data)) {
      // Si el registro no existe, recuperar todos los registros
      $data = $this->objMySQLdb->querySelect("SELECT * FROM libros");
    }
    return $data;
  }
}


?>
