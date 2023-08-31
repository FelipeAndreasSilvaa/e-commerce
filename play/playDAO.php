<?php
require_once('conexao.php');
require_once('playDTO.php');

class PlaystationDAO
{
	private $con;

	function __construct()
	{
		$this->con = GerenciadoraDeConexoes::obter_conexao();
	}

	function obter($id){
		$meu_comando =$this->con->query("SELECT id, img, nome, quantidade, preco FROM estoque WHERE (id = " . $id . ");");
		$linha = $meu_comando->fetch(PDO::FETCH_ASSOC);

		$c = new Playstation();
        $c->set_id($linha['id']);
        $c->set_img($linha['img']);
		$c->set_nome($linha['nome']);
        $c->set_quantidade($linha['quantidade']);
        $c->set_preco($linha['preco']);

		return $c;
	}

	function obter_por_nome($nome){
		$lista = [];
		$meu_comando = $this->con->query("SELECT codigo, img, nome, quantidade, preco FROM estoque WHERE (nome like '%" . $nome . "%');");
 
		while ($linha = $meu_comando->fetch(PDO::FETCH_ASSOC)) {
			$c = new Playstation();
            $c->set_codigo($linha['codigo']);
            $c->set_img($linha['img']);
            $c->set_nome($linha['nome']);
            $c->set_quantidade($linha['quantidade']);
            $c->set_preco($linha['preco']);
			array_push($lista, $c);
		}
		return $lista;
	}
}

?>