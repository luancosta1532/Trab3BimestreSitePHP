<?php 

if(isset($_POST["area1"])) {
    try {
        $Banco = new PDO("mysql:host=127.0.0.1;dbname=trabmodel3",  "root", "password");
        $Banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $Banco->exec('set names utf8');
        $Acesso = $Banco->prepare("UPDATE produto
        SET Nome = 'Produto1'
        WHERE idProduto= 1");
        $Acesso->execute();

        $Acesso2 = $Banco->prepare("UPDATE loja
        SET loja = 'Venda Concluida!'
        WHERE idLoja = 1");
        $Acesso2->execute();

    } catch (PDOException $error) {
      die('Erro de comunicaçao com servidor:' . $error->getMessage());
    }

    header("location:./index.php?status=Venda1Concluida={$_POST['area1']}");
}

if(isset($_POST["area2"])) {
    try {
        $Banco =  new PDO("mysql:host=127.0.0.1;dbname=trabmodel3",  "root", "password");
        $Banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $Banco->exec('set names utf8');
        $Acesso = $Banco->prepare("UPDATE produto
        SET Nome = 'Produto2'
        WHERE idProduto= 2");
        $Acesso->execute();

        $Acesso2 = $Banco->prepare("UPDATE loja
        SET loja = 'Venda Concluida!'
        WHERE idLoja = 2");
        $Acesso2->execute();


    } catch (PDOException $error) {
      die('Erro de comunicaçao com servidor:' . $error->getMessage());
    }

    header("location:./index.php?status=Venda1Concluida={$_POST['area2']}");
}

if(isset($_POST["area3"])) {
    try {    $Banco =  new PDO("mysql:host=127.0.0.1;dbname=trabmodel3",  "root", "password");
        $Banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $Banco->exec('set names utf8');
        $Acesso = $Banco->prepare("UPDATE produto
        SET Nome = 'Produto3'
        WHERE idProduto= 3");
        $Acesso->execute();

        $Acesso2 = $Banco->prepare("UPDATE loja
        SET loja = 'Venda Concluida!'
        WHERE idLoja = 3");
        $Acesso2->execute();

    } catch (PDOException $error) {
      die('Erro de comunicaçao com servidor:' . $error->getMessage());
    }

    header("location:./index.php?status=Venda1Concluida={$_POST['area3']}");
}

if(isset($_POST["area4"])) {
    try {    $Banco =  new PDO("mysql:host=127.0.0.1;dbname=trabmodel3",  "root", "password");
        $Banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $Banco->exec('set names utf8');
        $Acesso = $Banco->prepare("UPDATE produto
        SET Nome = 'Produto4'
        WHERE idProduto= 4");
        $Acesso->execute();

        $Acesso2 = $Banco->prepare("UPDATE loja
        SET loja = 'Venda Concluida!'
        WHERE idLoja = 4");
        $Acesso2->execute();


    } catch (PDOException $error) {
      die('Erro de comunicaçao com servidor:' . $error->getMessage());
    }

    header("location:./index.php?status=Venda1Concluida={$_POST['area4']}");
}

?>