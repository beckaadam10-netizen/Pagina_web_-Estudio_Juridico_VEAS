<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Vidal Escalante & Asociados')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Source+Sans+3:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-main: #0a0c10;
            --bg-panel: #11161d;
            --text-main: #f0ede7;
            --text-soft: #b8b1a4;
            --gold: #d98f18;
            --gold-bright: #efb548;
            --line: rgba(239, 181, 72, 0.26);
            --shadow: 0 24px 60px rgba(0, 0, 0, 0.45);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Source Sans 3", sans-serif;
            background: radial-gradient(circle at 8% 0%, #212a35 0%, #0d1118 35%, #08090d 100%);
            color: var(--text-main);
            min-height: 100vh;
        }

        .page-shell {
            position: relative;
            min-height: 100vh;
            isolation: isolate;
        }

        .page-shell::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -2;
            background-image: linear-gradient(115deg, rgba(11, 14, 18, 0.95), rgba(9, 11, 15, 0.88)), url('/Imagenes/logo.png');
            background-size: cover;
            background-position: center;
            opacity: 0.2;
            pointer-events: none;
        }

        .page-shell::after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
            background: radial-gradient(circle at 90% 15%, rgba(217, 143, 24, 0.18) 0%, rgba(217, 143, 24, 0) 50%);
            pointer-events: none;
        }

        .container {
            width: min(1080px, calc(100% - 2.4rem));
            margin: 0 auto;
        }

        .topbar {
            position: sticky;
            top: 0;
            z-index: 40;
            backdrop-filter: blur(10px);
            background: rgba(9, 12, 16, 0.76);
            border-bottom: 1px solid rgba(239, 181, 72, 0.18);
        }

        .topbar-inner {
            padding: 1rem 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            color: var(--gold-bright);
            text-decoration: none;
            font-family: "Cinzel", serif;
            letter-spacing: 0.04em;
            font-size: 0.9rem;
        }

        .brand img {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            object-fit: cover;
            border: 1px solid var(--line);
        }

        nav {
            display: flex;
            align-items: center;
            gap: 1.2rem;
            flex-wrap: wrap;
        }

        .nav-item {
            position: relative;
            display: inline-flex;
            align-items: center;
        }

        nav a {
            text-decoration: none;
            color: var(--text-soft);
            font-weight: 600;
            transition: color 0.25s ease;
        }

        .nav-login {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            padding: 0.42rem 0.9rem;
            border-radius: 999px;
            border: 1px solid rgba(239, 181, 72, 0.35);
            background: rgba(217, 143, 24, 0.12);
            color: var(--gold-bright);
            font-weight: 700;
            letter-spacing: 0.01em;
            transition: transform 0.2s ease, background 0.2s ease, border-color 0.2s ease;
        }

        nav a:hover,
        nav a.active {
            color: var(--gold-bright);
        }

        .nav-login:hover,
        .nav-login:focus-visible {
            color: #16110a;
            background: linear-gradient(145deg, #efb548, #cf8b1e);
            border-color: transparent;
            transform: translateY(-1px);
            outline: none;
        }

        .submenu {
            position: absolute;
            top: calc(100% + 0.55rem);
            left: 0;
            min-width: 190px;
            padding: 0.45rem;
            border: 1px solid rgba(239, 181, 72, 0.23);
            border-radius: 12px;
            background: rgba(10, 13, 18, 0.98);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.45);
            opacity: 0;
            visibility: hidden;
            transform: translateY(8px);
            transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s ease;
            z-index: 100;
        }

        .submenu a {
            display: block;
            padding: 0.5rem 0.65rem;
            border-radius: 8px;
            color: var(--text-soft);
        }

        .submenu a:hover,
        .submenu a:focus-visible {
            color: var(--gold-bright);
            background: rgba(239, 181, 72, 0.08);
            outline: none;
        }

        .nav-item:hover .submenu,
        .nav-item:focus-within .submenu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .content {
            padding: 3.2rem 0 2.2rem;
        }

        .hero {
            border: 1px solid var(--line);
            border-radius: 22px;
            padding: 1.8rem;
            margin-bottom: 1rem;
            background: linear-gradient(160deg, rgba(17, 22, 29, 0.85), rgba(9, 12, 16, 0.94));
            box-shadow: var(--shadow);
        }

        .hero h1 {
            font-family: "Cinzel", serif;
            font-size: clamp(1.9rem, 4.4vw, 3.1rem);
            margin-bottom: 0.55rem;
        }

        .hero p {
            color: var(--text-soft);
            line-height: 1.7;
            max-width: 70ch;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 0.9rem;
            margin-top: 1rem;
        }

        .card {
            border: 1px solid rgba(239, 181, 72, 0.2);
            border-radius: 16px;
            background: rgba(17, 22, 29, 0.78);
            padding: 1.2rem;
        }

        .card h3 {
            font-family: "Cinzel", serif;
            color: #f2ede3;
            font-size: 1.2rem;
            margin-bottom: 0.4rem;
        }

        .card p,
        .card li {
            color: var(--text-soft);
            line-height: 1.65;
        }

        .stack {
            margin-top: 1rem;
            display: grid;
            gap: 0.8rem;
        }

        .panel {
            border: 1px solid rgba(239, 181, 72, 0.2);
            border-radius: 16px;
            background: rgba(17, 22, 29, 0.78);
            padding: 1.2rem;
        }

        .panel h2 {
            font-family: "Cinzel", serif;
            font-size: 1.4rem;
            margin-bottom: 0.4rem;
        }

        .panel p,
        .panel li {
            color: var(--text-soft);
            line-height: 1.7;
        }

        .panel ul {
            padding-left: 1.1rem;
            margin-top: 0.4rem;
        }

        .site-footer {
            padding: 0.9rem 0 0.55rem;
            border-top: 1px solid rgba(239, 181, 72, 0.16);
        }

        .footer-top {
            display: grid;
            grid-template-columns: 1.3fr repeat(3, 1fr);
            gap: 0.9rem;
            padding-bottom: 0.65rem;
        }

        .footer-brand .brand {
            margin-bottom: 0.3rem;
        }

        .footer-brand p {
            color: var(--text-soft);
            line-height: 1.4;
            max-width: 34ch;
            margin-bottom: 0.4rem;
            font-size: 0.9rem;
        }

        .footer-social {
            display: flex;
            gap: 0.4rem;
        }

        .footer-social a {
            width: 24px;
            height: 24px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            border: 1px solid rgba(239, 181, 72, 0.28);
            color: var(--gold-bright);
            background: rgba(217, 143, 24, 0.08);
            transition: background 0.25s ease, transform 0.25s ease, color 0.25s ease;
        }

        .footer-social a svg {
            width: 11px;
            height: 11px;
        }

        .footer-social a:hover {
            background: linear-gradient(145deg, #efb548, #cf8b1e);
            color: #16110a;
            transform: translateY(-2px);
        }

        .footer-col h6 {
            font-family: "Cinzel", serif;
            color: #f3eee4;
            font-size: 0.95rem;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            margin-bottom: 0.4rem;
        }

        .footer-col ul {
            list-style: none;
            display: grid;
            gap: 0.2rem;
        }

        .footer-nav-list {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            grid-auto-flow: row;
            column-gap: 0.8rem;
        }

        .footer-col a {
            color: var(--text-soft);
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.25s ease, padding-left 0.25s ease;
        }

        .footer-col a:hover {
            color: var(--gold-bright);
            padding-left: 0.25rem;
        }

        .footer-contact li {
            color: var(--text-soft);
            font-size: 0.9rem;
        }

        .footer-bottom {
            padding-top: 0.5rem;
            border-top: 1px solid rgba(239, 181, 72, 0.14);
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 0.3rem;
            color: var(--text-soft);
            font-size: 0.8rem;
            letter-spacing: 0.02em;
        }

        @keyframes fade-slide-up {
            from {
                opacity: 0;
                transform: translateY(22px) scale(0.99);
                filter: blur(2px);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
                filter: blur(0);
            }
        }

        @keyframes fade-slide-down {
            from {
                opacity: 0;
                transform: translateY(-14px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .topbar,
        footer {
            animation: fade-slide-down 620ms cubic-bezier(0.2, 0.8, 0.2, 1) both;
        }

        footer {
            animation-duration: 760ms;
        }

        .brand,
        nav a,
        .submenu {
            animation: fade-slide-down 560ms cubic-bezier(0.2, 0.8, 0.2, 1) both;
        }

        nav a:nth-child(1) { animation-delay: 70ms; }
        nav a:nth-child(2) { animation-delay: 120ms; }
        nav a:nth-child(3) { animation-delay: 170ms; }
        nav a:nth-child(4) { animation-delay: 220ms; }
        nav a:nth-child(5) { animation-delay: 270ms; }
        nav a:nth-child(6) { animation-delay: 320ms; }

        .reveal-ready {
            opacity: 0;
            transform: translateY(22px) scale(0.995);
            filter: blur(2px);
            transition:
                opacity 620ms cubic-bezier(0.2, 0.8, 0.2, 1),
                transform 620ms cubic-bezier(0.2, 0.8, 0.2, 1),
                filter 620ms cubic-bezier(0.2, 0.8, 0.2, 1);
            transition-delay: var(--reveal-delay, 0ms);
            will-change: opacity, transform, filter;
        }

        .reveal-ready.is-visible {
            opacity: 1;
            transform: translateY(0) scale(1);
            filter: blur(0);
        }

        .hero,
        .panel,
        .card,
        .metodo-item,
        .client-logo,
        .team-card,
        .team-copy,
        .clients-summary,
        .client-values,
        .clients-showcase,
        .trayectoria-flow > article,
        .trayectoria-divider {
            backface-visibility: hidden;
        }

        @media (prefers-reduced-motion: reduce) {
            .topbar,
            footer,
            .brand,
            nav a,
            .submenu {
                animation: none !important;
            }

            .reveal-ready,
            .reveal-ready.is-visible {
                opacity: 1 !important;
                transform: none !important;
                filter: none !important;
                transition: none !important;
            }
        }

        @media (max-width: 980px) {
            .grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .footer-top {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                row-gap: 2rem;
            }
        }

        @media (max-width: 740px) {
            .container {
                width: min(1080px, calc(100% - 1.1rem));
            }

            nav {
                gap: 0.7rem;
            }

            .grid {
                grid-template-columns: 1fr;
            }

            .footer-top {
                grid-template-columns: 1fr;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body>
<div class="page-shell">
    <header class="topbar">
        <div class="container topbar-inner">
            <a href="{{ route('home') }}" class="brand">
                <img src="/Imagenes/logo.png" alt="Logo Vidal Escalante & Asociados">
                VIDAL ESCALANTE & ASOCIADOS
            </a>
            <nav>
                <a href="{{ route('home') }}">Inicio</a>
                <a href="{{ route('nosotros') }}" class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a>
                <a href="{{ route('servicios') }}" class="{{ request()->routeIs('servicios') ? 'active' : '' }}">Servicios</a>
                <a href="{{ route('clientes') }}" class="{{ request()->routeIs('clientes') ? 'active' : '' }}">Clientes</a>
                <div class="nav-item">
                    <a href="{{ route('trayectoria') }}" class="{{ request()->routeIs('trayectoria') ? 'active' : '' }}">Trayectoria</a>
                    <div class="submenu" aria-label="Submenu Trayectoria">
                        <a href="{{ route('trayectoria') }}#obras-sociales">Obras Sociales</a>
                    </div>
                </div>
                <a href="{{ route('contacto') }}" class="{{ request()->routeIs('contacto') ? 'active' : '' }}">Contacto</a>
                <a href="https://seguimientos.veaslegal.com/login" class="nav-login" aria-label="Iniciar sesion" target="_blank" rel="noopener noreferrer">INICIAR SESION</a>
            </nav>
        </div>
    </header>

    <main class="container content">
        @yield('content')
    </main>

    <div class="container">
        <footer class="site-footer">
            <div class="footer-top">
                <div class="footer-brand">
                    <a href="{{ route('home') }}" class="brand">
                        <img src="/Imagenes/logo.png" alt="Logo Vidal Escalante & Asociados">
                        VIDAL ESCALANTE & ASOCIADOS
                    </a>
                    <p>Defensa legal de alto nivel con estilo sobrio y estrategico, al servicio de empresas, directivos y patrimonios familiares.</p>
                    <div class="footer-social">
                        <a href="https://wa.me/59163540423" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 11.5a8.5 8.5 0 0 1-12.36 7.57L4 20l1.06-4.44A8.5 8.5 0 1 1 21 11.5z"></path>
                                <path d="M9 10c0 2.5 2.5 5 5 5"></path>
                            </svg>
                        </a>
                        <a href="mailto:info@veaslegal.com" aria-label="Correo electronico">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                                <path d="M3 7l9 6 9-6"></path>
                            </svg>
                        </a>
                        <a href="https://app.veaslegal.com/" target="_blank" rel="noopener noreferrer" aria-label="Portal de clientes">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="8" r="3.2"></circle>
                                <path d="M5 20c0-3.9 3.1-7 7-7s7 3.1 7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="footer-col">
                    <h6>Navegacion</h6>
                    <ul class="footer-nav-list">
                        <li><a href="{{ route('home') }}">Inicio</a></li>
                        <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
                        <li><a href="{{ route('servicios') }}">Servicios</a></li>
                        <li><a href="{{ route('clientes') }}">Clientes</a></li>
                        <li><a href="{{ route('trayectoria') }}">Trayectoria</a></li>
                        <li><a href="{{ route('contacto') }}">Contacto</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h6>Areas de practica</h6>
                    <ul class="footer-nav-list">
                        <li><a href="{{ route('servicios.asesoria-corporativa') }}">Derecho Corporativo</a></li>
                        <li><a href="{{ route('servicios.litigios-cobranza-arbitraje') }}">Litigios y Arbitraje</a></li>
                        <li><a href="{{ route('servicios.asesoria-laboral') }}">Laboral Empresarial</a></li>
                        <li><a href="{{ route('servicios.regulacion-derecho-publico') }}">Regulacion y Derecho Publico</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h6>Contacto</h6>
                    <ul class="footer-contact footer-nav-list">
                        <li>Santa Cruz - Bolivia</li>
                        <li><a href="tel:+59163540423">+591 63540423</a></li>
                        <li><a href="mailto:info@veaslegal.com">info@veaslegal.com</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <span>&copy; {{ date('Y') }} Vidal Escalante & Asociados. Todos los derechos reservados.</span>
                <span>Santa Cruz - Bolivia | +591 63540423</span>
            </div>
        </footer>
    </div>
</div>
<script>
    (function () {
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            return;
        }

        var selectors = [
            '.content > section',
            '.content > article',
            '.content .hero',
            '.content .panel',
            '.content .card',
            '.content .metodo-item',
            '.content .client-logo',
            '.content .team-card',
            '.content .team-copy',
            '.content .clients-summary',
            '.content .client-values',
            '.content .clients-showcase',
            '.content .trayectoria-flow > article',
            '.content .trayectoria-divider'
        ];

        var nodes = Array.from(document.querySelectorAll(selectors.join(', ')));
        var uniqueNodes = Array.from(new Set(nodes));

        uniqueNodes.forEach(function (node, index) {
            node.classList.add('reveal-ready');
            node.style.setProperty('--reveal-delay', String(Math.min(index * 55, 520)) + 'ms');
        });

        if (!('IntersectionObserver' in window)) {
            uniqueNodes.forEach(function (node) {
                node.classList.add('is-visible');
            });
            return;
        }

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            });
        }, {
            threshold: 0.16,
            rootMargin: '0px 0px -8% 0px'
        });

        uniqueNodes.forEach(function (node) {
            observer.observe(node);
        });
    })();
</script>
</body>
</html>
