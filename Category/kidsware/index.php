<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kids's Clothing </title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header>
    <h1>Depop Style: Kids’s Clothing</h1>
  </header>

  <main>
    <div class="section-intro">
      <nav class="breadcrumb">
        <a href="/index.php">Home</a> &gt; Kids</nav>
      <h2>Kids Clothing</h2>
      <p class="intro-description">
        Get the seasonal updates you’ve been searching for. For basics, start with a graphic t-shirt or jeans. For
        layering, try knitwear or jackets. No matter your style or budget, filter and find what you’re looking for in
        Kids’s fashion.
      </p>
    </div>

    <div class="category-icons">
      <div class="category-item">
        <img src="https://images.unsplash.com/photo-1523381294911-8d3cead13475?auto=format&fit=crop&w=600&q=80"
          alt="T-Shirt"> <span>T-Shirts</span>
      </div>
      <div class="category-item">
        <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=600&q=80"
          alt="White Shirt">
        <span>Shirts</span>
      </div>
      <div class="category-item">
        <img src="https://images.pexels.com/photos/14750665/pexels-photo-14750665.jpeg" alt="Jackets">
        <span>Jackets</span>
      </div>
      <div class="category-item">
        <img src="https://images.pexels.com/photos/634785/pexels-photo-634785.jpeg" alt="Hoodies">
        <span>Hoodies</span>
      </div>
      <div class="category-item">
        <img src="https://images.pexels.com/photos/1598507/pexels-photo-1598507.jpeg" alt="Jeans">
        <span>Jeans</span>
      </div>
      <div class="category-item">
        <img src="https://images.pexels.com/photos/10339372/pexels-photo-10339372.jpeg" alt="Sweaters">
        <span>Sweaters</span>
      </div>
    </div>

    <div class="filter-bar">
      <select>
        <option>Category</option>
      </select>
      <select>
        <option>Brand</option>
      </select>
      <select>
        <option>Price</option>
      </select>
      <select>
        <option>Size</option>
      </select>
      <select>
        <option>Colour</option>
      </select>
      <select>
        <option>Condition</option>
      </select>
      <label><input type="checkbox"> On sale</label>
      <button class="sort-btn">⇅ Sort</button>
    </div>

    <div id="tiles-container" data-module-origin="homepage_Kids_tile"></div>
  </main>

  <script src="script.js"></script>
</body>

</html>