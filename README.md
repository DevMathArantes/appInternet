1- Instalação do xampp

    1.1 - Acesse o link: https://www.apachefriends.org/pt_br/index.html
    1.2 - Selecione o download para o seu SO para baixar o instalador do xampp
    1.3 - Encontre o instalador e execute-o
    1.4 - Basta avançar e instalar o xampp em C:

2- Utilizando o XAMPP

    2.1 - Para utilizar o xampp, abra o painel de controle e ative o apache
    2.2 - Vá em C:xampp/htdocs/ e salve o arquivo ou subpasta desejado nesta pasta
    2.3 - utilize http://localhost/x (x = caminho do arquivo php que deve ser executado)

3- Variáveis globais

    $GLOBALS: contém todas as variáveis que estão disponíveis no escopo
    global, na forma de um array que contém as referências das variáveis
    que são chaves do array.
    $_SERVER: contém informações do servidor e do ambiente de
    execução.

    $_GET: contém um array associativo de variáveis passadas para o
    script atual via o método HTTP GET. O que for enviado pelo formulário
    será mostrado na barra de endereços do navegador.

    $_POST: contém um array associativo de variáveis passados para o
    script atual via método HTTP POST. O que for enviado pelo formulário
    não será mostrado na barra de endereço do navegador.

    $_FILES: contém um array associativo de itens com informações
    relativas aos arquivos enviados via HTTP, que é enviado por meio do
    script atual pelo método HTTP POST.

    $_COOKIE: contém um array associativo de variáveis passadas
    para o script atual via HTTP COOKIES.

    $_SESSION: contém um array associativo com variáveis de sessão
    disponíveis para o atual script.

    $_REQUEST: contém um array associativo com as variáveis de
    $_GET, $_POST e $_COOKIE.

    $_ENV: contém um array associativo com variáveis passadas para
    o script atual via o método do ambiente. Na internet, equivale ao
    $_SERVER.

4- Constantes mágicas

    __LINE__: retorna o número da linha corrente do código.
    
    __FILE__: retorna o caminho completo e o nome do arquivo. Se for
    utilizado dentro de um include, o nome do arquivo incluído também
    será retornado.
    
    __DIR__: retorna o diretório do arquivo. Se for utilizado dentro de
    um include, o diretório do arquivo incluído também será retornado.
    O nome do diretório não mostrará barra no final, a não ser que seja o
    diretório raiz. Tem o mesmo resultado que utilizar dirname(__FILE__).
    
    __FUNCTION__: retorna o nome da função.
    
    __CLASS__: retorna o nome da classe, que inclui o namespace em que
    foi feita a sua declaração. A partir da versão 5.4 do PHP, essa constante
    mágica também funciona em traits e, quando utilizada em um método
    trait, a constante mágica __CLASS__ retorna o nome da classe que
    está utilizando a trait.
    
    __TRAIT__: retorna o nome do trait, incluindo o namespace em
    que foi declarado.
    
    __METHOD__: retorna o nome do método da classe.
    
    __-NAMESPACE__: retorna o nome do namespace corrente.

5- O retorno da função phpinfo() pode ser configurado por meio da passagem de uma ou mais constantes, como parâmetros opcionais, conforme
segue.

    5.1 - INFO_GENERAL: exibe informações de configuração, localização do
    php.ini, dados de construção, informações sobre o servidor de internet,
    sobre o sistema operacional, entre outros (ver Figura 13).
    
    5.2 - INFO_CREDITS: exibe os créditos do PHP.
    
    5.3 - INFO_CONFIGURATION: exibe os valores locais e principais para
    as diretivas de configuração do PHP.
    16 Linguagem PHP – Introdução
    
    5.4 - INFO_MODULES: exibe os módulos carregados e, também, as configurações de cada um.
    
    5.5 - INFO_ENVIRONMENT: exibe as informações a respeito das variáveis de ambiente.
    
    5.6 - INFO_VARIABLES: exibe todas as variáveis pré-definidas de environment, GET, POST, cookies, server, etc.
    
    5.7 - INFO_LICENSE: exibe informações sobre a licença do PHP (ver
    Figura 14).
    
    5.8 - INFO_ALL: exibe todas as informações que qualquer uma das constantes citadas pode exibir. É o valor padrão e, caso não seja passado nenhum parâmetro, será o INFO_ALL que será retornado.