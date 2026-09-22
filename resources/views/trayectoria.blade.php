@extends('layouts.section')

@section('title', 'Trayectoria | Vidal Escalante & Asociados')

@section('content')
    <style>
        .stack {
            margin-top: 1.1rem;
            gap: 1rem;
        }

        .panel {
            border-radius: 18px;
            border: 1px solid rgba(239, 181, 72, 0.22);
            background:
                linear-gradient(165deg, rgba(17, 22, 29, 0.9), rgba(10, 14, 20, 0.9)),
                radial-gradient(circle at top right, rgba(239, 181, 72, 0.08), transparent 38%);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.22);
        }

        .panel h2 {
            margin-bottom: 0.6rem;
            letter-spacing: 0.02em;
        }

        #hitos ul {
            list-style: none;
            padding-left: 0;
            display: grid;
            gap: 0.7rem;
            margin-top: 0.25rem;
        }

        #hitos li {
            position: relative;
            padding-left: 1rem;
            color: var(--text-main);
            line-height: 1.7;
        }

        #hitos li::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0.72rem;
            width: 0.42rem;
            height: 0.42rem;
            border-radius: 999px;
            background: linear-gradient(145deg, #efb548, #cf8b1e);
            box-shadow: 0 0 0 4px rgba(239, 181, 72, 0.1);
        }

        .trayectoria-submenu {
            margin-top: 1rem;
            display: flex;
            flex-wrap: wrap;
            gap: 0.65rem;
        }

        .trayectoria-submenu a {
            text-decoration: none;
            color: #e9dfcf;
            border: 1px solid rgba(239, 181, 72, 0.28);
            background: rgba(17, 22, 29, 0.72);
            border-radius: 999px;
            padding: 0.45rem 0.9rem;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }

        .trayectoria-submenu a:hover {
            color: #16110a;
            background: linear-gradient(145deg, #efb548, #cf8b1e);
            border-color: transparent;
        }

        .metodo-intro {
            color: var(--text-soft);
            line-height: 1.7;
            margin-bottom: 0.9rem;
        }

        .metodo-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1rem;
        }

        .metodo-item {
            border: 1px solid rgba(239, 181, 72, 0.18);
            border-radius: 14px;
            background: rgba(10, 14, 20, 0.62);
            padding: 1rem;
            transition: transform 180ms ease, border-color 180ms ease, background 180ms ease;
        }

        .metodo-item h3 {
            font-family: "Cinzel", serif;
            font-size: 1.18rem;
            margin-bottom: 0.55rem;
            color: #f2ede3;
        }

        .metodo-item p {
            color: var(--text-soft);
            line-height: 1.7;
        }

        .metodo-item:hover {
            transform: translateY(-3px);
            border-color: rgba(239, 181, 72, 0.36);
            background: rgba(13, 18, 26, 0.82);
        }

        @media (max-width: 780px) {
            .metodo-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <section class="hero">
        <h1>Trayectoria</h1>
        <p>
            Mas de dos decadas construyendo relaciones de confianza con empresas y directivos,
            combinando rigor juridico con lectura estrategica de negocio.
        </p>


    </section>

    <section class="stack">
        <article class="panel" id="hitos">
            <h2>Hitos del Estudio</h2>
            <ul>
                <li>2012: Fundacion del estudio y acompanamiento de la primera cartera industrial.</li>
                <li>2021: Expansion nacional con clientes en diversas regiones.</li>
            </ul>
        </article>
        <article class="panel" id="metodo">
            <h2>Metodo de Trabajo</h2>
            <p class="metodo-intro">
                Cada asunto inicia con un diagnostico legal y una hoja de ruta operativa, con comunicacion
                directa entre el equipo juridico y la direccion de la empresa o institucion.
            </p>
            <div class="metodo-grid">
                <article class="metodo-item">
                    <h3>Especialistas</h3>
                    <p>
                        VIDAL - ESCALANTE & ASOCIADOS cuenta con especialistas en Santa Cruz de la Sierra,
                        junto a co-responsables en Cochabamba, Sucre y La Paz para atencion coordinada.
                    </p>
                </article>
                <article class="metodo-item">
                    <h3>Forma de trabajo</h3>
                    <p>
                        Este esquema permite comunicacion continua entre abogado y cliente, mientras otros
                        profesionales especialistas trabajan de forma paralela para su empresa y/o institucion.
                    </p>
                </article>

                <article class="metodo-item">
                    <h3>Plantilla de trabajo</h3>
                    <p>
                        Nuestra estructura permite asignar un abogado responsable en las instalaciones del
                        cliente, en turnos de lunes a viernes, para seguimiento personalizado de procesos.
                    </p>
                </article>

                <article class="metodo-item">
                    <h3>Asesoria juridica</h3>
                    <p>
                        La asesoria incluye atencion de consultas, conceptos, acompanamiento en negociacion,
                        reestructuracion, conciliacion y tramites ante entes judiciales, administrativos y privados.
                    </p>
                </article>
            </div>
        </article>
    </section>
@endsection
