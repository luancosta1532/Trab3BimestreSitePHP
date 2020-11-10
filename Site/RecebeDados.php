<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style/styleRebeDadoError.css">
  <title>ERrO</title>
</head>
<body>
<?php

$Banco =  new PDO("mysql:host=127.0.0.1;dbname=trabmodel3", "root", "password");
$Banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$Banco->exec('set names utf8');

$Acesso2 = $Banco->prepare("SELECT * FROM produto");
$Acesso2->execute();
$produtos = $Acesso2->fetchAll(PDO::FETCH_OBJ);
if ($produtos[0]->Nome == "Produto1" || $produtos[1]->Nome == "Produto2" || $produtos[2]->Nome == "Produto3" || $produtos[3]->Nome == "Produto4") {
  if(isset($_POST["nome"]) && isset($_POST["preco"]) && isset($_POST["Tipo"]) && isset($_POST["loja"])) {
    try {
        $Banco = new PDO("mysql:host=127.0.0.1;dbname=trabmodel3", "root", "password");
        $Banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $Banco->exec('set names utf8');
       
        $Acesso2 = $Banco->prepare("SELECT * FROM produto");
        $Acesso2->execute();
        $produtos = $Acesso2->fetchAll(PDO::FETCH_OBJ);


        if(count($produtos) == 4){
         if($produtos[0]->Nome != 'Produto1') {

           if($produtos[1]->Nome != 'Produto2') {

             if($produtos[2]->Nome != "Produto3") {

               $Acesso = $Banco->prepare("UPDATE loja
           SET loja = '{$_POST["loja"]}'
           WHERE idLoja = 4");
           $Acesso->execute();

           $Acesso = $Banco->prepare("UPDATE produto
           SET Nome = '{$_POST["nome"]}', Preco= '{$_POST["preco"]}', Tipo_idTipo='{$_POST["Tipo"]}', Loja_idLoja='4'
           WHERE idProduto = 4;");
           $Acesso->execute();

             }else {
               $Acesso = $Banco->prepare("UPDATE loja
           SET loja = '{$_POST["loja"]}'
           WHERE idLoja = 3");
           $Acesso->execute();

           $Acesso = $Banco->prepare("UPDATE produto
           SET Nome = '{$_POST["nome"]}', Preco= '{$_POST["preco"]}', Tipo_idTipo='{$_POST["Tipo"]}', Loja_idLoja='3'
           WHERE idProduto = 3;");
           $Acesso->execute();
             }

           }else {
             $Acesso = $Banco->prepare("UPDATE loja
             SET loja = '{$_POST["loja"]}'
             WHERE idLoja = 2");
             $Acesso->execute();

             $Acesso = $Banco->prepare("UPDATE produto
             SET Nome = '{$_POST["nome"]}', Preco= '{$_POST["preco"]}', Tipo_idTipo='{$_POST["Tipo"]}', Loja_idLoja='2'
             WHERE idProduto = 2;");
             $Acesso->execute();
           }

          }else {
           $Acesso = $Banco->prepare("UPDATE loja
           SET loja = '{$_POST["loja"]}'
           WHERE idLoja = 1");
           $Acesso->execute();

           $Acesso = $Banco->prepare("UPDATE produto
           SET Nome = '{$_POST["nome"]}', Preco= '{$_POST["preco"]}', Tipo_idTipo='{$_POST["Tipo"]}', Loja_idLoja='1'
           WHERE idProduto = 1;");
           $Acesso->execute();
          }    

        }else {
         $Acesso = $Banco->prepare("INSERT INTO Loja (loja) VALUES (:loja)");
         $Acesso->bindValue(':loja', $_POST["loja"]);
         $Acesso->execute();
         $Acesso2= $Banco->prepare("SELECT * FROM Loja");
         $Acesso2->execute();
         $lojas = $Acesso2->fetchAll(PDO::FETCH_OBJ);    

         $Acesso= $atvBanco->prepare("INSERT INTO Produto (Nome, Preco, Tipo_idTipo, Loja_idLoja) VALUES (:nome, :preco, :tipo, :loja)");
         $Acesso->bindValue(':nome', $_POST["nome"]);
         $Acesso->bindValue(':preco', $_POST["preco"]);
         $Acesso->bindValue(':tipo', $_POST["Tipo"]);
         $Acesso->bindValue(':loja', count($lojas));
         $Acesso->execute();
        }


    } catch (PDOException $error) {
      die('Erro de comunicaçao com servidor:' . $error->getMessage());
    }

    header("location:./index.php?status=VendaAdicionada={$_POST['nome']}");
}
}else {
  echo "<p class=p>Desculpe mais está versao so aceita 4 produtos, conclua uma de suas vendas para adicionar mais!</p><form action=./index.php method=POST><button class=button>Voltar</button></form>";
}

  
?>
 
</body>
</html>
