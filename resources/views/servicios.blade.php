@extends('layouts.section')

@section('title', 'Servicios | Vidal Escalante & Asociados')

@section('content')
    <style>
        .services-legal-grid {
            margin-top: 1rem;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            grid-template-areas:
                "corporativa litigios"
                "laboral regulacion";
            gap: 0.75rem;
        }

        .service-legal-card {
            padding: 0 0 1.3rem;
            border: 1px solid rgba(239, 181, 72, 0.16);
            border-radius: 16px;
            background: linear-gradient(180deg, rgba(9, 15, 26, 0.86), rgba(7, 11, 18, 0.94));
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: transform 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease;
        }
        .service-legal-card::after {
            content: "";
            position: absolute;
            inset: auto 0 0 0;
            height: 2px;
            background: linear-gradient(90deg, rgba(239, 181, 72, 0), rgba(239, 181, 72, 0.85), rgba(239, 181, 72, 0));
            opacity: 0.8;
        }

        .service-legal-card:hover {
            transform: translateY(-3px);
            border-color: rgba(239, 181, 72, 0.35);
            box-shadow: 0 16px 30px rgba(0, 0, 0, 0.28);
        }

        .service-legal-media {
            width: 100%;
            height: 170px;
            overflow: hidden;
            border-bottom: 1px solid rgba(239, 181, 72, 0.2);
        }

        .service-legal-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .service-legal-card:hover .service-legal-media img {
            transform: scale(1.06);
        }

        .service-legal-body {
            padding: 1.3rem 1.1rem 0;
        }

        .service-corporativa {
            grid-area: corporativa;
        }

        .service-litigios {
            grid-area: litigios;
        }

        .service-laboral {
            grid-area: laboral;
        }

        .service-regulacion {
            grid-area: regulacion;
        }

        .service-tag {
            display: inline-flex;
            padding: 0.28rem 0.58rem;
            border-radius: 999px;
            border: 1px solid rgba(239, 181, 72, 0.24);
            color: var(--gold-bright);
            font-size: 0.74rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            margin-bottom: 0.7rem;
        }

        .service-legal-card h3 {
            font-family: "Cinzel", serif;
            font-size: 1.78rem;
            line-height: 1.1;
            text-align: left;
            margin-bottom: 0.5rem;
            color: #f5f0e7;
        }

        .service-legal-divider {
            width: 56px;
            height: 2px;
            margin: 0 0 0.95rem;
            background: linear-gradient(90deg, rgba(239, 181, 72, 0.2), rgba(239, 181, 72, 0.95), rgba(239, 181, 72, 0.2));
        }

        .service-legal-card p {
            color: var(--text-soft);
            line-height: 1.7;
            text-align: left;
            margin-bottom: 1rem;
        }

        .service-legal-card ul {
            list-style: none;
            display: grid;
            gap: 0.45rem;
            padding-left: 0;
        }

        .service-legal-card li {
            color: #d8d0c1;
            line-height: 1.45;
            position: relative;
            padding-left: 1rem;
        }

        .service-legal-card li::before {
            content: "";
            position: absolute;
            top: 0.55rem;
            left: 0;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--gold-bright);
            box-shadow: 0 0 0 3px rgba(239, 181, 72, 0.12);
        }

        .service-detail-link {
            margin-top: 1rem;
            display: inline-flex;
            text-decoration: none;
            color: var(--gold-bright);
            border: 1px solid rgba(239, 181, 72, 0.28);
            border-radius: 999px;
            padding: 0.42rem 0.85rem;
            font-weight: 700;
            font-size: 0.84rem;
            letter-spacing: 0.04em;
            transition: all 0.2s ease;
        }

        .service-detail-link:hover {
            color: #16110a;
            background: linear-gradient(145deg, #efb548, #cf8b1e);
            border-color: transparent;
        }

        .service-details {
            margin-top: 1.25rem;
            display: grid;
            gap: 0.75rem;
        }

        .service-detail-panel {
            border: 1px solid rgba(239, 181, 72, 0.18);
            border-radius: 16px;
            background: rgba(10, 14, 20, 0.78);
            padding: 1.15rem;
            scroll-margin-top: 90px;
        }

        .service-detail-panel h2 {
            font-family: "Cinzel", serif;
            font-size: 1.35rem;
            margin-bottom: 0.4rem;
            color: #f3eee4;
        }

        .service-detail-panel p {
            color: var(--text-soft);
            line-height: 1.7;
        }

        .services-why {
            margin-top: 0.9rem;
            border: 1px solid rgba(239, 181, 72, 0.16);
            border-radius: 18px;
            padding: 1.35rem;
            background: linear-gradient(180deg, rgba(15, 20, 28, 0.82), rgba(9, 13, 19, 0.92));
        }

        .services-why-head {
            text-align: center;
            max-width: 70ch;
            margin: 0 auto 1rem;
        }

        .services-why-head h2 {
            font-family: "Cinzel", serif;
            font-size: clamp(1.55rem, 3vw, 2.2rem);
            color: #f3eee4;
            margin-bottom: 0.35rem;
        }

        .services-why-head p {
            color: var(--text-soft);
            line-height: 1.65;
        }

        .services-why-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 0.75rem;
        }

        .why-card {
            border: 1px solid rgba(239, 181, 72, 0.18);
            border-radius: 14px;
            background: rgba(9, 14, 21, 0.75);
            padding: 1rem;
            box-shadow: 0 10px 24px rgba(0, 0, 0, 0.2);
        }

        .why-icon {
            width: 42px;
            height: 42px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            color: #09111b;
            font-weight: 700;
            background: linear-gradient(145deg, #efb548, #cf8b1e);
            box-shadow: 0 8px 16px rgba(207, 139, 30, 0.26);
            margin-bottom: 0.65rem;
        }

        .why-card h3 {
            font-family: "Cinzel", serif;
            font-size: 1.25rem;
            margin-bottom: 0.35rem;
            color: #f3eee4;
        }

        .why-card p {
            color: var(--text-soft);
            line-height: 1.6;
        }

        @media (max-width: 1150px) {
            .services-legal-grid {
                grid-template-columns: 1fr;
                grid-template-areas:
                    "corporativa"
                    "litigios"
                    "laboral"
                    "regulacion";
            }

            .services-why-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 700px) {
            .services-legal-grid {
                grid-template-columns: 1fr;
            }

            .service-legal-card {
                padding: 1.2rem 1rem;
            }
        }
    </style>

    <section class="services-why">
        <div class="services-why-head">
            <h2>Casos exitosos</h2>
            <p>
                Somos su socio estrategico en gestion legal, comprometidos con excelencia,
                resultados y atencion cercana para cada caso.
            </p>
        </div>

    </section>

    <section class="services-legal-grid">
        <article class="service-legal-card service-corporativa">
            <div class="service-legal-media">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=60" alt="Asesoria Corporativa" loading="lazy">
            </div>
            <div class="service-legal-body">
                <span class="service-tag">Empresas</span>
                <h3>Asesoria Corporativa</h3>
                <div class="service-legal-divider" aria-hidden="true"></div>
                <p>
                    Asistencia legal para decisiones societarias y contractuales con enfoque preventivo.
                </p>
                <ul>
                    <li>Contratacion civil y comercial</li>
                    <li>Estructuracion societaria</li>
                    <li>Cumplimiento contractual</li>
                </ul>
                <a class="service-detail-link" href="{{ route('servicios.asesoria-corporativa') }}">Ver detalles</a>
            </div>
        </article>

        <article class="service-legal-card service-litigios">
            <div class="service-legal-media">
                <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&w=800&q=60" alt="Litigios, Cobranza y Arbitraje" loading="lazy">
            </div>
            <div class="service-legal-body">
                <span class="service-tag">Procesos</span>
                <h3>Litigios, Cobranza y Arbitraje</h3>
                <div class="service-legal-divider" aria-hidden="true"></div>
                <p>
                    Defensa tecnica en conflictos civiles, comerciales y administrativos.
                </p>
                <ul>
                    <li>Cobro de deudas y recuperacion de cartera</li>
                    <li>Procesos ejecutivos y cumplimiento de contrato</li>
                    <li>Controversias con entidades publicas</li>
                </ul>
                <a class="service-detail-link" href="{{ route('servicios.litigios-cobranza-arbitraje') }}">Ver detalles</a>
            </div>
        </article>

        <article class="service-legal-card service-laboral">
            <div class="service-legal-media">
                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=800&q=60" alt="Asesoria Laboral" loading="lazy">
            </div>
            <div class="service-legal-body">
                <span class="service-tag">Laboral</span>
                <h3>Asesoria Laboral</h3>
                <div class="service-legal-divider" aria-hidden="true"></div>
                <p>
                    Gestion laboral preventiva y defensa en conflictos administrativos y judiciales.
                </p>
                <ul>
                    <li>Contratos de trabajo y reglamentos internos</li>
                    <li>Prevencion de contingencias laborales</li>
                    <li>Defensa tecnica en conflictos laborales</li>
                </ul>
                <a class="service-detail-link" href="{{ route('servicios.asesoria-laboral') }}">Ver detalles</a>
            </div>
        </article>

        <article class="service-legal-card service-regulacion">
            <div class="service-legal-media">
                <img src="https://images.unsplash.com/photo-1436450412740-6b988f486c6b?auto=format&fit=crop&w=800&q=60" alt="Regulacion y Derecho Publico" loading="lazy">
            </div>
            <div class="service-legal-body">
                <span class="service-tag">Sector Publico</span>
                <h3>Regulacion y Derecho Publico</h3>
                <div class="service-legal-divider" aria-hidden="true"></div>
                <p>
                    Acompañamiento tecnico en procesos regulatorios, administrativos y constitucionales.
                </p>
                <ul>
                    <li>Procedimientos y recursos administrativos</li>
                    <li>Acciones y controversias constitucionales</li>
                    <li>Analisis jurisprudencial riguroso</li>
                </ul>
                <a class="service-detail-link" href="{{ route('servicios.regulacion-derecho-publico') }}">Ver detalles</a>
            </div>
        </article>
    </section>


@endsection
