@extends('layouts.section')

@section('title', 'Contacto | Vidal Escalante & Asociados')

@section('content')
    <style>
        .contact-hero {
            border: none;
            background: none;
            box-shadow: none;
            padding: 0;
            margin-bottom: 1.6rem;
            text-align: center;
        }

        .contact-hero h1 {
            margin-bottom: 0;
        }

        .contact-layout {
            margin-top: 1rem;
            display: grid;
            grid-template-columns: 1.3fr 1fr;
            gap: 1rem;
            align-items: start;
        }

        .contact-form-card {
            border: 1px solid rgba(239, 181, 72, 0.2);
            border-radius: 18px;
            background: rgba(17, 22, 29, 0.82);
            padding: 1.3rem;
            box-shadow: 0 22px 48px rgba(0, 0, 0, 0.34);
        }

        .contact-side-stack {
            display: grid;
            gap: 1.6rem;
        }

        .contact-form-card h2,
        .map-block h2 {
            font-family: "Cinzel", serif;
            margin-bottom: 0.75rem;
            font-size: 1.28rem;
        }

        .contact-strip {
            display: flex;
            overflow: hidden;
            margin: 0.6rem 0 1.8rem;
            -webkit-mask-image: linear-gradient(90deg, transparent, #000 6%, #000 94%, transparent);
            mask-image: linear-gradient(90deg, transparent, #000 6%, #000 94%, transparent);
        }

        .contact-strip-track {
            display: flex;
            flex: 0 0 auto;
            gap: 2.4rem;
            padding-right: 2.4rem;
            animation: contact-strip-scroll 22s linear infinite;
        }

        .contact-strip:hover .contact-strip-track {
            animation-play-state: paused;
        }

        @keyframes contact-strip-scroll {
            from { transform: translateX(0); }
            to { transform: translateX(-100%); }
        }

        .contact-strip-track .contact-info-item {
            align-items: center;
            gap: 0.65rem;
            white-space: nowrap;
            border-bottom: none;
            padding-bottom: 0;
        }

        .contact-strip-track .contact-info-icon {
            width: 34px;
            height: 34px;
        }

        .contact-strip-track .info-label {
            margin-bottom: 0.1rem;
        }

        .contact-strip-track .contact-info-item p {
            white-space: nowrap;
        }

        @media (prefers-reduced-motion: reduce) {
            .contact-strip-track {
                animation: none !important;
            }

            .contact-strip {
                overflow-x: auto;
            }
        }

        .contact-info-item {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            padding-bottom: 0.9rem;
            border-bottom: 1px solid rgba(239, 181, 72, 0.12);
        }

        .contact-info-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .contact-info-icon {
            flex-shrink: 0;
            width: 36px;
            height: 36px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            border: 1px solid rgba(239, 181, 72, 0.3);
            color: var(--gold-bright);
        }

        .contact-info-item .info-label {
            display: block;
            color: var(--gold-bright);
            font-size: 0.72rem;
            letter-spacing: 0.07em;
            text-transform: uppercase;
            margin-bottom: 0.2rem;
        }

        .contact-info-item p {
            color: var(--text-soft);
            line-height: 1.5;
            margin: 0;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0.8rem;
        }

        .field {
            display: grid;
            gap: 0.35rem;
        }

        .field.full {
            grid-column: 1 / -1;
        }

        .field label {
            color: #e1d9ca;
            font-size: 0.94rem;
            font-weight: 600;
            letter-spacing: 0.02em;
        }

        .field input,
        .field select,
        .field textarea {
            width: 100%;
            border: 1px solid rgba(239, 181, 72, 0.22);
            border-radius: 10px;
            background: rgba(7, 9, 13, 0.62);
            color: #f0ede7;
            padding: 0.68rem 0.75rem;
            font: inherit;
            outline: none;
            transition: border-color 0.22s ease, box-shadow 0.22s ease;
        }

        .field input:focus,
        .field select:focus,
        .field textarea:focus {
            border-color: rgba(239, 181, 72, 0.64);
            box-shadow: 0 0 0 3px rgba(239, 181, 72, 0.15);
        }

        .field textarea {
            min-height: 110px;
            resize: vertical;
        }

        .form-actions {
            margin-top: 0.95rem;
            display: flex;
            flex-wrap: wrap;
            gap: 0.7rem;
        }

        .btn-primary,
        .btn-secondary {
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.7rem 1.05rem;
            border-radius: 10px;
            font-weight: 700;
            letter-spacing: 0.01em;
            transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
        }

        .btn-primary {
            background: linear-gradient(145deg, #efb548, #cf8b1e);
            color: #16110a;
            box-shadow: 0 10px 20px rgba(207, 139, 30, 0.28);
        }

        .btn-secondary {
            border: 1px solid rgba(239, 181, 72, 0.3);
            color: #f0ede7;
            background: rgba(13, 18, 25, 0.65);
        }

        .btn-primary:hover,
        .btn-secondary:hover {
            transform: translateY(-1px);
        }

        .map-block p {
            color: var(--text-soft);
            line-height: 1.65;
        }

        .map-frame {
            width: 100%;
            min-height: 250px;
            border: 1px solid rgba(239, 181, 72, 0.18);
            border-radius: 14px;
            margin-top: 0.75rem;
        }

        @media (max-width: 900px) {
            .contact-layout {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 640px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <section class="hero contact-hero">
        <h1>Contacto</h1>
    </section>

    <section class="contact-strip" aria-label="Datos de contacto">
        <div class="contact-strip-track">
            <div class="contact-info-item">
                <span class="contact-info-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                        <path d="M3 7l9 6 9-6"></path>
                    </svg>
                </span>
                <div>
                    <span class="info-label">Email</span>
                    <p>info@veaslegal.com</p>
                </div>
            </div>
            <div class="contact-info-item">
                <span class="contact-info-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 11.5a8.5 8.5 0 0 1-12.36 7.57L4 20l1.06-4.44A8.5 8.5 0 1 1 21 11.5z"></path>
                        <path d="M9 10c0 2.5 2.5 5 5 5"></path>
                    </svg>
                </span>
                <div>
                    <span class="info-label">Telefono</span>
                    <p>+591 63540423</p>
                </div>
            </div>
            <div class="contact-info-item">
                <span class="contact-info-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="9"></circle>
                        <path d="M12 7v5l3.5 2"></path>
                    </svg>
                </span>
                <div>
                    <span class="info-label">Horario</span>
                    <p>Lunes a Viernes, 9:00 a 18:00 hs</p>
                </div>
            </div>
            <div class="contact-info-item">
                <span class="contact-info-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="13" rx="1.5"></rect>
                        <line x1="8" y1="21" x2="16" y2="21"></line>
                        <line x1="12" y1="17" x2="12" y2="21"></line>
                    </svg>
                </span>
                <div>
                    <span class="info-label">Modalidad</span>
                    <p>Reuniones presenciales y virtuales.</p>
                </div>
            </div>
            <div class="contact-info-item">
                <span class="contact-info-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 21s-7-6.5-7-11a7 7 0 0 1 14 0c0 4.5-7 11-7 11z"></path>
                        <circle cx="12" cy="10" r="2.4"></circle>
                    </svg>
                </span>
                <div>
                    <span class="info-label">Ubicacion</span>
                    <p>Mario Flores, esq 100, Santa Cruz de la Sierra</p>
                </div>
            </div>
        </div>
        <div class="contact-strip-track" aria-hidden="true">
            <div class="contact-info-item">
                <span class="contact-info-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                        <path d="M3 7l9 6 9-6"></path>
                    </svg>
                </span>
                <div>
                    <span class="info-label">Email</span>
                    <p>info@veaslegal.com</p>
                </div>
            </div>
            <div class="contact-info-item">
                <span class="contact-info-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 11.5a8.5 8.5 0 0 1-12.36 7.57L4 20l1.06-4.44A8.5 8.5 0 1 1 21 11.5z"></path>
                        <path d="M9 10c0 2.5 2.5 5 5 5"></path>
                    </svg>
                </span>
                <div>
                    <span class="info-label">Telefono</span>
                    <p>+591 63540423</p>
                </div>
            </div>
            <div class="contact-info-item">
                <span class="contact-info-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="9"></circle>
                        <path d="M12 7v5l3.5 2"></path>
                    </svg>
                </span>
                <div>
                    <span class="info-label">Horario</span>
                    <p>Lunes a Viernes, 9:00 a 18:00 hs</p>
                </div>
            </div>
            <div class="contact-info-item">
                <span class="contact-info-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="13" rx="1.5"></rect>
                        <line x1="8" y1="21" x2="16" y2="21"></line>
                        <line x1="12" y1="17" x2="12" y2="21"></line>
                    </svg>
                </span>
                <div>
                    <span class="info-label">Modalidad</span>
                    <p>Reuniones presenciales y virtuales.</p>
                </div>
            </div>
            <div class="contact-info-item">
                <span class="contact-info-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 21s-7-6.5-7-11a7 7 0 0 1 14 0c0 4.5-7 11-7 11z"></path>
                        <circle cx="12" cy="10" r="2.4"></circle>
                    </svg>
                </span>
                <div>
                    <span class="info-label">Ubicacion</span>
                    <p>Mario Flores, esq 100, Santa Cruz de la Sierra</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-layout">
        <article class="contact-form-card">
            <h2>Formulario de consulta</h2>
            <form id="contact-form">
                <div class="form-grid">
                    <div class="field">
                        <label for="nombre">Nombre y apellido</label>
                        <input id="nombre" type="text" name="nombre" placeholder="Ej. Juan Perez">
                    </div>
                    <div class="field">
                        <label for="empresa">Empresa</label>
                        <input id="empresa" type="text" name="empresa" placeholder="Opcional, para entender su contexto">
                    </div>
                    <div class="field">
                        <label for="email">Email corporativo</label>
                        <input id="email" type="email" name="email" placeholder="Personal o corporativo">
                    </div>
                    <div class="field">
                        <label for="area">Area de interes</label>
                        <select id="area" name="area">
                            <option value="">Seleccione una opcion</option>
                            <option>Derecho Corporativo</option>
                            <option>Litigios y Arbitraje</option>
                            <option>Compliance</option>
                            <option>Laboral Empresarial</option>
                            <option>Patrimonio y Sucesiones</option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="fecha">Fecha de consulta</label>
                        <input id="fecha" type="datetime-local" name="fecha">
                    </div>
                    <div class="field">
                        <label for="modalidad">Modalidad</label>
                        <select id="modalidad" name="modalidad">
                            <option value="">Seleccione una opcion</option>
                            <option>Virtual</option>
                            <option>Presencial</option>
                        </select>
                    </div>
                    <div class="field full">
                        <label for="mensaje">Detalle breve de su consulta</label>
                        <textarea id="mensaje" name="mensaje" placeholder="Comparta contexto y objetivos para preparar la reunion."></textarea>
                    </div>
                </div>

                <div class="form-actions">
                    <a id="whatsapp-cta" class="btn-primary" href="https://wa.me/59163540423" target="_blank" rel="noopener noreferrer">
                        Agendar consulta por WhatsApp
                    </a>
                    <a class="btn-secondary" href="mailto:info@veaslegal.com">Enviar por email</a>
                </div>
            </form>
        </article>

        <aside class="contact-side-stack">
            <article class="map-block">
                <h2>Ubicacion del estudio</h2>
                <p>Referencia: Mario Flores, esq 100, Santa Cruz de la Sierra, Bolivia.</p>
                <iframe
                    class="map-frame"
                    src="https://www.google.com/maps?q=Estudio+Juridico+Vidal+-+Escalante+%26+Asociados,+Mario+Flores+esq+100,+Santa+Cruz+de+la+Sierra,+Bolivia&output=embed"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Mapa de ubicacion"
                    aria-label="Mapa de ubicacion"
                    allowfullscreen>
                </iframe>
                <div class="form-actions" style="margin-top: 0.85rem;">
                    <a class="btn-secondary" href="https://maps.app.goo.gl/WLaJxb2ud175njoV6" target="_blank" rel="noopener noreferrer">Abrir ubicacion en Google Maps</a>
                </div>
            </article>
        </aside>
    </section>

    <script>
        (function () {
            const whatsappButton = document.getElementById('whatsapp-cta');
            const form = document.getElementById('contact-form');

            if (!whatsappButton || !form) {
                return;
            }

            whatsappButton.addEventListener('click', function (event) {
                event.preventDefault();

                const getValue = (id) => {
                    const field = document.getElementById(id);
                    return field && field.value ? field.value.trim() : '';
                };

                const formatFecha = (value) => {
                    if (!value) {
                        return '';
                    }

                    const parts = value.split('T');
                    const dateParts = parts[0] ? parts[0].split('-') : [];
                    const time = parts[1] || '';

                    if (dateParts.length !== 3) {
                        return value;
                    }

                    const dia = dateParts[2];
                    const mes = dateParts[1];

                    return time ? dia + '/' + mes + ', ' + time + ' hrs' : dia + '/' + mes;
                };

                const nombre = getValue('nombre') || 'No especificado';
                const empresa = getValue('empresa') || 'No especificado';
                const email = getValue('email') || 'No especificado';
                const area = getValue('area') || 'No especificado';
                const fecha = formatFecha(getValue('fecha')) || 'No especificada';
                const modalidad = getValue('modalidad') || 'No especificada';
                const detalle = getValue('mensaje') || 'Sin detalle adicional';

                const message = [
                    'Hola, quiero agendar una consulta legal con Vidal Escalante & Asociados.',
                    '',
                    'Datos de contacto:',
                    'Nombre: ' + nombre,
                    'Empresa: ' + empresa,
                    'Email: ' + email,
                    'Area de interes: ' + area,
                    'Fecha de consulta: ' + fecha,
                    'Modalidad: ' + modalidad,
                    'Detalle: ' + detalle
                ].join('\n');

                const whatsappUrl = 'https://wa.me/59163540423?text=' + encodeURIComponent(message);
                window.open(whatsappUrl, '_blank', 'noopener,noreferrer');
            });
        })();
    </script>
@endsection
