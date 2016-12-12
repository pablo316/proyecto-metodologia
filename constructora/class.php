<?php
class Conectar
{

	public function con()
	{
		$cadena="host='localhost' port='5432' dbname='Constructora' user='postgres' password='makiitaxxz-1994'";
		$con = pg_connect($cadena) or die("<html>
	<head>
		<title>Consutructora</title>
	</head>
		<body>Error de conexion </body></html>");
		return $con;
	}
}

class Trabajo extends Conectar
{
	private $t;

	public function __construct()
	{
		$this->t=array();
	}
	public function get_proveedor(){
		$sql="Select * from Proveedor;";
		$res=pg_query(parent::con(),$sql);
		while($reg=pg_fetch_assoc($res))
		{
			$this->t[]=$reg;
		}
		return $this->t;
	}
}
?>

