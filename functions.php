<?php 
	// Function of counting of characters
	function trim_letras( $conteudo, $caracteres ) {
	$texto = wp_trim_words( $conteudo , $caracteres );
	// Só realiza ela caso a string possua mais caracteres do que o delimitado
	if( mb_strlen( $texto ) > $caracteres ){
	$corte_texto = trim ( mb_substr( $texto, 0, $caracteres, 'UTF-8') );
	$exp_texto = explode(" ", $corte_texto);
	$palavra = "";
	//Loop remove a última palavra do resultado final, pois ela vem cortada e pode vir comprometida se escrita com caracteres especiais
	for ($i=0; $i < count( $exp_texto ) -0 ; $i++) {
	$palavra .= $exp_texto[$i] . ' ';
	}
	$final = trim( $palavra );
	$final .= "...";
	}
	else $final = $texto;
	return $final;
	}

 ?>