<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alebringue | Domina tu pronunciación de inglés</title>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..28,300;12..28,400;12..28,500;12..28,600;12..28,700;12..28,800&family=Bungee&display=swap" rel="stylesheet">
    <!-- TailwindCSS v3 CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'aleb-purple': '#6B46C1',
                        'aleb-purple-dark': '#553C9A',
                        'aleb-purple-darker': '#44337A',
                    }
                }
            }
        }
    </script>
    <style>
        /* Fondo degradado morado */
        .bg-gradient-purple {
            background: linear-gradient(135deg, #c2006b 0%, #b535b5 50%, #c2006b 100%);
        }

        .brand-name {
      font-family: 'Bungee', cursive;
      font-size: 5.2rem;
      letter-spacing: 0.02em;
      background: linear-gradient(135deg, #ffffff 0%, #ffffff 70%, #ffffff 100%);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
      text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      display: inline-block;
      margin-bottom: 0.35rem;
    }
    </style>
</head>
<body class="bg-gradient-purple min-h-screen">

    <!-- Contenedor principal -->
    <div class="min-h-screen flex flex-col">
        
        <!-- ==================== HEADER - MENÚ NEGRO ==================== -->
        <header class="bg-black border-b border-gray-800">
            <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
                <!-- Logo (solo texto, sin el recuadro) -->
                <span class="font-Bungee text-2xl text-white tracking-tight">ALEBRINGÜE</span>

                <!-- Menú navegación escritorio -->
                <nav class="hidden md:flex items-center gap-8">
                    <!-- <a href="#" class="text-white hover:text-gray-300 transition-colors">inicio</a>
                    <a href="#" class="text-white hover:text-gray-300 transition-colors">características</a>
                    <div class="flex items-center gap-1 text-white">
                        <span>niveles</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <a href="#" class="text-white hover:text-gray-300 transition-colors">función</a>
                    <div class="flex items-center gap-1 text-white">
                        <span>recursos</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div> -->
                    <a href="{{ route('login') }}" class="bg-white text-black px-5 py-2 rounded-full font-semibold text-sm hover:bg-gray-200 transition-all ml-2">Inicar Sesion</a>
                    <a href="#" class="bg-white text-black px-5 py-2 rounded-full font-semibold text-sm hover:bg-gray-200 transition-all ml-2">Descargar app</a>
                </nav>

                <!-- Botón menú móvil hamburguesa -->
                <button id="menuBtn" class="md:hidden flex flex-col gap-1.5 p-2">
                    <span class="w-6 h-0.5 bg-white rounded-full"></span>
                    <span class="w-6 h-0.5 bg-white rounded-full"></span>
                    <span class="w-6 h-0.5 bg-white rounded-full"></span>
                </button>
            </div>

            <!-- Menú móvil desplegable -->
            <div id="mobileMenu" class="hidden md:hidden bg-black border-t border-gray-800 py-4 px-6 flex flex-col gap-4">
                <a href="#" class="text-white hover:text-gray-300 py-1">inicio</a>
                <a href="#" class="text-white hover:text-gray-300 py-1">características</a>
                <div class="flex items-center gap-1 text-white py-1">niveles <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></div>
                <a href="#" class="text-white hover:text-gray-300 py-1">función</a>
                <div class="flex items-center gap-1 text-white py-1">recursos <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></div>
                <a href="#" class="bg-white text-black px-5 py-2 rounded-full font-semibold text-center mt-2">iniciar sesión</a>
            </div>
        </header>

        <!-- ==================== HERO PRINCIPAL ==================== -->
        <main class="flex-grow flex items-center justify-center">
            <div class="max-w-4xl mx-auto px-6 py-16 md:py-20 text-center">
                <!-- Título ALEBRINGUE -->
                <h1 class="brand-name">
                    ALEBRINGÜE
                </h1>
                
                <!-- Subtítulo -->
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mt-2 mb-6">
                    Domina tu pronunciación de inglés
                </h2>
                
                <!-- Descripción -->
                <p class="text-lg md:text-xl text-gray-200 max-w-2xl mx-auto leading-relaxed">
                    La plataforma diseñada para estudiantes que buscan hablar con confianza
                </p>
                
                <!-- Botón Empezar - Negro con letras blancas -->
                <div class="mt-10">
                    <a href="#" class="inline-block bg-black text-white px-8 py-3 rounded-full font-bold text-lg shadow-lg hover:bg-gray-800 transition-all hover:shadow-xl hover:-translate-y-0.5">
                        Empezar
                    </a>
                </div>
            </div>
        </main>

        <!-- ==================== FOOTER ==================== -->
        <footer class="bg-black/50 text-gray-400 py-6 mt-auto">
            <div class="max-w-6xl mx-auto px-6">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm">
                    <span class="text-gray-400 text-xs">2026 Alebringüe</span>
                </div>
            </div>
        </footer>
    </div>

    <!-- JavaScript para menú móvil -->
    <script>
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        
        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
            
            const links = mobileMenu.querySelectorAll('a');
            links.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            });
        }
    </script>
</body>
</html>