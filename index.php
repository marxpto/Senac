<html>
 <head>
  <title>Teste PHP</title>
 </head>
 <body>
	<h1><?php echo "<p>Olá Mundo</p>"; ?></h1>
	<p><?php
 $saida = "";
 $Saida = "";
 if(1 == 0){
	 /*echo "Verdadeiro"; Comentário de Bloco (mais de uma linha)*/
	 $saida = "Verdadeiro";
 } else {
	 //print("Falso;"); Comentário da Linha (Apenas está linha)
	 $saida = "Falso";
 }
 ?></p>
 <script language="javascript">
// document.write("saida de texto"); //esta linha escreve no documento mas utiliza o cliente (cliente) via javascript
   document.write("<?php echo $saida; ?>"); // esta linha utiliza a notação do comando echo por isso usamos a tag < ?php
   document.write("<br>");
   document.write("<?=$Saida?>"); // mas quando utilizada para escapar apenas uma variavel ou texto, sem nenhuma outra operação, esta notação também é valida
 </script>
 </body>
</html>