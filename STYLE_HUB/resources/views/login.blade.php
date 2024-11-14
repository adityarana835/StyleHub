<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    width: 100%;
    height: 98vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: url('../images/Background.webp');
    background-position: center;
    background-size: cover;
}

.main-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0px;
    width: 800px;
    padding: 1rem;
    background: linear-gradient(to right, #5e5f60, rgba(22, 19, 16, 0.9)); /* Updated gradient */
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
}

.poster {
    display: flex;
    justify-content: center;
    align-items: center;
}

.poster-img {
    max-width: 100%;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    object-fit: cover;
    height: 100%;
}

.form-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
}

.card {
    width: 100%;
    padding: 10px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    border-top-left-radius: 0px;
    border-bottom-left-radius: 0px;
    color: #ffffff;
    background-color: rgba(32, 31, 31, 0.8); /* Slightly darker background for better contrast */
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.signup_btn {
    width: 80%;
    margin: 0 auto;
    padding: 10px;
    border-radius: 10px;
    background-color: #ff9800; /* Warm orange for sign-up */
    color: #ffffff;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
}

.signup_btn:hover {
    background-color: #f57c00; /* Darker shade of orange */
}

.homepage_btn {
    width: 80%;
    margin: 0 auto;
    padding: 10px;
    border-radius: 10px;
    background-color: #63A6FF; /* Light blue */
    color: #ffffff;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s;
}

.homepage_btn:hover {
    background-color: #005aa7; /* Darker blue */
}

.login_btn {
    margin: 0 auto;
    width: 80%;
    padding: 10px;
    border-radius: 10px;
    background-color: #005aa7; /* Main brand blue */
    color: #ffffff;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
}

.login_btn:hover {
    background-color: #003f7c; /* Darker blue */
}

.input:hover {
    border: 1px solid #e0e0e0;
}

.logo {
    position: absolute;
    top: 0rem;
    font-size: 5rem;
    font-weight: 700;
    color: white;
    transition: all 0.4s ease;
    margin-bottom: .2rem;
    text-shadow: 0 0 19px rgba(255, 255, 255, 1);
    border-radius: 2rem;
}

.logo:hover {
    text-shadow: 0 0 29px black;
    transform: scale(1.1);
}

.logo a span {
    color: rgba(186, 97, 0, .9);
    font-size: 5.4rem;
}

@media (max-width: 768px) {
    .main-container {
        grid-template-columns: 1fr;
        width: 100%;
        gap: 10px;
    }
    .poster-img {
        display: none;
    }
    .card {
        width: 100%;
        padding: 10px;
        border-radius: 10px;
    }
}

</style>
<body>
<div class="logo">
                    <a href="/"><span>S</span>tyle<span>h</span>ub</a>
                </div>
  <div class="main-container">
    <!-- Poster Section -->
    <div class="poster">
      <img src="../images/Background.webp" alt="poster" class="poster-img">
    </div>

    <!-- Login Form Section -->
    <div class="form-wrapper">
      <div class="card bg-base-100 shadow-xl">
        <form method="post" action="">
          @csrf
          <div class="card-body">
            <h2 class="card-title justify-center text-2xl font-bold">Login</h2>

            <!-- Email Input -->
            <div class="form-control">
              <label class="label">
                <span class="label-text text-white">Email</span>
              </label>
              <input type="email" name="email2" placeholder="Enter your email" class="input " required />
            </div>

            <!-- Password Input -->
            <div class="form-control">
              <label class="label">
                <span class="label-text text-white">Password</span>
              </label>
              <input type="password" name="password2" placeholder="Enter your password" class="input input-bordered" required />
            </div>

            <!-- Shop ID Input -->
            <div class="form-control">
              <label class="label">
                <span class="label-text text-white">Admin ID</span>
              </label>
              <input type="text" name="shopid2" placeholder="Enter your ID" class="input input-bordered" required />
            </div>

            <!-- Submit Button -->
            <div class="form-control mt-6">
              <button class="login_btn">Login</button>
            </div>
          </div>
        </form>

        <!-- Sign Up Button -->
        <form action="signup" method="get">
          @csrf
          <div class="form-control mt-4">
            <button class="signup_btn">Sign Up</button>
          </div>
        </form>

        <!-- Home Page Button -->
        <form action="/" method="get">
          @csrf
          <div class="form-control mt-4">
            <button class="homepage_btn">Home Page</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>