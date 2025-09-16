

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrado</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <header>
        <h1>Cadastrar Pessoa</h1>
        <a href="fabricaVeiculo.php">Voltar</a>
    </header>
    <main>
        
        <?php

            require_once __DIR__ . "/../class/Veiculo.php";
            require_once __DIR__ . "/../class/Moto.php";
            require_once __DIR__ . "/../class/Carro.php";

            $fabricante = htmlspecialchars($_POST['fabricante'], ENT_QUOTES, 'UTF-8');
            $placa = htmlspecialchars($_POST['placa'], ENT_QUOTES, 'UTF-8');
            $ano = htmlspecialchars($_POST['ano'], ENT_QUOTES, 'UTF-8');
            $proprietario = htmlspecialchars($_POST['proprietario'], ENT_QUOTES, 'UTF-8');

            foreach($_POST['veiculo'] as $chave => $valor){
                $tipo = $valor;
                
                if($valor == 'moto'){
                    echo "<h2>Nova Moto</h2>";
                    $primeiroVeiculo = new Moto($fabricante, $placa, $ano, 7000.00, '160');
                    $primeiroVeiculo->setCavalos($primeiroVeiculo->getCavalos() . " ($proprietario)");
                    $diferencial = "<p>Cavalos: " .$primeiroVeiculo-> getCavalos() . "</p>";
                } else{
                    echo "<h2>Nova Carro</h2>";
                    $primeiroVeiculo = new Carro($fabricante, $placa, $ano, 12000.00, '4');
                    $primeiroVeiculo->setPortas($primeiroVeiculo->getPortas() . " ($proprietario)");
                    $diferencial = "<p>Portas: " .$primeiroVeiculo-> getPortas() . "</p>";
                }

            }

            $primeiroVeiculo->setFabricante($primeiroVeiculo->getFabricante() . " ($proprietario)");
            $primeiroVeiculo->setPlaca($primeiroVeiculo->getPlaca() . " ($proprietario)");
            $primeiroVeiculo->setAno($primeiroVeiculo->getAno() . " ($proprietario)");

            echo "<p>Fabricante: " .$primeiroVeiculo-> getFabricante() . "</p>";
            echo "<p>Placa: " .$primeiroVeiculo-> getPlaca() . "</p>";
            echo "<p>Ano: " .$primeiroVeiculo-> getAno() . "</p>";
            echo "<p>Preço: R$ " .$primeiroVeiculo-> getPreco() . "</p>";
            echo "<p>Preço Final: R$ " .$primeiroVeiculo-> precoFinal($primeiroVeiculo-> getPreco());
            echo $diferencial;

        ?>

    </main>
    <footer>
        <h2>Aluno: Matheus Arantes Ferreira</h2>
        <p>
            Esta página serve para organizar os testes da aula de aplicações para a internet (Curso de sistemas da 
            informação da universidade de Uberaba - Uniube)
        </p>
    </footer>
</body>
</html>