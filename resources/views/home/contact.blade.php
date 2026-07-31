<!DOCTYPE html>
<html class="dark" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Kontak | BITE &amp; GO - Contemporary Oriental Noir</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&amp;family=Hanken+Grotesk:wght@400;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary-container": "#354e40",
                        "primary-container": "#e4e4cc",
                        "surface": "#00180e",
                        "secondary": "#b1cdbb",
                        "on-tertiary-fixed-variant": "#5d4201",
                        "on-background": "#cbead8",
                        "surface-container-high": "#142f23",
                        "on-tertiary": "#412d00",
                        "surface-variant": "#1f3a2e",
                        "inverse-surface": "#cbead8",
                        "on-error": "#690005",
                        "on-error-container": "#ffdad6",
                        "surface-bright": "#243f32",
                        "on-surface": "#cbead8",
                        "tertiary-container": "#ffdea5",
                        "surface-container-low": "#042015",
                        "error-container": "#93000a",
                        "primary-fixed-dim": "#c8c8b0",
                        "surface-dim": "#00180e",
                        "secondary-fixed": "#cde9d6",
                        "primary": "#ffffff",
                        "error": "#ffb4ab",
                        "secondary-fixed-dim": "#b1cdbb",
                        "on-primary-fixed-variant": "#474836",
                        "on-secondary": "#1d3528",
                        "on-primary": "#303221",
                        "tertiary": "#ffffff",
                        "surface-container": "#082419",
                        "on-primary-fixed": "#1b1d0e",
                        "surface-container-lowest": "#001209",
                        "inverse-on-surface": "#1b362a",
                        "outline": "#929187",
                        "tertiary-fixed": "#ffdea5",
                        "on-tertiary-container": "#7e5f1f",
                        "on-primary-container": "#646652",
                        "on-secondary-fixed-variant": "#334c3e",
                        "on-surface-variant": "#c8c7bc",
                        "surface-container-highest": "#1f3a2e",
                        "on-secondary-container": "#a3bfad",
                        "primary-fixed": "#e4e4cc",
                        "surface-tint": "#c8c8b0",
                        "outline-variant": "#47473f",
                        "tertiary-fixed-dim": "#e9c176",
                        "on-secondary-fixed": "#072014",
                        "inverse-primary": "#5e604d",
                        "background": "#00180e",
                        "on-tertiary-fixed": "#261900"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "unit": "8px",
                        "margin-mobile": "20px",
                        "gutter": "24px",
                        "margin-desktop": "80px",
                        "section-gap": "120px"
                    },
                    "fontFamily": {
                        "headline-md": ["Playfair Display"],
                        "body-md": ["Hanken Grotesk"],
                        "label-sm": ["Hanken Grotesk"],
                        "headline-xl": ["Playfair Display"],
                        "headline-lg-mobile": ["Playfair Display"],
                        "body-lg": ["Hanken Grotesk"],
                        "headline-lg": ["Playfair Display"]
                    },
                    "fontSize": {
                        "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "500"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "label-sm": ["12px", {"lineHeight": "1", "letterSpacing": "0.1em", "fontWeight": "600"}],
                        "headline-xl": ["64px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "headline-lg-mobile": ["32px", {"lineHeight": "1.2", "fontWeight": "600"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "letterSpacing": "0.01em", "fontWeight": "400"}],
                        "headline-lg": ["40px", {"lineHeight": "1.2", "fontWeight": "600"}]
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }
        .glass-card {
            background: rgba(26, 53, 41, 0.4);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(245, 245, 220, 0.1);
        }
        .spotlight {
            background: radial-gradient(circle at center, rgba(245, 245, 220, 0.05) 0%, rgba(0, 24, 14, 0) 70%);
        }
        .menu-leader {
            border-bottom: 1px dotted rgba(200, 199, 188, 0.3);
            flex-grow: 1;
            margin: 0 8px;
            margin-bottom: 6px;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md selection:bg-primary/30 selection:text-primary">

<!-- Sesuai Desain: Ikon Kiri, Logo Tengah, Nav Kanan -->
<nav class="fixed top-0 left-0 w-full z-50 bg-background/80 backdrop-blur-xl border-b border-white/10">
    <div class="max-w-7xl mx-auto px-4 md:px-margin-desktop flex justify-between items-center h-20 relative">
        
        <!-- Bagian Kiri: Ikon -->
        <div class="flex items-center gap-4">
            <button class="md:hidden text-primary">
                <span class="material-symbols-outlined">menu</span>
            </button>
            <span class="material-symbols-outlined text-primary hidden md:block">restaurant_menu</span>
        </div>
        
        <!-- Bagian Tengah: Logo BITE & GO -->
        <div class="absolute left-1/2 -translate-x-1/2 font-headline-md text-headline-md font-bold tracking-widest text-primary">
            BITE &amp; GO
        </div>
        
        <!-- Bagian Kanan: Menu Navigasi & Ikon Tas -->
        <div class="flex items-center gap-8">
            <div class="hidden md:flex items-center gap-8">
                <a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors duration-300 uppercase tracking-widest" href="{{ route('home') }}">Menu</a>
                <a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors duration-300 uppercase tracking-widest" href="{{ route('about') }}">Mengenai Tim Kami</a>
                <a class="font-label-sm text-label-sm text-primary font-bold border-b border-primary pb-1 transition-colors duration-300 uppercase tracking-widest" href="{{ route('contact') }}">Kontak</a>
            </div>
            <button class="text-primary hover:text-primary-fixed-dim transition-colors flex items-center">
                <span class="material-symbols-outlined">shopping_bag</span>
            </button>
        </div>

    </div>
</nav>

<main class="relative pt-32 pb-section-gap overflow-hidden">
    <!-- Atmospheric Lighting Overlay -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1000px] h-[1000px] spotlight pointer-events-none -z-10"></div>
    
    <!-- Hero Section -->
    <section class="max-w-4xl mx-auto px-margin-mobile text-center mb-section-gap">
        <h1 class="font-headline-xl text-headline-xl mb-6 text-primary">Hubungi Kami</h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant/80 max-w-2xl mx-auto">
            Terhubunglah dengan para pemikir di balik kreasi kuliner kami. Kami menyambut dialog, kolaborasi, dan apresiasi atas seni rasa yang kami sajikan.
        </p>
    </section>

    <!-- Team Profile Cards Section -->
    <section class="max-w-7xl mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-3 gap-gutter">
        <!-- Julian Chen -->
        <div class="glass-card p-6 flex flex-col group hover:border-primary/20 transition-all duration-500">
            <div class="aspect-[4/5] w-full overflow-hidden mb-6 relative">
                <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDNg9V0wKpF4yPmVqXAmDL8Njp-AzKMm6m4xXVDD9bNfuc9n-LMqXEW7fiW27y4D8F1ymB54Wb8jwTLpwR5oDOSpELs6DBFc60fdk8QQSPvIpyWBOc--IP3pKOtCAlalSGkgeWxB95Oy6nKByn3D3IPpeVuoojM82C5hyH6Asw6A0lUtiukbRyJRzeudClAlLPRfFQ0VoLeDtMoa_Q7ijiR_KtgvfrS9f4DtVIh18G2AGQ1ZEMo1xkmzw"/>
                <div class="absolute inset-0 bg-gradient-to-t from-background/80 to-transparent"></div>
            </div>
            <div class="flex flex-col gap-2">
                <h3 class="font-headline-md text-headline-md text-primary">Julian Chen</h3>
                <p class="font-label-sm text-label-sm text-secondary tracking-[0.2em] uppercase">Culinary Director</p>
                <div class="mt-4 flex flex-col gap-3">
                    <a class="flex items-center gap-3 text-on-surface-variant hover:text-primary transition-colors" href="#">
                        <span class="material-symbols-outlined text-[18px]">alternate_email</span>
                        <span class="font-body-md text-body-md">@julianchen_bitego</span>
                    </a>
                    <a class="flex items-center gap-3 text-on-surface-variant hover:text-primary transition-colors" href="mailto:julian@biteandgo.com">
                        <span class="material-symbols-outlined text-[18px]">mail</span>
                        <span class="font-body-md text-body-md">julian@biteandgo.com</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Aria Watanabe -->
        <div class="glass-card p-6 flex flex-col group hover:border-primary/20 transition-all duration-500">
            <div class="aspect-[4/5] w-full overflow-hidden mb-6 relative">
                <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQwKdWKFf8pmzOSPouF19SCPSos0EMZ8pAb3kI9oXDXzyRULzzwwQ7Dque3D5Ab6sNZsMsOVaoW6BmJJk0Bd9WBGOnX1l2QBJ0TCZuUODc5o-eNudJkJMUgpheUTDP18Vk2Fk_Zx58wmTeZGSV-_Spy0HnPFjDvHUyEi5v9MtdXZ7W16R_HK9lRjMxhx0IJWWnystyMTZZ5fBk-OqF-MtXdj5Wby5_73vXe4hchbFRn5I4DWdLWGd9Zg"/>
                <div class="absolute inset-0 bg-gradient-to-t from-background/80 to-transparent"></div>
            </div>
            <div class="flex flex-col gap-2">
                <h3 class="font-headline-md text-headline-md text-primary">Aria Watanabe</h3>
                <p class="font-label-sm text-label-sm text-secondary tracking-[0.2em] uppercase">Operations Lead</p>
                <div class="mt-4 flex flex-col gap-3">
                    <a class="flex items-center gap-3 text-on-surface-variant hover:text-primary transition-colors" href="#">
                        <span class="material-symbols-outlined text-[18px]">alternate_email</span>
                        <span class="font-body-md text-body-md">@ariaw_bitego</span>
                    </a>
                    <a class="flex items-center gap-3 text-on-surface-variant hover:text-primary transition-colors" href="mailto:aria@biteandgo.com">
                        <span class="material-symbols-outlined text-[18px]">mail</span>
                        <span class="font-body-md text-body-md">aria@biteandgo.com</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Marcus Teoh -->
        <div class="glass-card p-6 flex flex-col group hover:border-primary/20 transition-all duration-500">
            <div class="aspect-[4/5] w-full overflow-hidden mb-6 relative">
                <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAYX1jFktruWBSqPDI1s8TY69_mG8o3UeLq8PF2z6aTBd1A1WAHnxW_7ynw0Ah29X5Ui9RhmkleudJFzIeCdL48k-BAVFNevERSv9pIqBk7fY6rOsUKyq0BpUa6gNc3p9VK0vtTFot-n63YmARSfgipLCLc-B8ouR2IowSzDEnwgBJZ9lBpADc1qV-t21roA5Xxx9mr7XELwHL6hKamrMXhPSDlTQTvDLOHWfHsnzjD6rFXCUTBTYzFng"/>
                <div class="absolute inset-0 bg-gradient-to-t from-background/80 to-transparent"></div>
            </div>
            <div class="flex flex-col gap-2">
                <h3 class="font-headline-md text-headline-md text-primary">Marcus Teoh</h3>
                <p class="font-label-sm text-label-sm text-secondary tracking-[0.2em] uppercase">Creative Strategist</p>
                <div class="mt-4 flex flex-col gap-3">
                    <a class="flex items-center gap-3 text-on-surface-variant hover:text-primary transition-colors" href="#">
                        <span class="material-symbols-outlined text-[18px]">alternate_email</span>
                        <span class="font-body-md text-body-md">@mteoh_bitego</span>
                    </a>
                    <a class="flex items-center gap-3 text-on-surface-variant hover:text-primary transition-colors" href="mailto:marcus@biteandgo.com">
                        <span class="material-symbols-outlined text-[18px]">mail</span>
                        <span class="font-body-md text-body-md">marcus@biteandgo.com</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="max-w-7xl mx-auto px-margin-mobile text-center mt-section-gap">
        <div class="inline-block relative group">
            <div class="absolute -inset-4 bg-primary/10 blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <button class="relative bg-primary text-background px-12 py-5 font-label-sm text-label-sm uppercase tracking-[0.3em] flex items-center gap-4 active:scale-95 transition-all duration-300 border border-primary">
                <span class="material-symbols-outlined text-[20px]" data-weight="fill">chat</span>
                Chat via WhatsApp
            </button>
        </div>
        <p class="mt-8 font-label-sm text-label-sm text-on-surface-variant/40 uppercase tracking-widest">Waktu Respon Rata-rata: 15 Menit</p>
    </section>
</main>

<!-- Global Footer Shell -->
<footer class="w-full px-4 md:px-margin-desktop py-section-gap flex flex-col md:flex-row justify-between items-center gap-unit bg-surface-container-lowest border-t border-white/5">
    <div class="flex flex-col gap-4 items-center md:items-start">
        <div class="font-headline-md text-headline-md text-primary">BITE &amp; GO</div>
        <p class="font-label-sm text-label-sm text-on-surface-variant/60">© {{ date('Y') }} BITE &amp; GO. All rights reserved.</p>
    </div>
    <div class="flex gap-8 mt-6 md:mt-0">
        <a class="font-label-sm text-label-sm text-on-surface-variant/60 hover:text-primary transition-colors duration-300" href="#">Privacy Policy</a>
        <a class="font-label-sm text-label-sm text-on-surface-variant/60 hover:text-primary transition-colors duration-300" href="#">Terms of Service</a>
        <a class="font-label-sm text-label-sm text-on-surface-variant/60 hover:text-primary transition-colors duration-300" href="#">Press Kit</a>
    </div>
</footer>

<script>
    const spotlight = document.querySelector('.spotlight');
    document.addEventListener('mousemove', (e) => {
        const x = e.clientX;
        const y = e.clientY;
        spotlight.style.left = `${x}px`;
        spotlight.style.top = `${y}px`;
        spotlight.style.transform = `translate(-50%, -50%)`;
    });

    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100', 'translate-y-0');
                entry.target.classList.remove('opacity-0', 'translate-y-10');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.glass-card').forEach(card => {
        card.classList.add('opacity-0', 'translate-y-10', 'transition-all', 'duration-1000', 'ease-out');
        observer.observe(card);
    });
</script>
</body>
</html>