<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Bite &amp; Go | Sempol &amp; Rice Delights</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    
    <!-- Google Fonts & Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&amp;family=Hanken+Grotesk:wght@400;600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
    
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
                "DEFAULT": "0.25rem",
                "lg": "0.5rem",
                "xl": "0.75rem",
                "full": "9999px"
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

        .floating-anim {
            animation: floating 6s ease-in-out infinite;
        }

        @keyframes floating {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(2deg); }
            100% { transform: translateY(0px) rotate(0deg); }
        }

        .dotted-leader {
            flex-grow: 1;
            border-bottom: 1px dotted rgba(245, 245, 220, 0.3);
            margin: 0 8px;
            margin-bottom: 6px;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }
    </style>
</head>
<body class="font-body-md text-body-md selection:bg-primary/30 selection:text-primary">

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
                <a class="font-label-sm text-label-sm text-primary font-bold border-b border-primary pb-1 transition-colors duration-300 uppercase tracking-widest" href="{{ route('home') }}">Menu</a>
                <a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors duration-300 uppercase tracking-widest" href="{{ route('about') }}">Mengenai Tim Kami</a>
                <a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors duration-300 uppercase tracking-widest" href="{{ route('contact') }}">Kontak</a>
            </div>
            <button class="text-primary hover:text-primary-fixed-dim transition-colors flex items-center">
                <span class="material-symbols-outlined">shopping_bag</span>
            </button>
        </div>

    </div>
</nav>

<!-- Main Content Canvas -->
<main class="pt-20">
    <!-- Hero Section -->
    <section class="relative min-h-[90vh] flex flex-col items-center justify-center px-margin-mobile md:px-margin-desktop pt-10 overflow-hidden">
        <div class="absolute inset-0 spotlight pointer-events-none transition-all duration-1000 opacity-100"></div>
        <div class="max-w-7xl mx-auto w-full grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="text-center md:text-left order-2 md:order-1 transition-all duration-1000 opacity-150">
                <p class="font-label-sm text-label-sm text-primary/60 tracking-[0.3em] mb-4">EST. 2024</p>
                <h1 class="font-headline-xl text-headline-lg-mobile md:text-[64px] text-primary mb-6 mx-auto md:mx-0 leading-tight">BITE &amp; GO</h1>
                <div class="w-12 h-[1px] bg-primary-container mx-auto md:mx-0 mb-6"></div>
                <p class="text-on-surface-variant font-body-md md:font-body-lg max-w-sm mx-auto md:mx-0 mb-8">
                    Experience the perfect harmony of premium Sempol, aromatic Nasi Daun Jeruk, and refreshing Blue Curacao in one vibrant journey.
                </p>
            </div>
            <!-- Hero Image Platter -->
            <div class="w-full max-w-md md:max-w-lg mx-auto relative group order-1 md:order-2 transition-all duration-1000 opacity-150">
                <div class="absolute -inset-2 bg-primary-container/5 blur-2xl rounded-full"></div>
                <img alt="Sempol Platter" class="relative z-10 w-full rounded-lg shadow-2xl transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQEthag779q3YFeesujqIIa-ZGeL2Q2FJy9Vmex1WsYO8faHHVPBhdxZ2INILwdrRM3Nyq5dKIqaTdGjwpoxLYteHZZFd52VUatzkgUBBL7QUShM1SUgi9JVrZ_ePngVeXxAO28wtqyX9UvvvOHRl5FlbqKMO6FueaDBuakf6jKzdZW3BgE1k5ZlMUDxVLcvFir4VMnW0F2FGH_YK-HfD1sq7OnQe0VXP-pudaSi20Iso4qdz6af1vkw">
            </div>
        </div>
    </section>

    <!-- Feature 1: Nasi Daun Jeruk -->
    <section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface-container-low">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center transition-all duration-1000 opacity-150">
            <div class="mb-10 md:mb-0 overflow-hidden rounded-lg border border-primary/10 max-w-md mx-auto md:max-w-none w-full">
                <img alt="Nasi Daun Jeruk" class="w-full h-auto object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAH4NYer2PdfzD9tVcusFlU6AL-SbKBh4pgYFydoCFv2XOAthaPXIGC2BnA66trmdrNKZa_vUtXLI8XQDRYMAnVwuU4Nkj3kbxEY7cwU91GyMMjzQWr4m06dIVl4dXOuQdH2LF8ZOIxBzya-5aKqXryFjCEcjKiwFBLBA0CsHeStCZtzdPijXkX0BFbtdg0iShRgVtdp6sMRbME1Mrwe3Xja_Pz2LoXtOANk9M4OGq-8IxxCAfjPBQMeA">
            </div>
            <div class="space-y-6 text-center md:text-left max-w-md mx-auto md:mx-0">
                <span class="font-label-sm text-label-sm text-secondary px-3 py-1 border border-secondary/20 rounded-full inline-block">SIGNATURE DISH</span>
                <h2 class="font-headline-lg text-headline-lg-mobile md:text-[40px] text-primary">Aromatic Nasi Daun Jeruk</h2>
                <p class="text-on-surface-variant font-body-md md:font-body-lg leading-relaxed">
                    Experience the delicate infusion of fresh lime leaves in our premium jasmine rice, served alongside gold-standard Ayam Goreng. A sensory journey through the heart of Indonesian culinary craft.
                </p>
                <button class="bg-primary text-on-secondary-fixed font-label-sm text-label-sm py-4 px-8 tracking-widest active:scale-95 transition-transform">
                    EXPLORE FLAVORS
                </button>
            </div>
        </div>
    </section>

    <!-- Feature 2: Signature Sempol -->
    <section class="py-section-gap px-margin-mobile md:px-margin-desktop">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center transition-all duration-1000 opacity-150">
            <div class="space-y-6 text-center md:text-left order-2 md:order-1 max-w-md mx-auto md:mx-0">
                <span class="font-label-sm text-label-sm text-secondary px-3 py-1 border border-secondary/20 rounded-full inline-block">SIGNATURE DISH</span>
                <h2 class="font-headline-lg text-headline-lg-mobile md:text-[40px] text-primary">Signature Sempol</h2>
                <p class="text-on-surface-variant font-body-md md:font-body-lg leading-relaxed">
                    A sophisticated elevation of a traditional classic. Premium meat seasoned with heritage spices, skewered on bamboo, and fried to golden perfection. Served with our signature house-made sambal bajak.
                </p>
                <button class="bg-primary text-on-secondary-fixed font-label-sm text-label-sm py-4 px-8 tracking-widest active:scale-95 transition-transform">
                    VIEW DETAILS
                </button>
            </div>
            <div class="order-1 md:order-2 overflow-hidden rounded-lg border border-primary/10 max-w-md mx-auto md:max-w-none w-full">
                <img alt="Signature Sempol" class="w-full h-auto object-cover" src="https://lh3.googleusercontent.com/aida/AP1WRLvD019ay0Wty9M9YXzHpCCiH5TOoiSN1sKhR-5t0crBcN4of33pvpsYvmNZb6JROQ4zQn1cfJ77RYZHFj2yEKMYzKzurhc8R6b68y_nASwhX_tBH7gHPIpQIcZCcfMTNR63p2yVHZ6LG1ISRqGtclgXtW-1l34cVx3Nuw7XgorUpXKpr8ny5Hlp2crtzGLISfoRrRMHfzcynAgUmkwnYPZqKh6xiFUcT898ukZvupNzIWTSTu2QEVWX_ZL0">
            </div>
        </div>
    </section>

    <!-- Feature 3: Blue Curacao -->
    <section class="py-section-gap px-margin-mobile md:px-margin-desktop relative overflow-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-radial-gradient from-primary/5 to-transparent blur-3xl pointer-events-none transition-all duration-1000 opacity-100"></div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center transition-all duration-1000 opacity-150">
            <div class="mb-12 md:mb-0 flex justify-center">
                <img alt="Blue Curacao Drink" class="w-64 h-64 md:w-80 md:h-80 object-contain floating-anim" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGh65JNicV2rSdOtHK-orBw9BGDjSxIZZCe9VLZoK2Pz1kvYTi3xgOON-UGv1IHeVvnr-kZXqq4gLKqL9x6X7mPKVeTmp7LTIebOY36MZYlyxtFwPaCfiGHSUW1XvErksrU8i6nmI2yLnU_9ogTo39IDB0W2qmTQ4rWbCvLP1lvooGwrDwEzaSK2-Cn5LVdaxUj4Aj3c1_lrjKCuW-qiePZoM_HHzlZn8O5Moj2wXL924ABVOS8Gy7Rg">
            </div>
            <div class="space-y-6 text-center md:text-left max-w-md mx-auto md:mx-0">
                <span class="font-label-sm text-label-sm text-tertiary-fixed-dim tracking-[0.2em]">ELIXIR COLLECTION</span>
                <h2 class="font-headline-lg text-headline-lg-mobile md:text-[40px] text-primary">Neon Cobalt Curacao</h2>
                <p class="text-on-surface-variant font-body-md md:font-body-lg max-w-sm mx-auto md:mx-0">
                    A vibrant, glowing masterpiece of mixology. Perfectly chilled, citrus-forward, and designed to balance the bold spices of our signature Sempol.
                </p>
                <button class="border border-primary-container text-primary-container font-label-sm text-label-sm py-4 px-8 tracking-widest hover:bg-white/5 transition-all">
                    VIEW DRINKS
                </button>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface-container-highest">
        <div class="max-w-7xl mx-auto transition-all duration-1000 opacity-150">
            <div class="text-center mb-16">
                <h2 class="font-headline-lg text-headline-lg-mobile md:text-[40px] text-primary mb-2">Curated Menu</h2>
                <div class="h-1 w-8 bg-primary mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 max-w-5xl mx-auto">
                <!-- Menu Category 1 -->
                <div>
                    <h3 class="font-label-sm text-label-sm text-primary/40 mb-6 uppercase tracking-widest border-b border-primary/10 pb-4">Main Delights</h3>
                    <ul class="space-y-8">
                        <li class="flex flex-col">
                            <div class="flex items-end justify-between mb-1">
                                <span class="font-headline-md text-headline-md text-primary">Signature Sempol</span>
                                <div class="dotted-leader"></div>
                                <span class="font-body-md text-primary-fixed">45</span>
                            </div>
                            <p class="text-on-surface-variant/60 text-sm">Expertly minced and seasoned with heritage spices, our Signature Sempol is deep-fried to a golden crisp and served on traditional bamboo skewers with our house-made spicy sambal.</p>
                        </li>
                        <li class="flex flex-col">
                            <div class="flex items-end justify-between mb-1">
                                <span class="font-headline-md text-headline-md text-primary">Nasi Daun Jeruk</span>
                                <div class="dotted-leader"></div>
                                <span class="font-body-md text-primary-fixed">65</span>
                            </div>
                            <p class="text-on-surface-variant/60 text-sm">Lime leaf infused rice with premium crispy chicken leg.</p>
                        </li>
                    </ul>
                </div>
                <!-- Menu Category 2 -->
                <div>
                    <h3 class="font-label-sm text-label-sm text-primary/40 mb-6 uppercase tracking-widest border-b border-primary/10 pb-4">Cooling Refreshments</h3>
                    <ul class="space-y-8">
                        <li class="flex flex-col">
                            <div class="flex items-end justify-between mb-1">
                                <span class="font-headline-md text-headline-md text-primary">Blue Curacao</span>
                                <div class="dotted-leader"></div>
                                <span class="font-body-md text-primary-fixed">38</span>
                            </div>
                            <p class="text-on-surface-variant/60 text-sm">Signature citrus glow with crushed ice and lemon zest.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<footer class="w-full pt-section-gap pb-8 bg-surface-container-lowest border-t border-on-surface/5">
    <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-desktop flex flex-col md:flex-row items-center md:items-start justify-between gap-12">
        <div class="text-center md:text-left">
            <div class="font-headline-lg text-headline-lg md:text-[32px] text-primary mb-4 tracking-widest">BITE &amp; GO</div>
            <p class="font-label-sm text-label-sm text-on-surface-variant/60 tracking-widest max-w-xs mx-auto md:mx-0">
                GOURMET ASIAN FUSION <br> SEMPOL & RICE DELIGHTS
            </p>
        </div>
        <nav class="flex flex-wrap justify-center md:justify-end gap-6 md:gap-8">
            <a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors uppercase tracking-widest" href="{{ route('home') }}">MENU</a>
            <a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors uppercase tracking-widest" href="{{ route('about') }}">MENGENAI TIM KAMI</a>
            <a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors uppercase tracking-widest" href="{{ route('contact') }}">KONTAK</a>
        </nav>
    </div>
    <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-desktop mt-16 pt-8 border-t border-on-surface/10 flex flex-col md:flex-row items-center justify-between gap-6">
        <p class="font-label-sm text-label-sm text-on-surface-variant/40 text-center md:text-left uppercase tracking-tighter">
            &copy; {{ date('Y') }} BITE &amp; GO GOURMET ASIAN FUSION. ALL RIGHTS RESERVED.
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

    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100');
                entry.target.classList.remove('opacity-0', 'translate-y-10');
            }
        });
    }, observerOptions);

    document.querySelectorAll('section > div').forEach(el => {
        el.classList.add('transition-all', 'duration-1000', 'opacity-0', 'translate-y-10');
        observer.observe(el);
    });
</script>

</body>
</html>