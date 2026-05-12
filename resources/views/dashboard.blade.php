<!-- <x-layouts::app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div>
</x-layouts::app> -->

@extends('layouts.app')

@section('content')
<div class="dashboard-container" style="max-width: 1200px; margin: 0 auto; padding: 2rem 1.5rem;">
    
    <!-- Encabezado con saludo -->
    <div class="welcome-section" style="margin-bottom: 2.5rem;">
        <h2 class="welcome-title" style="font-size: 2rem; font-weight: 700; color: #FAF9F6; font-family: 'Bricolage Grotesque', sans-serif; margin-bottom: 0.5rem;">
            HI, it's me 
        </h2>
        <p class="welcome-subtitle" style="font-size: 1rem; color: rgba(250, 249, 246, 0.7); font-family: 'Bricolage Grotesque', sans-serif;">
            ¿Qué te gustaría practicar hoy?
        </p>
    </div>

    <!-- Grid de tarjetas principales - 2 columnas en móvil, 4 en desktop -->
    <div class="cards-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-bottom: 3rem;">
        
        <!-- Tarjeta: Análisis de pronunciación -->
        <a href="/niveles" class="feature-card" style="
            background: linear-gradient(135deg, rgba(228, 0, 124, 0.15) 0%, rgba(228, 0, 124, 0.05) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(228, 0, 124, 0.3);
            border-radius: 1.5rem;
            padding: 1.75rem;
            text-decoration: none;
            transition: all 0.3s ease;
            display: block;
            position: relative;
            overflow: hidden;
        ">
            <div class="card-icon" style="font-size: 2.5rem; margin-bottom: 1rem;">🎙️</div>
            <h3 class="card-title" style="font-size: 1.35rem; font-weight: 700; color: #FAF9F6; font-family: 'Bricolage Grotesque', sans-serif; margin-bottom: 0.75rem;">
                Practica de pronunciación
            </h3>
            <p class="card-description" style="font-size: 0.9rem; color: rgba(250, 249, 246, 0.7); line-height: 1.5; font-family: 'Bricolage Grotesque', sans-serif;">
                Un modelo ASR analiza tu voz y detecta errores en tu pronunciación al instante.
            </p>
            <div class="card-arrow" style="margin-top: 1rem; color: #E4007C; font-size: 0.9rem; display: flex; align-items: center; gap: 0.25rem;">
                <span>Explorar</span>
                <span style="transition: transform 0.2s ease;">→</span>
            </div>
            <div class="card-glow" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: radial-gradient(circle at 30% 20%, rgba(228, 0, 124, 0.1), transparent); pointer-events: none;"></div>
        </a>

        <!-- Tarjeta: Lecciones personalizadas -->
        <a href="/lecciones" class="feature-card" style="
            background: linear-gradient(135deg, rgba(228, 0, 124, 0.15) 0%, rgba(228, 0, 124, 0.05) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(228, 0, 124, 0.3);
            border-radius: 1.5rem;
            padding: 1.75rem;
            text-decoration: none;
            transition: all 0.3s ease;
            display: block;
            position: relative;
            overflow: hidden;
        ">
            <div class="card-icon" style="font-size: 2.5rem; margin-bottom: 1rem;">📚</div>
            <h3 class="card-title" style="font-size: 1.35rem; font-weight: 700; color: #FAF9F6; font-family: 'Bricolage Grotesque', sans-serif; margin-bottom: 0.75rem;">
                Niveles
            </h3>
            <p class="card-description" style="font-size: 0.9rem; color: rgba(250, 249, 246, 0.7); line-height: 1.5; font-family: 'Bricolage Grotesque', sans-serif;">
                Se adaptan los niveles a tus errores para mejorar tu pronunciación.
            </p>
            <div class="card-arrow" style="margin-top: 1rem; color: #E4007C; font-size: 0.9rem; display: flex; align-items: center; gap: 0.25rem;">
                <span>Explorar</span>
                <span style="transition: transform 0.2s ease;">→</span>
            </div>
            <div class="card-glow" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: radial-gradient(circle at 70% 80%, rgba(228, 0, 124, 0.1), transparent); pointer-events: none;"></div>
        </a>

        <!-- Tarjeta: Progreso de pronunciación -->
        <a href="/progreso" class="feature-card" style="
            background: linear-gradient(135deg, rgba(228, 0, 124, 0.15) 0%, rgba(228, 0, 124, 0.05) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(228, 0, 124, 0.3);
            border-radius: 1.5rem;
            padding: 1.75rem;
            text-decoration: none;
            transition: all 0.3s ease;
            display: block;
            position: relative;
            overflow: hidden;
        ">
            <div class="card-icon" style="font-size: 2.5rem; margin-bottom: 1rem;">📈</div>
            <h3 class="card-title" style="font-size: 1.35rem; font-weight: 700; color: #FAF9F6; font-family: 'Bricolage Grotesque', sans-serif; margin-bottom: 0.75rem;">
                Progreso de pronunciación
            </h3>
            <p class="card-description" style="font-size: 0.9rem; color: rgba(250, 249, 246, 0.7); line-height: 1.5; font-family: 'Bricolage Grotesque', sans-serif;">
                Sigue tu mejora en pronunciación con estadísticas claras.
            </p>
            <div class="card-arrow" style="margin-top: 1rem; color: #E4007C; font-size: 0.9rem; display: flex; align-items: center; gap: 0.25rem;">
                <span>Explorar</span>
                <span style="transition: transform 0.2s ease;">→</span>
            </div>
            <div class="card-glow" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: radial-gradient(circle at 40% 60%, rgba(228, 0, 124, 0.1), transparent); pointer-events: none;"></div>
        </a>

        <!-- Tarjeta: App Móvil -->
        <a href="/descargar" class="feature-card" style="
            background: linear-gradient(135deg, rgba(228, 0, 124, 0.15) 0%, rgba(228, 0, 124, 0.05) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(228, 0, 124, 0.3);
            border-radius: 1.5rem;
            padding: 1.75rem;
            text-decoration: none;
            transition: all 0.3s ease;
            display: block;
            position: relative;
            overflow: hidden;
        ">
            <div class="card-icon" style="font-size: 2.5rem; margin-bottom: 1rem;">📲</div>
            <h3 class="card-title" style="font-size: 1.35rem; font-weight: 700; color: #FAF9F6; font-family: 'Bricolage Grotesque', sans-serif; margin-bottom: 0.75rem;">
                App Móvil
            </h3>
            <p class="card-description" style="font-size: 0.9rem; color: rgba(250, 249, 246, 0.7); line-height: 1.5; font-family: 'Bricolage Grotesque', sans-serif;">
                Descarga nuestra aplicación y practica desde cualquier lugar.
            </p>
            <div class="card-arrow" style="margin-top: 1rem; color: #E4007C; font-size: 0.9rem; display: flex; align-items: center; gap: 0.25rem;">
                <span>Explorar</span>
                <span style="transition: transform 0.2s ease;">→</span>
            </div>
            <div class="card-glow" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: radial-gradient(circle at 80% 30%, rgba(228, 0, 124, 0.1), transparent); pointer-events: none;"></div>
        </a>
    </div>

    <!-- Sección adicional: Consejo del día o estadísticas rápidas -->
    <div class="motivation-section" style="
        background: rgba(228, 0, 124, 0.08);
        border-radius: 1.5rem;
        padding: 1.5rem;
        border: 1px solid rgba(228, 0, 124, 0.2);
        text-align: center;
    ">
        <div class="motivation-icon" style="font-size: 2rem; margin-bottom: 0.75rem;">✨</div>
        <p class="motivation-text" style="font-size: 0.95rem; color: rgba(250, 249, 246, 0.8); font-family: 'Bricolage Grotesque', sans-serif;">
            "La práctica constante es la clave para una pronunciación perfecta. ¡Sigue así!"
        </p>
    </div>
</div>

<style>
    /* Hover effects para tarjetas */
    .feature-card:hover {
        transform: translateY(-6px);
        border-color: rgba(228, 0, 124, 0.6);
        box-shadow: 0 20px 35px -12px rgba(228, 0, 124, 0.25);
    }
    
    .feature-card:hover .card-arrow span:last-child {
        transform: translateX(5px);
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .dashboard-container {
            padding: 1.5rem 1rem;
        }
        
        .welcome-title {
            font-size: 1.75rem;
        }
        
        .feature-card {
            padding: 1.25rem;
        }
        
        .card-title {
            font-size: 1.2rem;
        }
        
        .card-description {
            font-size: 0.85rem;
        }
    }
    
    @media (max-width: 550px) {
        .cards-grid {
            grid-template-columns: 1fr;
            gap: 1rem;
        }
    }
</style>
@endsection