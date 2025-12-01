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
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#D32F2F">
    
    <title>@yield('titulo', 'Expo Digital 2025 - Benguela')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://expo-digital-benguela-2025-production.up.railway.app/build/assets/app.css">
</head>
<body>
    <!-- Navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('pagina-inicial') }}">
                <span class="logo-expo">Expo Digital 2025</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pagina-inicial') }}">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('galeria.indice') }}">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('agenda.indice') }}">Agenda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Informações
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('programa') }}" >Programa e temas</a></li>
                            <li><a class="dropdown-item" href="{{ route('inscricoes') }}">Inscrições e normas</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('contacto.indice') }}">Contacto</a></li>
                            <li><a class="dropdown-item" href="{{ route('sobre') }}">Sobre</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('login') }}"></a></li>
                            @auth
                                @if(Auth::user()->isAdmin())
                                    <li><a class="dropdown-item" href="{{ route('dashboard.indice') }}">Painel</a></li>
                                  
                                    
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
            <div class="row mb-4">
                <div class="col-md-3">
                    <h5 class="titulo-footer">Localização</h5>
                    <p>
                        <i class="fas fa-map-marker-alt"></i>
                        Benguela, Angola<br>
                        <small>Governo Provincial de Benguela</small>
                    </p>
                </div>
                <div class="col-md-3">
                    <h5 class="titulo-footer">Contacto</h5>
                    <p>
                        <i class="fas fa-phone"></i> +244 272 XXX XXX<br>
                        <i class="fas fa-envelope"></i> <a href="mailto:contacto@expodigital.ao" class="link-footer">contacto@expodigital.ao</a>
                    </p>
                </div>
                <div class="col-md-3">
                    <h5 class="titulo-footer">Redes Sociais</h5>
                    <div class="redes-sociais">
                        <a href="#" class="link-social" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="link-social" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="link-social" title="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5 class="titulo-footer">Newsletter</h5>
                    <form action="{{ route('newsletter.inscrever') }}" method="POST" class="form-newsletter">
                        @csrf
                        <input type="email" name="email" placeholder="Seu email" class="input-news" required>
                        <button type="submit" class="btn-news">Inscrever</button>
                    </form>
                </div>
            </div>
            <hr class="divider-footer">
            <div class="text-center py-3">
                <p class="copyright">&copy; 2025 Governo Provincial de Benguela. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
