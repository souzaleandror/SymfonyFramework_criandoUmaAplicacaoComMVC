##### 05/02/2024

Curso de Symfony Framework: criando uma aplicação com MVC

```
symfony new controle_series_symfony
composer create-project symfony/skeleton:"6.1.*" control_serie_symfony
composer require webapp
php -S localhost:8080 -t public
php bin/console     
php bin/console make:controller OlaMundoController
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