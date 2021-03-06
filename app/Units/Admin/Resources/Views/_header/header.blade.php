<style>header, main, footer {
        padding-left: 240px;
    }

    @media only screen and (max-width: 992px) {
        header, main, footer {
            padding-left: 0;
        }

        .container {
            width: 85%;
        }
    }

    @media only screen and (min-width: 993px) {
        .container {
            padding-left: 10px;
            width: 95%;
        }
    }

    header nav {
        background-color: #008BD3 !important;
    }

    .waves-effect.waves-blue .waves-ripple {
        background-color: #008BD3;
    }</style>
<header>
    <nav class="top-nav">
        <div class="">
            <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only">
                <i class="material-icons">menu</i>
            </a>
            <div class="nav-wrapper">
                <ul id="user_options" class="dropdown-content">
                    <li><a href="#">Perfil</a></li>
                    <li class="divider"></li>
                    <li><a>Sair<i class="material-icons right">input</i></a></li>
                </ul>
                <ul class="right">
                    <li class="hide-on-small-only">
                        <a data-ng-click="Base.reload()">
                            <i class="material-icons">refresh</i>
                        </a>
                    </li>
                    <li>
                        <a class="user_options_dropdown" href="" data-activates="user_options">
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <ul id="nav-mobile" class="side-nav fixed">
        <h4 class=" center" style="color: #009BC9;">@douglaszuqueto</h4>
        <div class="divider"></div>
        <li class="bold">
            <a href="{{route('admin.dashboard.index')}}" class="waves-effect waves-blue">Dashboard</a>
        </li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="bold">
                    <a class="waves-effect waves-blue">Estatísticas</a>
                </li>
            </ul>
            <ul class="collapsible collapsible-accordion">
                <li class="bold">
                    <a class="collapsible-header  waves-effect waves-blue">Artigos</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{route('admin.articles.index')}}">Artigos</a></li>
                            <li><a href="">Cadastrar Artigo</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="collapsible collapsible-accordion">
                <li class="bold">
                    <a class="collapsible-header  waves-effect waves-blue">Usuários</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{route('admin.users.index')}}">Usuários</a></li>
                            <li><a href="">Cadastrar Usuário</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="collapsible collapsible-accordion">
                <li class="bold">
                    <a class="collapsible-header  waves-effect waves-blue">Notícias</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{route('admin.news.index')}}">Notícias</a></li>
                            <li><a href="">Cadastrar Notícias</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="collapsible collapsible-accordion">
                <li class="bold">
                    <a class="collapsible-header  waves-effect waves-blue">Mensagens</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{route('admin.contact.index')}}">Mensagens</a></li>
                            <li><a href="">Cadastrar Mensagens</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="collapsible collapsible-accordion">
                <li class="bold">
                    <a class="collapsible-header  waves-effect waves-blue">Patrocinadores</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{route('admin.sponsors.index')}}">Patrocinadores</a></li>
                            <li><a href="">Cadastrar Patrocinadores</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="collapsible collapsible-accordion">
                <li class="bold">
                    <a class="collapsible-header  waves-effect waves-blue">Apoiadores</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{route('admin.supporters.index')}}">Apoiadores</a></li>
                            <li><a href="">Cadastrar Apoiadores</a></li>
                        </ul>
                    </div>
                </li>
            </ul>

            <ul class="collapsible collapsible-accordion">
                <li class="bold">
                    <a class="collapsible-header  waves-effect waves-blue">Configurações</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="">Configurações</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</header>
<script>
    $(document).ready(function ($) {
        $('.button-collapse').sideNav({'edge': 'left'});
        $('.collapsible').collapsible({
            accordion: false
        });
        $(".user_options_dropdown").dropdown({belowOrigin: true});
    });
</script>
