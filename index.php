<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	  <title>Sistema de upload</title>
	     </head>
      <body>
	     <!-- Informação ao usuário -->
		 <hr>
		  <center><p><h1>Sistema de upload universal Adaptativo</h1></p></center>
		 <!-- fim da informação ao usuário -->
		   <hr>
		     <br>
	     <!-- Formulário de upload -->
		  <center><form name="upload-form" action="enviando.php" method="POST" enctype="multipart/form-data" onSubmit="return valida_form()">
		     <input type="file" name="arquivo" id="arquivo">
			 <input type="submit" VALUE="Enviar arquivo"/>
		    </form></center>
		 <!-- fim do formulário de upload -->
		 
		 <!-- script que faz a validação do formulário de upload -->
		  <script type="text/javascript">
		    function valida_form(){
		    // Criando variável que armazena o valor do campo arquivo
		    var arquivo = document.getElementById('arquivo').value;
			// Execulta uma operação condicional 
			if(arquivo == ""){
				// Caso campo arquivo esteja vazio 
				alert("Por favor selecione um arquivo!"); 
				return false;
			}else{
				// Caso usuário estiver preenchido o campo corretamente 
				return true;
			}
			}
		    </script>
		 <!-- fim do script que faz a validação do formulário de upload -->
		  <br>
		    <br>
		  <!-- Área dos créditos -->
		  <center><a href="https://github.com/JhonasHenrique" target="_blank" title="Github do criador">Github do desenvolvedor</a></center>
		  <center><a href="mailto:Jhonascontato@gmail.com" target="_blank" title="Github do criador">Clique aqui para entrar em contato</a></center>
		    <center><p><marquee><h2>By Jhonas Henrique</h2></marquee></p></center>
		  <!-- fim da Área dos créditos -->
	     </body>
		   </html>