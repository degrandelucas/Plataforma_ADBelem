@extends('layouts.app')

@section('content')
    <div class="container"">
        <h1 class="center-align indigo-text text-darken-3">Sobre o Instituto Bíblico do Circuito das Águas</h1>

        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card-content">
                    <div class="card-content">
                        <img src="{{ url('https://www.adbelemamparo.com.br/static/media/adbelem.7a70568077496464084a.png') }}" alt="Igreja Assembleia de Deus Ministério do Belém" class="materialboxed responsive-img" width="200">
                        <span class="card-title">AD Belem Amparo/SP</span>
                    </div>
                    <div style="text-align: justify">
                        <p class="flow-text">
                            O Instituto Bíblico do Circuito das Águas, fundado no ano 2000, é uma escola teológica mantida pela Igreja Evangélica Assembleia de Deus Ministério do Belém - Campo do Circuito das Águas - com sua sede em Amparo/SP.
                        </p>
                        <p class="flow-text"">
                            Os cursos oferecidos pelo IBCA são cursos livres, não tendo, portanto, o reconhecimento do MEC; tendo, porém, reconhecimento eclesiástico, nos moldes da lei de oferta de cursos livres. Seus cursos são cursos de capacitação dentro do corpo eclesiástico, voltados à area Teológica, de Missões, Educação Cristã, Práticas Pastorais, Aconselhamento Espiritual, Administração Eclesiástica, Liderança Cristã, Capacitação Ministerial, etc.  Prima o Instituto por oferecer educação de qualidade que resulte em trabalhos de êxito
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row"">
            <div class="col s12 m6 offset-m3 center-align">
                <h5 class="indigo-text text-darken-3">Conecte-se Conosco</h5>
                <p>Siga-nos nas redes sociais para ficar por dentro das novidades e conteúdos.</p>
                <div class="social-icons">
                    <a class="btn-floating btn-large indigo" href="https://g.co/kgs/g1Ye1uD" target="_blank" title="Localização">
                        <i class="material-icons">location_on</i>
                    </a>
                    <a class="btn-floating btn-large red" href="https://www.youtube.com/adbelemamparooficial" target="_blank" title="Youtube Oficial">
                        <i class="material-icons">play_arrow</i>
                    </a>
                    <a class="btn-floating btn-large blue darken-2" href="https://www.facebook.com/adbelemamparo" target="_blank" title="Facebook Oficial">
                        <i class="material-icons">facebook</i>
                    </a>
                </div>
                <p><small>Visite-nos em Amparo/SP ou entre em contato pelos nossos canais.</small></p>
            </div>
        </div>
    </div>
@endsection
