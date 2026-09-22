@extends('layouts.section')

@section('title', 'Nosotros | Vidal Escalante & Asociados')

@section('content')
    <style>
        .team-wrap {
            display: grid;
            gap: 1.4rem;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            gap: 0.7rem;
        }

        .team-card {
            aspect-ratio: 3 / 4;
            border-radius: 6px;
            overflow: hidden;
            border: 1px solid rgba(239, 181, 72, 0.2);
            background: linear-gradient(165deg, rgba(188, 194, 202, 0.35), rgba(153, 161, 172, 0.3));
            display: grid;
            place-items: center;
            color: #f0ede7;
            font-family: "Cinzel", serif;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            font-size: 0.8rem;
            text-align: center;
            padding: 0.8rem;
        }

        .team-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .team-copy {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.3rem;
            border: 1px solid rgba(239, 181, 72, 0.2);
            border-radius: 16px;
            background: rgba(17, 22, 29, 0.78);
            padding: 1.35rem;
        }

        .team-copy p {
            color: var(--text-main);
            line-height: 1.6;
            font-size: 1.05rem;
        }

        @media (max-width: 980px) {
            .team-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        @media (max-width: 740px) {
            .team-grid,
            .team-copy {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <section class="hero">
        <h1>Nosotros</h1>
        <p>Equipo de abogados y procuradores juridicos con experiencia en distintas areas del derecho.</p>
    </section>

    <section class="team-wrap">
        <div class="team-grid" aria-label="Equipo profesional">
            <figure class="team-card">
                <img src="{{ asset('Imagenes/Equipo/dr cris.png') }}" alt="Abogado especialista 1" loading="lazy">
            </figure>
            <figure class="team-card">
                <img src="{{ asset('Imagenes/Equipo/dr jorge.png') }}" alt="Abogado especialista 2" loading="lazy">
            </figure>
            <figure class="team-card">
                <img src="{{ asset('Imagenes/Equipo/thais.png') }}" alt="Abogada especialista 3" loading="lazy">
            </figure>
            <figure class="team-card">
                <img src="{{ asset('Imagenes/Equipo/yesenia.png') }}" alt="Abogada especialista 4" loading="lazy">
            </figure>
            <figure class="team-card">
                <img src="{{ asset('Imagenes/Equipo/yesi.png') }}" alt="Abogada especialista 5" loading="lazy">
            </figure>
        </div>

        <div class="team-copy">
            <p>
                Nuestra plantilla de abogados especialistas en diferentes areas del derecho, garantizan un
                resultado favorable para nuestros clientes. Por eso las personas naturales y juridicas que
                requieren de nuestros servicios sienten que sus procesos estan en buenas manos, la
                experiencia y seriedad que tenemos para trabajar son nuestra carta de presentacion.
            </p>
            <p>
                El equipo de Procuradores Juridicos, esta compuesto por profesionales abogados. Ellos acercan
                a las personas a nuestros servicios.<br><br>
                Gestionan y tramitan procesos en las diferentes dependencias del Estado.
            </p>
        </div>
    </section>
@endsection
