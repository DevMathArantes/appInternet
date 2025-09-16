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
        <a href="cadastrar.php">Voltar</a>
    </header>
    <main>
        
        <h2>Campos preenchidos: </h2><hr>
        <?php

            //Verificando se submit foi usado
            if(isset($_POST) and !empty($_POST)){
                echo "<p>Submit verificado com sucesso.</p><br>";
            } else{
                echo "<p>Não há sinais de submit.</p><br>";
            }

            //Verifica se o botão submit foi usado
            if(isset($_POST['enviar']) <> 'Cadastrar'){
                echo "<p>Submit não foi utilizado.</p><br>";
            } else{
                echo "<p>Cadastro via submit utilizado.</p><br>";
            }

            //Percorrendo o array com dados do formulário
            foreach($_POST as $chave => $valor){
                if($chave <> 'box' and $chave <> 'genero'){
                    echo "<span>$chave : " . strip_tags($valor) . "</span><br>";
                }
            }

            $boxMarcadas = "";
            foreach($_POST['box'] as $chave => $valor){
                $boxMarcadas = $boxMarcadas . "[$valor]";
                echo "<span>Check box marcada : $valor</span><br>";
            }

            foreach($_POST['genero'] as $chave => $valor){
                $genero = $valor;
                echo "<span>Gênero : $valor</span><br>";
            }

            $nome = $_POST['nome'];
            $sobrenome = strip_tags($_POST['sobrenome']);
            $email = strip_tags($_POST['email']);
            $telefone = strip_tags($_POST['telefone']);
            $aniversario = strip_tags($_POST['aniversario']);
            $corFundo = strip_tags($_POST['corFundo']);
            $corLetras = strip_tags($_POST['corLetras']);
            
            echo "
                <br><br>
                <div class='cadastrado' style='background-color:$corFundo;color:$corLetras'>
                    <h2>Cadastro de $nome $sobrenome</h2>
                    <p>Email: $email</p> 
                    <p>Telefone: $telefone</p>
                    <p>Aniversário: $aniversario</p>
                    <p>Gênero: $genero</p>
                    <p>Box selecionada: $boxMarcadas</p>       
                </div>
            ";
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