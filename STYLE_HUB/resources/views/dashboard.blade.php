<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart & Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.css" rel="stylesheet">
</head>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background: url('../images/Background.webp');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

    }
    .container{
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .main-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0px;
        max-width: 1200px;
        height: auto;
        width: 100%;
        padding: 20px;
        background:linear-gradient(to right, #5e5f60, rgba(22, 19, 16, 0.9));
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.8);
    }

    h2 {
        color: #ffffff;
        text-align: center;
        margin-bottom: 10px;
    }

    .card {
        padding: 20px;
        background-color:rgba(0, 0, 0, 0.4);
        color: #ffffff;
        border-radius: 10px;
        font-family: 'Arial', sans-serif;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        border-top-left-radius: 0px;
        border-bottom-left-radius: 0px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .cart-items {
    padding: 10px;
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    background-color: rgba(0, 0, 0, 0.4);
    color: #ffffff;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    max-height: 600px; /* Set the maximum height for cart items */
    display: flex;
    flex-direction: column; /* Arrange items vertically */
    justify-content: center; /* Center items vertically */
    align-items: center; /* Center items horizontally */
}

.cart-items-header {
    padding: 10px; /* Add some padding to the header */
    text-align: center; /* Center the header text */
    font-size: 1.5rem; /* Adjust header size */
}

.cart-items-list {
    flex: 1; /* Allow the product list to grow and fill the space */
    overflow-y: auto; /* Enable vertical scrolling */
    width:100%;
}

.cart-items-footer {
    padding: 10px; /* Add padding to the footer */

    width:75%;
    margin-top:1rem;
    border-top: 1px solid #ccc; /* Optional: Add a top border */
}

.cart-items-list::-webkit-scrollbar {
    display: none; /* Chrome, Safari, and Opera */
}

    .cart-items img {
        border-radius: 10px;
        width: 100%;
        max-height: 100px;
        object-fit: cover;
    }

    .btn {
        width: 100%;
        padding: 10px;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
    }

    .btn-primary {
        background-color:orangered;
        color: #ffffff;
    }

    .btn-primary:hover {
        background-color: #3E20B4;
    }

   .btn_secondary {
        background-color: #39c270;
        color: #ffffff;
    }
    .btn_secondary:hover {
        background-color: #5114B9;
    }

    .form-wrapper input,
    .form-wrapper textarea {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 10px;
        background-color: rgba(32, 31, 31, 0.6);
    }
    .form-control textarea{
      max-height: 1.2rem;
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
    text-shadow: 0 0 19px rgba(255,255,255,.4);
    border-radius: 2rem;

}
.logo:hover{
    text-shadow: 0 0 29px rgba(255,255,255,.7);
    transform: scale(1.1);
}
.logo a span{
    color: rgba(186,97,0,.9);
    font-size: 5rem;
}
    @media (max-width: 1024px) {
        .main-container {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {

        .card {
            padding: 10px;
            border-top-right-radius: 0px;
        border-bottom-right-radius: 10px;
        border-top-left-radius: 0px;
        border-bottom-left-radius: 10px;
        }
        .cart-items {
            padding: 10px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 0px;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 0px;
        }

        .cart-items img {
            max-height: 75px;
        }
    }
</style>

<body>
<div class="logo">
                    <a href="/"><span>S</span>tyle<span>h</span>ub</a>
                </div>
    <div class="container mx-auto p-6">
        <!-- Main Container for Cart Items and Checkout Form -->
        <div class="main-container">
            <!-- Cart Items -->
            <div class="cart-items">
                <div class="cart-items-header">
                    <h2 class="text-2xl font-bold mb-6">Your Cart</h2>
                </div>
                <div class="cart-items-list">
                    <div class="grid grid-cols-1 gap-4">
                        @foreach($flowers as $item)
                        <div class="bg-gray-800 p-4 rounded-lg shadow-md flex items-center">
                            <img src="{{$item->photo}}" alt="{{ $item->name }}" class="w-24 h-24 object-cover mr-4 rounded-lg">
                            <div>
                                <p class="font-bold">{{ $item->name }}</p>
                                <p class="text-white">Price: ${{ number_format($item->price, 2) }}</p>
                                <form method="post" action="remove/{{$item->id}}">
                                    @csrf
                                    <button type="submit" class="btn btn-primary mt-2">Remove</button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Total Items and Total Amount -->
                <div class="cart-items-footer bg-gray-800 rounded-lg text-center">
                    <p class="text-lg font-semibold text-white">Total Items: <span class="text-xl">{{ $total_items }}</span></p>
                    <p class="text-lg font-semibold mt-2 text-white">Total Amount: <span class="text-xl text-green-400">${{ number_format($total_price, 2) }}</span></p>
                </div>
            </div>
            <!-- Checkout Form -->
            <div class="form-wrapper card">
                <h2 class="text-2xl font-bold mb-6 text-white">Checkout</h2>
                <form method="post" action="checkout">
                    @csrf
                    <div>
                        <label for="name">Customer Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" required />
                    </div>
                    <div>
                        <label for="address">Customer Address</label>
                        <textarea id="address" name="address" placeholder="Enter your address" required></textarea>
                    </div>
                    <div>
                        <label for="total_items">Total Items</label>
                        <input type="number" id="total_items" name="total_items" value="{{ $total_items }}" readonly />
                    </div>
                    <div>
                        <label for="total_price">Total Price</label>
                        <input type="text" id="total_price" name="total_price" value="${{ number_format($total_price, 2) }}" readonly />
                    </div>
                    <div>
                        <label for="contact">Customer Contact Number</label>
                        <input type="tel" id="contact" name="contact" placeholder="Enter your contact number" pattern="[0-9]{10}" required />
                    </div>
                    <div class="mt-6">
                        @if($total_items > 0)
                        <button class="btn btn_secondary">Place Order</button>
                        @else
                        <button class="btn btn_secondary" disabled>Place Order</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>