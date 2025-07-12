<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Product Page - Hoodie</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f2f4f8;
      color: #333;
    }

    .container {
      max-width: 1300px;
      margin: 50px auto;
      padding: 30px;
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
      display: flex;
      flex-wrap: wrap;
      gap: 50px;
    }

    .gallery {
      flex: 1 1 500px;
      display: flex;
      gap: 20px;
    }

    .thumbnails {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .thumbnails img {
      width: 70px;
      height: 70px;
      border-radius: 8px;
      object-fit: cover;
      cursor: pointer;
      border: 2px solid transparent;
      transition: all 0.3s ease;
    }

    .thumbnails img.active,
    .thumbnails img:hover {
      border-color: #007bff;
      transform: scale(1.05);
    }

    .main-image img {
      width: 450px;
      height: 450px;
      border-radius: 12px;
      object-fit: cover;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
      transition: transform 0.3s ease;
      cursor: zoom-in;
    }

    .main-image img:hover {
      transform: scale(1.02);
    }

    .info {
      flex: 1 1 450px;
    }

    .title {
      font-size: 32px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .subtitle {
      font-size: 18px;
      color: #666;
      margin-bottom: 20px;
    }

    .price {
      font-size: 26px;
      font-weight: 600;
      color: #111;
      margin-bottom: 8px;
    }

    .tax {
      font-size: 14px;
      color: #999;
      margin-bottom: 30px;
    }

    .label {
      font-weight: 600;
      margin-bottom: 10px;
    }

    .size-options {
      display: flex;
      gap: 12px;
      margin-bottom: 10px;
    }

    .size-options button {
      padding: 10px 18px;
      border-radius: 8px;
      font-size: 15px;
      background: #fff;
      border: 2px solid #ccc;
      cursor: pointer;
      transition: 0.2s;
    }

    .size-options button:hover {
      border-color: #007bff;
    }

    .size-options button.selected {
      border-color: #007bff;
      background: #eaf2ff;
    }

    .error {
      color: red;
      font-size: 14px;
      display: none;
      margin-bottom: 20px;
    }

    .buttons {
      margin-top: 30px;
    }

    .buttons button {
      padding: 14px 28px;
      font-size: 16px;
      font-weight: 600;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      margin-right: 15px;
      transition: 0.3s;
    }

    .add {
      background: #000;
      color: #fff;
    }

    .add:hover {
      background: #222;
    }

    .buy {
      background: #007bff;
      color: white;
    }

    .buy:hover {
      background: #0056b3;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        padding: 20px;
      }

      .main-image img {
        width: 100%;
        height: auto;
      }
    }
  </style>
</head>
<body>
    <a href="M.php" style="margin: 20px; display: inline-block; text-decoration: none;">
    <button style="padding: 10px 16px; background-color: #007bff; color: white; border: none; border-radius: 5px; font-weight: bold; cursor: pointer;">
      ← Back
    </button>
  </a>


  <div class="container">
    <!-- Image Section -->
    <div class="gallery">
      <div class="main-image">
        <img id="mainImage" src="https://images.pexels.com/photos/2446655/pexels-photo-2446655.jpeg" onclick="syncThumbnail()" />
      </div>
    </div>

    <!-- Product Info -->
    <div class="info">
      <div class="title">Denim Jacket</div>
      <div class="subtitle">Men's Collection</div>
      <div class="price">MRP: ₹1500.00</div>
      <div class="tax">Inclusive of all taxes</div>

      <div class="label">Select Size:</div>
      <div class="size-options" id="sizeOptions">
        <button onclick="selectSize(this)">M</button>

      </div>
      <div class="error" id="errorMsg">⚠ Please select a size</div>

      <div class="buttons">
        <button class="add" onclick="addToCart()">Add to Cart</button>
        <button class="buy">Buy Now</button>
      </div>
    </div>
  </div>

  <script>
    const mainImage = document.getElementById("mainImage");

    function changeImage(thumb) {
      mainImage.src = thumb.src;
      document.querySelectorAll(".thumb").forEach(img => img.classList.remove("active"));
      thumb.classList.add("active");
    }

    function syncThumbnail() {
      document.querySelectorAll(".thumb").forEach(img => {
        img.classList.toggle("active", img.src === mainImage.src);
      });
    }

    function selectSize(button) {
      document.querySelectorAll("#sizeOptions button").forEach(btn => btn.classList.remove("selected"));
      button.classList.add("selected");
      document.getElementById("errorMsg").style.display = "none";
    }

    function addToCart() {
      const selectedSize = document.querySelector("#sizeOptions button.selected");
      if (!selectedSize) {
        document.getElementById("errorMsg").style.display = "block";
      } else {
        alert(" Added to cart: Size " + selectedSize.innerText);
      }
    }
  </script>

</body>
</html>
