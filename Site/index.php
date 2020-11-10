<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MinhasVendas</title>
    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="stylesheet" href="./assets/style/normallize.css">
</head>
<body>
    <header>
        <h1 id="h1Titulo">MinhasVendas</h1><h5> <br> online</h5>
    </header>

    <main>
        <p id="InfP">Produtos em venda;</p>
        <section id="sectionProdutoEmVenda">
            <div id="divSectionProdutoEmVenda">
                <form action="./apagar.php" method="POST" id="formProdutos">

                    <input type="text" disabled class="inputProduto" value="
                    <?php 

                        $Banco =  new PDO("mysql:host=127.0.0.1;dbname=trabmodel3", "root", "password");
                        $Banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $Banco->exec('set names utf8');
                        $Acesso = $Banco->prepare("SELECT * FROM Produto");
                        $Acesso->execute();
                        $produto = $Acesso->fetchAll(PDO::FETCH_OBJ);

                        $Acesso2 = $Banco->prepare("SELECT * FROM Loja");
                        $Acesso2->execute();
                        $lojas = $Acesso2->fetchAll(PDO::FETCH_OBJ);

                        if(count($produto) > 0 && $produto[0]->idProduto == 1) {
                            echo "{$produto[0]->Nome} - {$produto[0]->Preco}R$ - {$lojas[0]->loja} ";
                        }else {
                            echo "<p>Produto1-AindaVazio</p>";
                        }    
                    ?>
                    ">

                    <button type="submit" name="area1" class="buttonConcluir" value="0">Concluir Venda</button>
                    <button type="submit"  class="buttonAcessar"><a href="<?php echo "{$lojas[0]->loja}" ?>" target="_blank">Acessar Loja</a></button>
                    
                    <input type="text" disabled class="inputProduto" value=" 
                    <?php 
                        $Banco =  new PDO("mysql:host=127.0.0.1;dbname=trabmodel3",  "root", "password");
                        $Banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $Banco->exec('set names utf8');
                        $Acesso= $Banco->prepare("SELECT * FROM Produto");
                        $Acesso->execute();
                        $produto = $Acesso->fetchAll(PDO::FETCH_OBJ);
                        

                        $Acesso2 = $Banco->prepare("SELECT * FROM Loja");
                        $Acesso2->execute();
                        $lojas = $Acesso2->fetchAll(PDO::FETCH_OBJ);

                        if(count($produto) > 1 && $produto[1]->idProduto == 2 || $produto[0]->idProduto == 2) {
                            if(  $produto[1]->idProduto == 2) {
                                echo "{$produto[1]->Nome} - {$produto[1]->Preco}R$ - {$lojas[1]->loja} ";
                            }else {
                                echo "{$produto[0]->Nome} - {$produto[0]->Preco}R$ - {$lojas[0]->loja} ";
                            }
                        }else {
                            echo "Produto2-AindaVazio";
                        }    
                    ?>
                    ">

                    <button type="submit"  name="area2"  class="buttonConcluir" value="1">Concluir Venda</button>
                    <button type="submit" class="buttonAcessar"><a href="<?php echo "{$lojas[1]->loja}" ?>" target="_blank">Acessar Loja</a></button>
                    
                    <input type="text" disabled class="inputProduto" value=" 
                    <?php 
                        $Banco = new PDO("mysql:host=127.0.0.1;dbname=trabmodel3",  "root", "password");
                        $Banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $Banco->exec('set names utf8');
                        $Acesso = $Banco->prepare("SELECT * FROM Produto");
                        $Acesso->execute();
                        $produto = $Acesso->fetchAll(PDO::FETCH_OBJ);

                        $Acesso2 = $Banco->prepare("SELECT * FROM Loja");
                        $Acesso2->execute();
                        $lojas = $Acesso2->fetchAll(PDO::FETCH_OBJ);

                        if(count($produto) > 2 && $produto[2]->idProduto == 3 || $produto[1]->idProduto == 3 || $produto[0]->idProduto == 3) {
                            if(  $produto[2]->idProduto == 3) {
                                echo "{$produto[2]->Nome} - {$produto[2]->Preco}R$ - {$lojas[2]->loja} ";
                            }else {
                                if($produto[1]->idProduto == 3) {
                                    echo "{$produto[1]->Nome} - {$produto[1]->Preco}R$ - {$lojas[1]->loja} ";
                                }else {
                                    echo "{$produto[0]->Nome} - {$produto[0]->Preco}R$ - {$lojas[0]->loja} ";
                                }
                            }
                        }else {
                            echo "Produto3-AindaVazio";
                        }    
                    ?>
                    ">

                    <button type="submit"  name="area3" class="buttonConcluir" value="2">Concluir Venda</button>
                    <button type="submit" class="buttonAcessar"><a href="<?php echo "{$lojas[2]->loja}" ?>" target="_blank">Acessar Loja</a></button>
                    
                    <input type="text" disabled class="inputProduto" value=" 
                    <?php 
                        $atvBanco =  new PDO("mysql:host=127.0.0.1;dbname=trabmodel3",  "root", "password");
                        $Banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $Banco->exec('set names utf8');
                        $Acesso = $Banco->prepare("SELECT * FROM Produto");
                        $Acesso->execute();
                        $produto = $Acesso->fetchAll(PDO::FETCH_OBJ);

                        $Acesso2 = $Banco->prepare("SELECT * FROM Loja");
                        $Acesso2->execute();
                        $lojas = $Acesso2->fetchAll(PDO::FETCH_OBJ);

                        if(count($produto) > 3 && $produto[3]->idProduto == 4 || $produto[2]->idProduto == 4 || $produto[1]->idProduto == 4 || $produto[0]->idProduto == 4)  {
                            if(  $produto[3]->idProduto == 4) {
                                echo "{$produto[3]->Nome} - {$produto[3]->Preco}R$ - {$lojas[3]->loja} ";
                            }else {
                                if($produto[2]->idProduto == 4) {
                                    echo "{$produto[2]->Nome} - {$produto[2]->Preco}R$ - {$lojas[2]->loja} ";
                                }else {
                                    if($produto[1]->idProduto == 4) {
                                        echo "{$produto[1]->Nome} - {$produto[1]->Preco}R$ - {$lojas[1]->loja} ";
                                    }else {
                                        echo "{$produto[0]->Nome} - {$produto[0]->Preco}R$ - {$lojas[0]->loja} ";
                                    }
                                }
                            }
                        }else {
                            echo "Produto4-AindaVazio";
                        }    

                    ?>
                    ">
                    <button
                     type="submit"  name="area4"  class="buttonConcluir" value="3">Concluir Venda</button>
                    <button type="submit" class="buttonAcessar"><a href="<?php echo "{$lojas[3]->loja}" ?>" target="_blank">Acessar Loja</a></button>
                </form>
            </div>
        </section>

        <p id="InfAdicionarProduto">Adicione um novo produto;</p>
        <section id="sectionAdicionarProduto">
            <form action="./RecebeDados.php" method="POST" id="formAdicionar">
                <div class="inputLabelArea"> 
                    <label for="nomeProduto" class="labelFormAdicionar">Nome:</label>
                    <input type="text" required id="nomeProduto" name="nome"  class="inputFormAdicionar">
                    <label for="preço" class="labelFormAdicionar">Preço:</label>
                    <input type="number" min="1" max="10000" required id="preço"  name="preco" class="inputFormAdicionar">
                    <label for="loja" class="labelFormAdicionar">lojaLink:</label>
                    <input type="text" required id="loja"  name="loja" class="inputFormAdicionar">
                    <p>Tipo:</p>
                    <div id="divchecbox">
                        <div class="checkboxValues">
                            <label for="tipo" class="labelFormAdicionar">Tecnologia</label>
                            <input type="radio" name="Tipo" required id="tipo" class="inputFormAdicionar" value="1">
                        </div>
                        <div class="checkboxValues">
                            <label for="tipo" class="labelFormAdicionar">Eletrodomestico</label>
                            <input type="radio" name="Tipo" required id="tipo" class="inputFormAdicionar" value="2">
                        </div>
                        <div class="checkboxValues">
                            <label for="tipo" class="labelFormAdicionar">Esporte</label>
                            <input type="radio" name="Tipo" required id="tipo" class="inputFormAdicionar" value="3">
                        </div>
                        <div class="checkboxValues">
                            <label for="tipo" class="labelFormAdicionar">Joia</label>
                            <input type="radio" name="Tipo" required id="tipo" class="inputFormAdicionar" value="4">
                        </div>
                        <div class="checkboxValues">
                            <label for="tipo" class="labelFormAdicionar">Brinquedo</label>
                            <input type="radio" name="Tipo" required id="tipo" class="inputFormAdicionar" value="5">
                        </div>
                        <div class="checkboxValues">
                            <label for="tipo" class="labelFormAdicionar">Ferramenta</label>
                            <input type="radio" name="Tipo" required id="tipo" class="inputFormAdicionar" value="6">
                        </div>
                    </div>
                
                </div>
                <div id="buttonArea">
                    <button type="submit">Cadastrar</button>
                </div>
            </form>
        </section>
    </main>
    <sectio id="controlTamanho">

    </sectio>
    <footer>
        <p>Serviço-Minhas-Vendas-Online</p>
        <p>Copyright@2020.MinhasVendas</p>
    </footer>
</body>
</html>