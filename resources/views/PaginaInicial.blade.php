@extends('layouts.main')
@section('title','Ferro Velho São José')
@section('content')

<div class="container-flex img-bg-home">
    <div class="row">
        <div class="col-md-12 text-center banner-h3 logo-banner" alt="Ferro velho sao jose">
        </div>
    </div>
</div>
<div id="AEmpresa" class="container text-info">
    <div class="row">
        <div class="col-md-12 text-center" data-aos="fade-up" data-aos-duration="1500">
            <h2>A empresa</h2>
        </div>
        <div class="col-md-6 text-center" data-aos="fade-right" data-aos-duration="1500">
            <h3>Sobre a Empresa</h3>
            <p>O Ferro Velho São José, há mais de 15 anos no mercado de material reciclável, conta com diversos produtos para atender suas demandas,
                encontrando soluções para realizar bons negócios. Somos especialistas em materiais recicláveis como: Alumínio, inox, madeira, vigas, cantoneiras, ferro fundido, etc.</p>
        </div>
        <div class="col-md-6 text-center caminhoes-img img-animation" data-aos="fade-left" data-aos-duration="1500">
            <img src="img/tratorsaojose.jpg" alt="ferro velho sao jose guaira tratores">
        </div>
        <div class="col-md-6 text-center caminhoes-img img-animation" data-aos="fade-right" data-aos-duration="1500">
            <img src="img/caminhoessaojoseguaira.jpg" alt="caminhoes ferro velho sao jose em guaira">
        </div>
        <div class="col-md-6 text-center" data-aos="fade-left" data-aos-duration="1500">
            <h3>Quem somos?</h3>
            <p>Nós do Ferro Velho São José, temos a experiência de mais de 15 anos no mercado, prezamos muito pela qualidade do nosso serviço. São mais de 10 caminhões prontos para entregar o mais rápido possível, todo o material solicitado.
                Respeitamos não somente nossos clientes e amigos, mas também o mundo no qual vivemos, todo ano são mais de 8 toneladas de material reciclável que ajudamos a encontrar o caminho correto.</p>
        </div>
    </div>
</div>
<div id="Servicos" class="container-flex bg-orange">
    <div class="triangle-black" data-aos="fade" data-aos-duration="1000"></div>
    <div class="container text-info-black-bg-orange text-info-black-3">
        <div class="row">
            <div class="col-md-12 text-center " data-aos="fade-up" data-aos-duration="1200">
                <h2>SERVIÇOS</h2>
                <p>
                    Estrutura moderna e mão de obra sempre atualizada, proporcionando alta qualidade e segurança.
                </p>
            </div>
            <div class="col-md-4 text-center text-info service img-animation" data-aos="fade-right" data-aos-duration="1500">
                <img class="circle-border img-circle" src="img/icons/naoferrosa.png" alt="sucata nao ferrosa">
                <h4>Sucata não-ferrosa</h4>
                <p>Alumínio, bateria, cobre, inox, metal, motor de geladeira</p>
            </div>
            <div class="col-md-4 text-center text-info service img-animation " data-aos="fade" data-aos-duration="1500">
                <img class="circle-border img-circle" src="img/icons/ferrosa.png" alt="sucata ferrosa">
                <h4>Sucata ferrosa</h4>
                <p>Cavaco, chaparia, estamparia, ferro fundido, miúda, pesada para corte</p>
            </div>
            <div class="col-md-4 text-center text-info service img-animation" data-aos="fade-left" data-aos-duration="1500">
                <img class="circle-border img-circle" src="img/icons/geral.png" alt="sucata em geral">
                <h4>Comércio</h4>
                <p>Produtos siderúrgicos, metalon, tubos, vigas, barras e cantoneiras</p>
            </div>
        </div>
    </div>
</div>
<div class="triangle-orange" data-aos="fade" data-aos-duration="1000"></div>
<div id="Institucional" class="container videos-iframe">
    <div class="row">
        <div class="col-md-12 text-center text-info-black-3">
            <h2>Institucional</h2>
        </div>
        <div class="col-md-6" data-aos="fade-right" data-aos-duration="500">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aigsMnUMOtE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-md-6" data-aos="fade-left" data-aos-duration="1500">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_WrqcR1rIwU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>
<div class="container-flex bg-orange text-info-black-bg-orange ">
    <div class="triangle-black" data-aos="fade" data-aos-duration="1000"></div>
    <div class="container text-center text-info-black-3">
        <div class="row">
            <div class="triangle-white" data-aos="fade" data-aos-duration="1000"></div>
            <div class="col-md-12 " data-aos="fade-up" data-aos-duration="1200">
                <h2>Missão, Visão e Valores</h2>
                <p>
                    No meio da dificuldade encontra-se a oportunidade.
                </p>
            </div>
            <div class="col-md-4 service-2 img-animation" data-aos="fade-right" data-aos-duration="1200">
                <img src="img/icons/alvoferrovelho.png" alt="ferro velho sao jose missao">
                <h3>Missão</h3>
                <p>A transformação dos materiais recicláveis com sustentabilidade e inovação. Sempre respeitando nos amigos e clientes.</p>
            </div>
            <div class="col-md-4 service-4 img-animation" data-aos="fade-up" data-aos-duration="1200">
                <img src="img/icons/binoculoferrovelho.png" alt="visao ferro velho sao jose">
                <h3>Visão</h3>
                <p>Ser uma empresa referência no mundo das reciclagem através de soluções ecologicamente corretas, gerando satisfação em nossos clientes e fornecedores.</p>
            </div>
            <div class="col-md-4 service-3 img-animation" data-aos="fade-left" data-aos-duration="1200">
                <img src="img/icons/sementesaojose.png" alt="valores sao jose ferro velho">
                <h3>Valores</h3>
                <p>Sustentabilidade;<br>Ética;<br>Profissionalismo;<br>Responsabilidades sociais e ecológicas;</p>
            </div>
        </div>
    </div>
</div>
<div class="triangle-orange" data-aos="fade" data-aos-duration="1000"></div>
<div id="Contato" class="container">
    <div class="row">
        <div class="col-md-12 text-info-black-3 text-center">
            <h2>Contato</h2>
        </div>
        <div class="col-md-6 text-info-black-contato">
            <form action="{{ url('#Contato') }}" method="POST">
                {{csrf_field() }}

                @if(count($errors) > 0 )
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Preencha os dados corretamente!</strong>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Obrigado!</strong> {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>OPS!</strong> {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input name="nome" type="text" class="form-control" placeholder="Seu Nome">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" placeholder="Seu Email">
                </div>
                <div class="form-group">
                    <label for="mensagem">mensagem</label>
                    <textarea name="mensagem" id="" class="form-control" cols="10" rows="5" placeholder="Sua mensagem"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
        <div class="col-md-6 text-info-black-contato text-center">
            <h4>Fale Conosco</h4>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                </svg>WhatsApp:(17) 9 8173-3939 </p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg>Telefone:(17) 3331-5759</p>
            <p class="bi bi-geo-alt-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                </svg>Rodovia Vicinal Joaquim Garcia Franco, 300 Zona Rural, Guaíra - SP, 14790-000</p>
        </div>
    </div>
</div>
<!-- Localização Iframe -->
<div class="container-flex maps-iframe text-info-black-3">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Localização</h2>
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!4v1644590879379!6m8!1m7!1s1ofGKQZ1JI_latk3dViz3A!2m2!1d-20.33735543135813!2d-48.30074749376259!3f61.18640662142306!4f2.0902949534018944!5f0.8400310158292867" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>

@endsection