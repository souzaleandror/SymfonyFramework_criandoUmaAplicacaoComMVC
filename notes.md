##### 05/02/2024

Curso de Symfony Framework: criando uma aplicação com MVC

```
symfony new controle_series_symfony
composer create-project symfony/skeleton:"6.1.*" control_serie_symfony
composer require webapp
php -S localhost:8080 -t public
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