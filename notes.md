##### 05/02/2024

Curso de Symfony Framework: criando uma aplicação com MVC

```
symfony new controle_series_symfony
composer create-project symfony/skeleton:"6.1.*" control_serie_symfony
composer require webapp
php -S localhost:8080 -t public
php bin/console     
php bin/console make:controller OlaMundoController
npm i
npm install sass
npm install sass-loader
composer require symfony/webpack-encore-bundle`
```

@01-Conhecendo o Symfony 

@@01
Apresentação

Boas-vindas ao nosso curso introdutório de Symfony! Para iniciar o treinamento, vamos entender o que é um framework PHP e como essa ferramenta pode nos ajudar a escrever um código em Symfony.
Depois disso, vamos instalar o Symfony e criar código. Desde o início, aplicaremos essa ferramenta para solucionar erros descritivos e melhorar nossa experiência.

Vamos criar nosso primeiro controller, aprender a lidar com seus detalhes, criar rotas e definir parâmetros.

Em seguida, aprenderemos a criar templates com o Symfony, que também tem muitas aplicações em gerenciamento de projetos na área de front-end.

Para finalizar o curso, exercitaremos estilização, debug e queries no framework. Faremos isso criando uma lista gerenciável de séries com o Doctrine, o ORM padrão do Symfony.

Esse treinamento nos ensinará os conhecimentos básicos da plataforma, que segue o paradigma MVC. Para realizá-lo, precisaremos de conhecimentos prévios em Composer, PHP, Orientação a Objetos e Doctrine. Claro, existem diversos outros conteúdos em Symfony que abordaremos em treinamentos futuros.

Vamos começar?

@@02
O que é um Framework?

Antes de aprender a utilizar o Symfony, vamos entender o que ele é. O site oficial do framework o apresenta como um conjunto de componentes PHP reutilizáveis. Já aprendemos a utilizar esses componentes no treinamento de Composer.
O Symfony fornece diversos desses elementos. Um exemplo é o seu cliente HTTP próprio, capaz de enviar requisições. Ele também possui um componente de roteamento para controller.

Symfony também é um framework para projetos web. Mas qual a diferença entre componentes e frameworks? Sabemos que o primeiro é um fragmento de código escrito por outra pessoa e que será executado pelo nosso próprio código. Já o framework executa os códigos feitos por nós.

Quando assume o papel de framework, o Symfony recebe a requisição, decide a configuração de rota e chama o controller criado pelo seu usuário. Portanto, ele facilita a configuração de projetos, a index conhecida como front controller e as configurações de dependência.

Além disso, ele utiliza vários componentes, como o de log e o de acesso a bancos de dados (ORM). Quando usamos um framework, esses elementos já estão presentes e devidamente configurados.

Encontramos todas essas informações na documentação do nosso framework, ao clicar na opção "What is Symfony". Na mesma área, também é possível ler sobre a comunidade de desenvolvedores Symfony e sobre a filosofia da ferramenta.

Lá, também ficamos sabendo que diversos projetos utilizam componentes do Symfony. Há três exemplos: gerenciadores de conteúdo, como Drupal; bibliotecas de e-commerce, como Prestashop; e até mesmo outros frameworks, como Laravel.

Também recomendamos a leitura dos conteúdos da seção "Symfony in 5 minutes", especialmente os que falam sobre por que e quando utilizar a ferramenta. Também devemos conferir os "Elevator Pitches", que são formas de explicar a utilização do Symfony a pessoas de diferentes níveis de conhecimento (como seu chefe, outro desenvolvedor, um administrador de sistemas e assim por diante).

Durante o treinamento, não vamos focar em componentes separados, e sim na utilização do framework como um todo.

Vamos aprender a instalar o Symfony na próxima aula e, depois, partiremos para a prática.

@@03
Facilidades

Falamos neste vídeo sobre a diferença entre uma biblioteca e um framework. Basicamente nós chamamos o código da biblioteca, enquanto o framework chama nosso código. Mas um framework traz diversas facilidades.
Que facilidades um framework full-stack como Symfony pode nos trazer?

Apenas facilidades na criação de rotas (front-controller).
 
Alternativa correta
Auxílio com SQL (usando ORM), logs, tratamento de erros, etc.
 
Frameworks full-stack como Symfony nos trazem todas essas facilidades.
Alternativa correta
Leitura e escrita de arquivos em formatos específicos.

@@04
Instalando o Symfony

Agora que já compreendemos o Symfony e os frameworks, vamos instalar a ferramenta nos nossos computadores.
Vamos até a página de documentação no site oficial do Symfony e, lá, clicaremos em "Setup / Installation".

Para fazer o download da ferramenta, precisaremos cumprir alguns requisitos técnicos. A versão do PHP mais antiga aceita pela versão 6.1 do Symfony é a 8.1. Apesar disso, também é possível substituir o PHP por um container do Docker.

Ao instalar o PHP, também precisaremos das extensões Ctype, iconv, PCRE, Session, SimpleXML e Tokenizer. Geralmente, elas já vêm habilitadas, mas caso isso não aconteça, podemos usar o polyfill: uma funcionalidade do Symfony que substitui essas extensões por código em PHP.

Nesse caso, perderemos um pouco em performance, mas, ainda assim, as funcionalidades existirão. Em um ambiente de produção, essas funções são indispensáveis. Já em um ambiente de desenvolvimento, não são necessárias.

Vamos usar o Composer para gerenciar as dependências, como a utilização dos componentes do Symfony. Lembrando que temos na Alura treinamentos sobre o Composer.

Teremos a opção de instalar a interface de linha de comando (CLI) da plataforma, um binário que simplifica a digitação dos comandos, facilitando, por exemplo, a utilização do serviço de cloud do Symfony.

No vídeo, não a utilizaremos, mas, caso decidamos instalar a CLI, ela verificará a presença dos requerimentos necessários para executar o Symfony.

Agora, vamos criar nosso projeto. Há duas opções para fazer isso: a primeira é utilizar o binário do Symfony, mas também é possível utilizando somente o Composer, que é a maneira com a qual vamos prosseguir.

Novamente nos depararemos com duas opções. A primeira delas é criar uma aplicação web tradicional, aquilo que chamamos de framework fullstack, com back-end, rotas, controller, injeção de dependência e várias funcionalidades extras.

E a segunda opção é criarmos o projeto usando apenas o Composer. Fazendo isso, teremos um microframework sem as funcionalidades extras da primeira opção, como ORM configurado, componente de log mais complexo e componente de visualização.

Vamos seguir com a primeira opção. Para fazer isso, selecionaremos uma pasta no terminal do nosso sistema com o comando cd. Agora, vamos criar o sistema de controle de séries e acessar a pasta do projeto com um cd controle_series_symfony. Uma vez dentro da pasta, poderemos executar o comando composer require webapp para configurar os componentes disponíveis de forma padrão:

composer create-project symfony/skeleton:"6.1.*" controle_series_symfony
cd controle_series_symfony
composer require webappCOPIAR CÓDIGO
Mesmo que já existam versões mais atualizadas do framework, vamos manter a definição do skeleton na versão 6.1, utilizada no treinamento. Assim, evitamos problemas de compatibilidade.

Ao executar esses comandos, receberemos o esqueleto e as dependências iniciais do repositório do Symfony. Este é o primeiro método de instalação.

Mas, como já falamos, também é possível realizar a instalação sem receber todos os componentes disponíveis. Para isso, bastaria executar apenas o comando composer create-project symfony/skeleton:"6.1.*" controle_series_symfony no nosso terminal, mas não faremos isso.

Na sequência, o terminal nos dará a opção de utilizar o Docker no projeto. Nesse treinamento, não vamos utilizá-lo. Então, vamos responder ao questionamento com um n. Faremos isso pela linha de comando.

Para rodar o projeto, podemos chamar o servidor embutido do PHP pelo console e definir uma porta, como a 8080, para o local host:

php -S localhost:8080COPIAR CÓDIGO
Se utilizarmos o Docker, o comando do local host não funcionará. Será preciso substituí-lo pelo IP local e usar uma porta que esteja livre no computador. No vídeo, utilizamos a porta 8123. Também vamos fazer o parâmetro -t apontar para a pasta ´public´, na qual encontraremos o arquivo index.php, responsável por requisições, roteamento e por chamar o controller:

php -S 0.0.0.0:8123 -t publicCOPIAR CÓDIGO
Essas ações serão suficientes para subir o servidor. Agora, basta abrir http://localhost:8123 no seu navegador para usar o Symfony.

Agora que já temos o Symfony instalado, poderemos configurar uma URL, debugar, localizar o projeto e encontrar informações sobre documentação, tutoriais e comunidade. A partir do próximo vídeo, começaremos a escrever código usando o Symfony.

https://symfony.com/doc/current/index.html

@@05
Microframework vs Fullstack

Nesse vídeo, nós instalamos o Symfony em sua versão full stack, mas vimos que é possível utilizar o microframework Symfony também.
Como poderíamos ter instalado o microframework ao invés do framework full stack completo?

Bastaria omitir o segundo comando (composer require webapp).
 
Ao digitar o comando citado, nós instalamos o framework full stack do Symfony. Sem esse comando nós teríamos uma versão reduzida do framework sem alguns componentes, como: ORM, template engine para criar views, enviador de e-mails, componente de mensageria, etc. Todos esses componentes podem ser instalados e configurados manualmente com um único comando, mas para esse treinamento nós já vamos deixar tudo instalado na versão full stack.
Alternativa correta
Não é possível ter apenas um microframework com Symfony.
 
Alternativa correta
Bastaria digitar apenas o segundo comando (composer require webapp).
 
Parabéns, você acertou!

@@06
Faça como eu fiz

Nessa aula nós começamos a entender o mundo dos frameworks PHP ao conhecer sobre o Symfony. Nós entendemos melhor o que é um framework e o que é o Symfony especificamente, além de instalá-lo e vê-lo em funcionamento.
Chegou a hora de você colocar em prática o que vimos neste capítulo e implementar também essas alterações em seu código.

Caso tenha dúvidas, confira o andamento do seu projeto clicando na Opinião do Instrutor.

Certifique-se de que você possui o PHP instalado na versão 8.1 ou maior.
Garanta também que o composer esteja instalado. Ele será utilizado para criar o projeto.
Abra a linha de comando e navegue até a pasta onde você vai criar o projeto (use o comando cd para mudar de pasta no terminal).
Já na pasta desejada, execute o comando composer create-project symfony/skeleton:"6.1.*" controle_series_symfony. Isso vai criar um projeto na pasta controle_series_symfony. Você pode usar outro nome se quiser.
Com o projeto criado, ainda pela linha de comando, entre na pasta recém criada do projeto. Ex.: cd controle_series_symfony.
Lá você vai instalar a versão “completa” do framework com o comando composer require webapp.
Após responder as perguntas exibidas pelo comando anterior, inicialize o servidor embutido do PHP com php -S localhost:8080 -t public. Isso vai inicializar um servidor localmente na porta 8080 (você pode usar outra se quiser). Com isso, basta acessar http://localhost:8080 para ver seu projeto Symfony novinho em folha.

@@07
O que aprendemos?

Nessa aula, nós:
Entendemos o que é um framework e vimos que o uso de um framework PHP pode nos trazer diversas vantagens e códigos já prontos.
Aprendemos que o Symfony é um framework PHP bastante famoso além de também fornecer componentes independentes. Estes componentes podem ser utilizados diretamente por nós ou até por outras ferramentas. O Laravel (outro framework PHP muito famoso), por exemplo, usa diversos componentes Symfony por baixo dos panos.
Vimos que o Symfony fornece uma versão minimalista do seu framework, ideal para criação de APIs, aplicações de console e microsserviços, mas fornece também uma versão mais completa com todos os seus componentes já instalados e pré-configurados. Essa segunda versão já traz um ORM (Doctrine), um componente para lidar com views (Twig), detalhes de mensageria e muito mais.

#### 06/03/2024

@02-Controller

@@01
Projeto da aula anterior

Você pode baixar os códigos que desenvolvemos até agora em zip neste link!

https://github.com/alura-cursos/cursos-symfony/archive/refs/tags/aula-1.zip

@@02
Definindo a primeira rota

Agora que já temos acesso ao Symfony, daremos sequência ao treinamento.
Vamos abrir o projeto na IDE da nossa preferência. No vídeo, o instrutor optou pelo PhpStorm. À esquerda da tela, podemos observar a estrutura do projeto.

A pasta "assets" abriga detalhes de front-end, já a pasta "bin", arquivos binários. Em "config", encontramos as configurações, em "migrations", os comandos SQL, e, na pasta "public", a index e o front controller.

A pasta "src" é onde criaremos o código PHP. Em "templates", ficam as views. Há também as pastas de teste e de traduções de textos do front-end. Na pasta “var”, guardamos detalhes variados, como cache, log e arquivos de banco de dados. E, em “vendor”’, armazenamos as dependências do Composer.

Utilizaremos bastante o console, que está localizado na pasta "bin". Vamos executá-lo agora. Nele, podemos inserir o comando php bin/console para ver todos os comandos disponibilizados pelo Symfony:

php bin/consoleCOPIAR CÓDIGO
Ao executar esse comando, encontramos ações relacionadas a tradução, servidor, segurança, armazenamento de informações confidenciais, rota e mensageria, por exemplo. É possível, inclusive, criar código a partir de sua linha de comando. Também é possível criar um CRUD pelo console, mas não faremos isso. Hoje, vamos criar um controller.

Para fazer isso, vamos executar php bin/console make:controller na linha de comando da nossa IDE. Vamos definir, também, um nome para ele. O nome não precisa, necessariamente, terminar em “Controller”. Mas essa é uma boa prática e, por isso, chamaremos o nosso de OlaMundoController:

php bin/console make:controller OlaMundoControllerCOPIAR CÓDIGO
Além de criar a classe Controller, criamos um arquivo de visualização que ainda não vamos utilizar. Vamos minimizar o terminal e, depois, abrir o arquivo OlaMundoController.php (na pasta controller), que exibirá o código abaixo:

class OlaMundoController extends AbstractController
{
    #[Route('/ola/mundo', name: 'app_ola_mundo')]
    public function index (): Response
    {
        return $this->render( view: 'ola_mundo/index', [
            'controller_name' => 'OlaMundoController',
        ]);
    }
}COPIAR CÓDIGO
O controller é uma classe do PHP e, além disso, estende uma classe do Symfony, algo que não é obrigatório. Por isso, vamos remover o extends AbstractController do código, na linha 9. Além disso, a função index() devolve uma resposta, então também podemos substituir o método $this e suas especificações por new Response( content: 'Olá mundo');:

class OlaMundoController extends AbstractController
{
    #[Route('/ola/mundo', name: 'app_ola_mundo')]
    public function index (): Response
    {
        return new Response( content: 'Olá mundo');
        ]);
    }
}COPIAR CÓDIGO
Para definir a rota, utilizamos o atributo #[Route()] do PHP 8. Uma rota pode ter algumas informações: o caminho dela pode ter um nome, por exemplo.

Obs: O route() é uma informação a mais e foi ensinada no curso de Meta Programação e Reflection. Meta Programação e Reflection
Para exemplificar, vamos substituir 'ola/mundo' por 'ola_mundo' no atributo:

    #[Route('/ola_mundo', name: 'app_ola_mundo')]COPIAR CÓDIGO
Agora, podemos abrir o Symfony no nosso navegador e acessar a URL http://localhost8123/ola_mundo.

Também podemos adicionar conteúdos HTML e, por exemplo, transformar a resposta ( content: 'Olá mundo')em H1, posicionando-a entre duas tags <h1>:

        return new Response( content: '<h1>Olá mundo</h1>');COPIAR CÓDIGO
Fazendo isso, o arquivo HTML será interpretado pela ferramenta. Já criamos, portanto, nossa primeira rota.

Ao contrário de outros casos, como o do MVC, que exibe uma página em branco ao se deparar com um erro, o Symfony conta com um error handler integrado, uma ferramenta de correção que facilita o processo de debugging. Para mostrá-lo, vamos inserir a expressão $erro após a resposta, para gerar um erro proposital no código:

        return new Response( content: '<h1>Olá mundo</h1>' . $erro);COPIAR CÓDIGO
Fazendo isso, o navegador já exibirá o error handler, que aponta qual foi o erro, mostra em que linha ele aconteceu e todos os logs gerados, facilitando a depuração. Além disso, também podemos visualizar a Stack Trace. Não é preciso configurar nada para ter acesso a essas informações.

Também há uma barra de debug, na parte inferior da tela, que informa o código HTTP retornado, o controller executado, o nome da rota, se ela utiliza ou não uma exceção, o tempo gasto na execução e a memória utilizada.

Na próxima aula, vamos aprender a lidar com dados de requisição e como adicionar mais detalhes à resposta gerada pelas funções.

@@03
Erros

Neste vídeo, nós criamos nossa primeira rota com o Symfony, embora ela ainda não seja muito emocionante. Mas mesmo nesse código tão simples, nós já pudemos ver uma boa vantagem de se utilizar um framework ao gerar um erro no código.
O que precisamos fazer para que o Symfony exiba os detalhes de erros de forma tão mais amigável?

Instalar a “versão” fullstack do framework.
 
Alternativa correta
Alterar configurações em nosso código.
 
Alternativa correta
Nada. Esse é o padrão.
 
Em uma instalação padrão do Symfony, os erros serão exibidos daquela forma mais detalhada e amigável. Claro que isso pode ser alterado para que em ambiente de produção esses detalhes não sejam expostos. Nós podemos conversar mais sobre isso no futuro.

@@04
Lidando com Request e Response

Já aprendemos a criar um controller, a definir uma rota nele e também vimos o que há de interessante na página de erro do Symfony.
Hoje vamos entender o que é o name da rota. Por isso, vamos remover essa informação do código por enquanto. Também removeremos a expressão $erro da linha 6:

class OlaMundoController
{
    #[Route('/ola_mundo')]
    public function index (): Responde
    {
        return new Response( content: '<h1>Olá mundo</h1>');
    }
}COPIAR CÓDIGO
Depois disso, vamos atualizar a página do Symfony no navegador para garantir que o erro não seja mais exibido. Vamos aprender a acessar a requisição, assim como fizemos no treinamento de MVC.

É possível recuperar dados da requisição para trazer dados do formulário. Por isso, vamos aprender a recuperar o ID. Se quisermos exibir o ID mencionado na URL, precisaremos modificar a entrada nas tags <h1> da linha 6 do código para "ÌD:" e adicionar a expressão $_GET, para buscar o ID a partir da variável superglobal _GET:

return new Response( content: '<h1>ID:</h1>' . $_GET['id']);COPIAR CÓDIGO
Depois de modificar o código, ao atualizar a página, veremos o ID e o número "1" em exibição. Há uma quebra de linha entre "ID:" e "1". Usando o atalho "Ctrl + U", entenderemos que isso acontece porque o número "1" foi inserido após o fechamento da tag <h1>.

Depois disso, será possível exibir no navegador qualquer informação que for definida como o ID da URL.

Também é possível utilizar a função filter_input() para esse objetivo. Apesar de funcionarem, essas não são as melhores maneiras de recuperar dados da requisição. O ideal é que utilizemos o que o framework já disponibiliza.

É possível, por exemplo,receber um request do namespace "Symfony/Component/HttpFoundation/Request" por parâmetro. Esse namespace representa o componente do Symfony que lida com detalhes em HTTP. Para fazer isso, vamos adicionar Request $request à função index(), na linha 4 do nosso código:

public function index(Request $request): ResponseCOPIAR CÓDIGO
Podemos adicionar muitas informações ao request. Uma delas é a função dd(), que significa "Dump and Die". Ela serve para exibir todas as informações na tela e encerrar a execução. Vamos testá-la, inicialmente, com um valor simples, adicionando-a à linha 6 do código:

        dd( ...vars: 1);COPIAR CÓDIGO
Depois disso, atualizaremos o navegador e vamos nos deparar com a exibição das informações em formato semelhante a de um var dump simples, mostrando em que arquivo ocorreu a ação, qual linha recebeu a execução e o valor. Além disso, a execução será encerrada.

Substituindo o valor de ...vars: por $request na função dd(), teremos um objeto bem maior e com mais informações que o anterior, como os atributos das rotas, os dados do request e da query string: exatamente a parte do ID que queremos alterar na URL.

Então, podemos usar o request para acessar os dados da query string e usar get() para pegar qualquer chave que quisermos, como o ID:

        dd($request->query->get( key:'id'));COPIAR CÓDIGO
Isso fará com que o navegador retorne "text" ou qualquer outra informação enviada pela URL. Conseguimos, portanto, recuperar dados da nossa requisição.

É possível fazer isso de diversas formas: com query, por exemplo, buscamos os dados da query string. Em request, buscamos dados provenientes de formulários como o $_POST. Em attributes buscamos atributos que podemos definir na rota, como veremos mais à frente.

Com o método get(), podemos buscar dados de qualquer um desses lugares. Caso a informação não seja encontrada, o resultado retornado será nulo. É o que acontece, por exemplo, se removermos "id" da URL.

Agora, vamos remover a função dd() e voltar ao formato inicial, adicionando $request->query->get( key: 'id')); à linha 6 do código:

        return new Response( content: '<h1>ID:</h1>' . $request->query->get( key: 'id'));COPIAR CÓDIGO
Apesar de ser possível encontrar os dados sem especificar onde acontecerá a busca (no caso do nosso código, removendo ->query), é mais interessante deixar isso explícito. Fazemos isso para facilitar a leitura do código e, por esse motivo, não removeremos essa informação.

Obs: Código explícito é sempre melhor do que implícito
Agora vamos dar atenção a outros detalhes. Na Response, apertaremos "Ctrl + P" na nossa IDE para visualizar os parâmetros desse construtor. Veremos o conteúdo da resposta, no nosso caso, HTML, o status quo de HTTP, que é 200 por padrão, e cabeçalhos extra.

Seria possível, por exemplo, informar que essa é uma requisição com erro, adicionando status: 401 à linha 6 do código:

        return new Response( content: '<h1>ID:</h1>' . $request->query->get( key: 'id'), status: 401);COPIAR CÓDIGO
De volta ao navegador, vamos clicar na página com o botão direito do mouse e selecionar a opção "Inspecionar". Clicaremos na aba "Rede" da nova janela que se abrirá na parte inferior da tela, atualizaremos a página e veremos que a resposta foi classificada como erro. Portanto, conseguimos manipular o status HTTP.

Também podemos passar cabeçalhos HTTP através de arrays associativos. Utilizando este formato, podemos passar qualquer informação. Ainda dentro da Response, vamos fazer isso abrindo chaves e inserir `'X-Qualquer-Coisa' => 'Valor':

...
        return new Response( content: '<h1>ID:</h1>' . $request->query->get( key: 'id',
        status: 401,
        [
            'X-Qualquer-Coisa' => 'Valor'
        ]
        );COPIAR CÓDIGO
Depois, atualizaremos o navegador novamente. Vamos acessar a aba "Rede" outra vez e seguir o percurso "ola_mundo?id=1 > Cabeçalhos". Depois de selecionar, basta rolar a página para baixo para encontrarmos "X-Qualquer-Coisa: valor".

Tudo isso será muito útil no futuro. Na próxima aula, vamos aprender mais sobre o atributo #[Route()] e os parâmetros relacionados a ele.

@@05
Para saber mais: método get

Acompanhamos neste vídeo que há um método get em nosso objeto de Request. Ele funciona da seguinte forma:
Primeiro ele tenta buscar o valor desejado nos atributos da rota (veremos mais sobre isso em breve).

Não encontrando, ele busca na query string. Caso não encontre, ele busca no corpo da requisição.

Para não precisar decorar esse comportamento, o ideal é sempre usar as formas explícitas de buscar os dados de cada parte da requisição.

@@06
Parâmetros de Route

Vamos entender como funcionam os parâmetros da rota e como nossoo controller opera de maneira geral.
O atributo #[Route()] define a rota e possui alguns parâmetros. Em algumas IDEs, como o PhpStorm, basta digitar "Ctrl + P" para ter acesso a todos eles. Porém, se sua IDE não conta com essa funcionalidade, basta ler a documentação do Symfony. Ela é fácil de entender e tem todas essas informações.

No vídeo, o instrutor aciona o comando "Ctrl + P" e nós podemos visualizar a lista de parâmetros. O primeiro deles, "path", indica a URL acessada para executar o controller. Sempre que o valor do atributo de rota for encontrado na URL, a função index(x)será executada pelo Symfony.

Já conhecemos, também, o parâmetro "name", que já vem instalado por padrão e será utilizado mais à frente. Por sua vez, "methods" é um dos principais parâmetros: ele é um array e contém os métodos HTTP aceitos pela rota. Para exemplificar, vamos adicionar methods: à nossa rota e configurá-la para aceitar apenas o verbo 'GET', na linha 3 do nosso código:

        #[Route('/ola_mundo', methods: ['GET'])]COPIAR CÓDIGO
Fazendo isso, esse método só será executado quando o verbo 'GET' for utilizado para acessar a URL. O código continuará a funcionar no navegador. Mas, se substituirmos o verbo 'GET' por 'POST', o que acontece? O error handler do Symfony será exibido no navegador, porque ele tenta utilizar 'GET' por padrão.

O Symfony aponta o erro automaticamente, definindo o status do HTTP como "405 Método Não Permitido". Por isso, codando dessa maneira, não temos acesso à rota 'ola-mundo'.

Agora, vamos deletar o controller, localizado na pasta "src", e o arquivo de view criado junto a ele, que está na pasta "templates". Faremos isso para criar o controller que usaremos no nosso exercício. Vamos programar um controle de séries com a função de registrar episódios e séries que já assistimos, por exemplo.

Para fazer isso, vamos abrir o terminal. Nele, executaremos o comando php bin/console make:controller SeriesController e o controller será criado já com uma URL padrão, '/series', e um nome, 'app_series'. Além, é claro, do arquivo de view:

class SeriesController extends AbstractController
{
    #[Route('/series', name: 'app_series')]
    public function index(): Response
    {
        return $this->render( view: 'series/index.html.twig', [
            'controller_name' => 'SeriesController',
        ]);
    }
}COPIAR CÓDIGO
Agora, vamos acessar http://localhost8123/series no nosso navegador. A execução acontece, mostra de onde vem a mensagem e permite o acesso ao arquivo. Clicando no primeiro link, vemos o conteúdo, que podemos, inclusive, abrir na nossa IDE.

Agora vamos criar os elementos da nossa lista de séries. Faremos isso adicionando a expressão $seriesList à linha 6 do código. Dentro desse array, vamos adicionar as séries "Lost", "Grey's Anatomy", "Loki" e "Suits".

Além disso, vamos exibi-las criando um $html com uma <ul>. Vamos usar o foreach para atribuir uma <li> a cada elemento da $seriesList. Depois, vamos retornar uma nova Response com o HTML:

{
        $seriesList = {
            'Lost',
            'Grey's Anatomy',
            'Loki',
            'Suits',
        ];

        $html = '<ul>';
        foreach ($seriesList as $series) {
            $html .= '<li>' . $series . '</li>';
        }
        $html .= '</ul>';

        return new Response($html);COPIAR CÓDIGO
Depois de fazer essas alterações no código, atualizaremos o navegador e poderemos visualizar nossa lista de séries.

Agora vamos prestar atenção a outros detalhes da Response. Existem outras classes além dela e, para visualizá-las, basta dar um "Ctrl + clique" em Response. Fazendo isso, vemos a lista com as classes herdeiras da Response.

Temos, por exemplo, uma resposta de arquivo binário, útil para fornecer arquivos para download. Também há respostas de redirecionamento, que facilitam o processo e excluem a necessidade de criar conteúdos vazios e adicionar um cabeçalho de redirecionamento para fazê-lo.

Há, ainda, respostas de stream, que permitem o envio de dados. E, por fim, as respostas em Json, que testaremos agora. Na linha 19 do nosso código, vamos substituir Response($html) por JsonResponse($seriesList). Isso transformará a resposta em um array em Json, a ser exibido no navegador:

        return new JsonResponse($seriesList);COPIAR CÓDIGO
Vamos resumir o acesso a 'GET' adicionando o método ao parâmetro da rota, na linha 3 do código. Também vamos alterar o nome do método para seriesList:

    #[Route('/series', name: 'app_series', methods: ['GET'])]
    public function seriesList(): Response
    {COPIAR CÓDIGO
Podemos, agora, atualizar o navegador e notar que tudo continua funcionando perfeitamente.

Na próxima aula, vamos sair da camada de controller do nosso MVC e entender como funciona sua camada de visualização utilizando o Symfony, é claro.

@@07
Limitando verbos

Vimos nesse vídeo como podemos limitar os verbos HTTP utilizados para acessar determinada rota.
Como definir uma rota que pode ser acessada somente via POST e PUT?

#[Route('/url', methods: ['POST', 'PUT'])]
 
O parâmetro methods é um array de strings.
Alternativa correta
#[Route('/url', methods: 'POST', 'PUT')]
 
Alternativa correta
#[Route('/url', ['POST', 'PUT'])]

@@08
Faça como eu fiz

Nessa aula nós começamos a efetivamente escrever código usando o framework Symfony. Criamos nosso primeiro controller e nossa primeira rota também.
Chegou a hora de você colocar em prática o que vimos neste capítulo e implementar também essas alterações em seu código.

Caso tenha dúvidas, confira o andamento do seu projeto clicando na Opinião do Instrutor.

Na linha de comando, estando dentro da pasta do projeto, execute php bin/console make:controller OlaMundoController para criar uma nova classe de controller.
Na classe criada em src/Controller/OlaMundoController.php nós vamos praticar um pouco. Altere a URL para acessar essa rota, modifique o código (lembre-se de retornar um objeto do tipo Symfony\Component\HttpFoundation\Response). Gere alguns erros de sintaxe também para se familiarizar com a tela de erro.
Pratique também o acesso a dados do objeto de requisição. Nele nós temos acesso aos dados da query string, do corpo da requisição, dos cabeçalhos e muito mais.
Agora você pode apagar os arquivos recém-criados. Eles foram só para testarmos um pouco.
Execute agora php bin/console make:controller SeriesController para criar nosso controller real, que vai gerenciar as séries que cadastrarmos.
Nesse Controller, crie um array com nomes de séries. Esse array vai servir como nossa fonte de dados por enquanto.
Agora use esse array para montar uma estrutura HTML em uma variável. Concatene strings para gerar um código HTML válido onde cada item do array será um item de uma lista no HTML. Retorne essa string na resposta com return new Response($html);.

@@09
O que aprendemos?

Nessa aula, nós:
Efetivamente criamos nosso primeiro código usando Symfony. Aprendemos a usar a linha de comando do framework para gerar um controller.
Nesse controller criado magicamente pelo framework nós vimos como definir rotas. Utilizamos nesse vídeo a sintaxe de atributos do PHP para definir qual URL será acessada para executar o método em questão.
Ao cometer um erro nós pudemos ver como o Symfony nos auxilia na investigação de erros através de uma página muito mais descritiva e informativa que a padrão do PHP.
Também começamos a entender como o Symfony lida com requisição e resposta através do parâmetro Request recebido no controller e na Response retornada por ele.

#### 07/03/2024

@03-View

@@01
Projeto da aula anterior

Você pode baixar os códigos que desenvolvemos até agora em zip neste link!

https://github.com/alura-cursos/cursos-symfony/archive/refs/tags/aula-2.zip

@@02
Conhecendo o Twig

Vamos continuar a conhecer nosso framework. Recapitulando, nós estamos utilizando a versão fullstack do Symfony. Um dos componentes presentes nessa versão serve para lidar com a camada de view. Em outras palavras, para exibir detalhes de visualização.
Vamos remover do nosso código o Json que programamos na última aula, junto à expressão $html, e também o seu namespace:

class SeriesController extends AbstractController
{
    #[Route('/series', name: 'app_series', methods: ['GET'])]
    public function seriesList(): Response
    {
        $seriesList = [
            'Lost',
            'Grey's Anatomy',
            'Loki',
            'Suits',
        ];

        return $this->render( view: 'series/index.html.twig', [
            'controller_name' => 'SeriesController',
        ]);
    }
}COPIAR CÓDIGO
Ao atualizar o navegador, vamos nos deparar novamente com o template inicial de criação de controller no Symfony.

Mas de onde vem esse template? Quando criamos um controller pela linha de comando, ele adiciona automaticamente uma série de componentes não-obrigatórios. Por exemplo, o extends AbstractController, que vem do namespace Symfony\Bundle\FrameworkBundle\Controller\AbstractController;.

Quando nós estendemos o AbstractController recebemos algumas funcionalidades extras. Uma delas é o método render, presente na linha 13 do nosso código. Quando executado, ele busca um arquivo de template do Twig, uma linguagem com sintaxe própria.

Twig, no caso, é a linguagem que vamos utilizar para dar sequência ao treinamento. Para entendê-la melhor, vamos acessar https://symfony.com/doc/current/templates.html. Basta rolar a página para baixo que encontraremos as informações relacionadas a essa linguagem de template.

Ela, além de ser uma linguagem, é também um componente que facilita a criação de arquivos HTML. Sua sintaxe é um pouco diferente. Dispensa, por exemplo, a criação de uma função echo, o que simplifica a codificação de arquivos de visualização. Para fazer isso, utilizamos a linha de código abaixo:

<h1>{{ page_title }}</h1>COPIAR CÓDIGO
Outro exemplo é o de execução de operadores lógicos, como if, for ou for it. Para executá-los no Twig, basta abrir chaves, inserir %, o que desejamos verificar e outro % antes de fechar as chaves, como no exemplo abaixo:

            {% user.isLoggedIn %}COPIAR CÓDIGO
De volta ao site do Symfony, encontramos os primeiros detalhes do Twig. Acessando https://twig.symfony.com, é possível ler, ainda, uma documentação à parte, porque o Twig pode ser utilizado, inclusive, em outros sistemas além do Symfony.

Vamos voltar à nossa IDE para apresentar, enfim, de onde vem o template inicial de criação de controller no Symfony. Já sabemos que ele é buscado pelo método render, mas de onde ele vem?

Embora isso seja configurável, ele vem, por padrão, do caminho "templates > series > index.html.twig". No caso, index.html.twig é o arquivo exibido pelo Symfony no navegador quando criamos um* controller.*

Vamos abrir esse arquivo na IDE e editá-lo para exibir as séries da nossa lista.

Nossa primeira alteração acontecerá na linha 12 do código: vamos editar o texto entre as chaves <h1> para Listagem de séries. Para exibir a lista de séries, vamos apagar os conteúdos listados entre tags <li> e criar um for, inserindo primeiro a variável do loop e, em seguida, o nome do array.

Dentro do for, vamos adicionar a variável do loop entre chaves <li>. Nosso código ficará assim, a partir da linha 12:

        <h1>Listagem de séries</h1>

        <ul>
            {% for series in seriesList %}
                <li>{{ series }}</li>
            {% endfor %}
        </ul>
    </div>
    {% endblock %}COPIAR CÓDIGO
Agora vamos abrir o controller para entender como passamos informações para nosso arquivo Twig. A variável seriesList existe no controller, mas não na view. Por isso, quando tentamos executar o código, nos deparamos com o error handler *do *Symfony.

Para resolver essa situação, precisamos fornecer um segundo parâmetro ao método render: no caso, as variáveis do contexto do nosso arquivo de visualização. Vamos passar seriesList, que tem o mesmo valor de $seriesList, na linha 14 do código:

            'seriesList' => $serisList,COPIAR CÓDIGO
Depois dessa alteração, já conseguiremos exibir a lista no navegador.

A sintaxe do Twig pode ser diferente, mas é simples. Isso a torna mais acessível para equipes que contam com web designers, por exemplo, ou pessoas pouco familiarizadas com PHP de maneira geral.

À medida que avançarmos, vamos conhecer mais funcionalidade interessantes do Twig. Lembre-se que você pode encontrar todas elas em https://twig.symfony.com.

Na próxima aula, vamos entender o que são os blocos e o arquivo base.html.twig no nosso arquivo Twig.

@@03
Detalhes nas views

Neste vídeo nós conhecemos o Twig e vimos como ele pode ser usado para criar views em um sistema que usa Symfony. Também aprendemos que podemos utilizar o método render de nosso controller para exibir nossas views, onde seu primeiro parâmetro é justamente o caminho do template a ser exibido.
Qual é o segundo parâmetro do método render?


Alternativa correta
O contexto, ou seja, as variáveis que serão acessíveis no template.
 
O segundo parâmetro é um array associativo, onde as chaves vão ser os nomes das variáveis criadas com seus respectivos valores em nossas views.
Alternativa correta
O contexto, ou seja, as variáveis que não serão acessíveis no template.
 
Alternativa correta
Uma variável que estará acessível no template.
 
É possível ter diversas variáveis disponíveis no template.

@@04
Entendendo o layout

Vamos continuar estudando o Twig, uma ferramenta completa que pode ser utilizada em projetos para além do Symfony.
Podemos notar que dentro do arquivo index.html.twig há dois blocos: block title e block body. Eles estão relacionados ao conceito de layout do Twig. Os layouts do componentes podem ser utilizados em várias páginas, arquivos e views diferentes.

A instalação padrão do Symfony já traz consigo um layout base, com estrutura HTML, meta tags, blocos, favicon e detalhes de front-end.

Quando uma visualização estende o layout, ela pode definir os blocos que vão substituir os que estão presentes no código do arquivo Twig que estamos visualizando.

Por padrão, o valor do block title, por exemplo, é Welcome!", que significa boas-vindas. Na view, é possível sobrescrevê-lo e alterar seu valor.

Vamos alterar o block title do nosso arquivo Twig. Substituiremos Hello SeriesController! por Listagem de séries na terceira linha do código:

{% block title %}Listagem de séries{% endblock %}COPIAR CÓDIGO
Depois de fazer isso, quando atualizarmos o navegador, a barra de título da aba mostrará "Listagem de séries". Se acessarmos o código fonte da página com um "Ctrl + U" veremos o novo valor dentro da tag <title>.

É possível sobrescrever um bloco assim como sobrescrevemos um método. Quando estendemos um template, é como se estivéssemos estendendo uma classe.

Já em block body, inserimos todo o conteúdo do corpo do HTML. Então, se tivermos vários arquivos de visualização diferentes, podemos usar o mesmo HTML em todos eles, já com o cabeçalho head e outros padrões.

No treinamento de MVC, separamos arquivos de cabeçalho e de rodapé. Já aqui, organizamos esses elementos em um único arquivo de layout.

No próximo vídeo, vamos criar uma view com o formulário de cadastro de uma nova série. A partir disso, vamos discutir o funcionamento do nosso sistema.

@@05
Layouts e blocos

Aprendemos neste vídeo que o Twig possui um conceito de blocos e que com esse conceito nós podemos ter layouts que serão estendidos por views específicas.
Levando em consideração o conceito de layouts e blocos do Twig, qual afirmativa a seguir é verdadeira?

Os blocos definidos em um layout podem ter um valor padrão.
 
Todo bloco de um layout pode ter um valor padrão e esse valor pode ser sobrescrito em outras views que estendem esse layout. Caso a view que estende o layout não informe o bloco em questão, o valor padrão será utilizado. Mas nós podemos ter um bloco vazio sem problemas, ou seja, um bloco sem nenhum valor padrão.
Alternativa correta
Os blocos definidos em um layout devem ter um valor padrão.
 
Alternativa correta
Os blocos definidos em um layout devem ser sobrescritos pelas views que o estenderem.
 
Os blocos podem ser omitidos pelas views que estendem um layout. Nesse caso, os valores padrão serão utilizados.

@@06
Mais funcionalidades

No último vídeo, entendemos como o Twig e seus templates funcionam. Quando estamos no modo de desenvolvimento e utilizamos algum template do Twig, o Symfony adiciona automaticamente uma barra de profile no rodapé da página web. Se não utilizarmos o Twig, ela não aparecerá.
Se apertarmos o "Ctrl + U" para acessar o código fonte da página, veremos que, em "Grey's Anatomy", onde deveria haver um apóstrofo, há um código HTML. Isso acontece porque, por padrão, quando utilizamos a sintaxe do Twig, o código chama as funções de limpeza que aprendemos no treinamento de String.

Por isso, não precisamos nos preocupar em limpar nossa saída. O Twig faz isso por si só. Se alguém nos envia um conteúdo em HTML por formulário, por exemplo, podemos exibi-lo sem medo, porque o Twig cuidará da limpeza. Caso seja do nosso interesse que ele não o faça, podemos utilizar o filtro raw, adicionando-o à linha 16 do nosso código:

            <li>{{ series|raw }}</li>COPIAR CÓDIGO
Esse é um dos muitos filtros presentes no Twig. Depois de adicionar raw ao nosso código, podemos atualizar o navegador. Se apertarmos "Ctrl + U" agora, veremos que o apóstrofo está presente no código HTML.

Vamos remover o filtro raw da linha 16 do código e criar um botão com link para adicionar o formulário de nova série. Vamos criar o link na linha 14 do nosso código e batizar a URL de /series/create. Vamos chamar o botão de Adicionar:

<a href="/series/create">Adicionar</a>COPIAR CÓDIGO
Ao atualizar o navegador, teremos o link acima da lista de séries. Apesar disso, o botão ainda não levará a endereço algum. Portanto, quando clicamos nele, nos deparamos com o error handler do Symfony. Chegou a hora de criar uma rota para o formulário.

Vamos abrir o console e executar o comando php bin/console para vermos nossas opções. Na categoria make, vemos que não é possível criar outro controller, porque não queremos criar uma nova classe. O que desejamos é um novo método para o controller que já existe.

O console não pode nos ajudar com isso, será preciso criar o código do novo método à mão. De volta ao controller de séries, vamos criar uma public function chamada addSeriesForm() e definir a rota, que será '/series/create' e só aceitará requisições do tipo 'GET'.

Como queremos retornar a resposta já montada com um arquivo de view, também precisaremos adicionar a expressão $this->render() como retorno:

    #[Route('/series/create', methods: ['GET'])]
    public function addSeriesForm(): Response
    {
        return $this->render( view: 'series/form.html.twig');COPIAR CÓDIGO
Porém, o arquivo series/form.html.twig não existe. Vamos criá-lo, portanto, com o auxílio da nossa IDE. O instrutor utiliza o PhpStorm, que monta o arquivo já com blocos de corpo e de título quando o usuário pressiona "Alt + Enter".

Caso nossa IDE não conte com essa funcionalidade, basta abrir a pasta "series" e criar um novo arquivo, chamado form.html.twig. Depois, vamos abri-lo e usar a sintaxe {% extends %}, adicionando também o nome do arquivo.

Depois de estender o template, precisamos sobrescrever os blocos. Vamos começar pelo bloco de body. Criaremos um formulário com o método post e um input, que receberá o nome da série. O nome e o ID do input serão name. Por fim, vamos adicionar uma label chamada Nome da série: ao input:

    {% extends 'base.html.twig' %}

    {% block body %}
        <form method="post">
            <label for="name">Nome da série:</label>
            <input type="text" name="name" id="name">
        </form>
    {% endblock %}COPIAR CÓDIGO
Quando atualizarmos a página, veremos que as alterações funcionaram.

No futuro, vamos adicionar temporadas e episódios das séries. Mas, por enquanto, trabalharemos apenas com nomes de séries.

Precisamos inserir, também, um botão de "Adicionar", algo que faremos com o código <button>Adicionar</button>. Nosso formulário ficará assim:

    {% extends 'base.html.twig' %}

    {% block body %}
        <form method="post">
            <label for="name">Nome da série:</label>
            <input type="text" name="name" id="name">

            <button>Adicionar</button>
        </form>
    {% endblock %}COPIAR CÓDIGO
Esse botão serve para enviar o formulário, mas ainda não há rota definida para sua função. Por isso, se clicarmos nele, seremos redirecionados ao error handler do Symfony.

Antes de criar a funcionalidade de adicionar uma série à lista, precisaremos melhorar o visual da aplicação.

Na próxima aula, vamos conhecer o componente do Symfony voltado à área de front-end e trabalhar alguns detalhes da aparência da nossa lista de séries.

@@07
Para saber mais: XSS

Um dos assuntos citados neste vídeo é XSS (Cross-site scripting), um tipo de ataque que pode executar um código malicioso em nosso site.
Como foi citado, o Twig já nos protege disso, mas ainda assim é muito importante conhecer como esse ataque funciona.

Neste vídeo, isso é mostrado com exemplos e como corrigir (sem uma template engine).

@@08
Faça como eu fiz

Nessa aula nós começamos a separar melhor nosso código. O que é HTML foi para nossos templates então nós conhecemos um pouco sobre o Twig.
Chegou a hora de você colocar em prática o que vimos neste capítulo e implementar também essas alterações em seu código.

Caso tenha dúvidas, confira o andamento do seu projeto clicando na Opinião do Instrutor.

No Controller de séries, passe a retornar a chamada do método render como originalmente foi criado pela linha de comando (return $this->render('series/index.html.twig', …));
No template templates/series/index.html.twig altere o título para “Listagem de séries”. Garanta que isso se reflete ao acessar a rota /series.
Utilizando um for do Twig nós vamos percorrer a lista de séries que criamos como um array.
Para que esse for consiga acessar o array, em nosso controller nós precisamos adicionar esse array ao segundo parâmetro do método render.
Agora no template de séries, adicione um link para um formulário de criação de séries. Esse formulário ainda não existe, então envie o usuário para a URL /series/create, por exemplo.
Em nosso controller nós vamos agora definir essa rota. Para isso crie um método e adicione o atributo #[Route] a ele com os parâmetros necessários.
Crie também um novo template para conter o formulário. Nesse template não se esqueça de estender o layout base.html.twig, definir o formulário dentro do bloco body do Twig e definir também um block title.

@@09
O que aprendemos?

Nessa aula, nós:
Finalmente chegamos na camada “V” do “MVC”. Nesse capítulo nós separamos o código que gerava um HTML para um template ao invés de deixar tudo no Controller.
Nesse template nós conhecemos uma nova sintaxe, um novo mundo: Twig. Usando o Twig nós temos acesso a algumas facilidades para criar templates e vamos conhecê-las melhor ao longo dos treinamentos de Symfony.
Uma das principais facilidades do Twig é a definição de um layout padrão. Nesse capítulo nós criamos uma estrutura base para todas as nossas páginas, diminuindo a repetição de código HTML em nosso sistema.

#### 08/03/2024

@04-Symfony Encore

@@01
Projeto da aula anterior

Você pode baixar os códigos que desenvolvemos até agora em zip neste link!

https://github.com/alura-cursos/cursos-symfony/archive/refs/tags/aula-3.zip

@@02
Entendendo o conceito

Agora que já criamos duas views e sabemos utilizar o template, vamos falar mais um pouco sobre front-end.
A interface da nossa lista de séries está muito simples. Nas palavras do instrutor, ela está feia. Vamos usar o Bootstrap, um componente de front-end, para estilizá-la. Mas o que aprenderemos hoje pode ser executado com qualquer ferramenta semelhante.

Vamos acessar https://getbootstrap.com/docs/5.2/getting-started/download/ para fazer o download do Bootstrap. Poderíamos baixar o CSS e o JavaScript já compilados, mas precisaríamos repetir esse processo sempre que houvesse uma atualização no Bootstrap.

Para evitar esse incômodo, vamos utilizar um gerenciador de dependência. Vamos utilizar o npm, mas poderíamos escolher o yarn ou outros gerenciadores de dependência do front-end. Dessa forma, vamos ter o projeto do Bootstrap na pasta "node modules", que tem função semelhante à "vendor" do PHP.

A partir dela, precisaremos acessar os arquivos e trazê-los para o nosso projeto. Normalmente isso é feito através de um processo de front-end complexo, que pode ser automatizado com a ajuda de um webpack ou outros tipos de bundler.

Quando trabalhamos com frameworks de front-end, como Angular ou React, eles configuram o webpack automaticamente. Apesar disso, existe sempre a possibilidade de gerenciarmos nós mesmos o empacotador de código.

Porém, precisamos ter em mente que essa não é uma tarefa simples. Para termos noção, apenas para importarmos os estilos do Bootstrap, precisaríamos adicionar um arquivo de configuração imenso à nossa aplicação.

Agora, vamos dar uma olhada em https://symfony.com/doc/current/frontend.html para entender porque front-end é importante em um treinamento de Symfony. A ferramenta possui um componente chamado* Encore, que atua como facilitador para tabalharmos com *webpacks.

Ele traz uma configuração facilitada para instalarmos o empacotador de código.

A documentação explica como podemos utilizar o Encore e nos aponta o caminho para sua instalação. Porém, como instalamos a versão completa do Symfony no início do treinamento, esse componente já está presente nas nossas máquinas.

Só precisaremos, então, instalar a parte de front-end. Para isso, vamos precisar ter o yarn ou o npm *instalados. No treinamento, utilizaremos *npm. Antes de instalá-lo, porém, vamos baixar o Node.js em https://nodejs.org.

Obs: Quando for instalar o Node.js, escolha versões pares ou classificadas como Long Term Support (LTS). Elas tendem a ser mais estáveis.
Vamos abrir o console do projeto e executar o comando npm install. Isso será suficiente para instalar todas as dependências de front-end do nosso webpack, o Encore.

No próximo vídeo, vamos instalar o Bootstrap e configurá-lo de maneira simplificada com a ajuda de um componente Symfony *no *front-end.

https://getbootstrap.com/docs/5.2/getting-started/download/

https://symfony.com/doc/current/frontend.html

@@03
Para saber mais: Node

Para realizar a instalação do Node em sua máquina, você pode seguir as instruções deste link.
Prefira as versões pares, pois são mais “estáveis”. ;-)

https://nodejs.org/en/

@@04
Instalação do Encore

Atualmente o pacote webapp que instalamos no início do treinamento não traz mais o Encore por padrão. Sendo assim, para utilizá-lo, basta executar o seguinte comando:
composer require symfony/webpack-encore-bundle

@@05
Instalando o Bootstrap

Agora já estamos com o Enconre instalado, mas antes de manipulá-lo no nosso projeto, vamos lembrar que ele também pode ser utilizado em projetos que não são do Symfony.
Como o Enconre é uma dependência de front-end, podemos intalar apenas a parte relacionada a isso na página de documentação oficial do Symfony. Para começar, vamos instalar o Bootstrap e salvá-lo como uma dependência de desenvolvimento executando o código npm install bootstrap --save-dev no terminal.

Vamos acessar "node_modules > bootstrap > scss". SCSS é um pré-processador de CSS. Basicamente, é uma forma de escrever na linguagem de estilo com algumas funções a mais na sintaxe. Precisamos, então, transformar esse SCSS em CSS, para que o navegador possa compreendê-lo.

Por isso, pode ser necessário copiar o código de configuração de webpack em https://getbootstrap.com/docs/5.2/getting-started/webpack/, mas esse não será o nosso caso, porque vamos usar o Encore. Vamos executar o arquivo webpack.config.js, na pasta "vendor", para configurar o webpack.

Primeiros, vamos selecionar o destino dos arquivos processados. No caso do nosso código, manteremos o padrão: eles serão processados e enviados para a pasta "public/build".

O caminho buscado quando tentarmos encontrar o arquivo será /build, porque o public já é acessível pela URL. Logo entenderemos melhor a necessidade dessa linha.

Vamos excluir tudo entre as linhas 14 e 41 do código. Vamos fazer isso porque, por padrão,o Symfony traz um framework JavaScript para lidarmos com essa linguagem de programação, como um React simplificado.

Depois disso, também vamos apagar o código entre as linhas 18 e 29. Por fim, apagaremos todas as linhas abaixo de enableSassLoader() até //.autoProvidejQuery(), que será a última a ser deletada.

Ainda não estamos buscando nenhum arquivo de estilo. Vamos voltar ao site do Bootstrap para importá-lo. É possível importar um arquivo de custom para modificar as variáveis, mas nós queremos utilizar o Bootstrap padrão.

Para isso, vamos acessar "assets > styles > app.css". Vamos abrir o arquivo "app.css" e adicionar a linha de código @import "~bootstrap/scss/bootstrap"; a ele. Vamos renomear o arquivo para "app.scss".

A pasta "assets" tem os detalhes do framework do Symfony que criamos anteriormente. Para que não nos confundamos, vamos apagar a pasta "controllers" e os demais arquivos da pasta "styles". Deixaremos apenas o arquivo que renomeamos agora há pouco.

Esse arquivo está importando o Bootstrap. Agora, precisamos transformá-lo em CSS e movê-lo para a pasta "public > build". Vamos configurar o webpack para que ele possa fazer isso. A parte de buildjá está feita, cuidando da otimização e limpeza do* output*.

Agora precisamos adicionar uma entrada de estilo, inserindo .addStyleEntry() à linha 19 do nosso código. Vamos adicionar, também, os parâmetros 'style' e './assets/styles/app.scss':

.addStyleEntry( name:'style', src:'./assets/styles/app.scss');COPIAR CÓDIGO
Isso é tudo que precisamos para configurar o webpack. O arquivo já veio com configurações padrão, o que fez dele mais complexo.

Chegou a hora de executar o arquivo package.json, que fica dentro da pasta "vendor". Nele, encontramos nossas dependências, que são o Bootstrap e o Encore. Lá, também localizamos o framework do Symfony. Há, também, scripts, como o dev, que é responsável por rodar o Encore.

Vamos abrir o console e inserir o comando npm run dev, para executá-lo. Depois disso, seremos informados sobre a necessidade de instalar o sass-loader e o sass. Além disso, ele informará os comandos que precisamos rodar.

Isso será necessário porque, na configuração, habilitamos o* Sass Loader* com o comando .enableSassLoader(). Vamos fazer isso inserindo npm install sass-loader@^12.0.0 sass --save-dev no nosso console.

Depois disso, a dependência será instalada e poderemos rodar o Run dev. Agora, vamos habilitar a configuração Encore.disableSingleRuntimeChunk(). De volta à "public > build", encontraremos novos elementos, mas o único que nos será útil é o arquivo "style.css".

Agora, o arquivo "style.css" abriga o Bootstrap. Agora vamos acessar "templates > series > base.html.twig". Nesse arquivo, vamos adicionar o layout à linha 7 do código:

<link rel="stylesheet" href="/build/style.css">COPIAR CÓDIGO
Agora vamos atualizar a página no navegador para visualizar nossas alterações. Ao fazer isso, podemos notar uma leve variação na fonte e no botão, o que significa que o Bootstrap foi efetivamente carregado.

Agora vamos aprender a utilizá-lo. No próximo vídeo, iremos um pouco além do Symfony, estilizando, de maneira básica, nosso projeto.

https://symfony.com/doc/current/frontend/encore/installation/.html#installing-encore-in-non-symfony-applications

https://getbootstrap.com/docs/5.2/getting-started/webpack/

@@06
Sobre o Encore

Neste vídeo, nós entendemos o conceito por trás do Symfony Encore.
Qual das alternativas a seguir sobre o Symfony Encore é verdadeira?

Selecione uma alternativa

Apesar de ser criado pela equipe do Symfony, é um pacote JavaScript.
 
O Symfony Encore é um pacote disponível inclusive para projetos que não utilizam Symfony ou nem mesmo PHP. A ideia dele é simplificar a configuração do Webpack, que é uma ferramenta JavaScript.
Alternativa correta
O Encore usa PHP para gerar a configuração do Webpack.
 
Apesar de ser criado pela equipe do Symfony, é um pacote JS.
Alternativa correta
Só é possível utilizar o Symfony Encore em projetos Symfony.
 
O pacote Symfony Encore é completamente independente do framework Symfony, até porque ele não é um componente PHP e sim um pacote JS.

@@07
Estilizando as views

Nós conhecemos o Symfony Encore, que facilita a configuração do webpack, uma ferramenta de front-end.
Agora vamos usar o Bootstrap para modificar a lista nos nossos templates. Precisamos acessar "templates > base.html.twig". Na linha 7, vamos substituir /build/style.css pela função {{ asset('build/style.css1) }}.

Quando executamos essa função do Twig, ela busca o caminho correto de public, que pode estar num lugar diferente, de acordo com o subdomínio. Se estivéssemos em http://localhost8123/seris/create e quiséssemos acessar o build, a função {{ asset('/series/create/build/style.css') }} não funcionaria.

Também poderíamos trocar os assets de domínio e, por isso, utilizamos a função asset. De volta ao arquivo base.html.twig, vamos modificá-lo. Queremos utilizar o título na <title> e logo antes do block body. O código ficará assim:

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{{ block('title') }}</title>
        <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 vie (código incompleto)
        <link rel="stylesheet" href="{{ asset('build/style.css') }}">

        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {%block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body>
        <h1>{{ block('title') }}</h1>
        {% block body %}{% endblock %}
    </body>
</html>COPIAR CÓDIGO
Atualizando o navegador, veremos o título "Listagem de séries" duplicado. Vamos voltar ao arquivo index.html.twig e remover o conteúdo da linha 12, <h1>Listagem de séries</h1>, porque ele já foi definido como title na linha 3.

Também vamos apagar as tags de <style>, entre as linhas 6 e 9, criadas automaticamente pelo Symfony. Além desses elementos, também removeremos a <div> padrão. Agora, vamos transformar a lista <ul> em um list-groupe cada um dos itens <li> em um list-group-item:

{% extends 'base.html.twig' %}

{% block title %}Listagem de séries{% endblock %}

{% block body %}
<a href="/series/create">Adicionar</a>

<ul class="list-group">
    {% for series in seriesList %}
        <li class="list-group-item">{{ series }}</li>
    {% endfor %}
</ul>
{% endblock %}COPIAR CÓDIGO
Quando atualizarmos o navegador, veremos o estilo de lista do Bootstrap. Depois disso, vamos envolver todos os elementos do layout em um container, para que a disposição das séries diminua um pouco e se localize ao centro da tela, abrindo um <div> com essa classe no <body> do arquivo base.html.twig:

<body>
<div class="container">
    <h1>{{ block('title') }}</h1>
    {% block body %}{% endblock %}
</div>
</body>COPIAR CÓDIGO
Agora, de volta ao arquivo index.html.twig, vamos estilizar o botão "Adicionar". Para fazer isso, adicionaremos a classe btn btn-dark ao link, na linha 6 do código, além de uma margem mg-3:

<a href="/series/create" class="btn btn-dark mb-3">Adicionar</a>COPIAR CÓDIGO
Agora, já estilizamos a lista de séries. Apesar disso, se clicarmos em "Adicionar", vamos nos deparar com o error handler do Symfony, porque o block title não existe. Vamos defini-lo no arquivo form.html.twig, na linha 3 do código:

{% block title %}Nova Série{% endblock %}COPIAR CÓDIGO
Agora, para estilizar o formulário, vamos envolver o controle em uma <div>, adicionar a classe form-label à tag <label> e a classe form-control ao <input>. Em <button>, vamos adicionar o estilo btn btn-dark:

{% extends 'base.html.twig' %}

{% block title %}Nova Séries{% endblock %}

{% block body %}
    <form method="post">
        <div> class="mb-3">
            <label for="name" class="form-label">Nome da série:</label>
            <input type="text" name="name" class="form-control">
        </div>

        <button class="btn btn-dark">Adicionar</button>
    </form>
{% endblock %}COPIAR CÓDIGO
Depois, o formulário de nova série também estará estilizado.

Apesar disso, os dados que nós criamos são falsos. Em outras palavras, as séries da lista foram criadas manualmente e inseridas no array. O que nós queremos é um banco de dados.

Quando adicionarmos novas séries, queremos que elas sejam salvas no banco de dados. E, por fim, queremos buscar as séries no banco de dados quando formos exibi-las.

Na próxima aula, vamos descobrir como o Symfony facilita o nosso acesso a bancos de dados.

http://localhost8123/seris/create

@@08
Função asset

Neste vídeo nós utilizamos uma função que o Symfony nos fornece chamada asset.
Qual o propósito da função asset?

Nos retornar o caminho de um asset (arquivo estático) com uma barra (/) na frente.
 
Não é só isso que a função asset pode fazer.
Alternativa correta
Nos retornar o caminho de um asset (arquivo estático) que está na pasta public.
 
Nem sempre o arquivo estará na pasta public.
Alternativa correta
Nos retornar o caminho de um asset (arquivo estático), que pode inclusive estar em outro domínio.
 
Em nosso projeto, todos os assets estão no local padrão, que é a pasta public. Mas em projetos mais complexos, nós podemos configurar um projeto separado para ter nossos assets, usando CDN, por exemplo. Com isso, a função asset verifica se há essa configuração e já busca o domínio correto.

@@09
Faça como eu fiz

Nessa aula nós saímos do mundo PHP e fomos para o front-end. Conhecemos sobre Webpack, Bootstrap e o principal: Symfony Encore.
Chegou a hora de você colocar em prática o que vimos neste capítulo e implementar também essas alterações em seu código.

Caso tenha dúvidas, confira o andamento do seu projeto clicando na Opinião do Instrutor.

Na pasta do projeto, execute npm install. Isso instalará as dependências de front-end, o que inclui o Symfony Encore. Para instalar o bootstrap, execute npm install bootstrap@5.2.0 –save-dev.
Abra o arquivo webpack.config.js. Nele você vai descomentar a linha enableSassLoader(). Vamos limpar um pouco esse arquivo. Remova todos os comentários e as linhas .addEntry('app’, './assets/app.js'), .enableStimulusBridge(...), .splitEntryChunks(), .enableVersioning e relacionado a “Babel”.
Agora o Encore já está configurado. Vamos, então, passar a usar o Bootstrap. Para isso, renomeie o arquivo assets/styles/app.css para ele ter a extensão scss. Agora nesse arquivo apague todo o conteúdo e deixe apenas @import "~bootstrap/scss/bootstrap"’;.
De volta ao arquivo webpack.config.js, após a linha .enableSassLoader() adicione uma entrada de estilo com .addStyleEntry('style', './assets/styles/app.scss').
Com tudo configurado, execute na linha de comando npm run dev para rodar o Encore. Na primeira vez ele vai informar que há dependências para instalar. Instale-as e rode o comando novamente. Com isso você terá uma pasta public/build onde estará o arquivo style.css com todo o bootstrap lá.
No template com nosso layout base, adicione a tag link importando esse CSS: <link rel="stylesheet" href="{{ asset('build/style/css') }}" />.
Agora vamos editar o HTML. No layout base, adicione um h1 tendo como conteúdo {{ block('title') }} para exibir o título da página. Não se esqueça de remover o h1 do template de séries. Envolva tanto o h1 quanto o bloco body em uma div com a classe container.
Remova os estilos adicionados por padrão pelo Symfony nesse template (apague toda a tag style). Remova também a div que envolve o conteúdo da página.
Agora adicione à tag ul a classe list-group e à tag li a classe list-group-item.
Por fim, adicione ao botão de “Adicionar” as classes btn btn-dark mb-3.
No template do formulário, adicione o bloco title com o tíulo “Nova série”.
Para estilizar o formulário, envolva a label e o input em uma div com classe mb-3, adicione a classe form-label à label e a classe form-control ao input, além das classes btn btn-dark mb-3 ao botão.

@@10
O que aprendemos?

Nessa aula, nós:
Vimos como gerenciar uma build pipeline no front-end pode ser trabalhoso. Embora o treinamento seja sobre Symfony, é bastante comum o cargo de dev fullstack, sendo assim, conhecer como o framework nos ajuda no front-end é essencial.
Para auxiliar na criação de uma build pipeline profissional é muito comum utilizar uma ferramenta chamada Webpack. Nessa aula nós entendemos um pouco o propósito desse componente JavaScript.
Para facilitar o uso do Webpack o Symfony fornece um componente chamado Encore. Com essa biblioteca nós podemos realizar configurações de forma muito mais simples.
Aproveitando a simplicidade do Encore nós configuramos o Bootstrap. Com esse framework CSS em nosso projeto será possível criar um sistema minimamente apresentável sem pensar muito em como estilizar.