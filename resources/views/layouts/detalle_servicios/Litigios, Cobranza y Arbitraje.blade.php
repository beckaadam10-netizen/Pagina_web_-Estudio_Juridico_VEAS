@extends('layouts.section')

@section('title', 'Litigios, Cobranza y Arbitraje | Vidal Escalante & Asociados')

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
			<span class="detail-label">Procesos</span>
			<h1>Litigios, Cobranza y Arbitraje</h1>
			<p>
				Defensa estrategica para controversias civiles, comerciales y administrativas,
				orientada a resultados concretos y proteccion integral del cliente.
			</p>
		</article>

		<section class="detail-grid">
			<article class="detail-panel">
				<h2>Que incluye el servicio</h2>
				<p>
					Diseñamos estrategias procesales con foco en recuperacion efectiva,
					cumplimiento de obligaciones y defensa tecnica en sede judicial y arbitral.
				</p>

				<div class="detail-cards">
					<article class="detail-card">
						<h3>Cobranza de cartera</h3>
						<p>Estrategias de recuperacion extrajudicial y judicial de creditos.</p>
					</article>
					<article class="detail-card">
						<h3>Procesos ejecutivos</h3>
						<p>Acciones para exigir cumplimiento contractual y obligaciones exigibles.</p>
					</article>
					<article class="detail-card">
						<h3>Arbitraje comercial</h3>
						<p>Representacion integral en tribunales arbitrales nacionales y regionales.</p>
					</article>
					<article class="detail-card">
						<h3>Controversias publicas</h3>
						<p>Defensa frente a disputas con entidades estatales y administrativas.</p>
					</article>
				</div>
			</article>

			<article class="detail-panel">
				<h2>Proceso de trabajo</h2>
				<ul class="process-list">
					<li><span class="process-num">01</span> Evaluacion de antecedentes y pruebas clave.</li>
					<li><span class="process-num">02</span> Diseñó de estrategia procesal y objetivos.</li>
					<li><span class="process-num">03</span> Ejecucion de acciones judiciales/arbitrales.</li>
					<li><span class="process-num">04</span> Seguimiento y cierre con enfoque en resultado.</li>
				</ul>
			</article>
		</section>

		<article class="detail-cta">
			<div>
				<h3>Necesita defensa inmediata</h3>
				<p>Conversemos para definir una estrategia procesal firme y oportuna.</p>
			</div>
			<a href="{{ route('contacto') }}">Solicitar consulta</a>
		</article>
	</section>
@endsection

