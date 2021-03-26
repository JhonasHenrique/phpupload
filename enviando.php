<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	  <title>Enviando...</title>
	    </head>
     <body>
	   <!-- script php responsável pelo envio do arquivo -->
	    <?php
		   /* Desenvolvido por Jhonas Henrique 
      Email: Jhonascontato@gmail.com 
	  Github: github.com/JhonasHenrique
	     Utilize como quiser -> Bom proveito!
   */
		 // validando entrada na página 
		 if(!isset($_FILES['arquivo'])){
			echo "<script>window.location.href='index.php';</script>"; 
			exit();
		 }
		 // -> Pegando tamanho do arquivo <-
		 $tamanho_arq = $_FILES['arquivo']['size'];
		 // -> Verificando se o arquivo tem o tamanho dentro das diretrizes por padrão definirei 3mb máximo
		 if($tamanho_arq > 3000000){
			echo "<script>alert('Selecione um arquivo menor!');</script>";
			echo "<script>window.location.href='index.php';</script>"; 
			exit();
		 }
		 // -> Pegando nome do arquivo <-
		 $nome_arq = $_FILES['arquivo']['name'];
		 // -> Pegando extensão do arquivo <-
		 $ext_arq = pathinfo($nome_arq, PATHINFO_EXTENSION);
		 // -> Criando vetor(array) com extensões válidas Definirei apenas 3 extensões permitidas <-
		 $ext_permitidas = array('png','jpg','jpeg'); 
		 // -> Verificando se a extensão está dentro dos padrões propostos pela aplicação <-
		 if(!in_array($ext_arq, $ext_permitidas)){
			echo "<script>alert('Arquivo inválido! Por favor selecione um arquivo válido!');</script>"; 
			echo "<script>window.location.href='index.php';</script>"; 
			exit();
		 }else{
			// -> Criando nome único para o arquivo <-
		    $nome_unico_arq = uniqid().".".$ext_arq;
			// -> Passando pasta para onde o mesmo será movido <-
			$pasta = "armazenamento/";
			// -> Movendo arquivo <-
			$move = move_uploaded_file($_FILES['arquivo']['tmp_name'], $pasta.$nome_unico_arq);
			// -> Verificando se o arquivo foi movido com sucesso! <-
			if(!$move){
		       echo "<script>alert('Ocorreu um erro inesperado ao efetuar envio do arquivo!');</script>"; 
			   echo "<script>window.location.href='index.php';</script>"; 
			   exit();
			}else{
				// -> Caso upload seja efetuado com sucesso, gravar na base de dados o nome do mesmo <-
				/* Importando conexão com a base de dados */ 
				include_once("conexao.php");
				
				// -> Criando id único para imagem no banco <-
				$id = uniqid();
				// -> Execultando query para gravar o nome no banco <- 
				try{
				   $pdo->query("INSERT INTO img(id, nome_img) VALUES('$id','$nome_unico_arq')");
				}
				 catch(PDOException $e){
					echo "<script>alert('Ocorreu um erro inesperado! Mensagem de erro: $e->getMessage');</script>"; 
			        echo "<script>window.location.href='index.php';</script>"; 
			        exit(); 
				 }
				 // -> Caso ocorra tudo sem erros, retornar mensagem de sucesso ao usuário <-
				 finally{
					echo "<script>alert('Seu envio foi realizado com sucesso!');</script>"; 
			        echo "<script>window.location.href='index.php';</script>"; 
			        exit(); 
				 }
			}
		 }
		    /* Desenvolvido por Jhonas Henrique 
      Email: Jhonascontato@gmail.com 
	  Github: github.com/JhonasHenrique
	     Utilize como quiser -> Bom proveito!
   */
		?>
	   <!-- fim do script php responsável pelo envio do arquivo -->
	    </body>
		  </html>