<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Our Visionary Team | LUMINA</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    
    <!-- Google Fonts & Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Hanken+Grotesk:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
    <style>
        body {
            background-color: #00180e;
            color: #cbead8;
            -webkit-font-smoothing: antialiased;
        }
        
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        
        /* Custom scrollbar for the Noir aesthetic */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #001209; }
        ::-webkit-scrollbar-thumb { background: #1f3a2e; border-radius: 3px; }
        ::-webkit-scrollbar-thumb:hover { background: #354e40; }

        .glass-card {
            background: rgba(26, 53, 41, 0.4);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(245, 245, 220, 0.1);
        }

        .spotlight-glow {
            background: radial-gradient(circle at 50% 50%, rgba(245, 245, 220, 0.05) 0%, transparent 70%);
        }

        .dotted-leader {
            border-bottom: 1px dotted rgba(203, 234, 216, 0.3);
            flex-grow: 1;
            margin: 0 8px;
            margin-bottom: 6px;
        }

        /* Scroll Animations from Mobile Code */
        .staggered-load {
            animation: fadeInUp 0.8s ease forwards;
            opacity: 0;
            transform: translateY(20px);
        }
        
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
    
    <script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              colors: {
                "primary-fixed-dim": "#c8c8b0",
                "secondary": "#b1cdbb",
                "surface-container-highest": "#1f3a2e",
                "surface-container": "#082419",
                "primary-fixed": "#e4e4cc",
                "surface-container-high": "#142f23",
                "surface-container-lowest": "#001209",
                "tertiary": "#ffffff",
                "surface": "#00180e",
                "primary": "#ffffff",
                "on-surface-variant": "#c8c7bc",
                "inverse-surface": "#cbead8",
                "on-surface": "#cbead8",
                "background": "#00180e",
                "on-background": "#cbead8",
              },
              spacing: {
                "section-gap": "120px",
                "gutter": "24px",
                "margin-desktop": "80px",
                "unit": "8px",
                "margin-mobile": "20px"
              },
              fontFamily: {
                "headline-md": ["Playfair Display", "serif"],
                "body-md": ["Hanken Grotesk", "sans-serif"],
                "body-lg": ["Hanken Grotesk", "sans-serif"],
                "headline-xl": ["Playfair Display", "serif"],
                "headline-lg-mobile": ["Playfair Display", "serif"],
                "headline-lg": ["Playfair Display", "serif"],
                "label-sm": ["Hanken Grotesk", "sans-serif"]
              },
              fontSize: {
                "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "500"}],
                "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                "body-lg": ["18px", {"lineHeight": "1.6", "letterSpacing": "0.01em", "fontWeight": "400"}],
                "headline-xl": ["64px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                "headline-lg-mobile": ["32px", {"lineHeight": "1.2", "fontWeight": "600"}],
                "headline-lg": ["40px", {"lineHeight": "1.2", "fontWeight": "600"}],
                "label-sm": ["12px", {"lineHeight": "1", "letterSpacing": "0.1em", "fontWeight": "600"}]
              }
            }
          }
        }
    </script>
</head>
<body class="bg-background text-on-background font-body-md selection:bg-primary-fixed-dim selection:text-surface overflow-x-hidden">
    
    @php
    // Data Tim Gabungan
    $teamMembers = [
        [
            "badge" => "The Architect",
            "name" => "Julian Chen",
            "role" => "Co-Founder & Lead Strategist",
            "bio" => "A senior in Engineering Management, Julian bridges the gap between logistical precision and culinary creativity. His vision for Midnight Jade is rooted in scalable sustainability and immersive guest journeys.",
            "image" => "https://lh3.googleusercontent.com/aida-public/AB6AXuDPgGEL3Ji4qwH8DN0MzkoLljls-JTeu__-esX8rQf7oIP0hyTZ2efxzD-vy02nVvnp9bmBMqaBJZT51nKEi9nuwoY3h1rKL0nK9oIJLVU4cSw3TlppVX24aEAiLx0kJqPZyV7rTKaiOpNkiw_f2CQpptWPctxN0bxRidcMUFx72FY_UBU2wIab9hVAEMsOu3HbWmfUbtS6zc_18mRZCPGPf_HwIKSTTgOn8QK4ElQi2X4rMBiDA87x1A",
            "alt" => "Cinematic portrait of Julian Chen"
        ],
        [
            "badge" => "The Artisan",
            "name" => "Aria Watanabe",
            "role" => "Head of Brand & Experience",
            "bio" => "Aria's background in Visual Arts and UX Design shapes the aesthetic soul of Lumina. She curates every touchpoint, from the digital interface to the tactile feel of our menus, ensuring a cohesive 'Noir' narrative.",
            "image" => "https://lh3.googleusercontent.com/aida-public/AB6AXuCBagVTrCJuWiuoM3whMUp4YM6XfqW5YRhcFu30j8iPTeckDrVe4SNxDiFWi8h8Lf8TkRP4lWP9Oayh9vAVc0hz3pMAzSmecVcJg-z_AfD2IjiA55FfkrO6HWHDA4M1U0B3H6rpyxzT1jamFNS7wdwzyikUeJPnbtJP4Fd6K_Yim7Vefr84Ae9pJA_qJI3dPUjSWHKM16jO-6ugjv2YI7ICBM0SgwE2l-gPKKRPN_6-8kQlx6EDhxWCrw",
            "alt" => "Portrait of Aria Watanabe"
        ],
        [
            "badge" => "The Engineer",
            "name" => "Marcus Teoh",
            "role" => "CTO & Operations Lead",
            "bio" => "Specializing in Data Science and Automation, Marcus oversees the 'Techno' in our technopreneurship. He developed our proprietary reservation system and smart supply chain that minimizes food waste while maximizing quality.",
            "image" => "https://lh3.googleusercontent.com/aida-public/AB6AXuDEQh7ZNYEr6-fjjmsfudfvg6wjTIbknNdxeRVuD3VZP8U8x7MBnduWLhjGjlb-s8RLlna8h5xD3SNCGLjHeuQej7nZkiKeByCqVZbvTpfrMKZdzMtwCYO7iQ55rEkdSjmrIrXphIfRzWRi8WnJKz4TLpNVtDxTLCYqMFDI3svmxZekyQwyMo5PKQdPnYmk7YnG6BLU-F9CZcxckWaudsW259p0b5XNGVTV3Z4taJw5sYjLLenu_8J-TQ",
            "alt" => "Portrait of Marcus Teoh"
        ]
    ];
    @endphp

    <!-- Responsive TopAppBar -->
    <header class="fixed top-0 left-0 w-full z-50 bg-surface/80 dark:bg-surface/80 backdrop-blur-xl border-b border-on-surface/10">
        <nav class="max-w-7xl mx-auto px-margin-mobile md:px-margin-desktop flex justify-between items-center h-20">
            <div class="flex items-center gap-4">
                <!-- Hamburger Menu for Mobile (Hidden on Desktop) -->
                <button class="md:hidden text-primary dark:text-primary">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <span class="material-symbols-outlined text-primary dark:text-primary hidden md:block">restaurant_menu</span>
                <span class="font-headline-md text-headline-md font-bold tracking-widest text-primary dark:text-primary">LUMINA</span>
            </div>
            
            <!-- Desktop Navigation (Hidden on Mobile) -->
            <div class="hidden md:flex gap-8">
                <a class="text-on-surface-variant hover:text-primary transition-colors duration-300 font-label-sm text-label-sm tracking-widest" href="#">MENU</a>
                <a class="text-primary border-b border-primary pb-1 font-label-sm text-label-sm tracking-widest" href="#">ABOUT</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors duration-300 font-label-sm text-label-sm tracking-widest" href="#">RESERVATIONS</a>
            </div>

            <div class="flex items-center gap-6">
                <button class="hover:bg-white/5 transition-all duration-300 p-2 rounded-full active:scale-95">
                    <span class="material-symbols-outlined text-primary">shopping_bag</span>
                </button>
            </div>
        </nav>
    </header>

    <main class="relative pt-32 pb-section-gap">
        <!-- Ambient Background Effect -->
        <div class="absolute inset-0 spotlight-glow pointer-events-none z-0"></div>

        <!-- Responsive Hero Section -->
        <section class="relative z-10 px-margin-mobile md:px-margin-desktop max-w-7xl mx-auto mb-16 staggered-load" style="animation-delay: 0.1s;">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-end">
                <div class="md:col-span-8">
                    <span class="font-label-sm text-label-sm text-secondary uppercase tracking-[0.3em] mb-4 block">Origins & Vision</span>
                    <h1 class="font-headline-lg-mobile md:font-headline-xl text-headline-lg-mobile md:text-headline-xl leading-none text-primary mb-6 md:mb-8">
                        The Minds Behind <br>
                        <span class="italic font-normal">Midnight Jade</span>
                    </h1>
                    <p class="font-body-md md:font-body-lg text-body-md md:text-body-lg text-on-surface-variant max-w-2xl leading-relaxed">
                        Midnight Jade was born at the intersection of traditional culinary heritage and the limitless potential of technopreneurship. We are student innovators redefining how fusion dining connects with the modern connoisseur.
                    </p>
                </div>
                <!-- Decorative Graphic (Only visible on desktop) -->
                <div class="md:col-span-4 hidden md:block">
                    <div class="relative w-full aspect-square glass-card rounded-sm overflow-hidden flex items-center justify-center group">
                        <span class="relative z-10 font-headline-md text-headline-md text-primary/20 tracking-[0.5em] rotate-90">SYNERGY</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Responsive Team Grid/Stack -->
        <section class="relative z-10 px-margin-mobile md:px-margin-desktop max-w-7xl mx-auto">
            <!-- Uses space-y on mobile, grid on desktop -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-16 md:gap-gutter">
                @foreach ($teamMembers as $index => $member)
                    <!-- Delay animation dynamically & adjust middle card positioning on desktop -->
                    <article class="staggered-load group relative {{ $index == 1 ? 'md:mt-24' : '' }}" style="animation-delay: {{ 0.3 + ($index * 0.2) }}s;">
                        
                        <!-- Image Container: Square on Mobile, 3/4 Aspect on Desktop -->
                        <div class="relative overflow-hidden mb-6 md:mb-8 border border-on-surface/10 bg-surface-container aspect-square md:aspect-[3/4] glass-card">
                            <img class="object-cover w-full h-full grayscale contrast-125 opacity-90 group-hover:grayscale-0 transition-all duration-700 ease-out scale-105 group-hover:scale-100" alt="{{ $member['alt'] }}" src="{{ $member['image'] }}">
                            <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent opacity-80"></div>
                            
                            <div class="absolute bottom-6 left-6">
                                <span class="font-label-sm text-label-sm text-primary-fixed uppercase tracking-widest block mb-2">{{ $member['badge'] }}</span>
                                <h3 class="font-headline-md text-headline-md text-primary">{{ $member['name'] }}</h3>
                            </div>
                        </div>

                        <!-- Bio Content -->
                        <div class="flex flex-col space-y-4">
                            <div class="flex items-center">
                                <span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest">{{ $member['role'] }}</span>
                                <div class="dotted-leader hidden md:block"></div>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                {{ $member['bio'] }}
                            </p>
                            <!-- Divider (Visible mainly on mobile flow) -->
                            <div class="h-px w-12 bg-primary/30 mt-4 md:hidden"></div>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

        <!-- Mission Statement / Call to Action -->
        <section class="py-section-gap relative z-10 mt-16 md:mt-24">
            <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-desktop text-center staggered-load" style="animation-delay: 0.3s;">
                <h2 class="font-headline-lg text-headline-lg md:text-headline-xl text-primary max-w-4xl mx-auto mb-12 italic">
                    "We don't just serve food; we engineer unforgettable moments of culinary transcendence."
                </h2>
                <div class="flex flex-col md:flex-row gap-6 justify-center">
                    <button class="bg-primary-fixed text-on-primary px-10 py-5 font-label-sm text-label-sm tracking-widest hover:bg-white transition-all duration-300">
                        OUR PHILOSOPHY
                    </button>
                    <button class="border border-primary-fixed text-primary-fixed px-10 py-5 font-label-sm text-label-sm tracking-widest hover:bg-white/5 transition-all duration-300">
                        CONTACT THE TEAM
                    </button>
                </div>
            </div>
        </section>
    </main>

    <!-- Responsive Footer -->
    <footer class="w-full pt-section-gap pb-8 bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-on-surface/5">
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-3 gap-gutter text-center md:text-left">
            
            <div class="mb-12 md:mb-0">
                <h2 class="font-headline-lg text-headline-lg text-primary dark:text-primary mb-6 md:mb-8 tracking-widest">LUMINA</h2>
                <p class="text-on-surface-variant font-body-md text-body-md max-w-xs mx-auto md:mx-0 mb-8">
                    Crafting the future of Asian fusion through meticulous design and technical innovation.
                </p>
                <div class="flex gap-4 justify-center md:justify-start">
                    <a class="w-10 h-10 border border-on-surface/10 flex items-center justify-center rounded-full hover:bg-primary-fixed-dim hover:text-on-primary transition-all" href="#">
                        <span class="material-symbols-outlined text-sm">share</span>
                    </a>
                    <a class="w-10 h-10 border border-on-surface/10 flex items-center justify-center rounded-full hover:bg-primary-fixed-dim hover:text-on-primary transition-all" href="#">
                        <span class="material-symbols-outlined text-sm">mail</span>
                    </a>
                </div>
            </div>

            <div class="md:col-span-2 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 text-center md:text-left">
                <div class="space-y-4">
                    <h4 class="font-label-sm text-label-sm text-primary tracking-widest mb-4 md:mb-6">NAVIGATION</h4>
                    <ul class="space-y-3 flex flex-col items-center md:items-start">
                        <li><a class="text-on-surface-variant hover:text-primary transition-colors font-body-md text-body-md" href="#">MENU</a></li>
                        <li><a class="text-primary font-bold transition-colors font-body-md text-body-md" href="#">ABOUT</a></li>
                        <li><a class="text-on-surface-variant hover:text-primary transition-colors font-body-md text-body-md" href="#">RESERVATIONS</a></li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h4 class="font-label-sm text-label-sm text-primary tracking-widest mb-4 md:mb-6">LOCATION</h4>
                    <p class="text-on-surface-variant font-body-md text-body-md">
                        The Jade Tower, 18F<br>
                        District 01, Neo-Tokyo<br>
                        Techno Park Central
                    </p>
                </div>
                <div class="space-y-4 hidden sm:block">
                    <h4 class="font-label-sm text-label-sm text-primary tracking-widest mb-4 md:mb-6">RESERVE</h4>
                    <p class="text-on-surface-variant font-body-md text-body-md italic mb-4">Experience the Midnight Jade tonight.</p>
                    <a class="inline-block border-b border-primary text-primary font-label-sm text-label-sm tracking-widest pb-1 hover:border-transparent transition-all" href="#">BOOK TABLE</a>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-desktop mt-12 md:mt-20 pt-8 border-t border-on-surface/5 flex flex-col md:flex-row justify-between items-center gap-4">
            <span class="text-on-surface-variant font-label-sm text-label-sm tracking-widest opacity-60 md:opacity-100 text-center">
                © {{ date('Y') }} LUMINA GOURMET ASIAN FUSION. ALL RIGHTS RESERVED.
            </span>
            <div class="flex gap-8">
                <a class="text-on-surface-variant hover:text-primary transition-colors font-label-sm text-label-sm tracking-widest hidden md:block" href="#">PRIVACY</a>
            </div>
        </div>
    </footer>

    <!-- Interactive Scripts (Spotlight & Scroll Reveal) -->
    <script>
        // Spotlight Hover Effect
        document.addEventListener('mousemove', (e) => {
            const glow = document.querySelector('.spotlight-glow');
            if (glow) {
                const x = (e.clientX / window.innerWidth) * 100;
                const y = (e.clientY / window.innerHeight) * 100;
                glow.style.background = `radial-gradient(circle at ${x}% ${y}%, rgba(245, 245, 220, 0.08) 0%, transparent 70%)`;
            }
        });

        // Intersection Observer for scroll animations (Staggered Load)
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Trigger the CSS animation
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target); // Run only once
                }
            });
        }, observerOptions);

        // Pause animation initially so it waits for scroll
        document.querySelectorAll('.staggered-load').forEach(el => {
            el.style.animationPlayState = 'paused';
            observer.observe(el);
        });
    </script>
</body>
</html>