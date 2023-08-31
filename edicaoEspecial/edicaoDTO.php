<?php

class edicao
{
	
    private $id;
    private $img;
    private $nome ;
    private $quantidade;
    private $preco; 

	function set_id($id){
		$this->id = $id;
	}

	function get_id(){
		return $this->id;
    }

    function set_img($img){
		$this->img = $img;
	}

	function get_img(){
		return $this->img;
    }

    function set_nome($nome){
		$this->nome = $nome;
	}

	function get_nome(){
		return $this->nome;
    }
    
    function set_quantidade($quantidade){
		$this->qtde = $quantidade;
	}

	function get_quantidade(){
		return $this->qtde;
    }
    
    function set_preco($preco){
		$this->preco = $preco;
	}

	function get_preco(){
		return $this->preco;
	}

}
?>