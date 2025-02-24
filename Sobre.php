<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>RetroDevs</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/Style.css">
    <script src="https://kit.fontawesome.com/e38f3e6955.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="top">
        <div class="center">
            <header>
                <div class="logo">
                    <img class="img-logo" src="images/RetroDevs.png">
                </div><!--logo-->
            </header>
            <ul class="menu-desktop">
                <li><a href="/RetroDevs/">Home</a></li>
                <li><a href="/RetroDevs/sobre.php">Sobre</a></li>
                <li><a href="/RetroDevs/contato.php">Contato</a></li>
                <li><a href="/RetroDevs/Serviços.php">Serviços</a></li>
            </ul>
            <div class="menu-mobile">
            <i class="fa-solid fa-align-right"></i>
                <ul>
                <li><a href="/RetroDevs/">Home</a></li>
                    <li><a href="/RetroDevs/sobre.php">Sobre</a></li>
                    <li><a href="/RetroDevs/contato.php">Contato</a></li>
                    <li><a href="/RetroDevs/Serviços.php">Serviços</a></li>
                </ul>
            </div><!--menu-mobile-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--top-->

    <section class="sobre-equipe">
        <div class="center">
            <div class="w50 equipe-sobre-titulo">
                <h2> Inovação com Raízes,<br>
                     Tecnologia com Propósito</h2>
            </div>
            <div class="w50 equipe-sobre-texto" >
                <p>Na RetroDevs, acreditamos que o futuro é construído com base nas lições do passado. 
                Somos uma empresa de tecnologia e inovação que combina expertise técnica com um profundo respeito pela história, 
                cultura e necessidades da sociedade. Nosso objetivo é criar soluções inteligentes e sustentáveis que não apenas 
                resolvam problemas complexos, mas também inspirem mudanças positivas.
                <br><br>
                Fundada com a visão de unir o melhor dos dois mundos — tradição e inovação —, a RetroDevs se destaca pelo 
                desenvolvimento de ferramentas e sistemas que integram inteligência artificial, análise de dados e design centrado no usuário. 
                Seja em projetos mobile, desktop ou de comunicação, nossa abordagem é sempre guiada por três pilares: ética, criatividade e impacto social.
                <br><br>
                Nosso time é formado por profissionais apaixonados, que enxergam na tecnologia um meio para transformar realidades. 
                Trabalhamos lado a lado com nossos clientes e parceiros, garantindo que cada solução seja personalizada, eficiente e alinhada aos seus objetivos.
                <br><br>
                Na RetroDevs, não apenas desenvolvemos tecnologias — construímos pontes entre o passado e o futuro, criando um mundo mais conectado, inclusivo e sustentável.</p>   
            </div>
            <div class="w50 equipe-sobre-imagem">
                <img src="Images/photo.jpeg">
            </div> 
            <div class="clear"></div>
        </div>
    </section><!--sobre-equipe-->
    
    <section class="sobre-imagens">
        <div class="center">
            <div class="img-sobre">
                <img src="Images/img1.png">
            </div>
            <div class="img-sobre">
                <img src="Images/img2.png">
            </div>
            <div class="img-sobre">
                <img src="Images/img3.png">
            </div>
            <div class="img-sobre">
                <img src="Images/img4.png">
            </div>
            <div class="img-sobre">
                <img src="Images/img5.png">
            </div>
            <div class="img-sobre">
                <img src="Images/img6.png">
            </div>
        </div>
    </section><!--sobre-imagens-->

    <footer>
        <section class="metodologia">
            <div class="center">
                <h2>Conheça nossa Metodologia</h2>
                <p>Na RetroDevs, nossa metodologia não é apenas um processo — é um compromisso com a excelência, a inovação e o impacto positivo. 
                <br/>Estamos aqui para transformar ideias em realidade, sempre com ética, criatividade e respeito pelo passado que nos inspira.</p>
                <p>Entre em contato por e-mail ou telefone.</p>
                <a target="_blank" href="/contato">Entrar em contato</a>
            </div>
        </section><!--metodologia-->
        <div class="center">
            <div class="col-footer-container">
                <div class="col-footer">
                    <h2>Suporte</h2>
                    <a href="">Contato</a>
                    <a href="">FAQ</a>
                </div>
                <div class="col-footer">
                    <h2>Consultoria</h2>
                    <a href="">Contato</a>
                    <a href="">FAQ</a>
                </div>
                <div class="col-footer">
                    <h2>Empresa</h2>
                    <a href="">Contato</a>
                    <a href="">FAQ</a>
                </div>
            </div>
            <div class="col-footer footer-img">
                <img src="Images/logo_horizontal.png">
            </div>
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script>
        //menu responsivo.
        $('.menu-mobile i').click(function(){
            $('.menu-mobile').find('ul').slideToggle();
        })
    </script>
</body>
</html>