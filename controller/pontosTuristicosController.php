<?php
	require_once '../model/pontosTuristicosModel.php';
	require_once '../model/conexao.php';

	$acao = $_GET['action'];
	if($acao == 'excluir'){
		$id = $_GET['id'];
		excluir($id);
	}
	if($acao == 'editar'){
		$id = $_GET['id'];
		editar($id);
	}

	function excluir($id){
		$OpontoTuristico = new pontosTuristicosModel();
		$OpontoTuristico->idPontoTuristico = $id;
		$OpontoTuristico->deletar();
	}

	function editar($id){
		$OpontoTuristico = new pontosTuristicosModel();
		$OpontoTuristico->idPontoTuristico = $id;
		if (isset($_POST['nome'])) {
			$OpontoTuristico->nome = $_POST['nome'];
		}
		if (isset($_POST['cidade'])) {
			$OpontoTuristico->cidade = $_POST['cidade'];
		}
		if (isset($_POST['estado'])) {
			$OpontoTuristico->estado = $_POST['estado'];
		}
		if (isset($_POST['descricao'])) {
			$OpontoTuristico->descricao = $_POST['descricao'];
		}
		if (isset($_POST['avaliacao'])) {
			$OpontoTuristico->nome = $_POST['avaliacao'];
		}
		$OpontoTuristico->alterar();
	}

	function incluir(){

	}

	function listar(){

	}
?>
