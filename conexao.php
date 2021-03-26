<?php
   /* Desenvolvido por Jhonas Henrique 
      Email: Jhonascontato@gmail.com 
	  Github: github.com/JhonasHenrique
	     Utilize como quiser -> Bom proveito!
   */
  /* Conexão com a base de dados sqlite */
  
  // Conectando a base de dados sqlite 
  try{
  $pdo = new PDO("sqlite:banco.sqlite");
  }
   catch(PDOException $e){
	 echo "Ocorreu um erro ao estabelecer uma conexão com a base de dados!".$e->getMessage;   
   }
   
   // Comandos DDL responsáveis pela criação da estrutura do banco de dados
   // $pdo->query("create table if not exists img(id varchar(13), nome_img varchar(300) not null, primary  key(id));");
   
      /* Desenvolvido por Jhonas Henrique 
      Email: Jhonascontato@gmail.com 
	  Github: github.com/JhonasHenrique
	     Utilize como quiser -> Bom proveito!
   */
?>