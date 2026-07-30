@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <span class="hero-tag">
                    🌿 Enak • Murah • Mengenyangkan
                </span>

                <h1>
                    Nikmati Cita Rasa <br>
                    yang Siap Menemani Harimu.
                </h1>

                <p>
                    Bite & Go menghadirkan sempol gurih,
                    nasi daun jeruk ayam goreng bawang putih,
                    dan minuman soda segar yang cocok dinikmati kapan saja.
                </p>

                <a href="#menu" class="btn-custom">
                    Lihat Menu →
                </a>

            </div>

            <div class="col-lg-6 text-center">

                <img
                    src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=900"
                    alt="Hero"
                    class="img-fluid hero-image">

            </div>

        </div>

    </div>

</section>

<!-- Pembatas -->
<div class="section-divider"></div>

<!-- Best Seller -->
<section class="best-seller py-5" id="menu">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-tag">
                OUR MENU
            </span>

            <h2 class="section-title">
                Best Seller
            </h2>

            <p class="section-subtitle">
                Tiga menu favorit yang siap menemani harimu.
            </p>

        </div>

        <div class="row g-4">

            <!-- Sempol -->
            <div class="col-lg-4">

                <div class="product-card">

                    <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?w=700"
                        class="img-fluid">

                    <h4>Sempol</h4>

                    <p>
                        Sempol ayam gurih dengan saus pilihan yang bikin nagih.
                    </p>

                    <div class="price">
                        Rp10.000
                    </div>

                </div>

            </div>

            <!-- Nasi -->
            <div class="col-lg-4">

                <div class="product-card">

                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=700"
                        class="img-fluid">

                    <h4>Nasi Daun Jeruk</h4>

                    <p>
                        Ayam goreng bawang putih dipadukan nasi daun jeruk yang harum.
                    </p>

                    <div class="price">
                        Rp18.000
                    </div>

                </div>

            </div>

            <!-- Soda -->
            <div class="col-lg-4">

                <div class="product-card">

                    <img src="https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?w=700"
                        class="img-fluid">

                    <h4>Fresh Soda</h4>

                    <p>
                        Minuman soda segar dengan berbagai pilihan rasa.
                    </p>

                    <div class="price">
                        Rp8.000
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection