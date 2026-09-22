@extends('layouts.section')

@section('title', 'Regulacion y Derecho Publico | Vidal Escalante & Asociados')

@section('content')
	<style>
		.service-detail-shell {
			display: grid;
			gap: 0.95rem;
		}

		.detail-hero {
			border: 1px solid rgba(239, 181, 72, 0.2);
			border-radius: 22px;
			padding: 1.6rem;
			background: linear-gradient(155deg, rgba(17, 22, 29, 0.9), rgba(8, 12, 18, 0.96));
			box-shadow: 0 24px 56px rgba(0, 0, 0, 0.42);
			position: relative;
			overflow: hidden;
		}

		.detail-hero::before {
			content: "";
			position: absolute;
			top: -110px;
			right: -110px;
			width: 280px;
			height: 280px;
			background: radial-gradient(circle, rgba(239, 181, 72, 0.24) 0%, rgba(239, 181, 72, 0) 72%);
			pointer-events: none;
		}

		.detail-label {
			display: inline-flex;
			border: 1px solid rgba(239, 181, 72, 0.3);
			border-radius: 999px;
			padding: 0.32rem 0.72rem;
			font-size: 0.76rem;
			font-weight: 700;
			letter-spacing: 0.08em;
			text-transform: uppercase;
			color: var(--gold-bright);
			margin-bottom: 0.7rem;
		}

		.detail-hero h1 {
			font-family: "Cinzel", serif;
			font-size: clamp(2rem, 5vw, 3.2rem);
			margin-bottom: 0.55rem;
			line-height: 1.05;
			max-width: 16ch;
		}

		.detail-hero p {
			color: var(--text-soft);
			line-height: 1.75;
			max-width: 66ch;
		}

		.detail-grid {
			display: grid;
			grid-template-columns: 1.15fr 0.85fr;
			gap: 0.95rem;
		}

		.detail-panel {
			border: 1px solid rgba(239, 181, 72, 0.18);
			border-radius: 18px;
			background: rgba(11, 16, 23, 0.8);
			padding: 1.25rem;
		}

		.detail-panel h2 {
			font-family: "Cinzel", serif;
			font-size: 1.45rem;
			margin-bottom: 0.6rem;
		}

		.detail-panel p {
			color: var(--text-soft);
			line-height: 1.72;
		}

		.detail-cards {
			margin-top: 0.85rem;
			display: grid;
			grid-template-columns: repeat(2, minmax(0, 1fr));
			gap: 0.75rem;
		}

		.detail-card {
			border: 1px solid rgba(239, 181, 72, 0.2);
			border-radius: 14px;
			padding: 0.9rem;
			background: linear-gradient(170deg, rgba(15, 20, 29, 0.9), rgba(8, 12, 18, 0.98));
		}

		.detail-card h3 {
			font-size: 1rem;
			color: #f1eadf;
			margin-bottom: 0.35rem;
		}

		.detail-card p {
			color: #c5bcad;
			line-height: 1.62;
		}

		.process-list {
			list-style: none;
			display: grid;
			gap: 0.55rem;
			padding-left: 0;
		}

		.process-list li {
			border: 1px solid rgba(239, 181, 72, 0.2);
			border-radius: 12px;
			padding: 0.6rem 0.75rem;
			background: rgba(9, 13, 19, 0.72);
			color: var(--text-soft);
		}

		.process-num {
			color: var(--gold-bright);
			font-weight: 700;
			margin-right: 0.5rem;
		}

		.detail-cta {
			border: 1px solid rgba(239, 181, 72, 0.24);
			border-radius: 18px;
			padding: 1.2rem;
			background: linear-gradient(150deg, rgba(18, 23, 31, 0.94), rgba(11, 15, 22, 0.98));
			display: flex;
			align-items: center;
			justify-content: space-between;
			gap: 0.75rem;
			flex-wrap: wrap;
		}

		.detail-cta h3 {
			font-family: "Cinzel", serif;
			font-size: 1.35rem;
			margin-bottom: 0.25rem;
		}

		.detail-cta p {
			color: var(--text-soft);
			line-height: 1.65;
		}

		.detail-cta a {
			text-decoration: none;
			font-weight: 700;
			color: #181209;
			background: linear-gradient(145deg, #efb548, #cf8b1e);
			border-radius: 999px;
			padding: 0.7rem 1.1rem;
			box-shadow: 0 12px 24px rgba(207, 139, 30, 0.28);
		}

		@media (max-width: 900px) {
			.detail-grid,
			.detail-cards {
				grid-template-columns: 1fr;
			}
		}
	</style>

	<section class="service-detail-shell">
		<article class="detail-hero">
			<span class="detail-label">Sector Publico</span>
			<h1>Regulacion y Derecho Publico</h1>
			<p>
				Asesoramiento tecnico en asuntos regulatorios, administrativos y constitucionales,
				con defensa especializada para escenarios de alta complejidad.
			</p>
		</article>

		<section class="detail-grid">
			<article class="detail-panel">
				<h2>Que incluye el servicio</h2>
				<p>
					Representamos a empresas e instituciones frente a autoridades publicas,
					con estrategia juridica basada en analisis normativo y jurisprudencial.
				</p>

				<div class="detail-cards">
					<article class="detail-card">
						<h3>Recursos administrativos</h3>
						<p>Impugnacion tecnica de actos, sanciones y resoluciones estatales.</p>
					</article>
					<article class="detail-card">
						<h3>Acciones constitucionales</h3>
						<p>Defensa de derechos y garantias ante tribunales competentes.</p>
					</article>
					<article class="detail-card">
						<h3>Contratacion publica</h3>
						<p>Asistencia en procesos con el Estado y cumplimiento regulatorio.</p>
					</article>
					<article class="detail-card">
						<h3>Analisis jurisprudencial</h3>
						<p>Construccion de argumentos con soporte doctrinal y precedentes.</p>
					</article>
				</div>
			</article>

			<article class="detail-panel">
				<h2>Proceso de trabajo</h2>
				<ul class="process-list">
					<li><span class="process-num">01</span> Analisis del marco regulatorio aplicable.</li>
					<li><span class="process-num">02</span> Evaluacion de riesgo juridico institucional.</li>
					<li><span class="process-num">03</span> Diseño de defensa y vias de actuacion.</li>
					<li><span class="process-num">04</span> Ejecucion y seguimiento ante autoridades.</li>
				</ul>
			</article>
		</section>

		<article class="detail-cta">
			<div>
				<h3>Necesita respaldo en derecho publico</h3>
				<p>Coordine una consulta para evaluar su caso con enfoque tecnico y estrategico.</p>
			</div>
			<a href="{{ route('contacto') }}">Solicitar consulta</a>
		</article>
	</section>
@endsection

