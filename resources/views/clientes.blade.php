@extends('layouts.section')

@section('title', 'Clientes | Vidal Escalante & Asociados')

@section('content')
    <style>
        .clients-hero {
            border: none;
            background: none;
            box-shadow: none;
            padding: 0;
            margin-bottom: 1.8rem;
            text-align: center;
        }

        .clients-hero .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--gold-bright);
            font-size: 0.76rem;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            margin-bottom: 0.6rem;
        }

        .clients-hero .eyebrow::before,
        .clients-hero .eyebrow::after {
            content: "";
            width: 22px;
            height: 1px;
            background: rgba(239, 181, 72, 0.5);
        }

        .clients-hero h1 {
            margin-bottom: 0.7rem;
        }

        .clients-hero p {
            color: var(--text-soft);
            line-height: 1.7;
            max-width: 56ch;
            margin: 0 auto;
        }

        .clients-page {
            display: grid;
            gap: 1.8rem;
        }

        .clients-intro {
            display: grid;
            grid-template-columns: minmax(0, 1.35fr) minmax(280px, 0.65fr);
            gap: 1.6rem;
            align-items: stretch;
        }

        .clients-summary {
            display: grid;
            gap: 0.95rem;
            padding-right: 0.8rem;
        }

        .clients-summary p {
            color: var(--text-main);
            line-height: 1.7;
            font-size: 1.02rem;
            max-width: 64ch;
        }

        .client-values {
            display: grid;
            gap: 0.9rem;
            align-content: start;
            padding: 0.2rem 0 0;
        }

        .client-values h3 {
            margin: 0;
            color: #f4dfaf;
            font-family: "Cinzel", serif;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            font-size: 1rem;
        }

        .client-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 0.6rem;
        }

        .client-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.5rem 0.75rem;
            border-radius: 999px;
            border: 1px solid rgba(239, 181, 72, 0.2);
            background: rgba(11, 15, 22, 0.35);
            color: #efe6d3;
            font-size: 0.92rem;
            transition: border-color 0.22s ease, background 0.22s ease, transform 0.22s ease;
        }

        .client-pill:hover {
            border-color: rgba(239, 181, 72, 0.5);
            background: rgba(217, 143, 24, 0.12);
            transform: translateY(-1px);
        }

        .client-pill svg {
            width: 15px;
            height: 15px;
            color: var(--gold-bright);
            flex-shrink: 0;
        }

        .client-note {
            margin: 0;
            padding-top: 0.2rem;
            color: rgba(240, 237, 231, 0.82);
            line-height: 1.6;
            font-size: 0.96rem;
        }

        .clients-divider {
            height: 1px;
            border: 0;
            background: linear-gradient(90deg, rgba(239, 181, 72, 0.05), rgba(239, 181, 72, 0.45), rgba(239, 181, 72, 0.05));
        }

        .clients-showcase {
            display: grid;
            gap: 1.15rem;
        }

        .clients-gallery {
            display: grid;
            gap: 1.1rem;
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .client-logo {
            aspect-ratio: 4 / 3;
            display: grid;
            place-items: center;
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            background: rgba(247, 244, 238, 0.97);
            border: 1px solid rgba(239, 181, 72, 0.28);
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.35);
            padding: 1rem;
            transition: transform 220ms ease, box-shadow 220ms ease, border-color 220ms ease;
        }

        .client-logo::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 20px;
            background: radial-gradient(circle at 30% 0%, rgba(239, 181, 72, 0.22), rgba(12, 15, 20, 0));
            opacity: 0;
            transform: scale(0.92);
            transition: opacity 220ms ease, transform 220ms ease;
            pointer-events: none;
        }

        .client-logo:hover {
            transform: translateY(-6px);
            border-color: rgba(239, 181, 72, 0.6);
            box-shadow: 0 22px 44px rgba(0, 0, 0, 0.45), 0 0 0 3px rgba(239, 181, 72, 0.14);
        }

        .client-logo img {
            max-width: 88%;
            max-height: 110px;
            width: auto;
            height: auto;
            object-fit: contain;
            border-radius: 10px;
            transition: transform 220ms ease, filter 220ms ease;
            position: relative;
            z-index: 1;
        }

        .client-logo:hover::before {
            opacity: 1;
            transform: scale(1);
        }

        .client-logo:hover img {
            transform: scale(1.06);
        }

        .client-tag {
            position: absolute;
            top: 0.7rem;
            left: 0.7rem;
            z-index: 1;
            margin: 0;
            padding: 0.4rem 0.65rem;
            border-radius: 999px;
            background: rgba(11, 14, 18, 0.55);
            border: 1px solid rgba(239, 181, 72, 0.14);
            color: rgba(243, 234, 216, 0.9);
            font-size: 0.7rem;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .section-heading {
            display: grid;
            gap: 0.45rem;
        }

        .section-kicker {
            display: flex;
            align-items: center;
            gap: 0.7rem;
            color: var(--gold-bright);
            font-weight: 700;
            font-size: 0.8rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 0.3rem;
        }

        .section-kicker::before {
            content: "";
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--gold-bright);
            box-shadow: 0 0 10px 2px rgba(239, 181, 72, 0.55);
            flex-shrink: 0;
        }

        .section-kicker::after {
            content: "";
            flex: 1;
            height: 1px;
            background: linear-gradient(90deg, rgba(239, 181, 72, 0.35), transparent);
        }

        .section-heading h2 {
            margin: 0;
            font-size: clamp(1.35rem, 2.7vw, 2rem);
        }

        .section-heading p {
            margin: 0;
            color: rgba(240, 237, 231, 0.72);
            line-height: 1.6;
        }

        @media (max-width: 980px) {
            .clients-intro {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .clients-summary {
                padding-right: 0;
            }

            .clients-gallery {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 560px) {
            .clients-gallery {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <section class="hero clients-hero">
        <span class="eyebrow">Confianza construida en el tiempo</span>
        <h1>Clientes</h1>
    </section>

    <section class="clients-page">
        <div class="clients-intro">
            <article class="clients-summary">
                <div class="section-heading">
                    <span class="section-kicker">Quienes confian en nosotros</span>
                    <h2>Perfil de clientes</h2>
                    <p>Una relación de trabajo enfocada en confianza, criterio y respuesta oportuna.</p>
                </div>
                <p>
                    Trabajamos con compañías nacionales e internacionales en sectores industriales,
                    comerciales y de servicios, así como con instituciones de salud y entidades privadas.
                </p>
            </article>

            <aside class="client-values">
                <h3>Lo que valoran de nosotros</h3>
                <div class="client-pills" aria-label="Atributos del servicio">
                    <span class="client-pill">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 3l7 3v6c0 4.5-3 8-7 9-4-1-7-4.5-7-9V6z"></path>
                        </svg>
                        Confidencialidad
                    </span>
                    <span class="client-pill">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="8.5"></circle>
                            <circle cx="12" cy="12" r="4.2"></circle>
                            <circle cx="12" cy="12" r="0.6" fill="currentColor"></circle>
                        </svg>
                        Estrategia
                    </span>
                    <span class="client-pill">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 17l5-5 4 4 8-9"></path>
                            <path d="M15 7h5v5"></path>
                        </svg>
                        Seguimiento
                    </span>
                    <span class="client-pill">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 3v18"></path>
                            <path d="M5 7h4l-2-4-2 4z"></path>
                            <path d="M15 7h4l-2-4-2 4z"></path>
                            <path d="M3 7h6M15 7h6"></path>
                            <path d="M3 7c0 2 1.5 3.5 3 3.5S9 9 9 7"></path>
                            <path d="M15 7c0 2 1.5 3.5 3 3.5s3-1.5 3-3.5"></path>
                            <path d="M8 21h8"></path>
                        </svg>
                        Criterio jurídico
                    </span>
                    <span class="client-pill">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M13 2 4 14h6l-1 8 9-12h-6l1-8z"></path>
                        </svg>
                        Respuesta ágil
                    </span>
                </div>
                <p class="client-note">
                    Cada cliente requiere una lectura distinta del problema. Por eso priorizamos soluciones
                    claras, comunicación directa y una ejecución ordenada.
                </p>
            </aside>
        </div>

        <hr class="clients-divider" aria-hidden="true">

        <article class="clients-showcase">
            <div class="section-heading">
                <span class="section-kicker">Cartera de clientes</span>
                <h2>Empresas que confían en nosotros</h2>
                <p>Una selección visual de aliados y referencias que forman parte de nuestra trayectoria.</p>
            </div>

            <div class="clients-gallery" aria-label="Logotipos de clientes">
                <figure class="client-logo">
                    <span class="client-tag">YPFB</span>
                    <img src="{{ asset('Imagenes/Clientes/ypfb (1).png') }}" alt="Cliente YPFB" loading="lazy">
                </figure>
                <figure class="client-logo">
                    <span class="client-tag">San Jorge S.R.L.</span>
                    <img src="{{ asset('Imagenes/Clientes/ypfb (2).png') }}" alt="Cliente San Jorge S.R.L." loading="lazy">
                </figure>
                <figure class="client-logo">
                    <span class="client-tag">Autokorp</span>
                    <img src="{{ asset('Imagenes/Clientes/ypfb (3).png') }}" alt="Cliente Autokorp" loading="lazy">
                </figure>
                <figure class="client-logo">
                    <span class="client-tag">Cliente</span>
                    <img src="{{ asset('Imagenes/Clientes/ypfb (4).png') }}" alt="Cliente corporativo" loading="lazy">
                </figure>
                <figure class="client-logo">
                    <span class="client-tag">Cliente</span>
                    <img src="{{ asset('Imagenes/Clientes/ypfb (5).png') }}" alt="Cliente corporativo" loading="lazy">
                </figure>
                <figure class="client-logo">
                    <span class="client-tag">Mancilla</span>
                    <img src="{{ asset('Imagenes/Clientes/ypfb (6).png') }}" alt="Cliente Mancilla" loading="lazy">
                </figure>
            </div>
        </article>
    </section>
@endsection
