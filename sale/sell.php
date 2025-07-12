<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product Detail Page</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f8;
      padding: 20px;
      margin: 0;
    }

    .container {
      max-width: 1200px;
      margin: auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
    }

    .main-section {
      display: flex;
      gap: 30px;
      margin-bottom: 30px;
      flex-wrap: wrap;
    }

    .add-images,
    .add-description {
      flex: 1;
      border: 2px dashed #ccc;
      border-radius: 8px;
      padding: 20px;
      min-height: 300px;
      position: relative;
      background-color: #fafafa;
    }

    .add-images {
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 16px;
      color: #666;
      cursor: pointer;
    }

    .add-images input {
      display: none;
    }

    .add-images img {
      max-width: 100%;
      max-height: 280px;
      object-fit: cover;
    }

    .add-description textarea,
    .add-description input,
    .add-description select {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 14px;
      box-sizing: border-box;
    }

    .add-description label {
      margin-top: 10px;
      display: block;
      font-weight: bold;
    }

    .swap-btn {
      margin-top: 10px;
      text-align: right;
    }

    .swap-btn button {
      background-color: #000;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    .previous-listings {
      margin-top: 10px;
    }

    .previous-listings h3 {
      margin-bottom: 10px;
    }

    .listing-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
      gap: 15px;
    }

    .listing-item {
      height: 140px;
      background-color: #eee;
      border-radius: 8px;
    }

    @media (max-width: 768px) {
      .main-section {
        flex-direction: column;
      }
    }
  </style>
</head>

<body>
  <form action="code.php" method="POST" enctype="multipart/form-data">
    <div class="container">
      <!-- Main Section -->
      <div class="main-section">
        <!-- Image Upload -->
        <div class="add-images" onclick="document.getElementById('fileInput').click();">
          <span id="imageLabel">Add Images</span>
          <input type="file" accept="image/*" id="fileInput" onchange="previewImage(event)">
        </div>

        <!-- Description -->
        <div class="add-description">
          <label><strong>Add Product Description</strong></label>

          <label for="name">Product Name</label>
          <input type="text" id="name" name="name" placeholder="e.g. Red T-shirt">

          <label for="price">Price</label>
          <input type="text" id="price" name="price" placeholder="e.g. 499">

          <label for="description">Description</label>
          <textarea id="description" name="des" placeholder="Write details here..."></textarea>

          <label for="category">Category</label>
          <select id="category" name="category">
            <option value="">Select Category</option>
            <option>Shirt</option>
            <option>Shoes</option>
            <option>Lower</option>
            <option>Jacket</option>
            <option>Accessories</option>
          </select>

          <label for="color">Color</label>
          <input type="text" id="color" name="color" placeholder="e.g. Red, Blue">

          <label for="size">Size</label>
          <select id="size" name="size">
            <option value="">Select Size</option>
            <option>XS</option>
            <option>S</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
            <option>XXL</option>
          </select>

          <div class="swap-btn">
            <button type="submit" name="submit">Available / Swap</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Previous Listings -->

  </form>
  <script>
function previewImage(event) {
      const reader = new FileReader();
      reader.onload = function () {
        const imageLabel = document.getElementById('imageLabel');
        imageLabel.innerHTML = `<img src="${reader.result}" alt="Uploaded Image">`;
      };
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>

</body>

</html>