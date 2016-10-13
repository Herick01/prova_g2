<?php

	class pontosTuristicosModel{

		var $idPontoTuristico;
		var $nome;
		var $cidade;
		var $estado;
		var $descricao;
		var $avaliacao;
		var $resultado;

		function inserir(){
		$Conn = new conexao();
		$Conn-> abrir_conexao();
		$Oconn = $Conn-> getconn();
		$sql = "INSERT INTO pontosturisticos (nome, cidade, estado, descricao, avaliacao) VALUES ('$this->nome', '$this->cidade', '$this->estado', '$this->descricao', '$this->avaliacao')";
		$Oconn->query($sql);
		header("location: ../view/admView.php");
		}

		function deletar(){
		$Conn = new conexao();
		$Conn-> abrir_conexao();
		$Oconn = $Conn-> getconn();
		$sql = "DELETE FROM pontosturisticos WHERE idPontoturistico = $this->idPontoTuristico";
		$Oconn->query($sql);
		header("location: ../view/admView.php");
		}

		function alterar(){
			$Conn = new conexao();
			$Conn -> abrir_conexao();
			$Oconn = $Conn->getconn();
			$sql = "UPDATE pontosturisticos SET nome = '$this->nome', cidade = '$this->cidade', estado = '$this->estado', descricao = '$this->descricao', avaliacao = $this->avaliacao WHERE idPontoTuristico = '$this->idPontoTuristico'";
			$Oconn->query($sql);
			header("location: ../view/admView.php");
		}

		function listAll(){
			$Conn = new conexao();
			$Conn-> abrir_conexao();
			$Oconn = $Conn-> getconn();
			$sql = "SELECT * FROM pontosturisticos";
			$this -> resultado = $Oconn->query($sql);
		}

		function listBusca($busca){
			$Conn = new conexao();
			$Conn-> abrir_conexao();
			$Oconn = $Conn-> getconn();
			$sql = "SELECT * FROM pontosturisticos WHERE nome LIKE '%$busca%' OR cidade LIKE '%$busca%'";
			$this -> resultado = $Oconn->query($sql);
		}

		function mostrarDetalhes($id){
			$ObjConn = new conexao();
			$ObjConn -> abrir_conexao();
			$sql = "SELECT * FROM pontosturisticos WHERE idPontoturistico = $id";
			$conn = $ObjConn -> getconn();
			$this -> resultado = $conn -> query($sql);
		}

		public function getConsulta(){
			return $this -> resultado;
		}
	}
?>