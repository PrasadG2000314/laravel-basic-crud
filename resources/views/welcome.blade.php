@extends('layouts.navigation')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body>
    <div>
        <header>


        <header class="bg-gray-800 fixed w-full top-0 z-50">
    <nav class="container mx-auto px-6 py-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <a href="/" class="text-white text-xl font-bold">Your Logo</a>
            </div>

            @if (Route::has('login'))
                <div class="flex items-center space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                           class="text-white hover:bg-gray-700 px-3 py-2 rounded-md">
                           Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                           class="text-white hover:bg-gray-700 px-3 py-2 rounded-md">
                           Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                               class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
                               Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
              </div>
              </nav>
         </header>




        </header>

        <div class="waterfall-container">
    <div class="hero-section">
        <div id="particles-bg"></div>
        <div class="hero-content">
            <h1>Discover the Flow</h1>
            <p>Explore our cascading collection</p>
        </div>
    </div>

    <div class="waterfall-grid" id="product-waterfall">
        <!-- Products will be dynamically loaded here -->
    </div>
</div>

<style>
    .waterfall-container {
        min-height: 100vh;
        overflow: hidden;
    }

    .hero-section {
        height: 100vh;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(45deg, #1a237e, #0d47a1);
    }

    #particles-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .hero-content {
        text-align: center;
        z-index: 2;
        color: #fff;
        animation: fadeInUp 1s ease-out;
    }

    .hero-content h1 {
        font-size: 4rem;
        margin-bottom: 1rem;
        background: linear-gradient(to right, #fff, #64b5f6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .waterfall-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        padding: 20px;
        background: var(--dark);
    }

    .product-card {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        overflow: hidden;
        transform: translateY(50px);
        opacity: 0;
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .product-card.visible {
        transform: translateY(0);
        opacity: 1;
    }

    .product-image {
        position: relative;
        padding-top: 100%;
        overflow: hidden;
    }

    .product-image img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .product-card:hover .product-image img {
        transform: scale(1.1);
    }

    .product-info {
        padding: 20px;
        background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
    }

    .product-title {
        font-size: 1.2rem;
        color: #fff;
        margin-bottom: 10px;
    }

    .product-price {
        color: var(--secondary);
        font-size: 1.5rem;
        font-weight: bold;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
    }

    .floating {
        animation: float 3s ease-in-out infinite;
    }
</style>





        <footer>

        </footer>
    </div>
</body>


</html>
