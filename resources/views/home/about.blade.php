<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Tentang Kami | LUMINA</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    
    <!-- Google Fonts & Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Hanken+Grotesk:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
              "surface-tint": "#c8c8b0",
              "on-secondary-fixed": "#072014",
              "primary": "#ffffff",
              "on-surface": "#cbead8",
              "primary-fixed": "#e4e4cc",
              "tertiary-fixed": "#ffdea5",
              "secondary-fixed-dim": "#b1cdbb",
              "tertiary-container": "#ffdea5",
              "inverse-surface": "#cbead8",
              "error": "#ffb4ab",
              "outline-variant": "#47473f",
              "primary-container": "#e4e4cc",
              "surface-container-high": "#142f23",
              "on-primary-fixed": "#1b1d0e",
              "on-tertiary": "#412d00",
              "on-primary": "#303221",
              "surface-dim": "#00180e",
              "on-background": "#cbead8",
              "on-tertiary-fixed": "#261900",
              "secondary-fixed": "#cde9d6",
              "surface-variant": "#1f3a2e",
              "tertiary-fixed-dim": "#e9c176",
              "on-error-container": "#ffdad6",
              "secondary": "#b1cdbb",
              "on-tertiary-fixed-variant": "#5d4201",
              "on-error": "#690005",
              "tertiary": "#ffffff",
              "error-container": "#93000a",
              "on-primary-fixed-variant": "#474836",
              "secondary-container": "#354e40",
              "inverse-primary": "#5e604d",
              "surface": "#00180e",
              "on-secondary-container": "#a3bfad",
              "on-surface-variant": "#c8c7bc",
              "inverse-on-surface": "#1b362a",
              "surface-container": "#082419",
              "surface-container-low": "#042015",
              "on-tertiary-container": "#7e5f1f",
              "on-primary-container": "#646652",
              "primary-fixed-dim": "#c8c8b0",
              "on-secondary": "#1d3528",
              "surface-container-highest": "#1f3a2e",
              "on-secondary-fixed-variant": "#334c3e",
              "surface-bright": "#243f32",
              "surface-container-lowest": "#001209",
              "outline": "#929187",
              "background": "#00180e"
            },
            "borderRadius": {
              "DEFAULT": "0px",
              "lg": "0px",
              "xl": "0px",
              "full": "0px" /* Strict Lumina Rule: 0px Roundedness */
            },
            "spacing": {
              "margin-mobile": "20px",
              "section-gap": "120px",
              "margin-desktop": "80px",
              "unit": "8px",
              "gutter": "24px"
            },
            "fontFamily": {
              "headline-xl": ["Playfair Display"],
              "headline-lg-mobile": ["Playfair Display"],
              "label-sm": ["Hanken Grotesk"],
              "headline-md": ["Playfair Display"],
              "headline-lg": ["Playfair Display"],
              "body-md": ["Hanken Grotesk"],
              "body-lg": ["Hanken Grotesk"]
            },
            "fontSize": {
              "headline-xl": ["64px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
              "headline-lg-mobile": ["32px", {"lineHeight": "1.2", "fontWeight": "600"}],
              "label-sm": ["12px", {"lineHeight": "1", "letterSpacing": "0.1em", "fontWeight": "600"}],
              "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "500"}],
              "headline-lg": ["40px", {"lineHeight": "1.2", "fontWeight": "600"}],
              "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
              "body-lg": ["18px", {"lineHeight": "1.6", "letterSpacing": "0.01em", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
    <style>
        body {
            background-color: #00180e;
            color: #e4e4cc;
            -webkit-font-smoothing: antialiased;
        }
        
        .glass-container {
            background: rgba(26, 53, 41, 0.4);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(245, 245, 220, 0.1);
        }

        .spotlight {
            background: radial-gradient(circle at 30% 20%, rgba(245, 245, 220, 0.05) 0%, transparent 50%);
        }
        
        .staggered-load {
            animation: fadeInUp 0.8s ease forwards;
            opacity: 0;
            transform: translateY(20px);
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="font-body-md text-body-md">

    @php
    // Data Tim Koki & Pendiri
    $teamMembers = [
        [
            "name" => "Chef Budi Santoso",
            "role" => "Executive Head Chef",
            "bio" => "Berpengalaman lebih dari 15 tahun mengolah hidangan Nusantara dengan teknik memasak modern kelas dunia.",
            "quote" => "Setiap tusuk Sempol dan rempah Nasi Daun Jeruk adalah penghormatan pada kekayaan rasa Indonesia.",
            "image" => "https://images.unsplash.com/photo-1577219491135-ce391730fb2c?auto=format&fit=crop&w=600&q=80"
        ],
        [
            "name" => "Siti Rahmawati",
            "role" => "Flavor & Spice Specialist",
            "bio" => "Pakar racikan bumbu tradisional yang memastikan keaslian rasa ungkep ayam dan sambal matah otentik.",
            "quote" => "Rahasianya ada pada kesegaran daun jeruk dan keseimbangan racikan rempah pilihan.",
            "image" => "https://images.unsplash.com/photo-1583394838336-acd977736f90?auto=format&fit=crop&w=600&q=80"
        ],
        [
            "name" => "Davin Wijaya",
            "role" => "Mixologist & Beverage Innovator",
            "bio" => "Kreator di balik kesegaran Blue Curacao Refresher dan minuman pendamping ala gourmet.",
            "quote" => "Minuman segar yang pas adalah kunci pembersih langit-langit mulut terbaik setelah hidangan kaya rempah.",
            "image" => "https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=600&q=80"
        ]
    ];

    // Nilai Utama (Our Values)
    $ourValues = [
        [
            "title" => "Bahan Baku Premium",
            "desc" => "Menggunakan bahan segar, rempah Nusantara pilihan, dan bumbu alami tanpa pengawet sintetis.",
            "icon" => '<span class="material-symbols-outlined text-primary-fixed text-3xl">local_florist</span>'
        ],
        [
            "title" => "Presisi Penyajian",
            "desc" => "Memadukan selera jajanan merakyat dengan estetika penyajian bintang lima yang elegan dan tajam.",
            "icon" => '<span class="material-symbols-outlined text-primary-fixed text-3xl">restaurant</span>'
        ],
        [
            "title" => "Kualitas Tertinggi",
            "desc" => "Dapur standar profesional dengan kontrol kualitas ketat demi kenyamanan dan pengalaman bersantap Anda.",
            "icon" => '<span class="material-symbols-outlined text-primary-fixed text-3xl">workspace_premium</span>'
        ]
    ];
    @endphp

    <!-- Responsive Top Navigation -->
    <nav class="fixed top-0 left-0 w-full z-50 bg-surface/80 dark:bg-surface/80 backdrop-blur-xl border-b border-on-surface/10">
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-desktop flex justify-between items-center h-20">
            <div class="flex items-center gap-4">
                <button class="md:hidden text-primary">
                    <span class="material-symbols-outlined" data-icon="menu">menu</span>
                </button>
                <span class="material-symbols-outlined text-primary hidden md:block" data-icon="restaurant_menu">restaurant_menu</span>
                <span class="font-headline-md text-headline-md font-bold tracking-widest text-primary">LUMINA</span>
            </div>
            
            <div class="hidden md:flex gap-8">
                <a class="text-on-surface-variant hover:text-primary transition-colors text-label-sm tracking-widest" href="{{ route('home') }}">MENU</a>
                <a class="text-primary border-b border-primary pb-1 transition-colors text-label-sm tracking-widest" href="{{ route('about') }}">TENTANG KAMI</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors text-label-sm tracking-widest" href="{{ route('contact') ?? '#' }}">KONTAK</a>
            </div>

            <div class="flex items-center">
                <span class="material-symbols-outlined text-primary" data-icon="shopping_bag">shopping_bag</span>
            </div>
        </div>
    </nav>

    <main class="relative pt-20">
        <div class="absolute inset-0 spotlight pointer-events-none transition-all duration-1000 opacity-100 z-0"></div>

        <!-- HERO HEADER TENTANG KAMI -->
        <section class="relative z-10 py-16 md:py-24 px-margin-mobile md:px-margin-desktop border-b border-primary/10">
            <div class="max-w-7xl mx-auto text-center fade-in-element">
                <span class="font-label-sm text-label-sm text-primary/60 uppercase tracking-[0.3em] font-semibold block mb-4">Tentang Kami</span>
                <h1 class="font-headline-xl text-headline-lg-mobile md:text-headline-xl font-bold text-primary mb-6">
                    Kisah Di Balik Cita Rasa
                </h1>
                <div class="w-12 h-[1px] bg-primary-container mx-auto mb-6"></div>
                <p class="font-body-md md:font-body-lg text-on-surface-variant max-w-2xl mx-auto leading-relaxed">
                    Lumina lahir dari semangat menghadirkan kelezatan jajanan & hidangan otentik Nusantara seperti Sempol Ayam dan Nasi Daun Jeruk dengan standar penyajian <i>gourmet Asian fusion</i> kelas atas.
                </p>
            </div>
        </section>

        <!-- CERITA BRAND & VISI -->
        <section class="relative z-10 py-section-gap px-margin-mobile md:px-margin-desktop bg-surface-container-low">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center fade-in-element">
                <!-- Gambar dengan Sudut Tajam (Lumina Style) -->
                <div class="relative w-full aspect-square md:aspect-[4/3] glass-container overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=900&q=80" alt="Dapur Lumina" class="w-full h-full object-cover grayscale opacity-80 hover:grayscale-0 transition-all duration-700">
                </div>
                
                <!-- Teks Deskripsi -->
                <div>
                    <span class="font-label-sm text-label-sm text-secondary uppercase tracking-[0.2em] font-semibold block mb-4">Dedikasi Kuliner</span>
                    <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary mb-6">
                        Mengangkat Jajanan Lokal Ke Tingkat Gourmet
                    </h2>
                    <p class="font-body-md text-on-surface-variant leading-relaxed mb-6">
                        Kami percaya bahwa makanan lokal memiliki daya pikat tiada tanding. Melalui sentuhan kreasi koki berpengalaman, hidangan merakyat seperti Sempol digoreng bertingkat dengan adonan telur lembut, dipadukan dengan kesegaran Nasi Daun Jeruk dan penyegar Blue Curacao.
                    </p>
                    <p class="font-body-md text-on-surface-variant leading-relaxed">
                        Kombinasi ruang bernuansa hijau zamrud pekat (Midnight Jade), sentuhan elemen berkelas, serta presisi layanan kami mencerminkan komitmen dalam memberikan pengalaman bersantap eksklusif yang tak terlupakan bagi Anda.
                    </p>
                </div>
            </div>
        </section>

        <!-- TIM KOKI (OUR TEAM) -->
        <section class="relative z-10 py-section-gap px-margin-mobile md:px-margin-desktop bg-surface">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16 fade-in-element">
                    <span class="font-label-sm text-label-sm text-primary/60 uppercase tracking-[0.2em] block mb-4">Mastermind Kuliner</span>
                    <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary mb-2">Tim Di Balik Layar</h2>
                    <div class="h-1 w-8 bg-primary mx-auto mt-4"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-16 md:gap-gutter">
                    @foreach ($teamMembers as $index => $member)
                        <article class="staggered-load group relative {{ $index == 1 ? 'md:mt-24' : '' }}" style="animation-delay: {{ 0.3 + ($index * 0.2) }}s;">
                            <!-- Image Container -->
                            <div class="relative overflow-hidden mb-6 md:mb-8 border border-on-surface/10 bg-surface-container aspect-square md:aspect-[3/4] glass-container">
                                <img class="object-cover w-full h-full grayscale contrast-125 opacity-90 group-hover:grayscale-0 transition-all duration-700 ease-out scale-105 group-hover:scale-100" src="{{ $member['image'] }}" alt="{{ $member['name'] }}">
                                <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent opacity-90"></div>
                                
                                <div class="absolute bottom-6 left-6">
                                    <span class="font-label-sm text-label-sm text-primary-fixed uppercase tracking-widest block mb-2">{{ $member['role'] }}</span>
                                    <h3 class="font-headline-md text-headline-md text-primary">{{ $member['name'] }}</h3>
                                </div>
                            </div>

                            <!-- Bio Content -->
                            <div class="flex flex-col space-y-4">
                                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                    {{ $member['bio'] }}
                                </p>
                                <div class="border-l border-primary/20 pl-4 py-2 mt-4">
                                    <p class="font-body-md text-sm text-primary/70 italic">"{{ $member['quote'] }}"</p>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- NILAI UTAMA (OUR VALUES) -->
        <section class="relative z-10 py-section-gap px-margin-mobile md:px-margin-desktop bg-surface-container-highest border-t border-primary/10">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16 fade-in-element">
                    <span class="font-label-sm text-label-sm text-primary/60 uppercase tracking-[0.2em] block mb-4">Komitmen Kami</span>
                    <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary mb-2">Prinsip Kualitas Lumina</h2>
                    <div class="h-1 w-8 bg-primary mx-auto mt-4"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach ($ourValues as $value)
                        <div class="glass-container p-10 text-center border border-primary/10 hover:border-primary/30 transition-all duration-300 fade-in-element">
                            <!-- Icon Sharp Box -->
                            <div class="w-16 h-16 bg-surface-container flex items-center justify-center mx-auto mb-8 border border-primary/20">
                                {!! $value['icon'] !!}
                            </div>
                            <h3 class="font-headline-md text-xl font-bold text-primary mb-4">{{ $value['title'] }}</h3>
                            <p class="font-body-md text-on-surface-variant leading-relaxed text-sm">{{ $value['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

    <!-- Responsive Footer -->
    <footer class="w-full pt-section-gap pb-8 bg-surface-container-lowest border-t border-on-surface/5">
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-desktop flex flex-col md:flex-row items-center md:items-start justify-between gap-12">
            
            <div class="text-center md:text-left">
                <div class="font-headline-lg text-headline-lg md:text-[32px] text-primary mb-4 tracking-widest">LUMINA</div>
                <p class="font-label-sm text-label-sm text-on-surface-variant/60 tracking-widest max-w-xs mx-auto md:mx-0">
                    GOURMET ASIAN FUSION <br> SEMPOL & RICE DELIGHTS
                </p>
            </div>
            
            <nav class="flex flex-wrap justify-center md:justify-end gap-6 md:gap-8">
                <a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('home') }}">MENU</a>
                <a class="font-label-sm text-label-sm text-primary font-bold transition-colors" href="{{ route('about') }}">TENTANG KAMI</a>
                <a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('contact') ?? '#' }}">KONTAK</a>
                <a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors" href="#">PRIVACY</a>
            </nav>
            
        </div>
        
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-desktop mt-16 pt-8 border-t border-on-surface/10 flex flex-col md:flex-row items-center justify-between gap-6">
            <p class="font-label-sm text-label-sm text-on-surface-variant/40 text-center md:text-left uppercase tracking-tighter">
                &copy; {{ date('Y') }} LUMINA GOURMET ASIAN FUSION. ALL RIGHTS RESERVED.
            </p>
            <div class="flex gap-6">
                <span class="material-symbols-outlined text-primary/60 cursor-pointer hover:text-primary transition-colors text-xl" data-icon="share">share</span>
                <span class="material-symbols-outlined text-primary/60 cursor-pointer hover:text-primary transition-colors text-xl" data-icon="location_on">location_on</span>
                <span class="material-symbols-outlined text-primary/60 cursor-pointer hover:text-primary transition-colors text-xl" data-icon="mail">mail</span>
            </div>
        </div>
    </footer>

    <!-- Interactive Layer: Smooth Scroll & Spotlights -->
    <script>
        document.addEventListener('mousemove', (e) => {
            const x = (e.clientX / window.innerWidth) * 100;
            const y = (e.clientY / window.innerHeight) * 100;
            document.documentElement.style.setProperty('--mouse-x', `${x}%`);
            document.documentElement.style.setProperty('--mouse-y', `${y}%`);
        });

        const observerOptions = { threshold: 0.1 };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (entry.target.classList.contains('fade-in-element')) {
                        entry.target.classList.add('opacity-100');
                        entry.target.classList.remove('opacity-0', 'translate-y-10');
                    }
                    if (entry.target.classList.contains('staggered-load')) {
                        entry.target.style.animationPlayState = 'running';
                    }
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-element').forEach(el => {
            el.classList.add('transition-all', 'duration-1000', 'opacity-0', 'translate-y-10');
            observer.observe(el);
        });

        document.querySelectorAll('.staggered-load').forEach(el => {
            el.style.animationPlayState = 'paused';
            observer.observe(el);
        });
    </script>
</body>
</html>