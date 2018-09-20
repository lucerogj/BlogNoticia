<?php
class Noticias
{
	private $pdo;
    
    public $Id;
    public $Titulo;
	public $Contenido;
    public $Tipo;


	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch (PDOException $e) { print "Error!: " . $e->getMessage();  die(); }
	}

	public function Listar()
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM noticias");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch (PDOException $e) { print "Error!: " . $e->getMessage();  die(); }
	}
	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM noticias where Id= ? LIMIT 1");
			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (PDOException $e) { print "Error!: " . $e->getMessage();  die(); }
	}

	
	public function Eliminar($Id)
	{
		try 
		{
			$stm = $this->pdo->prepare("DELETE FROM noticias WHERE Id = ? LIMIT 1");			          
			$stm->execute(array($Id));
		} catch (PDOException $e) { print "Error!: " . $e->getMessage();  die(); }
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE noticias SET Titulo = ?, Contenido = ?, Tipo = ? WHERE Id = ? LIMIT 1";
			$this->pdo->prepare($sql)
			     ->execute( array( $data->Titulo, $data->Contenido, $data->Tipo, $data->Id ) );
		} catch (PDOException $e) { print "Error!: " . $e->getMessage();  die(); }
	}


	public function Registrar(noticias $data)
	{
		try 
		{
		$sql = "INSERT INTO noticias (Titulo,Contenido,Tipo) VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->Titulo,
                    $data->Contenido, 
                    $data->Tipo
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}	
	
}