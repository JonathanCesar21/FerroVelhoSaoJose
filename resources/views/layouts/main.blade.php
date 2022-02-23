<!DOCTYPE >
<html lang="pt-br" id="html">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/scripts.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,100italic,300italic,400italic,500italic,500,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script type="text/javascript" src="js/counter.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
  <script type="text/javascript" src="js/darkmode.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg static-top nav-bg-color link-color">
    <div class="container">
      <a class="navbar-brand logo-img" href="#">
        <img src="img/logo.png" alt="...">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list btn-outline-green" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="link-nav" href="#">Página Inicial</a>
          </li>
          <li class="nav-item">
            <a class="link-nav nav-item" href="#AEmpresa">A Empresa</a>
          </li>
          <li class="nav-item">
            <a class="link-nav" href="#Servicos">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="link-nav" href="#Institucional" >Responsabilidade Social</a>
          </li>
          <li class="nav-item">
            <a class="link-nav" href="#Contato">Contato</a>
          </li>
          <li class="nav-item link-nav">
          <label for="switch" class="switch">
              <input  type="checkbox" id="switch" onclick="ThemeMode()">
              <span class="slider"></span>
            </label>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  @yield('content')
  <footer id="footer" class="footer-1">
    <div class="main-footer widgets-dark typo-light">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="widget subscribe no-box">
              <h5 class="widget-title">Ferro Velho <br>São José<span></span></h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod temporibus eos, id amet nesciunt consequatur. Impedit atque iusto hic repellat odio delectus eum distinctio? Veritatis hic nesciunt explicabo voluptatem iure!</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="widget no-box">
              <h5 class="widget-title">Páginas<span></span></h5>
              <ul class="thumbnail-widget">
                <li>
                  <div class="thumb-content"><a href="#PaginaInicial">&nbsp;Página Inicial</a></div>
                </li>
                <li>
                  <div class="thumb-content"><a href="#Servicos">&nbsp;Serviços</a></div>
                </li>
                <li>
                  <div class="thumb-content"><a href="#AEmpresa">&nbsp;A Empresa</a></div>
                </li>
                <li>
                  <div class="thumb-content"><a href="#Institucional">&nbsp;Responsabilidade Social</a></div>
                </li>
                <li>
                  <div class="thumb-content"><a href="#Contato">&nbsp;Contato</a></div>
                </li>
                <li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="widget no-box">
              <h5 class="widget-title">Redes Sociais<span></span></h5>
              <!-- <a href="https://www.facebook.com/profile.php?id=100073237146517"> <i class="fa fa-facebook"> </i> </a> -->
              <a href="https://www.instagram.com/ferro.velhosaojose/"> <i class="fa fa-instagram"> </i> </a>
              <a href="https://api.whatsapp.com/send?phone=5517981733939&text=Ol%C3%A1%20,%20vim%20pelo%20Site%20!"> <i class="fa fa-whatsapp"> </i> </a>
            </div>
          </div>
          <br>
          <br>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="widget no-box">
              <h5 class="widget-title">Localização<span></span></h5>
              <i class="bi bi-geo-alt-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                </svg>Rodovia Vicinal Joaquim Garcia Franco, 300 Zona Rural, Guaíra - SP, 14790-000</i>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container-flex">
            <div class="row">
              <div class="col-md-12 text-center">
                <p>CNPJ 20.380.315/0001-19 - Ferro Velho São José ©2022.</p>
              </div>
            </div>
          </div>
        </div>
  </footer>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <a href="https://api.whatsapp.com/send?phone=5517981733939&text=Ol%C3%A1%20,%20vim%20pelo%20site%20!" class="float" target="_blank">
    <i class="fab fa-whatsapp my-float"></i>
  </a>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script type="text/javascript" src="js/counter.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
  <script type="text/javascript" src="js/darkmode.js"></script>
</body>

</html>