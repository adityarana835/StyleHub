<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Purchase!</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.css" rel="stylesheet">
</head>
<style>
body {
    width:100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: url('../images/Background.webp') no-repeat ;
    background-size: cover;

}
.tmsg{
    font-size: 3rem;
    color:orangered;
}
.info{
    background-color: #737475;

}
.btn{
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
.msg{
    background-color: rgba(0,0,0,0.3);
    transition: all 0.4s ease;
}
.msg:hover{
    box-shadow: inset 0 0 10px white;
}
.min-container{
    background: linear-gradient(to right, #5e5f60, rgba(22, 19, 16, 0.9));
    box-shadow: 0 0 25px rgba(0 ,0,0,.9);
}
.logo
{
    position: absolute;
    top : 0rem;
    font-size: 4.8rem;
    font-weight: 700;
    color: white;
    transition: all 0.4s ease;
    margin-bottom: .2rem;
    text-shadow: 0 0 19px rgba(0,0,0,1);
    border-radius: 2rem;

}
.logo:hover{
    text-shadow: 0 0 29px rgba(255,255,255,0.8);
    transform: scale(1.1);
}
.logo a span{
    color: rgba(186,97,0,.9);
    font-size: 5rem;
}
</style>

<body class="bg-gray-100">
<div class="logo">
                    <a href="/"><span>S</span>tyle<span>h</span>ub</a>
                </div>
    <!-- Confirmation Container -->
    <div class="container mx-auto p-6">
        <div class="min-container p-8 rounded-lg shadow-md max-w-lg mx-auto text-center">

            <!-- Thank You Message -->
            <p class="tmsg text-4xl font-bold  mb-4">🎉Thank You!🎉</p>
            <p class="text-lg text-white-600 mb-6">We appreciate your business. Your order is confirmed! 🛍️</p>

            <!-- Billing Information -->
            <div class="msg p-4 rounded-lg shadow-inner mb-6 info">
                <h3 class="text-2xl font-semibold mb-4">📦 Billing Information</h3>

                <!-- Customer Name -->
                <p class="text-lg font-medium mb-2">👤 Name: <span class="font-semibold">{{ $name }}</span></p>

                <!-- Customer Address -->
                <p class="text-lg font-medium mb-2">🏠 Address: <span class="font-semibold">{{ $address }}</span></p>

                <!-- Total Items -->
                <p class="text-lg font-medium mb-2">🛒 Total Items: <span class="font-semibold">{{ $total_items }}</span></p>

                <!-- Total Price -->
                <p class="text-lg font-medium mb-2">💵 Total Price: <span class="font-semibold">{{ $total_price }}</span></p>

                <!-- Customer Contact Number -->
                <p class="text-lg font-medium">📞 Contact Number: <span class="font-semibold">{{ $phone }}</span></p>
            </div>

            <!-- Interactive Thank You Emojis -->
            <div class="mb-6">
                <p class="text-xl font-semibold text-white-700">You're awesome! 🎉 🙌 😄</p>
                <p class="text-md text-white-500">Your order is on its way! 🚚</p>
            </div>

            <!-- Back to Home Button -->
            <form method="get" action="check">
                @csrf
            <div class="text-center">
                <button class="btn  w-full">🏠 Back to Home</button>
            </div>
        </form>
        </div>
    </div>

</body>

</html>