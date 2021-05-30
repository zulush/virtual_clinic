@extends('layouts.front')

@section('content')

    <main class="l-main">
        <!--========== HOME ==========-->
        <section class="home" id="home">
            <div class="home__container bd-container bd-grid">
                <div class="home__img">
                    <img src="{{ URL::asset('img/frontend/doctor.png') }}" alt="">
                </div>

                <div class="home__data">
                    <h1 class="home__title">Lorem ipsum dolor sit</h1>
                    <p class="home__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis omnis veritatis alias distinctio necessitatibus minima dignissimos dolores soluta, laborum voluptas, temporibus accusamus.</p>
                    <a href="#" class="button">Get Started</a>
                </div>   
            </div>
        </section>

        <!--========== services ==========-->
        <section class="services section bd-container" id="services">
            <h2 class="section-title">Services</h2>
            <div class="services__container bd-grid">
                <div class="services__data">
                    <img src="{{ URL::asset('img/frontend/service.png') }}" alt="" class="services__img">
                    <h3 class="services__title">Lorem lorem</h3>
                    <p class="button button-link">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>

                <div class="services__data">
                    <img src="{{ URL::asset('img/frontend/service.png') }}" alt="" class="services__img">
                    <h3 class="services__title">Lorem lorem</h3>
                    <p class="button button-link">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>

                <div class="services__data">
                    <img src="{{ URL::asset('img/frontend/service.png') }}" alt="" class="services__img">
                    <h3 class="services__title">Lorem lorem</h3>
                    <p class="button button-link">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>

                <div class="services__data">
                    <img src="{{ URL::asset('img/frontend/service.png') }}" alt="" class="services__img">
                    <h3 class="services__title">Lorem lorem</h3>
                    <p class="button button-link">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </section>

        <!--========== About Us ==========-->
        <section class="about section" id="about__us">
            <div class="about__container bd-container bd-grid">
                <div class="about__content">
                    <h2 class="section-title-center about__title">About us</h2>
                    <p class="about__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Vitae, a molestias voluptatem ullam impedit accusamus atque laboriosam ad animi 
                        explicabo illum suscipit aut tenetur quaerat veniam! Aut eveniet repellat dicta?</p>
                </div>

                <div class="about__img">
                    <img src="{{ URL::asset('img/frontend/aboutus.png') }}" alt="">
                </div>
            </div>
        </section>

    </main>

@endsection