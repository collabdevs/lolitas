<!DOCTYPE html>
<html lang="en" ng-app="advApp" ng-controller="MainCtrl  as main">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>..:: ELABORAÇÃO E ANÁLISE DE CONTRATOS ::..</title>

        <!-- Bootstrap -->
        <link href="adv/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--plugins css-->
        
        
        <link href="adv/css/flexslider.css" rel="stylesheet">
        <link href="adv/css/animate.css" rel="stylesheet">
        <link href="adv/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!--Revolution slider css-->
        <link href="adv/rs-plugin/css/settings.css" rel="stylesheet" type="text/css" media="screen">
        <link href="adv/css/rev-style.css" rel="stylesheet" type="text/css" media="screen">
        <!--custom css for only medial template-->
        <link href="adv/css/medical.css" type="text/css" rel="stylesheet">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="top-bar">
                <div class="row">
                    <div class="col-md-7 hidden-xs hidden-sm">
                        <span><i class="pe-7s-phone"></i> +55 21 98174-6863</span>
                    </div>
                    <div class="col-md-5 text-right">
                        <div class="top-bar-right">
                            <a href="#" class="social-icon-sm si-border-round si-facebook">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="social-icon-sm si-border-round si-linkedin">
                                <i class="fa fa-linkedin"></i>
                                <i class="fa fa-linkedin"></i>
                            </a>
                           
                            <a href="#" class="appointment">Faça um Orçamento</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Static navbar -->
        <nav class="navbar navbar-default navbar-static-top" >
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">ELABORAÇÃO E ANÁLISE DE CONTRATOS</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sobre <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li ng-repeat="s in sobre"><a href="#!/sobre/{{s.id}}">{{s.name}}</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Carros <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li ng-repeat="s in carros"><a href="#!/sobre/{{s.id}}">{{s.name}}</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servi&ccedil;os <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li ng-repeat="s in servicos"><a href="#!/servicos/{{s.id}}">{{s.name}}</a></li>
                                <li><a href="#">Negociação de Contratos</a></li>
                                <li><a href="#">Revisão de Contratos</a></li>
                                <li><a href="#">Consultoria de Contratos</a></li>
                                <li><a href="#">Paralegal</a></li>
                                <li><a href="#">Imobiliário</a></li>
                                <li><a href="#">Elaboração de Documentos Societários </a></li>
                                <li><a href="#">Consultoria Empresarial</a></li> 
                                <li><a href="#">Regularização de Empresas</a></li>
                                <li><a href="#">Depósito de Marcas</a></li>
                                <li><a href="#">Registro de Direitos Autorais</a></li>
                                <li><a href="#">Registro de Software</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Como Funciona</a></li>
                        <li><a href="#">Or&ccedil;amento</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fale Conosco<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Faça Um Orçamento</a></li>
                                <li><a href="#">Missão</a></li>
                                <li><a href="#">Visão</a></li>
                                <li><a href="#">Valores</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
                <!--rev slider start-->
  <div class="fullwidthbanner">
            <div class="tp-banner">
        
                <!--div ng-bind-html="htmlString"></div-->

                <ul>
                    <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Care your family">
                        <!-- MAIN IMAGE -->
                        <img src="adv/img/medical/bg-1.jpg" alt="darkblurbg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="caption slider-title dark sft" data-x="50" data-y="160" data-speed="1000" data-start="1000" data-easing="easeOutExpo">
                            Contratos <br>
                            <span class="colored-text"><div ng-bind-html="htmlString"></div></span>
                        </div>



                        <div class="caption slider-caption dark sfl" data-x="50" data-y="310" data-speed="1000" data-start="1800" data-easing="easeOutExpo">
                            Dedddddddd acordo com suas necessidades  
                        </div>
                        <div class="caption sfb rev-buttons tp-resizeme" data-x="50" data-y="380" data-speed="500" data-start="1800" data-easing="Sine.easeOut">
                            <a href="#" class="btn btn-theme-bg btn-lg">Saiba Mais  <i class="pe-7s-right-arrow"></i></a>
                        </div>

                    </li>

                      <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Quality Services">
                        <!-- MAIN IMAGE -->
                        <img src="adv/img/medical/bg-4.jpg" alt="darkblurbg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">


                        <div class="caption slider-title dark sft" data-x="50" data-y="200" data-speed="1000" data-start="1000" data-easing="easeOutExpo">
                            Negocios <span class="colored-text">Imobiliario</span>

                        </div>



                        <div class="caption slider-caption dark sfl" data-x="50" data-y="290" data-speed="1000" data-start="1800" data-easing="easeOutExpo">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.  <br>
                            lectus. Cras porta nisl at tincidunt tincidunt.  
                        </div>
                        <div class="caption sfb rev-buttons tp-resizeme" data-x="50" data-y="360" data-speed="500" data-start="1800" data-easing="Sine.easeOut">
                            <a href="#" class="btn btn-theme-bg btn-lg">View Services <i class="pe-7s-right-arrow"></i></a>
                        </div>

                    </li>

                    <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Solid team">
                        <!-- MAIN IMAGE -->
                        <img src="adv/img/medical/bg-2.jpg" alt="darkblurbg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">



                        <div class="caption slider-title light sft" data-x="50" data-y="160" data-speed="1000" data-start="1000" data-easing="easeOutExpo">
                            Paralegal<br>
                            <span class="colored-text">Pode confiar</span>
                        </div>



                        <div class="caption slider-caption light sfl" data-x="50" data-y="310" data-speed="1000" data-start="1800" data-easing="easeOutExpo">
                            Tudo de paralegdsadaddaal  <br>
                            Nos fazemos de tudo.  
                        </div>
                        <div class="caption sfb rev-buttons tp-resizeme" data-x="50" data-y="380" data-speed="500" data-start="1800" data-easing="Sine.easeOut">
                            <a href="#" class="btn btn-theme-bg btn-lg">Saiba Mais <i class="pe-7s-right-arrow"></i></a>
                        </div>
                    </li>
                    <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Quality Services">
                        <!-- MAIN IMAGE -->
                        <img src="adv/img/medical/bg-4.jpg" alt="darkblurbg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">


                        <div class="caption slider-title dark sft" data-x="50" data-y="200" data-speed="1000" data-start="1000" data-easing="easeOutExpo">
                            Negocios <span class="colored-text">Imobiliario</span>

                        </div>



                        <div class="caption slider-caption dark sfl" data-x="50" data-y="290" data-speed="1000" data-start="1800" data-easing="easeOutExpo">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.  <br>
                            lectus. Cras porta nisl at tincidunt tincidunt.  
                        </div>
                        <div class="caption sfb rev-buttons tp-resizeme" data-x="50" data-y="360" data-speed="500" data-start="1800" data-easing="Sine.easeOut">
                            <a href="#" class="btn btn-theme-bg btn-lg">View Serviçoss <i class="pe-7s-right-arrow"></i></a>
                        </div>

                    </li>
                </ul>
       </div>
       </div>
        <!--revolution end-->
        <div ng-view class="view-animate"></div>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 margin30">
                        <h3>Sobre a gente </h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <ul class="list-unstyled contact-details">
                            <li class="clearfix">
                                <i class="pe-7s-home"></i>
                                <p>
                                    De Segunda a Sexta, das 10:00hs às 19:00hs
                                </p>
                            </li>
                            <li class="clearfix">
                                <i class="pe-7s-phone"></i>
                                <p>
                                    +55 21 98174-6863
                                </p>
                            </li>
                            <li class="clearfix">
                                <i class="pe-7s-mail"></i>
                                <p>
                                   contato@elaboracaoeanalisedecontratos.com.br
                                </p>
                            </li>
                        </ul>
                        <div class="socials-colored">
                            <a href="#" class="social-icon si-dark si-colored-facebook">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="social-icon si-dark si-colored-twitter">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon si-dark si-colored-google-plus">
                                <i class="fa fa-google-plus"></i>
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="#" class="social-icon si-dark si-colored-google-plus">
                                <i class="fa fa-youtube-play"></i>
                                <i class="fa fa-youtube-play"></i>
                            </a>
                            <a href="#" class="social-icon si-dark si-colored-linkedin">
                                <i class="fa fa-linkedin"></i>
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div><!--col-->
                    <div class="col-md-3 margin30">
                        <h3>Acesso rapido</h3>
                        <ul class="list-unstyled quick-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">sobre</a></li>
                            <li><a href="#">serviços</a></li>
                            <li><a href="#">Faça um Orçamento</a></li>
                            <li><a href="#">Como Funciona</a></li>
                            <li><a href="#">Contato</a></li>
                            <li><a href="#">Privacidade</a></li>
                            <li><a href="#">Termos & condições</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 margin30">
                        <h3>Ultimas</h3>
                        <ul class="list-unstyled latest-news">
                            <li ng-repeat="content in contents">
                                <a href="#">{{content.name}}</a>
                                <em><i class="fa fa-comments-o"></i> 6 comments</em>
                            </li>
                                 
                        </ul>
                    </div>
                    <div class="col-md-3 margin30">
                        <h3>Contato Rapido</h3>
                        <form role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" placeholder="Mensagem"></textarea>
                            </div>
                            <div class="form-group text-right">
                                <button type="button" class="btn btn-theme-bg btn-lg">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <span>Copyright &copy; 2017. All right reserved.</span>
                </div>
            </div>
        </footer>
        <script src="adv/js/angular.min.js"></script>
        <script src="adv/js/angular-route.js"></script>
        <script src="adv/js/jquery.min.js"></script>
        <script src="adv/js/jquery-migrate.min.js"></script>
        <script src="adv/bootstrap/js/bootstrap.min.js"></script>
        <script src="adv/js/pace.min.js" type="text/javascript"></script>
        <script src="adv/js/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="adv/js/jquery.stellar.min.js" type="text/javascript"></script>
        <script src="adv/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script src="adv/js/wow.min.js" type="text/javascript"></script>
        <!--revolution slider plugins-->
        <script src="adv/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="adv/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="adv/js/revolution-custom.js"></script>
        <script src="adv/js/medical-custom.js" type="text/javascript"></script>
        <script type="text/javascript">
            angular.module('advApp', ['ngRoute'])
                    .config(['$routeProvider', '$locationProvider',
                      function($routeProvider, $locationProvider) {
                        $routeProvider
                          .when('/', {
                            templateUrl: 'adv/views/index.html',
                            controller: 'PageCtrl',
                            controllerAs: 'page'
                          })
                          .when('/sobre/:content_id', {
                            templateUrl: 'adv/views/sobre.html',
                            controller: 'SobreCtrl',
                            controllerAs: 'sobre'
                          })
                          .when('/servicos/:content_id', {
                            templateUrl: 'adv/views/sobre.html',
                            controller: 'ConteudoCtrl',
                            controllerAs: 'conteudo'
                          })
                          .when('/Book/:bookId/ch/:chapterId', {
                            templateUrl: 'chapter.html',
                            controller: 'ChapterCtrl',
                            controllerAs: 'chapter'
                          });

                        //$locationProvider.html5Mode(true);
                    }])
                    .controller('MainCtrl', ['$route', '$routeParams', '$location','$http', '$sce', '$scope' ,
                      function MainCtrl($route, $routeParams, $location , $http, $sce, $scope) {
                        this.$route = $route;
                        this.$location = $location;
                        this.$routeParams = $routeParams;

                        $scope.trustAsHtml = function(value) {
                             return $sce.trustAsHtml(value);
                          };
                  
                        $scope.getContents = function() {
                            $http.get('api/content').then(function(response){
                                $scope.contents = response.data;
                                $scope.sobre = [];
                                $scope.servicos = [];
                                $scope.noticias = [];
                                $scope.departamentos = [];
                                $scope.carros = [];
                                $scope.slides = [];
                                for (var i = 0; i < $scope.contents.length; i++) {
                                    //console.log($scope.contents[i]);
                                    if($scope.contents[i].categorie_id == 1 ){
                                        $scope.sobre.push($scope.contents[i]);
                                    }

                                    if($scope.contents[i].categorie_id == 2 ){
                                        $scope.servicos.push($scope.contents[i]);
                                    }

                                    if($scope.contents[i].categorie_id == 3 ){
                                        $scope.noticias.push($scope.contents[i]);
                                    }

                                    if($scope.contents[i].categorie_id == 4 ){
                                        $scope.departamentos.push($scope.contents[i]);
                                    }

                                    if($scope.contents[i].categorie_id == 5 ){
                                        $scope.slides.push($scope.contents[i]);
                                    }

                                    if($scope.contents[i].categorie_id == 7 ){
                                        $scope.carros.push($scope.contents[i]);
                                    }
                                }


                                $scope.htmlString = $sce.trustAsHtml($scope.slides[0].desc);

                            });
                        };

                        $scope.getCategories = function() {
                            $http.get('api/categorie').then(function(response){
                                $scope.categories = response.data;
                                $scope.getContents();
                            });
                        };


                        $scope.getCategories();
                    }])
                    .controller('PageCtrl', ['$routeParams', '$scope' , '$http' , '$sce', function PageCtrl($routeParams, $scope , $http , $sce) {
                      this.name = 'PageCtrl';
                      this.params = $routeParams;
                      
                    }])
                    .controller('SobreCtrl', ['$routeParams', '$http', '$scope', '$sce', function SobreCtrl($routeParams, $http, $scope, $sce ) {
                      this.name = 'SobreCtrl';
                      this.params = $routeParams;
                      console.log(this.params);
                      $http.get('api/content/'+this.params['content_id']).then(function(response){
                            $scope.conteudo = response.data;
                            $scope.conteudo_texto = $sce.trustAsHtml($scope.conteudo.desc);
                        });
                    }])

                    .controller('ConteudoCtrl', ['$routeParams', '$http', '$scope', '$sce', function ConteudoCtrl($routeParams, $http, $scope, $sce ) {
                      this.name = 'ConteudoCtrl';
                      this.params = $routeParams;
                      console.log(this.params);
                      $http.get('api/content/'+this.params['content_id']).then(function(response){
                            $scope.conteudo = response.data;
                            $scope.conteudo_texto = $sce.trustAsHtml($scope.conteudo.desc);
                        });
                    }])
                  .controller('PageController', function($scope , $http , $sce) {

                    this.name = 'PageCtrl';

                  

                    
                  });



           // PageController.$inject = ["$scope"];

        </script>
    </body>
</html>