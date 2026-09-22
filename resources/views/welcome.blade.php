<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vidal Escalante & Asociados</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Source+Sans+3:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-main: #0a0c10;
            --bg-panel: #11161d;
            --bg-soft: #171d25;
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

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Source Sans 3", sans-serif;
            background: radial-gradient(circle at 8% 0%, #212a35 0%, #0d1118 35%, #08090d 100%);
            color: var(--text-main);
            min-height: 100vh;
            overflow-x: hidden;
        }

        .page-shell {
            position: relative;
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
            opacity: 0.28;
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
            width: min(1140px, calc(100% - 2.4rem));
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
            gap: 0.85rem;
            color: var(--gold-bright);
            text-decoration: none;
            font-family: "Cinzel", serif;
            letter-spacing: 0.04em;
            font-size: 0.92rem;
        }

        .brand img {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            object-fit: cover;
            border: 1px solid var(--line);
            box-shadow: 0 0 0 2px rgba(9, 12, 16, 0.9);
        }

        nav {
            display: flex;
            align-items: center;
            gap: 1.3rem;
        }

        nav a {
            text-decoration: none;
            color: var(--text-soft);
            font-weight: 600;
            position: relative;
            transition: color 0.25s ease;
        }

        nav a:not(.nav-login)::after {
            content: '';
            position: absolute;
            left: 0;
            right: 100%;
            bottom: -4px;
            height: 1px;
            background: var(--gold-bright);
            transition: right 0.3s ease;
        }

        nav a:not(.nav-login):hover::after,
        nav a:not(.nav-login).active::after {
            right: 0;
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

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            border-radius: 999px;
            text-decoration: none;
            font-weight: 700;
            padding: 0.72rem 1.25rem;
            transition: transform 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
            border: 1px solid transparent;
        }

        .btn-primary {
            color: #141008;
            background: linear-gradient(140deg, #e9a53e 0%, #cf8210 100%);
            box-shadow: 0 10px 24px rgba(207, 130, 16, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 28px rgba(207, 130, 16, 0.36);
        }

        .btn-outline {
            color: var(--gold-bright);
            border-color: var(--line);
            background: rgba(17, 22, 29, 0.45);
        }

        .btn-outline:hover {
            background: rgba(217, 143, 24, 0.16);
            transform: translateY(-2px);
        }

        .hero {
            position: relative;
            padding: 2rem 0 2rem;
            min-height: 79.04vh;
        }

        .hero::before,
        .hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 100vw;
            transform: translateX(-50%);
            height: 79.04vh;
            z-index: 0;
            pointer-events: none;
        }

        .hero::before {
            background-image: url('/Imagenes/FONDO.png');
            background-size: cover;
            background-position: center 15%;
            transform: translateX(-50%) scale(1.05);
            -webkit-mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 76%, rgba(0, 0, 0, 0) 100%);
            mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 76%, rgba(0, 0, 0, 0) 100%);
        }

        .hero::after {
            background: linear-gradient(180deg, rgba(8, 9, 13, 0.16) 0%, rgba(8, 9, 13, 0.45) 100%);
        }

        .hero-grid {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: 1.05fr 0.95fr;
            gap: 1.4rem;
            align-items: stretch;
        }

        .hero-copy h1 {
            font-family: "Cinzel", serif;
            font-size: clamp(1.47rem, 3.36vw, 2.94rem);
            line-height: 1.3;
            min-height: 3.9em;
            max-width: 26ch;
            color: #f5f2eb;
            margin-bottom: 1rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.85), 0 0 24px rgba(0, 0, 0, 0.6);
        }

        .hero-copy h1 .typed-cursor {
            display: inline-block;
            margin-left: 0.05em;
            color: var(--accent, #d98f18);
            animation: cursor-blink 800ms steps(1) infinite;
        }

        .hero-copy h1.is-done .typed-cursor {
            display: none;
        }

        @keyframes cursor-blink {
            0%, 49% { opacity: 1; }
            50%, 100% { opacity: 0; }
        }

        .hero-copy p {
            color: var(--text-soft);
            line-height: 1.75;
            max-width: 62ch;
            margin-bottom: 1.5rem;
        }

        .hero-actions .btn {
            font-size: 1.1em;
            padding: 0.79rem 1.38rem;
        }

        .hero-actions {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            flex-wrap: wrap;
            margin-top: 2.4rem;
        }

        .hero-card {
            align-self: end;
            justify-self: center;
            width: min(360px, 100%);
            aspect-ratio: 1;
            border-radius: 50%;
            border: 1px solid var(--line);
            background: linear-gradient(180deg, rgba(17, 22, 29, 0.88), rgba(9, 12, 16, 0.94));
            box-shadow: var(--shadow);
            padding: 2rem;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero-card::before {
            content: "";
            position: absolute;
            top: -110px;
            right: -110px;
            width: 250px;
            height: 250px;
            background: radial-gradient(circle, rgba(239, 181, 72, 0.24), transparent 72%);
        }

        .card-logo {
            width: min(96px, 100%);
            margin-bottom: 0.6rem;
            border-radius: 12px;
            border: 1px solid rgba(239, 181, 72, 0.32);
        }

        .label {
            text-transform: uppercase;
            letter-spacing: 0.11em;
            font-size: 0.68rem;
            color: var(--gold-bright);
            margin-bottom: 0.5rem;
            position: relative;
        }

        .hero-card h2 {
            position: relative;
            font-family: "Cinzel", serif;
            font-size: 1.05rem;
            line-height: 1.25;
            margin-top: 0;
            margin-bottom: 0.5rem;
        }

        .hero-card p {
            position: relative;
            color: #d0c8ba;
            font-size: 0.8rem;
            line-height: 1.5;
        }

        .hero-metrics {
            margin-top: 1.3rem;
            margin-bottom: 2.6rem;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0.7rem;
            position: relative;
        }

        .metric {
            border: 1px solid rgba(239, 181, 72, 0.24);
            border-radius: 14px;
            padding: 0.8rem;
            background: rgba(14, 19, 26, 0.75);
            color: #d9d2c5;
            font-size: 0.95rem;
        }

        .metric strong {
            display: block;
            color: var(--gold-bright);
            font-size: 1.2rem;
            margin-bottom: 0.15rem;
        }

        section {
            padding: 2.4rem 0;
        }

        .trust-strip {
            padding: 1.5rem 0;
            border-top: 1px solid rgba(239, 181, 72, 0.14);
            border-bottom: 1px solid rgba(239, 181, 72, 0.14);
            display: flex;
        }

        .trust-item {
            flex: 1;
            text-align: center;
            padding: 0 1rem;
            border-right: 1px solid rgba(239, 181, 72, 0.14);
        }

        .trust-item:last-child {
            border-right: none;
        }

        .trust-item strong {
            display: block;
            font-family: "Cinzel", serif;
            font-size: clamp(1.3rem, 2.6vw, 1.9rem);
            color: var(--gold-bright);
            margin-bottom: 0.2rem;
        }

        .trust-item span {
            color: var(--text-soft);
            font-size: 0.74rem;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        @media (max-width: 740px) {
            .trust-strip {
                flex-wrap: wrap;
                gap: 1rem 0;
            }

            .trust-item {
                flex: 0 0 50%;
                border-right: none;
                border-bottom: 1px solid rgba(239, 181, 72, 0.14);
                padding-bottom: 0.8rem;
            }

            .trust-item:nth-child(2n) {
                border-right: none;
            }

            .trust-item:nth-last-child(-n+2) {
                border-bottom: none;
            }
        }

        .quick-links {
            position: relative;
            padding-top: 0.6rem;
            margin-top: calc(-178.5px - 2rem);
        }

        .quick-links-head {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            gap: 0.9rem;
            color: var(--text-main);
            font-weight: 600;
            font-size: 1.05rem;
            letter-spacing: 0.03em;
            margin-bottom: 1rem;
        }

        .quick-links-head::before {
            content: '';
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--gold-bright);
            box-shadow: 0 0 10px 2px rgba(239, 181, 72, 0.6);
        }

        .quick-links-head::after {
            content: '';
            flex: 1;
            height: 1px;
            background: linear-gradient(90deg, var(--line), transparent);
        }

        .quick-links-grid {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: repeat(4, max-content);
            gap: 2.2rem;
            justify-content: start;
        }

        .quick-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            text-decoration: none;
            color: inherit;
            gap: 0.9rem;
            opacity: 0;
            transform: translateY(24px) scale(0.9);
            transition:
                opacity 600ms cubic-bezier(0.2, 0.8, 0.2, 1),
                transform 600ms cubic-bezier(0.2, 0.8, 0.2, 1);
        }

        .quick-links.is-visible .quick-item {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        .quick-links.is-visible .quick-item:nth-child(1) { transition-delay: 0ms; }
        .quick-links.is-visible .quick-item:nth-child(2) { transition-delay: 110ms; }
        .quick-links.is-visible .quick-item:nth-child(3) { transition-delay: 220ms; }
        .quick-links.is-visible .quick-item:nth-child(4) { transition-delay: 330ms; }

        .quick-item-btn {
            background: none;
            border: none;
            font: inherit;
            cursor: pointer;
        }

        .quick-icon {
            position: relative;
            width: 148px;
            height: 148px;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 1rem;
            border: 3.3px solid transparent;
            background:
                radial-gradient(circle at 32% 26%, rgba(239, 181, 72, 0.22), transparent 62%) padding-box,
                linear-gradient(160deg, #161c25, #0c0f14) padding-box,
                linear-gradient(135deg, var(--gold), var(--gold-bright) 45%, #fff1d1 75%, var(--gold)) border-box;
            color: var(--gold-bright);
            box-shadow:
                0 14px 34px rgba(0, 0, 0, 0.45),
                0 0 0 6px rgba(239, 181, 72, 0.06),
                inset 0 0 22px rgba(0, 0, 0, 0.55);
            transition:
                transform 320ms cubic-bezier(0.2, 0.8, 0.2, 1),
                box-shadow 320ms ease,
                color 320ms ease,
                border-color 320ms ease;
        }

        .quick-icon::before {
            content: '';
            position: absolute;
            inset: 8px;
            border-radius: 50%;
            border: 1px solid rgba(239, 181, 72, 0.22);
            pointer-events: none;
        }

        .quick-icon svg {
            position: relative;
            z-index: 1;
            filter: drop-shadow(0 0 8px rgba(239, 181, 72, 0.35));
            transition: transform 320ms cubic-bezier(0.2, 0.8, 0.2, 1);
        }

        .quick-item:hover .quick-icon {
            transform: translateY(-8px) scale(1.07);
            color: #fff6e6;
            box-shadow:
                0 18px 44px rgba(239, 181, 72, 0.3),
                0 0 0 8px rgba(239, 181, 72, 0.12),
                inset 0 0 26px rgba(0, 0, 0, 0.4);
            background:
                radial-gradient(circle at 32% 26%, rgba(239, 181, 72, 0.32), transparent 62%) padding-box,
                linear-gradient(160deg, #1c232e, #11151b) padding-box,
                linear-gradient(135deg, var(--gold-bright), #fff1d1 45%, var(--gold) 75%, var(--gold-bright)) border-box;
        }

        .quick-item:hover .quick-icon svg {
            transform: scale(1.1);
            filter: drop-shadow(0 0 12px rgba(255, 241, 209, 0.55));
        }

        .quick-label {
            font-size: 0.85rem;
            color: var(--text-soft);
            line-height: 1.35;
            transition: color 320ms ease;
        }

        .quick-label strong {
            display: block;
            color: var(--gold-bright);
            font-size: 0.95rem;
        }

        .quick-item:hover .quick-label {
            color: var(--text-main);
        }

        @media (max-width: 740px) {
            .quick-links-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        .section-head {
            margin-bottom: 1.1rem;
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 2rem;
        }

        .section-head h3 {
            font-family: "Cinzel", serif;
            font-size: clamp(1.8rem, 4vw, 2.8rem);
            color: #f3eee4;
            white-space: nowrap;
        }

        .section-head p {
            color: var(--text-soft);
            max-width: 42ch;
            line-height: 1.7;
            text-align: right;
        }

        @media (max-width: 740px) {
            .section-head {
                flex-direction: column;
                align-items: flex-start;
            }

            .section-head h3 {
                white-space: normal;
            }

            .section-head p {
                max-width: none;
                text-align: left;
            }
        }

        .services {
            display: flex;
            overflow: hidden;
            -webkit-mask-image: linear-gradient(90deg, transparent, #000 6%, #000 94%, transparent);
            mask-image: linear-gradient(90deg, transparent, #000 6%, #000 94%, transparent);
        }

        .services-track {
            counter-reset: svc;
            display: flex;
            flex: 0 0 auto;
            gap: 1.6rem;
            padding-right: 1.6rem;
            animation: services-scroll 32s linear infinite;
        }

        .services:hover .services-track {
            animation-play-state: paused;
        }

        @keyframes services-scroll {
            from { transform: translateX(0); }
            to { transform: translateX(-100%); }
        }

        .service-card {
            counter-increment: svc;
            position: relative;
            flex: 0 0 clamp(230px, 28vw, 290px);
            padding: 1.4rem 0.2rem 1.4rem 3rem;
            border-top: 1px solid rgba(239, 181, 72, 0.16);
            transition: border-color 0.3s ease, padding-left 0.3s ease;
        }

        .service-card::before {
            content: counter(svc, decimal-leading-zero);
            position: absolute;
            left: 0;
            top: 1.45rem;
            font-family: "Cinzel", serif;
            font-size: 0.95rem;
            letter-spacing: 0.04em;
            color: var(--gold-bright);
            opacity: 0.55;
            transition: opacity 0.3s ease;
        }

        .service-card:hover {
            border-color: rgba(239, 181, 72, 0.55);
            padding-left: 3.4rem;
        }

        .service-card:hover::before {
            opacity: 1;
        }

        .service-card h4 {
            font-family: "Cinzel", serif;
            color: #f2ede3;
            font-size: 1.3rem;
            margin-bottom: 0.4rem;
        }

        .service-card p {
            color: var(--text-soft);
            line-height: 1.66;
            margin-bottom: 0.9rem;
        }

        .service-link {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            text-decoration: none;
            color: #16110a;
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            padding: 0.4rem 0.9rem;
            border: 1px solid transparent;
            border-radius: 999px;
            background: linear-gradient(145deg, #efb548, #cf8b1e);
            transition: box-shadow 0.25s ease, transform 0.25s ease;
        }

        .service-link::after {
            content: '\2192';
            transition: transform 0.25s ease;
        }

        .service-link:hover {
            box-shadow: 0 8px 18px rgba(207, 130, 16, 0.35);
            transform: translateY(-1px);
        }

        .service-link:hover::after {
            transform: translateX(3px);
        }

        .overview-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1rem;
        }

        .overview-card {
            border-radius: 18px;
            border: 1px solid rgba(239, 181, 72, 0.18);
            padding: 1.45rem;
            background: linear-gradient(165deg, rgba(17, 22, 29, 0.9), rgba(9, 12, 16, 0.95));
            box-shadow: var(--shadow);
        }

        .overview-card h4 {
            font-family: "Cinzel", serif;
            font-size: 1.45rem;
            color: #f3ede3;
            margin-bottom: 0.6rem;
        }

        .overview-card p {
            color: var(--text-soft);
            line-height: 1.7;
        }

        .overview-list {
            margin-top: 0.9rem;
            display: grid;
            gap: 0.7rem;
        }

        .overview-list div {
            border: 1px solid rgba(239, 181, 72, 0.18);
            border-radius: 14px;
            padding: 0.85rem 0.95rem;
            background: rgba(14, 19, 26, 0.72);
            color: #d9d2c5;
            line-height: 1.65;
        }

        .overview-list strong {
            display: block;
            color: var(--gold-bright);
            margin-bottom: 0.2rem;
            font-size: 0.82rem;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        .story-layout {
            position: relative;
            display: grid;
            grid-template-columns: 0.95fr 1.05fr;
            gap: 2.6rem;
            align-items: center;
        }

        .story-card,
        .story-copy {
            position: relative;
            padding: 0;
        }

        .story-media {
            position: relative;
            border-radius: 22px;
            overflow: hidden;
            border: 1px solid rgba(239, 181, 72, 0.24);
            box-shadow: var(--shadow);
            aspect-ratio: 4 / 5;
        }

        .story-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.6s ease;
        }

        .story-card:hover .story-media img {
            transform: scale(1.04);
        }

        .story-media::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(8, 9, 13, 0) 42%, rgba(8, 9, 13, 0.9) 100%);
        }

        .story-media-badge {
            position: absolute;
            top: 1.1rem;
            right: 1.1rem;
            z-index: 1;
            text-align: center;
            padding: 0.65rem 0.9rem;
            border-radius: 14px;
            border: 1px solid rgba(239, 181, 72, 0.4);
            background: rgba(9, 12, 16, 0.72);
            backdrop-filter: blur(4px);
        }

        .story-media-badge strong {
            display: block;
            font-family: "Cinzel", serif;
            color: var(--gold-bright);
            font-size: 1.5rem;
            line-height: 1;
        }

        .story-media-badge span {
            color: var(--text-soft);
            font-size: 0.62rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .story-media-caption {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1;
            padding: 1.5rem 1.4rem;
        }

        .story-media-caption span {
            display: block;
            color: var(--gold-bright);
            font-size: 0.72rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 0.35rem;
        }

        .story-media-caption strong {
            display: block;
            font-family: "Cinzel", serif;
            font-size: 1.3rem;
            line-height: 1.3;
            color: #f5f2eb;
        }

        .story-copy .label {
            margin-bottom: 1rem;
        }

        .story-copy h4 {
            font-family: "Cinzel", serif;
            font-size: clamp(2rem, 4.6vw, 4rem);
            line-height: 1.04;
            color: #f5f2eb;
            max-width: 14ch;
            margin-bottom: 1rem;
        }

        .story-copy h4 em {
            color: var(--gold-bright);
            font-style: italic;
        }

        .story-copy p {
            color: var(--text-soft);
            line-height: 1.8;
            max-width: 60ch;
        }

        .story-copy .btn {
            margin-top: 1.7rem;
        }

        .timeline {
            margin-top: 0.9rem;
            padding-top: 0.8rem;
            border-top: 1px solid rgba(239, 181, 72, 0.2);
            display: grid;
            gap: 0.7rem;
            color: #d3ccc0;
        }

        .timeline span {
            color: var(--gold-bright);
            display: block;
            font-size: 0.82rem;
            letter-spacing: 0.05em;
        }

        .contact {
            border-top: 1px solid rgba(239, 181, 72, 0.24);
            border-bottom: 1px solid rgba(239, 181, 72, 0.24);
            padding: 2.4rem 0;
            margin: 3rem 0;
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 1rem;
            align-items: center;
        }

        .contact h5 {
            font-family: "Cinzel", serif;
            font-size: clamp(1.6rem, 3.8vw, 2.5rem);
            margin-bottom: 0.3rem;
        }

        .contact p {
            color: var(--text-soft);
            line-height: 1.7;
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
        footer,
        .brand,
        nav a {
            animation: fade-slide-down 620ms cubic-bezier(0.2, 0.8, 0.2, 1) both;
        }

        nav a:nth-child(1) { animation-delay: 70ms; }
        nav a:nth-child(2) { animation-delay: 120ms; }
        nav a:nth-child(3) { animation-delay: 170ms; }
        nav a:nth-child(4) { animation-delay: 220ms; }
        nav a:nth-child(5) { animation-delay: 270ms; }
        nav a:nth-child(6) { animation-delay: 320ms; }
        nav a:nth-child(7) { animation-delay: 370ms; }

        .reveal {
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

        .reveal.is-visible {
            opacity: 1;
            transform: translateY(0) scale(1);
            filter: blur(0);
        }

        .delay-1 { --reveal-delay: 110ms; }
        .delay-2 { --reveal-delay: 180ms; }
        .delay-3 { --reveal-delay: 250ms; }

        .modal-overlay {
            position: fixed;
            inset: 0;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.2rem;
            background: rgba(6, 7, 10, 0.72);
            backdrop-filter: blur(6px);
            opacity: 0;
            visibility: hidden;
            transition: opacity 280ms ease, visibility 0s linear 280ms;
        }

        .modal-overlay.is-open {
            opacity: 1;
            visibility: visible;
            transition: opacity 280ms ease, visibility 0s linear 0s;
        }

        .modal-card {
            position: relative;
            width: min(480px, 100%);
            max-height: 90vh;
            overflow-y: auto;
            border-radius: 20px;
            border: 1px solid rgba(239, 181, 72, 0.3);
            background: linear-gradient(165deg, rgba(23, 29, 37, 0.98), rgba(10, 13, 18, 0.99));
            box-shadow: var(--shadow);
            padding: 2rem 1.8rem 1.8rem;
            transform: translateY(18px) scale(0.96);
            opacity: 0;
            transition: transform 320ms cubic-bezier(0.2, 0.8, 0.2, 1), opacity 320ms ease;
        }

        .modal-overlay.is-open .modal-card {
            transform: translateY(0) scale(1);
            opacity: 1;
        }

        .modal-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            width: 32px;
            height: 32px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            border: 1px solid rgba(239, 181, 72, 0.25);
            background: rgba(239, 181, 72, 0.08);
            color: var(--gold-bright);
            font-size: 1.1rem;
            line-height: 1;
            cursor: pointer;
            transition: background 0.25s ease, transform 0.25s ease;
        }

        .modal-close:hover {
            background: rgba(217, 143, 24, 0.2);
            transform: rotate(90deg);
        }

        .modal-card .label {
            margin-bottom: 0.3rem;
        }

        .modal-card h3 {
            font-family: "Cinzel", serif;
            font-size: 1.4rem;
            color: #f3eee4;
            margin-bottom: 0.4rem;
        }

        .modal-card > p {
            color: var(--text-soft);
            line-height: 1.6;
            margin-bottom: 1.4rem;
            font-size: 0.92rem;
        }

        .modal-field {
            margin-bottom: 1rem;
        }

        .modal-field label {
            display: block;
            font-size: 0.72rem;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: var(--gold-bright);
            margin-bottom: 0.4rem;
        }

        .modal-field input,
        .modal-field select,
        .modal-field textarea {
            width: 100%;
            border-radius: 10px;
            border: 1px solid rgba(239, 181, 72, 0.22);
            background: rgba(9, 12, 16, 0.7);
            color: var(--text-main);
            font: inherit;
            padding: 0.65rem 0.8rem;
            transition: border-color 0.25s ease, box-shadow 0.25s ease;
        }

        .modal-field textarea {
            min-height: 80px;
            resize: vertical;
        }

        .modal-field input:focus,
        .modal-field select:focus,
        .modal-field textarea:focus {
            outline: none;
            border-color: var(--gold-bright);
            box-shadow: 0 0 0 3px rgba(239, 181, 72, 0.15);
        }

        .modal-fields-row {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0.8rem;
        }

        .modal-card form .btn {
            width: 100%;
            margin-top: 0.4rem;
        }

        @media (max-width: 480px) {
            .modal-card {
                padding: 1.6rem 1.2rem 1.4rem;
            }

            .modal-fields-row {
                grid-template-columns: 1fr;
                gap: 0;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .topbar,
            footer,
            .brand,
            nav a {
                animation: none !important;
            }

            .reveal,
            .reveal.is-visible {
                opacity: 1 !important;
                transform: none !important;
                filter: none !important;
                transition: none !important;
            }

            .hero-copy h1 .typed-cursor {
                display: none !important;
            }

            .services-track {
                animation: none !important;
            }

            .services {
                overflow-x: auto;
            }
        }

        @media (max-width: 1024px) {
            .hero-grid,
            .contact {
                grid-template-columns: 1fr;
            }

            .overview-grid {
                grid-template-columns: 1fr;
            }

            .story-layout {
                grid-template-columns: 1fr;
                gap: 1.8rem;
            }

            .footer-top {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                row-gap: 2rem;
            }
        }

        @media (max-width: 740px) {
            .container {
                width: min(1140px, calc(100% - 1.1rem));
            }

            .topbar {
                position: static;
            }

            nav {
                display: none;
            }

            .hero {
                padding-top: 2.6rem;
            }

            .footer-top {
                grid-template-columns: 1fr;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }

            .hero-metrics {
                grid-template-columns: 1fr;
            }

            .service-card {
                flex-basis: 78vw;
            }
        }
    </style>
</head>
<body>
<div class="page-shell">
    <header class="topbar">
        <div class="container topbar-inner">
            <a href="#inicio" class="brand">
                <img src="/Imagenes/logo.png" alt="Logo Vidal Escalante & Asociados">
                VIDAL ESCALANTE & ASOCIADOS
            </a>
            <nav>
                <a href="#inicio" class="active">Inicio</a>
                <a href="{{ route('nosotros') }}">Nosotros</a>
                <a href="{{ route('servicios') }}">Servicios</a>
                <a href="{{ route('clientes') }}">Clientes</a>
                <a href="{{ route('trayectoria') }}">Trayectoria</a>
                <a href="{{ route('contacto') }}">Contacto</a>
                <a href="https://seguimientos.veaslegal.com/login" class="nav-login" target="_blank" rel="noopener noreferrer" aria-label="Iniciar sesion">INICIAR SESION</a>
            </nav>
        </div>
    </header>

    <main class="container" id="inicio">
        <section class="hero">
            <div class="hero-grid">
                <div class="hero-copy reveal">
                    <h1 id="heroTitle">Defensa legal de alto nivel con estilo sobrio y estrategico</h1>
                    <div class="hero-actions">
                        <a class="btn btn-primary" href="{{ route('contacto') }}">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 6h16v12H4z"></path>
                                <path d="M4 7l8 6 8-6"></path>
                            </svg>
                            Contacto
                        </a>
                        <a class="btn btn-outline" href="{{ route('servicios') }}">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            Ver Servicios
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="quick-links reveal delay-1" aria-label="Accesos rapidos">
            <div class="quick-links-head">
                <span>Accesos rapidos</span>
            </div>
            <div class="quick-links-grid">
                <button type="button" class="quick-item quick-item-btn" id="openConsultaModal" aria-haspopup="dialog" aria-controls="consultaModal">
                    <div class="quick-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="13" rx="1.5"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                        <div class="quick-label"><strong>CONSULTA VIRTUAL</strong>Agenda tu cita</div>
                    </div>
                </button>
                <a class="quick-item" href="{{ route('clientes') }}">
                    <div class="quick-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 3h9l3 3v15H7z"></path>
                            <line x1="10" y1="10" x2="16" y2="10"></line>
                            <line x1="10" y1="14" x2="16" y2="14"></line>
                            <line x1="10" y1="18" x2="14" y2="18"></line>
                        </svg>
                        <div class="quick-label"><strong>CLIENTES SATISFECHOS</strong>Ver Aquí</div>
                    </div>
                </a>
                <a class="quick-item" href="https://seguimientos.veaslegal.com/rastreo" target="_blank" rel="noopener noreferrer">
                    <div class="quick-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="8" r="3.2"></circle>
                            <path d="M5 20c0-3.9 3.1-7 7-7s7 3.1 7 7"></path>
                        </svg>
                        <div class="quick-label"><strong>ESTADO DE TU PROCESO</strong>Consulta aquí</div>
                    </div>
                </a>
                <a class="quick-item" href="{{ route('servicios') }}">
                    <div class="quick-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 3l7 3v6c0 4.5-3 8-7 9-4-1-7-4.5-7-9V6z"></path>
                            <path d="M9.5 12l1.8 1.8L14.7 10"></path>
                        </svg>
                        <div class="quick-label"><strong>NUESTROS SERVICIOS</strong>Reporta tu caso</div>
                    </div>
                </a>
            </div>
        </section>

        <section class="trust-strip reveal" aria-label="Datos de respaldo">
            <div class="trust-item">
                <strong>10+</strong>
                <span>Años de experiencia</span>
            </div>
            <div class="trust-item">
                <strong>500+</strong>
                <span>Casos resueltos</span>
            </div>
            <div class="trust-item">
                <strong>100%</strong>
                <span>Confidencialidad</span>
            </div>
            <div class="trust-item">
                <strong>24/7</strong>
                <span>Atencion a clientes</span>
            </div>
        </section>

        <section id="servicios">
            <div class="section-head reveal">
                <h3>Areas de practica</h3>
            </div>
            <div class="services reveal">
                <div class="services-track">
                    <article class="service-card">
                        <h4>Derecho Corporativo</h4>
                        <p>Gobierno societario, contratos estrategicos, reestructuracion y due diligence.</p>
                        <a class="service-link" href="{{ route('contacto') }}">Consultar</a>
                    </article>
                    <article class="service-card">
                        <h4>Litigios y Arbitraje</h4>
                        <p>Representacion integral en conflictos civiles y comerciales de alta complejidad.</p>
                        <a class="service-link" href="{{ route('contacto') }}">Consultar</a>
                    </article>
                    <article class="service-card">
                        <h4>Laboral Empresarial</h4>
                        <p>Prevencion de contingencias, diseno de politicas y defensa judicial especializada.</p>
                        <a class="service-link" href="{{ route('contacto') }}">Consultar</a>
                    </article>
                    <article class="service-card">
                        <h4>Propiedad Intelectual</h4>
                        <p>Registro, proteccion y defensa de marcas, activos creativos y know-how.</p>
                        <a class="service-link" href="{{ route('contacto') }}">Consultar</a>
                    </article>
                    <article class="service-card">
                        <h4>Compliance</h4>
                        <p>Programas de integridad, protocolos internos y gestion de riesgos regulatorios.</p>
                        <a class="service-link" href="{{ route('contacto') }}">Consultar</a>
                    </article>
                    <article class="service-card">
                        <h4>Patrimonio y Sucesiones</h4>
                        <p>Planificacion de legado y estructura legal para continuidad patrimonial.</p>
                        <a class="service-link" href="{{ route('contacto') }}">Consultar</a>
                    </article>
                </div>
                <div class="services-track" aria-hidden="true">
                    <article class="service-card">
                        <h4>Derecho Corporativo</h4>
                        <p>Gobierno societario, contratos estrategicos, reestructuracion y due diligence.</p>
                        <a class="service-link" href="{{ route('contacto') }}" tabindex="-1">Consultar</a>
                    </article>
                    <article class="service-card">
                        <h4>Litigios y Arbitraje</h4>
                        <p>Representacion integral en conflictos civiles y comerciales de alta complejidad.</p>
                        <a class="service-link" href="{{ route('contacto') }}" tabindex="-1">Consultar</a>
                    </article>
                    <article class="service-card">
                        <h4>Laboral Empresarial</h4>
                        <p>Prevencion de contingencias, diseno de politicas y defensa judicial especializada.</p>
                        <a class="service-link" href="{{ route('contacto') }}" tabindex="-1">Consultar</a>
                    </article>
                    <article class="service-card">
                        <h4>Propiedad Intelectual</h4>
                        <p>Registro, proteccion y defensa de marcas, activos creativos y know-how.</p>
                        <a class="service-link" href="{{ route('contacto') }}" tabindex="-1">Consultar</a>
                    </article>
                    <article class="service-card">
                        <h4>Compliance</h4>
                        <p>Programas de integridad, protocolos internos y gestion de riesgos regulatorios.</p>
                        <a class="service-link" href="{{ route('contacto') }}" tabindex="-1">Consultar</a>
                    </article>
                    <article class="service-card">
                        <h4>Patrimonio y Sucesiones</h4>
                        <p>Planificacion de legado y estructura legal para continuidad patrimonial.</p>
                        <a class="service-link" href="{{ route('contacto') }}" tabindex="-1">Consultar</a>
                    </article>
                </div>
            </div>
        </section>

        <section id="trayectoria">
            <div class="story-layout">
                <article class="story-card reveal">
                    <div class="story-media">
                        <img src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?auto=format&fit=crop&w=900&q=70" alt="Biblioteca juridica Vidal Escalante & Asociados" loading="lazy">
                        <div class="story-media-badge">
                            <strong>10+</strong>
                            <span>Años</span>
                        </div>
                        <div class="story-media-caption">
                            <span>Vidal Escalante & Asociados</span>
                            <strong>Etica, eficacia y confianza en cada caso</strong>
                        </div>
                    </div>
                </article>

                <article class="story-copy reveal delay-1">
                    <div class="label">Sobre nosotros</div>
                    <h4>Trayectoria y <em>compromiso</em> al servicio de su causa</h4>
                    <p>
                        Mas de 10 años acompañando a empresas, directivos y grupos familiares en asuntos
                        complejos, con una lectura juridica precisa y orientada a negocio.
                    </p>
                    <p>
                        Brindamos soluciones integrales para empresas, instituciones y personas, combinando
                        rigor juridico, vision practica y acompanamiento cercano en cada etapa del proceso.
                    </p>
                    <a class="btn btn-primary" href="{{ route('contacto') }}">Hablar con un abogado</a>
                </article>
            </div>
        </section>

        <section id="contacto" class="contact reveal delay-3">
            <div>
                <h5>Converse con un abogado </h5>
                <p>
                    Agende una reunion confidencial para evaluar su situacion y definir una estrategia legal concreta.
                </p>
            </div>
            <a class="btn btn-primary" href="mailto:info@veaslegal.com">info@veaslegal.com</a>
        </section>
    </main>

    <div class="container">
        <footer class="site-footer">
            <div class="footer-top">
                <div class="footer-brand">
                    <a href="#inicio" class="brand">
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
                        <li><a href="#inicio">Inicio</a></li>
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

    <div class="modal-overlay" id="consultaModal" role="dialog" aria-modal="true" aria-labelledby="consultaModalTitle">
        <div class="modal-card">
            <button type="button" class="modal-close" id="closeConsultaModal" aria-label="Cerrar">&times;</button>
            <div class="label">Consulta virtual</div>
            <h3 id="consultaModalTitle">Agenda tu cita</h3>
            <p>Completa tus datos y te contactaremos por WhatsApp a la brevedad.</p>
            <form id="consultaForm">
                <div class="modal-field">
                    <label for="consultaNombre">Nombre completo</label>
                    <input type="text" id="consultaNombre" name="nombre" required autocomplete="name">
                </div>
                <div class="modal-fields-row">
                    <div class="modal-field">
                        <label for="consultaDepartamento">Departamento</label>
                        <select id="consultaDepartamento" name="departamento">
                            <option value="">Seleccione una opcion</option>
                            <option>La Paz</option>
                            <option>Santa Cruz</option>
                            <option>Cochabamba</option>
                            <option>Oruro</option>
                            <option>Potosi</option>
                            <option>Chuquisaca</option>
                            <option>Tarija</option>
                            <option>Beni</option>
                            <option>Pando</option>
                        </select>
                    </div>
                    <div class="modal-field">
                        <label for="consultaEmail">Email (opcional)</label>
                        <input type="email" id="consultaEmail" name="email" autocomplete="email">
                    </div>
                </div>
                <div class="modal-fields-row">
                    <div class="modal-field">
                        <label for="consultaModalidad">Modalidad</label>
                        <select id="consultaModalidad" name="modalidad">
                            <option value="">Seleccione una opcion</option>
                            <option>Virtual</option>
                            <option>Presencial</option>
                        </select>
                    </div>
                    <div class="modal-field">
                        <label for="consultaFecha">Fecha de consulta</label>
                        <input type="datetime-local" id="consultaFecha" name="fecha">
                    </div>
                </div>
                <div class="modal-field">
                    <label for="consultaDescripcion">Descripcion de tu caso</label>
                    <textarea id="consultaDescripcion" name="descripcion" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar por WhatsApp</button>
            </form>
        </div>
    </div>
</div>
<script>
    (function () {
        var heroTitle = document.getElementById('heroTitle');
        var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        var fullText = heroTitle ? heroTitle.textContent : '';

        function typeTitle() {
            if (!heroTitle) {
                return;
            }

            if (reduceMotion) {
                heroTitle.textContent = fullText;
                return;
            }

            heroTitle.textContent = '';
            var textNode = document.createTextNode('');
            var cursor = document.createElement('span');
            cursor.className = 'typed-cursor';
            cursor.textContent = '|';
            heroTitle.appendChild(textNode);
            heroTitle.appendChild(cursor);

            var i = 0;
            (function typeChar() {
                if (i >= fullText.length) {
                    heroTitle.classList.add('is-done');
                    return;
                }

                textNode.textContent += fullText.charAt(i);
                i++;
                setTimeout(typeChar, 38);
            })();
        }

        if (reduceMotion) {
            typeTitle();
            return;
        }

        var revealNodes = Array.from(document.querySelectorAll('.reveal'));

        if (!('IntersectionObserver' in window)) {
            revealNodes.forEach(function (node) {
                node.classList.add('is-visible');
            });

            typeTitle();
            return;
        }

        var heroTyped = false;

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                entry.target.classList.toggle('is-visible', entry.isIntersecting);

                if (entry.isIntersecting && heroTitle && !heroTyped && entry.target.contains(heroTitle)) {
                    heroTyped = true;
                    typeTitle();
                }
            });
        }, {
            threshold: 0.16,
            rootMargin: '0px 0px -8% 0px'
        });

        revealNodes.forEach(function (node) {
            observer.observe(node);
        });
    })();

    (function () {
        var whatsappNumber = '59163540423';
        var modal = document.getElementById('consultaModal');
        var openBtn = document.getElementById('openConsultaModal');
        var closeBtn = document.getElementById('closeConsultaModal');
        var form = document.getElementById('consultaForm');
        var lastFocused = null;

        if (!modal || !openBtn || !form) {
            return;
        }

        function openModal() {
            lastFocused = document.activeElement;
            modal.classList.add('is-open');
            document.body.style.overflow = 'hidden';
            var firstField = document.getElementById('consultaNombre');
            if (firstField) {
                firstField.focus();
            }
        }

        function closeModal() {
            modal.classList.remove('is-open');
            document.body.style.overflow = '';
            if (lastFocused && typeof lastFocused.focus === 'function') {
                lastFocused.focus();
            }
        }

        openBtn.addEventListener('click', openModal);
        closeBtn.addEventListener('click', closeModal);

        modal.addEventListener('click', function (event) {
            if (event.target === modal) {
                closeModal();
            }
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && modal.classList.contains('is-open')) {
                closeModal();
            }
        });

        function formatFecha(value) {
            if (!value) {
                return '';
            }

            var parts = value.split('T');
            var dateParts = parts[0] ? parts[0].split('-') : [];
            var time = parts[1] || '';

            if (dateParts.length !== 3) {
                return value;
            }

            var dia = dateParts[2];
            var mes = dateParts[1];

            return time ? dia + '/' + mes + ', ' + time + ' hrs' : dia + '/' + mes;
        }

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            var getValue = function (id) {
                var field = document.getElementById(id);
                return field && field.value ? field.value.trim() : '';
            };

            var nombre = getValue('consultaNombre') || 'No especificado';
            var departamento = getValue('consultaDepartamento') || 'No especificado';
            var email = getValue('consultaEmail') || 'No especificado';
            var modalidad = getValue('consultaModalidad') || 'No especificada';
            var fecha = formatFecha(getValue('consultaFecha')) || 'No especificada';
            var descripcion = getValue('consultaDescripcion') || 'Sin detalle adicional';

            var mensaje = [
                'Hola, quiero agendar una consulta virtual.',
                '',
                'Nombre completo: ' + nombre,
                'Departamento: ' + departamento,
                'Email: ' + email,
                'Modalidad: ' + modalidad,
                'Fecha de consulta: ' + fecha,
                'Descripcion de mi caso: ' + descripcion
            ].join('\n');

            window.open('https://wa.me/' + whatsappNumber + '?text=' + encodeURIComponent(mensaje), '_blank', 'noopener');

            form.reset();
            closeModal();
        });
    })();
</script>
</body>
</html>
