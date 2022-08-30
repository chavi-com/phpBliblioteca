<?php

class libro{


    private $pdo;

    public $id;
    public $ISBN;
    public $Titulo;
    public $Autor;
    public $Genero;
    public $Fecha_publicacion;
    public $Resumen;

    public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

    public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM libro");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

    public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM libro WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

    public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo->prepare("DELETE FROM libro WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


    public function Actualizar(libro $data)
	{
		try 
		{
			$sql = "UPDATE libro SET 
						ISBN      		= ?,
						Titulo          = ?, 
						Autor        = ?,
                        Genero        = ?,
                        Fecha_publicacion =?,
                        Resumen        = ?
						
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->ISBN, 
                        $data->Titulo,                        
                        $data->Autor,
                         $data->Genero,
                        $data->Fecha_publicacion, 
                        $data->Resumen,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


    public function Registrar(libro $data)
	{
		try 
		{
		$sql = "INSERT INTO libro (ISBN,Titulo,Autor,Genero,Fecha_publicacion,Resumen) 
		        VALUES (?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->ISBN, 
                    $data->Titulo,                        
                    $data->Autor,
                    $data->Genero,
                    $data->Fecha_publicacion, 
                    $data->Resumen
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}

?>