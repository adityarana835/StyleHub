<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>StyleHub</title>
    <script src="https://unpkg.com/heroicons@1.0.6/dist/heroicons.min.js"></script>
</head>
<style>
    body{
    margin: 0;
    padding: 0;
    font-family: 'Nunito', sans-serif;
    background-color: #f3f4f6;
    width: 100%;
    min-height: 100vh;
    background:url('../images/Background.webp');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;

}
    .navbar {
    background: linear-gradient(to right, #5e5f60, rgba(22, 19, 16, 0.9));
    width: 100%;
    padding: .7rem 0;
    box-shadow: 0 0 20px black;
    position: sticky;
    top: 0;
    z-index: 100;

}
.nav-container{
    width: 100%;
    display: flex;
    justify-content: space-between;
    padding: 0 1.5rem;

}
.logo
{
    font-size: 1.6rem;
    font-weight: 700;
    color: white;
    transition: all 0.4s ease;
    margin-bottom: .2rem;
    text-shadow: 0 0 10px rgba(0,0,0,0.7);

}

.center-nav{
    font-size: 1.2rem;
    font-weight: 500;
    color: white;
    transition: all 0.4s ease;
    margin-bottom: .2rem;
    text-shadow: 0 0 10px rgba(0,0,0,0.7);
}
.center-nav a{
    color: white;
    transition: all 0.4s ease;
}
.center-nav a:hover{
    text-shadow: 0 0 5px rgba(186,97,0,.9);
    transform: scale(1.1);
}
.logo:hover{
    text-shadow: 0 0 5px rgba(186,97,0,.9);
    transform: scale(1.1);
}
.logo a span{
    color: rgba(186,97,0,.9);
    font-size: 2.2rem;
}
.btn{
    min-width: 8rem;
    background-color: #fffde4;
    color: #005aa7;
    padding: .5rem 1rem;
    border-radius: .5rem;
    transition: all 0.4s ease;
    border: none;
    box-shadow: 0 0 10px rgba(0,0,0,0.7);
}
.btn:hover{
    background-color: rgba(186,97,0,.9);
    box-shadow: 0 0 10px rgba(0,0,0,0.7);
    color:#fffde4
}

.card{
    background-color: white;
    border-radius: 1rem;
    overflow: hidden;
    box-sizing: border-box;
    transition: all 0.4s ease;
    box-shadow: 0 0 14px rgba(0,0,0,0.7);
    opacity: 0.8;
}
.card img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    border: 2px solid rgba(52,51,51,1);
    transition: all 0.7s ease;
}
.card img:hover{
    padding: .3rem;
}
.card-body{
    padding: 1rem;
}
.card-title{
    font-size: 1.2rem;
    font-weight: 700;
    text-align: center;
    color: rgba(52,51,51,1);
    margin: 0 auto;
}
.card p{
    font-size: 1rem;
    color: rgba(52,51,51,1);
    font-weight: 700;
}

.card:hover{
    transform: scale(1.01);
    opacity: 1;
}
footer{
    background: linear-gradient(to right, #5e5f60, rgba(22, 19, 16, 0.9));
    color: white;
    padding: .7rem 0;
    box-shadow: 0 -5px 10px rgba(0,0,0,0.7);
    bottom: 0;
    margin-top: 1.5rem;
    width: 100%;

}
.user{
    display: flex;
    justify-content: space-around;
}
.user p{
    font-size: 1.2rem;
    font-weight: 700;
    color: white;
    text-shadow: 0 0 10px rgba(0,0,0,0.7);
    transition: all 0.4s ease;
}
.user p:hover{
    text-shadow: 0 0 5px rgba(186,97,0,.9);
    transform: scale(1.1);

}
    </style>
<body>
<div >
    <!-- resources/views/components/navbar.blade.php -->

    <nav class="navbar">
        <div class="nav-container ">
            <!-- Leftmost: Brand Name -->
            <div class="logo">
                    <a href="/"><span>S</span>tyle<span>h</span>ub</a>
                </div>
            </div>

            <!-- Center: Navigation Links -->
            <div class=" center-nav space-x-8 hidden md:flex mr-3">
                <a href="" class="text-white-600">Casuals</a>
                <a href="" class="text-white-600">Sports</a>
                <a href="" class="text-white-600">Formal</a>
            </div>

            <!-- Rightmost: Cart and User Icons -->
            <div class="flex space-x-4 items-center mr-5">
                <form method="get" action="{{route('save_flower')}}">
                    @csrf
                <button type="submit" class="btn">Add Product</button>
                </form>


                <form method="get" action="{{route('loginpage')}}">
                    @csrf
                <button type="submit" class="btn">Log Out</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Centering the grid using flex utilities -->
    <div class="flex justify-center items-center mt-9">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($flowers as $flower)
            <div class="card bg-base-100 h-96 w-96 shadow-xl">
                <figure class="px-10 pt-10">
                  <img
                    src={{$flower->Photo}}
                    alt={{$flower->Name}}
                    class="w-full h-48 object-cover rounded-lg" />
                </figure>
                <div class="card-body items-center text-center">
                  <h2 class="card-title">{{$flower->Name}}</h2>
                  <p>Price : {{$flower->Price}}</p>
  <div class="flex justify-between">
    <form method="get" action="shopping/{{$flower->SHOP_ID}}/{{$flower->Product_ID}}">
        <div class="card-actions">
          <button class="btn btn-primary">Delete</button>
        </div>
      </form>
    </div>


                </div>
              </div>
            @endforeach
        </div>
    </div>
</div>
</body>
    <footer >
        <div class="foot-container">
            <div class="user">
            @foreach($data as $data)

                    <!-- Shop Name -->

                    <p class="flex m-1 gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
</svg>

                    {{$data->Shop_Name}}</p>

                    <!-- Shop Address -->
                    <p class="flex m-1 gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
</svg>

                       {{$data->Shop_Address}}
                    </p>

                    <!-- Phone Number -->
                    <p class="flex m-1 gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 ">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
</svg>

                        {{$data->Contact_Number}}
                    </p>

            @endforeach
        </div>
        <div class="side">

        </div>
    </div>
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


</html>