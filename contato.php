<!DOCTYPE html>
<html lang="pt-br">
<!--Idioma padrão do site...-->

<head>
    <meta charset="UTF-8">
    <!--Caracteres Especiais-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Para ser compátivel com o site Edge-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Responsivo, Para se adaptar com o tamanho da tela do aparelho-->
    <title>KI.Beleza - Clínica de Estética</title>

    <!--Para ficar a logo lá em cima na aba do site, fica do lado do nome-->
    <link rel="icon" href="img/logo.svg">

    <!--Animação do Destaque, pegado do site "lity js" no google-->
    <link href="css/lity.css" rel="stylesheet">

    <!--Resetar os arquivos CSS, ou seja, retirar os padrões do HTML-->
    <link rel="stylesheet" href="css/reset.css">

    <!-- Carrosel, pego no site slick-->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">

    <!--Animação da Logo, site anima.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!--Meu estilo CSS - sempre por último-->
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <!--CORPO DO SITE-->
    <header>
        <!--COMEÇO DO TOPO-->
        <?php require_once("conteudo/topo.php") ?>
        <!--Foi criado para substituir o topo, foi criado um arquivo no grupo conteudo com o nome "topo.php", e colocado topo o codigo do site que compoem o topo do site, isso serve para chamar esse arquivo php criado no pasta-->
        <!--FIM DO TOPO-->
    </header>
    <main>
        <!--COMEÇO DO CONTEUDO-->
        <?php require_once("conteudo/banner.php") ?>
<section class="formContato">
    <article class="site">
        <h2>Formulário de Contato</h2>
        <form action="email.php" method="post">
            <nav>
                <div class="caixasForm">
                    <label>Nome:</label>
                    <br>
                    <input type="text" name="nome" placeholder="Digite o nome completo" required>
                    <br>
                    <label>Telefone:</label>
                    <br>
                    <input type="tel" name="tel" maxlength="14" placeholder="Digite o telefone" required>
                    <br>
                    <label>E-mail:</label>
                    <br>
                    <input type="email" name="email" placeholder="Digite o e-mail" required>
                </div>
                <div class="caixasForm">
                    <label>Mensagem:</label>
                    <br>
                    <textarea name="mensagem" cols="30" rows="10" placeholder="Digite sua mensagem" required></textarea>
                    <br>
                    <nav class="botoesForm">
                        <input class="btnForm" type="submit" name="enviar" value="ENVIAR">
                        <input class="btnForm" type="reset" value="LIMPAR">
                    </nav>
                </div>
            </nav>
        </form>
    </article>
</section>
        <section class="servico">
            <article class="site">
                <h2>Serviços</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <?php require_once("conteudo/servico.php") ?>
            </article>
        </section>
        <?php require_once("conteudo/destaque.php") ?>
        <?php require_once("conteudo/equipe.php") ?>
        <?php require_once("conteudo/galeria.php") ?>
        <?php require_once("conteudo/depoimento.php") ?>
        <?php require_once("conteudo/news.php") ?>
    </main>
    <!--FIM DO CONTEUDO-->
    <footer>
        <!--COMEÇO DO RODAPÉ-->
        <?php require_once("conteudo/footer.php") ?><!-- Nesse caso foi pego todas as classes que estavam dentro da footer (rodapé) e colocado no arquivo "footer.php" -->
        <!--FIM DO RODAPÉ-->

        <!--Esse é o jQuery, precisa dele para usar o JavaScript do slick, acomselhavo pesquisar por jQuery no google, ir em download, e compiar o que tem o "https" e copiar e colar, e colocar como script-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!--Colocar como Scrip os arquivos que vão utilizar o JavaScript, carrosel do site-->
        <script src="js/slick.min.js"></script>

        <!--Animação Destaque-->
        <script src="js/lity.js"></script>

        <!--Faiz Parte do carrosel do site, sempre por ultimo, por causa que é um arquivo que você criou -->
        <script src="js/minhaAnimacao.js"></script>

    </footer>


</body>

</html>