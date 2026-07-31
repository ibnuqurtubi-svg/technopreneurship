<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bite & Go</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            dark: '#0a1d13',     /* Deep Forest Green Background */
                            card: '#122e20',     /* Slightly lighter green for cards */
                            cream: '#f4ebd0',    /* Warm Cream Accent */
                            creamMuted: '#d8cdb0',
                            gold: '#d4af37',     /* Gold Accent */
                            accent: '#1e4d35'
                        }
                    },
                    fontFamily: {
                        serif: ['Playfair Display', 'Georgia', 'serif'],
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #0a1d13;
            color: #f4ebd0;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .heading-serif {
            font-family: 'Playfair Display', serif;
        }
        .bg-hero-glow {
            background: radial-gradient(circle at 50% 30%, rgba(30, 77, 53, 0.6) 0%, rgba(10, 29, 19, 0.95) 70%);
        }
        .card-blur {
            background: rgba(18, 46, 32, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(244, 235, 208, 0.15);
        }
    </style>
</head>
<body class="antialiased selection:bg-brand-gold selection:text-brand-dark">

    <?php
    // Structured Menu Data for Mutiara Rasa
    $heroContent = [
        "tagline" => "Bite & Go",
        "title" => "Kelezatan Otentik: Sempol Premium",
        "description" => "Sempol ayam cincang berkualitas dengan bumbu rempah pilihan, digoreng renyah bertingkat dengan balutan telur emas, disajikan berdampingan dengan sambal kecap pedas gurih.",
        "button_text" => "Pesan Sekarang",
        "image" => "https://images.unsplash.com/photo-1541544741938-0af808871cc0?auto=format&fit=crop&w=1200&q=80"
    ];

    $featuredMenu = [
        [
            "id" => "sempol",
            "title" => "Sempol Ayam Premium",
            "category" => "Appetizer / Snack",
            "desc" => "Daging ayam cincang gurih dipadu dengan tepung tapioka dan bumbu rahasia, digoreng keemasan.",
            "badge" => "Favorit",
            "image" => "https://images.unsplash.com/photo-1541544741938-0af808871cc0?auto=format&fit=crop&w=600&q=80"
        ],
        [
            "id" => "nasi-ayam",
            "title" => "Nasi Daun Jeruk Ayam Goreng",
            "category" => "Main Course",
            "desc" => "Nasi hangat beraroma daun jeruk nipis segar, ayam goreng renyah bumbu rempah, serta sambal matah.",
            "badge" => "Chef Recommended",
            "image" => "https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?auto=format&fit=crop&w=600&q=80"
        ],
        [
            "id" => "blue-curacao",
            "title" => "Blue Curacao Refresher",
            "category" => "Beverage",
            "desc" => "Minuman penyegar eksotis bergradasi biru dengan sirup Blue Curacao, soda dingin, es batu, dan perasan lemon.",
            "badge" => "Signature Drink",
            "image" => "https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?auto=format&fit=crop&w=600&q=80"
        ]
    ];
    ?>

    <!-- NAVBAR -->
    <header class="sticky top-0 z-50 bg-brand-dark/90 backdrop-blur-md border-b border-brand-cream/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Mobile Menu Button -->
                <div class="flex items-center md:hidden">
                    <button type="button" onclick="toggleMenu()" class="text-brand-cream hover:text-brand-gold focus:outline-none p-2">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>

                <!-- Navigation Links (Left - Desktop) -->
                <nav class="hidden md:flex space-x-8 text-sm font-medium tracking-widest uppercase text-brand-creamMuted">
                    <a href="#home" class="hover:text-brand-gold transition duration-200">Beranda</a>
                    <a href="#menu" class="hover:text-brand-gold transition duration-200">Menu Utama</a>
                </nav>

                <!-- Brand Logo (Center) -->
                <div class="flex-1 md:flex-none text-center">
                    <a href="#" class="inline-block">
                        <span class="heading-serif text-2xl md:text-3xl font-bold tracking-wider text-brand-gold drop-shadow-md">
                            MUTIARA RASA
                        </span>
                        <span class="block text-[9px] uppercase tracking-[0.3em] text-brand-creamMuted -mt-1">
                            Gourmet Asian Cuisine
                        </span>
                    </a>
                </div>

                <!-- Navigation Links (Right - Desktop) -->
                <nav class="hidden md:flex space-x-8 text-sm font-medium tracking-widest uppercase text-brand-creamMuted">
                    <a href="#special" class="hover:text-brand-gold transition duration-200">Spesial</a>
                    <a href="#contact" class="hover:text-brand-gold transition duration-200">Kontak</a>
                </nav>

                <!-- Cart / Action Icon -->
                <div class="flex items-center space-x-4">
                    <a href="#menu" class="p-2 text-brand-cream hover:text-brand-gold transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer -->
        <div id="mobile-menu" class="hidden md:hidden bg-brand-card border-b border-brand-cream/10 px-4 pt-2 pb-6 space-y-3 text-center">
            <a href="#home" class="block py-2 text-brand-cream hover:text-brand-gold font-medium uppercase tracking-wider">Beranda</a>
            <a href="#menu" class="block py-2 text-brand-cream hover:text-brand-gold font-medium uppercase tracking-wider">Menu Utama</a>
            <a href="#special" class="block py-2 text-brand-cream hover:text-brand-gold font-medium uppercase tracking-wider">Spesial</a>
            <a href="#contact" class="block py-2 text-brand-cream hover:text-brand-gold font-medium uppercase tracking-wider">Kontak</a>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section id="home" class="relative min-h-[85vh] flex items-center bg-hero-glow overflow-hidden py-12 lg:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Hero Text -->
                <div class="lg:col-span-6 text-center lg:text-left z-10">
                    <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full border border-brand-gold/40 bg-brand-card/50 text-brand-gold text-xs uppercase tracking-widest mb-6">
                        <span class="w-2 h-2 rounded-full bg-brand-gold"></span>
                        <span><?= $heroContent['tagline'] ?></span>
                    </div>
                    <h1 class="heading-serif text-4xl sm:text-5xl lg:text-6xl font-bold text-brand-cream leading-tight mb-6">
                        <?= $heroContent['title'] ?>
                    </h1>
                    <p class="text-brand-creamMuted text-base sm:text-lg leading-relaxed mb-8 max-w-xl mx-auto lg:mx-0">
                        <?= $heroContent['description'] ?>
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                        <a href="#menu" class="w-full sm:w-auto px-8 py-4 bg-brand-gold hover:bg-yellow-500 text-brand-dark font-semibold rounded-lg tracking-wide transition duration-300 transform hover:-translate-y-0.5 shadow-lg shadow-brand-gold/20 text-center">
                            <?= $heroContent['button_text'] ?>
                        </a>
                        <a href="#special" class="w-full sm:w-auto px-8 py-4 border border-brand-cream/30 hover:border-brand-gold text-brand-cream hover:text-brand-gold font-medium rounded-lg tracking-wide transition duration-300 text-center">
                            Lihat Menu Lain
                        </a>
                    </div>
                </div>

                <!-- Hero Image Holder -->
                <div class="lg:col-span-6 relative z-10">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        <!-- Decorative Backdrop Ring -->
                        <div class="absolute -inset-4 rounded-full bg-brand-gold/10 blur-2xl"></div>
                        <div class="relative rounded-2xl overflow-hidden border border-brand-cream/20 shadow-2xl card-blur p-3">
                            <img src="<?= $heroContent['image'] ?>" alt="Sempol Premium" class="w-full h-[350px] sm:h-[450px] object-cover rounded-xl transform hover:scale-105 transition duration-700">
                            <div class="absolute bottom-6 left-6 right-6 p-4 rounded-lg bg-brand-dark/85 backdrop-blur-md border border-brand-gold/30">
                                <p class="text-xs uppercase tracking-widest text-brand-gold font-semibold">Signature Snack</p>
                                <p class="text-sm text-brand-cream font-serif italic">Disajikan hangat dengan dipping sauce spesial</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FEATURED MENU GRID (3 COLUMNS) -->
    <section id="menu" class="py-20 bg-brand-dark/80 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-brand-gold text-xs uppercase tracking-[0.25em] font-semibold">Pilihan Utama</span>
                <h2 class="heading-serif text-3xl sm:text-4xl font-bold text-brand-cream mt-2">Koleksi Hidangan Utama</h2>
                <div class="w-16 h-0.5 bg-brand-gold mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach ($featuredMenu as $item): ?>
                    <div class="card-blur rounded-2xl overflow-hidden hover:border-brand-gold/50 transition duration-300 group flex flex-col h-full">
                        <div class="relative h-60 overflow-hidden">
                            <img src="<?= $item['image'] ?>" alt="<?= $item['title'] ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                            <div class="absolute top-4 right-4 bg-brand-dark/80 backdrop-blur-md text-brand-gold text-xs px-3 py-1 rounded-full border border-brand-gold/30">
                                <?= $item['badge'] ?>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <span class="text-xs text-brand-gold uppercase tracking-wider mb-1"><?= $item['category'] ?></span>
                            <h3 class="heading-serif text-xl font-bold text-brand-cream mb-3 group-hover:text-brand-gold transition"><?= $item['title'] ?></h3>
                            <p class="text-brand-creamMuted text-sm leading-relaxed mb-6 flex-grow"><?= $item['desc'] ?></p>
                            <div class="pt-4 border-t border-brand-cream/10 flex items-center justify-between">
                                <span class="text-xs text-brand-creamMuted">Porsi Koki</span>
                                <button class="text-sm font-semibold text-brand-gold hover:text-white transition flex items-center gap-1">
                                    Pesan Menu &rarr;
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <!-- HIGHLIGHT SECTION: NASI DAUN JERUK & AYAM GORENG -->
    <section id="special" class="py-20 bg-brand-card/40 border-y border-brand-cream/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Visual Banner -->
                <div class="lg:col-span-6 order-2 lg:order-1">
                    <div class="relative">
                        <div class="absolute -inset-2 bg-brand-gold/20 rounded-2xl blur-xl"></div>
                        <div class="relative rounded-2xl overflow-hidden border border-brand-gold/30">
                            <img src="https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?auto=format&fit=crop&w=1000&q=80" alt="Nasi Daun Jeruk Ayam Goreng" class="w-full h-[400px] object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-dark via-transparent to-transparent"></div>
                            <div class="absolute bottom-6 left-6 right-6">
                                <span class="bg-brand-gold text-brand-dark font-bold text-xs px-3 py-1 rounded uppercase tracking-wider">Spesial Nusantara</span>
                                <h4 class="heading-serif text-2xl text-brand-cream font-bold mt-2">Ayam Goreng Rempah & Nasi Daun Jeruk</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Text Detail -->
                <div class="lg:col-span-6 order-1 lg:order-2">
                    <span class="text-brand-gold text-xs uppercase tracking-[0.25em] font-semibold">Simfoni Rasa Nusantara</span>
                    <h2 class="heading-serif text-3xl sm:text-4xl font-bold text-brand-cream mt-2 mb-6">
                        Perpaduan Aromatik & Gurih Renyah
                    </h2>
                    <p class="text-brand-creamMuted leading-relaxed mb-6">
                        Rasakan keharmonisan cita rasa lokal Indonesia. Nasi hangat yang dimasak bersama daun jeruk nipis segar menghasilkan aroma khas yang membangkitkan selera, disajikan sempurna bersama ayam goreng bumbu kuning yang garing di luar namun lembut di dalam.
                    </p>
                    <ul class="space-y-4 text-sm text-brand-cream mb-8">
                        <li class="flex items-center space-x-3">
                            <span class="w-2 h-2 rounded-full bg-brand-gold"></span>
                            <span>Ayam Goreng Bumbu Ungkep Rempah Tradisional</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="w-2 h-2 rounded-full bg-brand-gold"></span>
                            <span>Nasi Pulen Infusi Daun Jeruk Purut Segar</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="w-2 h-2 rounded-full bg-brand-gold"></span>
                            <span>Pelengkap Sambal Matah & Lalapan Khas Koki</span>
                        </li>
                    </ul>
                    <a href="#contact" class="inline-block px-8 py-3 bg-brand-cream text-brand-dark font-semibold rounded-lg hover:bg-brand-gold transition duration-300">
                        Reservasi / Pesan
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- REFRESHER SECTION: BLUE CURACAO -->
    <section class="py-20 bg-hero-glow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="card-blur rounded-3xl p-8 sm:p-12 border border-brand-gold/30">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-7">
                        <span class="text-cyan-400 text-xs uppercase tracking-widest font-semibold">Beverage Signature</span>
                        <h2 class="heading-serif text-3xl sm:text-4xl font-bold text-brand-cream mt-2 mb-4">
                            Blue Curacao Refresher
                        </h2>
                        <p class="text-brand-creamMuted text-base mb-6">
                            Sempurnakan hidangan gurih Anda dengan kesegaran dingin minuman bergradasi biru eksotis. Kombinasi manis-asam yang seimbang memberikan sensasi pembersih langit-langit mulut yang sempurna setelah menikmati hidangan utama.
                        </p>
                        <div class="inline-flex items-center space-x-4">
                            <span class="text-2xl font-bold text-brand-gold">Rp 28.000</span>
                            <span class="text-xs text-brand-creamMuted uppercase tracking-wider">/ Gelas Tinggi</span>
                        </div>
                    </div>
                    <div class="lg:col-span-5 flex justify-center">
                        <div class="relative w-64 h-64 sm:w-72 sm:h-72 rounded-full overflow-hidden border-4 border-cyan-500/30 shadow-2xl shadow-cyan-500/20">
                            <img src="https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?auto=format&fit=crop&w=600&q=80" alt="Blue Curacao Drink" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="contact" class="bg-brand-dark border-t border-brand-cream/10 pt-16 pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
                <div>
                    <h3 class="heading-serif text-2xl font-bold text-brand-gold mb-4">MUTIARA RASA</h3>
                    <p class="text-brand-creamMuted text-sm leading-relaxed">
                        Menyajikan perpaduan kuliner tradisional Indonesia dengan sentuhan penyajian premium kelas atas.
                    </p>
                </div>
                <div>
                    <h4 class="text-brand-cream font-semibold text-sm uppercase tracking-wider mb-4">Jam Operasional</h4>
                    <p class="text-brand-creamMuted text-sm">Senin - Minggu</p>
                    <p class="text-brand-gold font-medium text-sm mt-1">10.00 - 22.00 WITA</p>
                </div>
                <div>
                    <h4 class="text-brand-cream font-semibold text-sm uppercase tracking-wider mb-4">Lokasi & Kontak</h4>
                    <p class="text-brand-creamMuted text-sm">Jl. Kuliner Gourmet No. 88</p>
                    <p class="text-brand-creamMuted text-sm mt-1">WA: +62 812-3456-7890</p>
                </div>
                <div>
                    <h4 class="text-brand-cream font-semibold text-sm uppercase tracking-wider mb-4">Ikuti Kami</h4>
                    <div class="flex space-x-4 text-brand-creamMuted">
                        <a href="#" class="hover:text-brand-gold transition">Instagram</a>
                        <a href="#" class="hover:text-brand-gold transition">TikTok</a>
                        <a href="#" class="hover:text-brand-gold transition">WhatsApp</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-brand-cream/10 pt-8 text-center text-xs text-brand-creamMuted">
                &copy; <?= date('Y') ?> Mutiara Rasa Gourmet Asian Fusion. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- JavaScript for Mobile Menu Toggle -->
    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>