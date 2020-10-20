@extends('layouts.master')
@extends('components.base')
<body>
    <header id="header" id="home">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
                        <ul>
                            <li>
                                Seg-Sex: 08:00am ás 18:00pm
                                </li>
                                <li>
                                    Sab: 11:00am ao 12:00am
                                </li>
                                <li>
                                    <a href="Tel:(027) 0800 250 0408">(027) 0800 250 0408</a>
                                </li>				  					
                            </ul>
                        </div>
                    </div>			  					
                </div>
            </div>			  	
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                  <div id="logo" >
                  <a href="index.html"><img src="assets/img/cofe3.png" alt="" title="" /></a> 
                  </div>
                  <nav id="nav-menu-container">
                    <ul class="nav-menu">
                      <li class="menu-active"><a href="#home">Home</a></li>
                      <li><a href="#about">Sobre</a></li>
                      <li><a href="#coffee">Café</a></li>
                      <li><a href="#review">Feedback</a></li>
                      <li><a href="#blog">Blog</a></li>
                      <li class="menu-has-children"><a href="">Páginas</a>
                        <ul>
                            <li><a href='{{route('store.index')}}'>Loja</a></li>
                          <li><a href="elements.html">Curiosidade</a></li>
                        </ul>
                      </li>
                    </ul>
                  </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
        </header><!-- #header -->

        <!-- start banner Area -->
        <section class="banner-area" id="home">	
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-start">
                    <div class="banner-content col-lg-7">
                        <h6 class="text-white text-uppercase">Agora você pode sentir a energia</h6>
                        <h1>
                            Comece seu dia <br>
                            com um café				
                        </h1>
                        <a href="{{route('store.index')}}" class="primary-btn text-uppercase">Comprar</a>
                    </div>											
                </div>
            </div>
        </section>
        <!-- End banner Area -->	

        <!-- Start video-sec Area -->
        <section class="video-sec-area pb-100 pt-40" id="about">
            <div class="container">
                <div class="row justify-content-start align-items-center">
                    <div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
                        <div class="overlay overlay-bg"></div>
                        <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="assets/img/play-icon.png" alt=""></a>
                    </div>						
                    <div class="col-lg-6 video-left">
                        <h6>Processo de fabricação do café.</h6>
                        <h1>Transmitimos nossos processos<br>
                        de fabricação</h1>
                        <p><span>Estamos aqui para ouvir de você para entregar a excelência</span></p>
                        <p>
                            Tudo começa com uma rigorosa seleção de sementes. Depois da colheita, elas passam pela secagem, torra e moagem e o pó é mandado direto para a embalagem. Só então, o café vai para a prateleira do mercado e de lá, tem destino certo: sua xícara.
                        </p>
                        <img class="img-fluid" src="assets/img/elements/signature.png" alt="">
                    </div>
                </div>
            </div>	
        </section>
        <!-- End video-sec Area -->
        
        <!-- Start menu Area -->
        <section class="menu-area section-gap" id="coffee">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-10">
                        <div class="title text-center">
                        <img class="img-fluid" src="{{asset('assets/img/loadcoffe.gif')}}"/>
                            <h1 class="mb-10"> Que tipo de café nós servimos para você</h1>
                            <p>Que é apaixonado por esse liquído maravilhoso.</p>
                        </div>
                    </div>
                </div>						
                <div class="row">
                    <div class="col-lg-4">
                    <img class="img-fluid" src="{{asset('assets/img/b1.jpg')}}"/>
                        <div class="single-menu">
                            <div class="title-div justify-content-between d-flex">
                                <h4>Cappuccino</h4>
                                <p class="price float-right">
                                    $49
                                </p>
                            </div>
                            <p>
                                Consiste em um terço de café expresso, um terço de leite vaporizado e um terço de espuma de leite vaporizado. <br> <br>
                            </p>								
                        </div>
                    </div>
                    <div class="col-lg-4">
                      <img class="img-fluid" src="{{asset('assets/img/cafe-americano.jpg')}}"/>
                        <div class="single-menu">
                            <div class="title-div justify-content-between d-flex">
                                <h4>Americano</h4>
                                <p class="price float-right">
                                    $49
                                </p>
                            </div>
                            <p>
                                Consiste na adição de água quente no café, dando uma força, mas sabor diferente, do café do gotejamento regular.
                            </p>								
                        </div>
                    </div>
                    <div class="col-lg-4">
                      <img class="img-fluid" src="{{asset('assets/img/cafe-espresso.jpg')}}"/>
                        <div class="single-menu">
                            <div class="title-div justify-content-between d-flex">
                                <h4>Expresso</h4>
                                <p class="price float-right">
                                    $49
                                </p>
                            </div>
                            <p>
                                É um método de preparar café através da passagem de água quente (não fervente) sob alta pressão pelo café moído.
                            </p>								
                        </div>
                    </div>	
                    <div class="col-lg-4">
                      <img class="img-fluid" src="{{asset('assets/img/machiato.jpg')}}"/>
                        <div class="single-menu">
                            <div class="title-div justify-content-between d-flex">
                                <h4>Macchiato</h4>
                                <p class="price float-right">
                                    $49
                                </p>
                            </div>
                            <p>
                                É um café com leite típico italiano, consistindo num café expresso misturado com um pouco de leite com espuma.
                            </p>								
                        </div>
                    </div>
                    <div class="col-lg-4">
                     <img class="img-fluid" src="{{asset('assets/img/mocha1.jpg')}}"/>
                        <div class="single-menu">
                            <div class="title-div justify-content-between d-flex">
                                <h4>Mocha</h4>
                                <p class="price float-right">
                                    $49
                                </p>
                            </div>
                            <p>
                                É feito a base de um terço de café expresso, um terço de leite vaporizado e um terço de chocolate em pó ou calda. <br> <br>
                            </p>								
                        </div>
                    </div>
                    <div class="col-lg-4">
                    <img class="img-fluid" src="{{asset('assets/img/cafe-leite.jpg')}}"/>
                        <div class="single-menu">
                            <div class="title-div justify-content-between d-flex">
                                <h4>Café com leite</h4>
                                <p class="price float-right">
                                    $49
                                </p>
                            </div>
                            <p>
                                É a mistura entre duas bebidas famosas: café e o leite, sendo uma bebida típica de Portugal e Brasil. <br> <br>
                            </p>								
                        </div>
                    </div>															
                </div>
            </div>	
        </section>
        <!-- End menu Area -->
        
        <!-- Start gallery Area -->
        <section class="gallery-area section-gap" id="gallery">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-10">
                        <div class="title text-center">
                            <h1 class="mb-10">História do café</h1>
                            <p>Não existem registros oficiais sobre a origem do café. Sabe-se, entretanto, que se trata de uma planta nativa das regiões altas da Etiópia (Cafa e Enária). Segundo uma das lendas, foi um pastor etíope, denominado Kaldi, quem percebeu que havia algo diferente nas plantas da região.</p>
                        </div>
                    </div>
                </div>						
                <div class="row">
                    <div class="col-lg-4">
                        <a href="assets/img/g1.jpg" class="img-pop-home">
                            <img class="img-fluid" src="assets/img/g1.jpg" alt="">
                        </a>	
                        <a href="assets/img/g2.jpg" class="img-pop-home">
                            <img class="img-fluid" src="assets/img/g2.jpg" alt="">
                        </a>	
                    </div>
                    <div class="col-lg-8">
                        <a href="assets/img/g3.jpg" class="img-pop-home">
                            <img class="img-fluid" src="assets/img/g3.jpg" alt="">
                        </a>	
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="assets/img/g4.jpg" class="img-pop-home">
                                    <img class="img-fluid" src="assets/img/g4.jpg" alt="">
                                </a>	
                            </div>
                            <div class="col-lg-6">
                                <a href="assets/img/g5.jpg" class="img-pop-home">
                                    <img class="img-fluid" src="assets/img/g5.jpg" alt="">
                                </a>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
        </section>
        <!-- End gallery Area -->
        
        <!-- Start review Area -->
        <section class="review-area section-gap" id="review">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-10">
                        <div class="title text-center">
                            <h1 class="mb-10">Nascemos para transformar!</h1>
                            <p>Fundada em 2020 nossa empresa surgiu como uma startup, dentro de um  dos laboratórios da FASG. 
                                Estamos crescendo com vontade de levar o melhor do mundo do café a vocês.</p>
                        </div>
                    </div>
                </div>						
                <div class="row">
                    <div class="col-lg-6 col-md-6 single-review">           
                        <div class="title d-flex flex-row">
                            <h4>Carlos Eduardo da silva</h4>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>						
                            </div>
                        </div>
                        <p>
                            Execente trabalho, amo o café de vocês, é um dos melhores que já comprei. Sem contar na entrega que é rápida e segura.
                        </p>
                    </div>	
                    <div class="col-lg-6 col-md-6 single-review">
                        <div class="title d-flex flex-row">
                            <h4>Ana Luiza figueredo</h4>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>								
                            </div>
                        </div>
                        <p>
                            Oferecem produtos de qualidade. Sempre visam o lado do cliente.
                        </p>
                    </div>	
                </div>
                <div class="row counter-row">
                    <div class="col-lg-3 col-md-6 single-counter">
                        <h1 class="counter">2536</h1>
                        <p>Clientes felizes</p>
                    </div>
                    <div class="col-lg-3 col-md-6 single-counter">
                        <h1 class="counter">7562</h1>
                        <p>Total de projetos</p>
                    </div>
                    <div class="col-lg-3 col-md-6 single-counter">
                        <h1 class="counter">2013</h1>
                        <p>Xícaras de café</p>
                    </div>
                    <div class="col-lg-3 col-md-6 single-counter">
                        <h1 class="counter">12111</h1>
                        <p>Total Apresentado</p>
                    </div>																		
                </div>
            </div>	
        </section>
        <!-- End review Area -->
        
        <!-- Start blog Area -->
        <section class="blog-area section-gap" id="blog">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-10">
                        <div class="title text-center">
                            <h1 class="mb-10">Blog Coffe Clubs</h1>
                            <p>Acompanhe nosso blog para ficar por dentro das novidades do mundo do café.</p>
                        </div>
                    </div>
                </div>						
                <div class="row">
                    <div class="col-lg-6 col-md-6 single-blog">
                        <img class="img-fluid" src="assets/img/b1.jpg" alt="">
                        <ul class="post-tags">
                            <li><a href="https://veja.abril.com.br/saude/um-cafe-da-manha-farto-pode-ser-a-chave-para-emagrecer-diz-estudo/">Link Afiliado</a></li>
                        </ul>
                        <a href="https://veja.abril.com.br/saude/um-cafe-da-manha-farto-pode-ser-a-chave-para-emagrecer-diz-estudo/"><h4>Um bom café da manhã pode ser a chave para emagrecer</h4></a>
                        <p>
                            De acordo com uma nova pesquisa, a escolha aumenta a queima de calorias durante o dia e reduz o açúcar no sangue.
                        </p>
                        <p class="post-date">
                            20 de agosto, 2020
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 single-blog">
                        <img class="img-fluid" src="assets/img/b2.jpg" alt="">
                        <ul class="post-tags">
                            <li><a href="https://veja.abril.com.br/saude/cafe-consumir-ate-25-xicaras-por-dia-nao-faz-mal-ao-coracao-diz-estudo/">Link Afiliado</a></li>
                        </ul>
                        <a href="https://veja.abril.com.br/saude/cafe-consumir-ate-25-xicaras-por-dia-nao-faz-mal-ao-coracao-diz-estudo/"><h4>consumir até 25 xícaras por dia não afeta o coração, define estudo</h4></a>
                        <p>
                            O novo estudo britânico derruba a ideia de que grandes quantidades da bebida prejudicam a saúde.
                        </p>
                        <p class="post-date">
                            12 de agosto, 2020
                        </p>
                    </div>						
                </div>
            </div>	
        </section>
        <!-- End blog Area -->
    
        <!-- start footer Area -->		
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Sobre a Coffe Clubs</h6>
                            <p>
                                Oferecemos cafés dos mais variados tipos para sua família e empresa de uma forma diferente e inovadora. Cumprimos com excelência o que prometemos para os nossos clientes.
                            </p>
                            <p class="footer-text">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    CoffeClub &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>								
                        </div>
                    </div>
                    <div class="col-lg-5  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Newsletter</h6>
                            <p>Fique atualizado com nossas últimas</p>
                            <div class="" id="mc_embed_signup">
                                <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                                    <input class="form-control" name="EMAIL" placeholder="Entre com seu E-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                        <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                        <div style="position: absolute; left: -5000px;">
                                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                        </div>

                                    <div class="info pt-20"></div>
                                </form>
                            </div>
                        </div>
                    </div>						
                    <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                        <div class="single-footer-widget">
                            <h6>Siga-nos</h6>
                            <p>É acompanhe tudo na integra</p>
                            <div class="footer-social d-flex align-items-center">
                                <a href="https://www.facebook.com/coffeClubss/"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/ClubsCoffe"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.instagram.com/coffeclubs/"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>							
                </div>
            </div>
        </footer>	
        <!-- End footer Area -->	
    </body>
</html>