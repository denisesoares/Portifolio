<?php
  if(!file_exists('portifolio.xml')){
        $fp = fopen("portifolio.xml", "a");                    
        $conteudo = '<?xml version = "1.0"?><portifolios></portifolios>';
        fwrite($fp, $conteudo);
        fclose($fp);
    }
	$arquivo = 'portifolio.xml';
    $xml = simplexml_load_file($arquivo);
	
	$posicao=sizeof($xml->portifolio);
	
	$xml->portifolio[$posicao]->nomeatividade= $_POST["nome"];
    $xml->portifolio[$posicao]->links = $_POST["links"];
    $xml->portifolio[$posicao]->Data = $_POST["data"];
    $xml->portifolio[$posicao]->Arquivo= $_POST["arquivo"];
    $xml->asXML($arquivo);
	header("Location:Listar.php");  
	
	if(isset($_FILE["arquivo"])){
	$x = strtolower(substr($FILE['arquivo']['name'],-4));
	$NewName = $nome. $x;
	$pasta = 'arquivo/';
	
	move_uploaded_file($FILE['arquivo']['tmp_name'],$pasta.$NewName);
	}else	
		$arquivo = $pasta.$NewName;
	
	
?>
      
	  