<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product</title>
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
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: url('../images/Background.webp');
    background-repeat: no-repeat;
    background-size: cover;

  }

  .main-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0px;
    width: 800px;
    padding: 20px;
    height:auto;
    background:linear-gradient(to right, #5e5f60, rgba(22, 19, 16, 0.9));
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
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
    padding: 5px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    border-top-left-radius: 0px;
    border-bottom-left-radius: 0px;
    color:#ffffff;
    background-color: rgba(32, 31, 31, 0.6);
    opacity: 0.9;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  }
  .submit_btn {
    width: 100%;
    padding: 10px;
    border-radius: 10px;
    background-color: #12232A;
    color: #ffffff;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
  }
  .submit_btn:hover {
    background-color:#007DFE;
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
    text-shadow: 0 0 19px rgba(255,255,255,1);
    border-radius: 2rem;

}
.logo:hover{
    text-shadow: 0 0 29px black;
    transform: scale(1.1);
}
.logo a span{
    color: rgba(186,97,0,.9);
    font-size: 5rem;
}
  @media (max-width: 768px) {
    .main-container {
      grid-template-columns: 1fr;
      width: 100%;
      gap:10px;
    }
    .poster-img {
      display: none;
    }
    .card {
      width: 100%;
      padding: 10px;
      border-radius: 10px;
    }
    .label-text{
        color:#ffffff;
    }
    body{
        background-image: url('../images/Background.webp');
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

    <!-- Submit Product Form Section -->
    <div class="form-wrapper">
      <div class="card bg-base-100 shadow-xl">
        <form method="post" action="">
          @csrf
          <div class="card-body">
            <h2 class="card-title justify-center text-2xl font-bold">Add Product</h2>

            <!-- Name Input -->
            <div class="form-control">
              <label class="label">
                <span class="label-text">Name of Item</span>
              </label>
              <input type="text" name="name" placeholder="Enter the product name" class="input input-bordered" required />
            </div>

            <!-- Price Input -->
            <div class="form-control">
              <label class="label">
                <span class="label-text">Price</span>
              </label>
              <input type="text" name="price" placeholder="Enter the price" class="input input-bordered" required />
            </div>

            <!-- Type Input -->
            <div class="form-control">
              <label class="label">
                <span class="label-text">Type of Clothes</span>
              </label>
              <input type="text" name="type" placeholder="Enter the type of product" class="input input-bordered" required />
            </div>

            <!-- Shop ID Input -->
            <div class="form-control">
              <label class="label">
                <span class="label-text">Shop ID</span>
              </label>
              <input type="text" name="shopid" placeholder="Enter the shop ID" class="input input-bordered" required />
            </div>

            <!-- Photo URL Input -->
            <div class="form-control">
              <label class="label">
                <span class="label-text">Upload Photo URL</span>
              </label>
              <input type="text" name="photo" placeholder="Enter photo URL" class="input input-bordered" required />
            </div>

            <!-- Submit Button -->
            <div class="form-control mt-6">
              <button class="submit_btn">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>