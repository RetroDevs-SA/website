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

    <section class="contato">
        <div class="center">
            <div class="w50 contato-info">
                <h2>O mais importante, <br/> a primeira conversa!</h2>
                <br>
                <p><b>telefone: </b>(xx) xx xxxxx-xxxx</p>
                <p><b>E-mail: </b>contato@contato.com</p>
                <p><b>endereço: </b>Av. Avenida, xxxx</p>
            <div class="mapa-container">
                    <div id="mapa">
                        
                    </div>
            </div><!--mapa-->
            </div>
            <div class="w50 contato-form" >
                <form>
                    <input placeholder="Nome" type="text">
                    <input placeholder="E-mail" type="text">
                    <input placeholder="Telefone" type="text">
                    <select name="" id="">
                        <option>Geral</option>
                        <option>Suporte</option>
                    </select>
                    <textarea placeholder="Mensagem" name="" id=""></textarea>
                    <input type="submit" value="Enviar Formulario">
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </section><!--contato-->

    <footer style="padding: 60px 0;">
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
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAP_n_GK2syee3hyXG3h6cCkUx4hjRSe38'></script>
    <script src="js/map.js"></script>>
    <script>
        //menu responsivo.
        $('.menu-mobile i').click(function(){
            $('.menu-mobile').find('ul').slideToggle();
        })
    </script>
</body>
</html>

