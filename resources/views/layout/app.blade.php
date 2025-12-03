<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Expo Digital 2025 - Governo Provincial de Benguela">
    <meta name="keywords" content="Benguela, Expo Digital, Governo, Tecnologia, Angola">
    <meta name="author" content="Governo Provincial de Benguela">
    <meta property="og:title" content="Expo Digital 2025">
    <meta property="og:description" content="Evento informativo de tecnologia do Governo Provincial de Benguela">
    <link rel="icon" type="image/png" href="/images/logo-expo-blue.png" sizes="32x32">
    <link rel="apple-touch-icon" href="/images/logo-expo-blue.png">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#D32F2F">
    
    <title>@yield('titulo', 'Expo Digital 2025 - Benguela')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .logo-navbar {
            height: 40px; 
            transition: all 0.3s ease;
        }
        
        /* Ajuste fino para a logo do Governo */
        .logo-governo {
            /* Diminuído para 35px para ser menor ou igual à logo da Expo */
            height: 35px; 
        }
        
        /* Mantenha a logo da Expo no tamanho padrão (40px) ou ajuste-a também */
        .logo-expo {
            height: 40px; 
        }

        .navbar-brand {
            display: flex;
            align-items: center;
        }
    </style>
    </style>
    </head>
<body>
    <!-- Navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('pagina-inicial') }}">
                <img src="/images/logo-expo-blue.png" alt="Logo Expo Digital 2025" class="logo-navbar logo-expo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('pagina-inicial') ? 'active' : '' }}" 
                        href="{{ route('pagina-inicial') }}">Início</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('galeria.indice') ? 'active' : '' }}" 
                        href="{{ route('galeria.indice') }}">Galeria</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('agenda.*') ? 'active' : '' }}" 
                        href="{{ route('agenda.indice') }}">Agenda</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <?php
                            // Verifica se alguma das rotas do dropdown está ativa. 
                            // Se sim, o dropdown-toggle fica 'active'.
                            $dropdown_active = request()->routeIs('programa') || 
                                            request()->routeIs('inscricoes') || 
                                            request()->routeIs('contacto.indice') ||
                                            request()->routeIs('sobre') ||
                                            request()->routeIs('dashboard.indice');
                        ?>
                        <a class="nav-link dropdown-toggle {{ $dropdown_active ? 'active' : '' }}" 
                        href="#" role="button" data-bs-toggle="dropdown">
                            Informações
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ request()->routeIs('programa') ? 'active-dropdown' : '' }}" 
                                href="{{ route('programa') }}" >Programa e temas</a></li>
                            
                            <li><a class="dropdown-item {{ request()->routeIs('inscricoes') ? 'active-dropdown' : '' }}" 
                                href="{{ route('inscricoes') }}">Inscrições e normas</a></li>
                            
                            <li><hr class="dropdown-divider"></li>
                            
                            <li><a class="dropdown-item {{ request()->routeIs('contacto.indice') ? 'active-dropdown' : '' }}" 
                                href="{{ route('contacto.indice') }}">Contacto</a></li>
                            
                            <li><a class="dropdown-item {{ request()->routeIs('sobre') ? 'active-dropdown' : '' }}" 
                                href="{{ route('sobre') }}">Sobre</a></li>
                            
                            <li><hr class="dropdown-divider"></li>
                            
                            <li><a class="dropdown-item" href="{{ route('login') }}"></a></li> 
                            
                            @auth
                                @if(Auth::user()->isAdmin())
                                    <li><a class="dropdown-item {{ request()->routeIs('dashboard.indice') ? 'active-dropdown' : '' }}" 
                                        href="{{ route('dashboard.indice') }}">Painel</a></li>
                                
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST" class="w-100">
                                            @csrf
                                            <button type="submit" class="dropdown-item" style="cursor: pointer; text-align: left; width: 100%;">
                                                Sair
                                            </button>
                                        </form>
                                    </li>
                                @endif
                            @endauth

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo Principal -->
    <main>
        @yield('conteudo')
    </main>

    <!-- Footer -->
    <footer class="footer">
         <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="titulo-footer">A Expo Digital</h5>
                    <ul class="lista-footer">
                        <li><a href="{{ route('pagina-inicial') }}">Início</a></li>
                        <li><a href="{{ route('programa') }}">Programa</a></li>
                        <li><a href="{{ route('inscricoes') }}">Inscrições</a></li>
                        <li><a href="{{ route('contacto.indice') }}">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="titulo-footer">Contactos</h5>
                    <p>
                        <i class="fas fa-phone me-2"></i> Tel: +244 973 205 799
                    </p>
                    <p>
                        <i class="fas fa-envelope me-2"></i> Email: geral@benguela.gov.ao
                    </p>
                </div>
                
                <div class="col-md-3">
                    <h5 class="titulo-footer">Links Úteis</h5>
                    <ul class="lista-footer">
                        <li><a href="https://benguela.gov.ao/" target="_blank" rel="noopener noreferrer">Governo Provincial de Benguela</a></li>
                        <li><a href="https://web.facebook.com/CFB.EP.Oficial" target="_blank" rel="noopener noreferrer">Caminho de Ferro de Benguela- E.P.</a></li>
                        <li><a href="https://portodolobito.com/" target="_blank" rel="noopener noreferrer">Porto do Lobito</a></li>
                    </ul>
                </div>
                
                <div class="col-md-3">
                    <h5 class="titulo-footer">Redes Sociais</h5>
                    <div class="redes-sociais">
                        <a href="https://web.facebook.com/people/Governo-Provincial-de-Benguela/100069321241613/?mibextid=wwXIfr&rdid=ENYiXQxDVCtWG8oc&share_url=https%3A%2F%2Fweb.facebook.com%2Fshare%2F1G8sDhTMGy%2F%3Fmibextid%3DwwXIfr%26_rdc%3D1%26_rdr" 
                           class="link-social" title="Facebook do Governo Provincial" target="_blank" rel="noopener noreferrer">
                           <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="link-social" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="link-social" title="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
            </div>
            <hr class="divider-footer">
            <div class="text-center py-3">
                <p class="copyright">
                    &copy; 2025 Governo Provincial de Benguela. Todos os direitos reservados.
                    <br>
                    Desenvolvido por: <a href="#" target="_blank" style="color: #ffffff; text-decoration: underline;">Rammes Evolution</a>
                </p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
