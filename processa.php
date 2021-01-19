<?php

 	include_once("conexao.php");

 	$data=$_POST['data'];
 	$hora=$_POST['hora'];
 	$turno=$_POST['turno'];
 	$nome=$_POST['nome'];
 	$gpid=$_POST['gpid'];
 	$setor=$_POST['setor'];
 	$local=$_POST['local'];
 	$area=$_POST['area'];
 	$tipo=$_POST['tipo'];
 	$quem_observou=$_POST['obs'];
 	$quem_praticou=$_POST['prat'];
 	$categ=$_POST['categoria'];
 	$prio=$_POST['priorizacao'];
 	$descri=$_POST['descricao'];
 	$obs=$_POST['observacao'];
 	$resp=$_POST['resp'];
 	$prazo=$_POST['prazo'];


	$sql="insert into usuarios (dat,hora,turno,nome,gpid,setor,loc,area,tipo,quem_o,quem_p,cate,prio,descri,obs,resp,prazo) values ('$data','$hora','$turno','$nome','$gpid','$setor','$local','$area','$tipo','$quem_observou','$quem_praticou','$categ','$prio','$descri','$obs','$resp','$prazo')";

	$salvar=mysqli_query($conexao,$sql);

	if (mysqli_insert_id($conexao)) {
		header("location: index.html");
	}else{
		header("location: index.html");
	}

	mysqli_close($conexao);
	
?>