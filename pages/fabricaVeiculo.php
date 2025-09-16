<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricar</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <header>
        <h1>Fabricar Veículo</h1>
        <a href="../index.html">Voltar</a>
    </header>
    <main>

        <form name="formulario" class="formulario" action="newVeiculo.php" method="post">

            <h2>Formulário</h2><br>

            <input name="fabricante" class="campoTxt" type="text" placeholder="Fabricante"><br>
            <br>
            <input name="placa" class="campoTxt" type="text" placeholder="placa"><br>
            <br>
            <input name="ano" class="campoTxt" type="number" placeholder="Ano"><br>
            <br>
            <p>Selecione o tipo</p><hr>
            
            <input type="radio" name="veiculo[]" id="carro" value="carro">
            <label for="carro">Carro</label><br><br>

            <input type="radio" name="veiculo[]" id="moto" value="moto">
            <label for="moto">Moto</label><br><br>
            <br>
            <input name="proprietario" class="campoTxt" type="text" placeholder="Proprietário"><br>
            <br>
            <input class="campoBtn" type="reset" value="Limpar Formulário"><br>
            <br>
            <input class="campoBtn" type="submit" value="Cadastrar" name="enviar" id="enviar"><br>

        </form>

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