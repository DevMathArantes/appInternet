<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <header>
        <h1>Cadastrar Pessoa</h1>
        <a href="../index.html">Voltar</a>
    </header>
    <main>

        <form name="formulario" class="formulario" action="cadastrado.php" method="post">

            <h2>Formulário</h2><br>

            <input name="nome" class="campoTxt" type="text" placeholder="Digite seu nome (desprotegido de xss)"><br>
            <br>
            <input name="sobrenome" class="campoTxt" type="text" placeholder="Digite seu sobrenome (protegido de xss"><br>
            <br>
            <input type="email" class="campoTxt" name="email" placeholder="Digite seu email"><br>
            <br>
            <input name="telefone" class="campoTxt" type="number" placeholder="Digite seu telefone"><br>
            <br>
            <label for="aniversario">Selecione seu aniversário</label><br>
            <br>
            <input name="aniversario" class="campoData" type="date" id="aniversario"><br>
            <br>
            <p>Selecione seu gênero</p><hr>
            
            <input type="radio" name="genero[]" id="m" value="masculino">
            <label for="m">Masculino</label><br><br>

            <input type="radio" name="genero[]" id="f" value="feminino">
            <label for="f">Feminino</label><br><br>
            <br>
            <label for="corFundo">Selecione uma cor de fundo</label>
            <input name="corFundo" type="color" id="corFundo"><br>
            <br>
            <label for="corLetras">Selecione a cor das letras</label>
            <input name="corLetras" type="color" id="corLetras">
            <br><br>
            <p>Selecione uma checkbox</p><hr>

            <input name="box[]" type="checkbox" id="box1" value="box_1">
            <label for="box1">Caixa 1</label><br>
            <br>
            <input name="box[]" type="checkbox" id="box2" value="box_2">
            <label for="box2">Caixa 2</label><br>
            <br>
            <input name="box[]" type="checkbox" id="box3" value="box_3">
            <label for="box3">Caixa 3</label><br>
            <br><br>
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