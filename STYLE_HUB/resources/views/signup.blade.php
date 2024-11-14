<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
  <style>
   <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      width: 100%;
      height: 100vh;
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
      max-width: 1050px;
      height: auto;
      padding: 20px;
      background: linear-gradient(to right, #5e5f60, rgba(22, 19, 16, 0.9)); /* Updated gradient */
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.9);
      border-radius: 10px;
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
      padding: 20px;
      border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
      border-top-left-radius: 0px;
      border-bottom-left-radius: 0px;
      background-color: rgba(32, 31, 31, 0.8); /* Slightly darker background for better contrast */
      color: #ffffff;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .signup_btn {
      width: 100%;
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

    .logo {
      position: absolute;
      top: 0rem;
      font-size: 4.8rem;
      font-weight: 700;
      color: white;
      transition: all 0.4s ease;
      margin-bottom: .2rem;
      text-shadow: 0 0 19px rgba(0, 0, 0, 1);
      border-radius: 2rem;
    }

    .logo:hover {
      text-shadow: 0 0 29px rgba(255, 255, 255, 0.8);
      transform: scale(1.1);
    }

    .logo a span {
      color: rgba(186, 97, 0, .9);
      font-size: 5rem;
    }

    @media (max-width: 1024px) {
      .main-container {
        grid-template-columns: 1fr;
        width: 100%;
        max-width: 650px;
      }

      .poster-img {
        display: none;
      }

      .card {
        border-radius: 10px;
      }
    }
  </style>
</head>
<body>
<div class="logo">
                    <a href="/"><span>S</span>tyle<span>h</span>ub</a>
                </div>
  <div class="main-container">
    <!-- Poster Section -->
    <div class="poster">
      <img src="../images/Background.webp" alt="poster" class="poster-img">
    </div>

    <!-- Signup Form Section -->
    <div class="form-wrapper">
      <div class="card bg-base-100 shadow-xl">
        <form method="post" action="">
          @csrf
          <div class="card-body">
            <h2 class="card-title justify-center text-2xl font-bold">Sign Up</h2>

            <div class="grid grid-cols-1 gap-4">
              <!-- Email Input -->
              <div class="form-control">
                <label for="email1" class="label">
                  <span class="label-text">Email</span>
                </label>
                <input id="email1" type="email" name="email1" placeholder="Enter your email" class="input input-bordered" required />
              </div>

              <!-- Password Input -->
              <div class="form-control">
                <label for="password1" class="label">
                  <span class="label-text">Password</span>
                </label>
                <input id="password1" type="password" name="password1" placeholder="Enter your password" class="input input-bordered" required />
              </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
              <!-- Shop ID Input -->
              <div class="form-control">
                <label for="shopid" class="label">
                  <span class="label-text">Admin ID</span>
                </label>
                <input id="shopid" type="text" name="shopid" placeholder="Enter your ID" class="input input-bordered" required />
              </div>

              <!-- Shop Name Input -->
              <div class="form-control">
                <label for="shopname" class="label">
                  <span class="label-text">Shop Name</span>
                </label>
                <input id="shopname" type="text" name="shopname" placeholder="Enter your shop name" class="input input-bordered" required />
              </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
              <!-- Shop Contact Number Input -->
              <div class="form-control">
                <label for="contact" class="label">
                  <span class="label-text">Shop Contact Number</span>
                </label>
                <input id="contact" type="tel" name="contact" placeholder="Enter contact number" class="input input-bordered" required />
              </div>

              <!-- Shop Address Input -->
              <div class="form-control">
                <label for="shopaddress" class="label">
                  <span class="label-text">Shop Address</span>
                </label>
                <textarea id="shopaddress" name="shopaddress" placeholder="Enter shop address" class="textarea textarea-bordered" required></textarea>
              </div>
            </div>

            <!-- Submit Button -->
            <div class="form-control mt-6">
              <button class="signup_btn">Sign Up</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>