<?php
	include("Cabecalho.php");
	
	if(file_exists("portifolio.xml")){
	header('content-type:text/html; charset=utf-8');
	$xml = simplexml_load_file('portifolio.xml');
		echo"<table border = '1' class='table' width='750px' align='center'>
			<th>Nome Atividade</th>
			<th>Link</th>
			<th>Data</th>
			<th>Arquivo</th>";	
	}
	$contador = 0;
	foreach($xml->portifolio as $portifolio){
		echo"<tr>
				<td>$portifolio->nomeatividade</td>
				<td><a href='$portifolio->links'>$portifolio->links</a></td>
				<td>$portifolio->Data</td>
				<td><a href ='$portifolio->arquivo' download>Arquivo para baixar</a></td>
			</tr>";
	}
?>	