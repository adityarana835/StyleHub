<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>StyleHub™</title>
    <!-- Import Heroicons for cart symbol -->
    <script src="https://unpkg.com/heroicons@1.0.6/dist/heroicons.min.js"></script>
</head>
<style>
/* General */
body {
    margin: 0;
    padding: 0;
    font-family: 'Nunito', sans-serif;
    background-color: #f3f4f6;
    width: 100%;
    height: 100%;
    background: url('../images/Background.webp');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}

/* Navbar */
.navbar {
    background: linear-gradient(to right, #5e5f60, rgba(22, 19, 16, 0.9));
    width: 100%;
    box-shadow: 0 0 20px black;
    position: sticky;
    top: 0;
    z-index: 100;
}

.nav-container {
    width: 100%;
    display: flex;
    justify-content: space-between;
    padding: 0 1.5rem;
}

.logo {
    font-size: 1.6rem;
    font-weight: 700;
    color: white;
    transition: all 0.4s ease;
    margin-bottom: 0.2rem;
    text-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
}

.logo:hover {
    text-shadow: 0 0 5px rgba(186, 97, 0, 0.9);
    transform: scale(1.1);
}

.logo a span {
    color: rgba(186, 97, 0, 0.9);
    font-size: 2.2rem;
}

.btn {
    background-color: #fffde4;
    color: #005aa7;
    padding: 0.5rem 1rem;
    border-radius: 0.5rem;
    transition: all 0.4s ease;
    border: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
}

.btn:hover {
    background-color: rgba(186, 97, 0, 0.9);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
    color: #fffde4;
}

.heading {
    width: 100%;
    text-align: center;
    font-size: xx-large;
    margin: 0.5rem 0;
}

.container {
    height: 94vh;
}

/* Card */
.card {
    background-color: white;
    border-radius: 1rem;
    overflow: hidden;
    box-sizing: border-box;
    transition: all 0.4s ease;
    box-shadow: 0 0 14px rgba(0, 0, 0, 0.7);
    opacity: 0.8;
}

.card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border: 2px solid rgba(52, 51, 51, 1);
    transition: all 0.7s ease;
}

.card img:hover {
    padding: 0.3rem;
}

.card-body {
    padding: 1rem;
}

.card-title {
    font-size: 1.2rem;
    font-weight: 700;
    text-align: center;
    color: rgba(52, 51, 51, 1);
    margin: 0 auto;
}

.card p {
    font-size: 1rem;
    color: rgba(52, 51, 51, 1);
    font-weight: 700;
}

.card:hover {
    transform: scale(1.01);
    opacity: 1;
}

/* Footer */
footer {
    background: linear-gradient(to right, #5e5f60, rgba(22, 19, 16, 0.9));
    color: white;
    text-align: center;
    padding: 0.7rem 0;
    font-size: 2rem;
    font-weight: 900;
    bottom: 0;
    width: 100%;
    margin-top: 2rem;
}

footer .text-sm {
    font-size: 1rem;
    color: white;
}

footer ul {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

footer ul li a {
    color: white;
    text-decoration: none;
    margin: 0 1rem;
    font-size: 1rem;
    font-weight: 500;
}

footer ul li a:hover {
    text-decoration: underline;
    color: #fffde4;
}

    </style>

<body>

    <div">
        <!-- Navigation Bar -->
        <nav class="navbar">
            <div class="nav-container">
                <!-- Left: Brand Name -->
                <div class="logo">
                    <a href="/"><span>S</span>tyle<span>h</span>ub</a>
                </div>

                <!-- Right: Cart Icon -->
                <div class="logo">
                    <a href="addtokart" class=" flex items-center">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
</svg>


                        </svg>
                        <span class="ml-1 text-2xl font-bold cart">Cart</span>
                    </a>
                    <!-- Optional: Display Cart Items Count -->
                    {{-- <span class="absolute top-0 right-0 bg-red-500 text-white rounded-full text-xs px-2 py-0.5">3</span> --}}
                </div>
            </div>
        </nav>

        <!-- Page Title -->
        <h1 class=" heading ">Available Products</h1>

        <!-- Centering the grid using flex utilities -->
        <div class="flex justify-center items-center">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach($flowers as $flower)
                <div class="card bg-white h-96 w-80 shadow-xl rounded-lg overflow-hidden">
                    <figure class="px-10 pt-10">
                        <img src="{{$flower->Photo}}" alt="{{$flower->Name}}" class="w-full h-48 object-cover rounded-lg shadow-xl" />
                    </figure>
                    <div class="card-body text-center">
                        <h2 class="card-title text-lg font-bold">{{$flower->Name}}</h2>
                        <p class="text-gray-500">Price: ${{$flower->Price}}</p>
                        <form method="post" action="addtokart/{{$flower->Product_ID}}">
                            @csrf
                            <div class="flex justify-center mt-4">
                                <button type="submit" class="btn flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.343 2H20l.752-2H21M5 8h16l-1.5 10H6.5L5 8z" />
                                    </svg>
                                    Add to Cart
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


<footer class=" w-full">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-white-500 sm:text-center dark:text-white-400">© 2024 <a href="#" >StyleHub™</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-white-500 dark:text-white-400 sm:mt-0">
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


</body>

</html>