<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StyleHub™</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.css" rel="stylesheet">
</head>
<style>

    :root {
        --primary-color: #2b2d42; /* Space gray for accents */
        --secondary-color: #1a1a1d; /* Darker gray for backgrounds */
        --accent-color: #edf2f4; /* Light gray for hover effects and text */
        --background-color: #f7f7f7; /* Light background */
        --text-dark: #2b2d42;
        --text-light: #ffffff;
    }
    
    body {
        background-color: var(--background-color);
        font-family: 'Poppins', sans-serif;
    }
    
    .navbar {
        background: var(--primary-color);
        width: 100%;
        padding: 0.7rem 0;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        position: sticky;
        top: 0;
        z-index: 100;
    }
    
    .nav-container {
        width:100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 1.5rem;
    }


.nav-links {
    margin-left: auto; /* Pushes the login button to the far right */
}

    .logo {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--text-light);
        transition: all 0.3s ease;
    }
    
    .logo a span {
        color: var(--accent-color);
    }
    
    .nav-links {
        display: flex;
        align-items: center;
        gap: 1rem;
    }
    
    .btn {
        background-color: var(--accent-color);
        color: var(--primary-color);
        padding: 0.5rem 1rem;
        border-radius: 0.5rem;
        transition: all 0.3s ease;
        border: none;
        font-weight: 600;
    }
    
    .btn:hover {
        background-color: var(--secondary-color);
        color: var(--text-light);
    }
    
    .banner {
        background-color: var(--primary-color);
        color: var(--text-light);
        padding: 3rem 0;
        text-align: center;
        box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.5);
        min-height: 24rem;
    }
    
    .section-para1 {
        font-size: 3rem;
        font-weight: 700;
        color: var(--text-light);
        text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
    
    .section-para2 {
        font-size: 1.3rem;
        color: var(--text-light);
        font-weight: 500;
    }
    
    #shop {
        background: var(--background-color);
        color: var(--text-dark);
        padding: 2rem 0;
    }
    
    #shop h2 {
        font-size: 2.5rem;
        color: var(--primary-color);
    }
    
    .card {
        background-color: var(--text-light);
        border-radius: 0.5rem;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }
    
    .card:hover {
        transform: scale(1.03);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
    }
    
    .card-body {
        padding: 1rem;
    }
    
    .card-title {
        background-color: var(--primary-color);
        color: var(--text-light);
        padding: 0.5rem;
        font-size: 1.2rem;
        font-weight: 700;
        text-align: center;
        border-radius: 1rem;
        margin-bottom: 1rem;
    }
    
    .card-content {
        font-size: 1rem;
        color: var(--text-dark);
    }
    
    .card img {
        width: 100%;
        height: 16rem;
        object-fit: cover;
        border-radius: 0.5rem;
    }
    
    .contacts {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-top: 2rem;
    }
    
    footer {
        background: var(--secondary-color);
        color: var(--text-light);
        padding: 1.5rem 0;
        text-align: center;
        font-size: 1rem;
        font-weight: 600;
        box-shadow: 0 -4px 12px rgba(0, 0, 0, 0.15);
    }
    
    footer a {
        color: var(--text-light);
        text-decoration: none;
    }
    
    footer a:hover {
        color: var(--accent-color);
    }
    
    
    </style>
    
    
<body class="bg-white text-gray-700">

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container ">
            <div class="nav-container">
            <div class="logo">
                    <a href="/"><span>S</span>tyle<span>h</span>ub</a>
                </div>
                <ul class="flex space-x-6 text-gray-600">
                    <a href="loggin"><button class="btn">Login for Sellers</button></a>
               </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="banner hero">
        <div class="container mx-auto px-4 text-center">
            <h1 class="section-para1">StyleHub™ At Your Doorstep</h1>
            <p class="section-para2">Choose from a wide variety of trendy clothes, perfect for every occasion.</p>
            <a href="shopping"><button class="btn">Shop Now</button></a>
        </div>
    </section>

    <!-- Featured Flowers -->
    <section id="shop" class="py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold">Our Featured Product</h2>
            <p class="mt-2 text-white-600">Explore our top picks of trendy fashion, just for you.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <!-- Flower Card 1 -->
                <div class="card shadow-lg">
                    <figure>
                        <img src="../images/cloth1.png" alt="cloth1" class="w-full h-48 object-cover">
                    </figure>
                    <div class="card-body text-left">
                    <h3 class="card-title">Casual Outfit</h3>
                        <p>Upgrade Your Everyday Wardrobe: Discover Trendy Casual Wear for Every Occasion.</p>
                    </div>
                </div>

                <!-- Flower Card 2 -->
                <div class="card shadow-lg">
                    <figure>
                        <img src="../images/cloth2.png" alt="cloth2" class="w-full h-48 object-cover">
                    </figure>
                    <div class="card-body text-left">
                    <h3 class="card-title">Casual Jacket</h3>
                    <p>Layer Up in Style: Find Your Perfect Casual Jacket for Any Season</p>

                    </div>
                </div>

                <!-- Flower Card 3 -->
                <div class="card shadow-lg">
                    <figure>
                        <img src="../images/cloth3.png" alt="cloth3" class="w-full h-48 object-cover">
                    </figure>
                    <div class="card-body text-left">
                    <h3 class="card-title">Formal Wear</h3>
                    <p>Elevate Your Look: Timeless Formal Wear for Every Occasion</p>

                    </div>
                </div>
                <div class="card shadow-lg">
                    <figure>
                        <img src="../images/cloth4.png" alt="cloth4" class="w-full h-48 object-cover">
                    </figure>
                    <div class="card-body text-left">
                    <h3 class="card-title">Kurti</h3>
                    <p>Embrace Elegance Daily: Discover Our Stylish Kurti Collection</p>

                    </div>
                </div>
                <div class="card shadow-lg">
                    <figure>
                        <img src="../images/cloth5.png" alt="cloth5" class="w-full h-48 object-cover">
                    </figure>
                    <div class="card-body text-left">
                    <h3 class="card-title">Turtleneck and skirt</h3>
                    <p>Perfect Pairings of Turtlenecks and Skirts for Effortless Style</p>

                    </div>
                </div>
                <div class="card shadow-lg">
                    <figure>
                        <img src="../images/cloth6.png" alt="cloth6" class="w-full h-48 object-cover">
                    </figure>
                    <div class="card-body text-left">
                    <h3 class="card-title">Kurta Pyjama</h3>
                    <p>Classic Comfort Meets Style: Explore Our Kurta Pyjama Collection for Every Occasion</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="about" class="banner">
        <div class="container mx-auto px-4 text-center">
            <h2 class="section-para1">Why Choose StyleHub™ ?</h2>
            <div class="h-6"></div>
            <p class="section-para2">We pride ourselves in offering the trendy fashion, hand-delivered with care. Our team of experts are dedicated to creating beautiful pieces for every occasion.</p>
            <div class="contacts">
                <a href="mailto:adityarana835@gmail.com"><button class="btn">Email Us</button></a>
                <a href="tel:+918360546463"><button class="btn">Call Us</button></a>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class=" w-full">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-white-500 sm:text-center dark:text-gray-400">© 2024 <a href="#" >StyleHub™</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-white-500 gap-2 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">About</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
        </li>
        <li>
            <a href="#" class="hover:underline">Contact</a>
        </li>
    </ul>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.js"></script>
</body>
</html>