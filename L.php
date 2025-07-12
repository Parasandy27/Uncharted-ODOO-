<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>L Clothes - Swap Dressing</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #f9f9f9;
      color: #333;
      line-height: 1.6;
    }

    header {
      background-color: #2a5d73;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

    header h1 {
      font-size: 32px;
    }

    section {
      padding: 40px 20px;
      background-color: #f1f7fa;
    }

    section h2 {
      text-align: center;
      font-size: 32px;
      color: #2a5d73;
      margin-bottom: 20px;
    }

    section p.description {
      text-align: center;
      max-width: 700px;
      margin: auto;
      font-size: 16px;
      color: #555;
      margin-bottom: 40px;
    }

    .card-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      max-width: 1200px;
      margin: auto;
    }

    .card {
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      display: flex;
      flex-direction: column;
    }

    .card img {
      width: 100%;
      height: 250px;
      object-fit: cover;
    }

    .card-content {
      padding: 20px;
      flex: 1;
    }

    .card-content h3 {
      margin-bottom: 10px;
      color: #2a5d73;
      font-size: 18px;
    }

    .card-content p {
      font-size: 14px;
      color: #666;
    }

    .card-content button {
      margin-top: 15px;
      background: #2bc6ff;
      color: white;
      padding: 10px 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
    }

    .card-content button:hover {
      background-color: #239ccf;
    }

    footer {
      background-color: #2a5d73;
      color: #fff;
      text-align: center;
      padding: 20px 10px;
      font-size: 14px;
    }

    @media (max-width: 600px) {
      header h1, section h2 {
        font-size: 24px;
      }

      .card-content h3 {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>

  <section>
    <h2>Explore L Clothes</h2>
    <p class="description">
      Browse our curated collection of M-size fashion items shared by our conscious community. Comfortable, stylish, and sustainably sourced.
    </p>

    <div class="card-container">
      <div class="card">
        <img src=https://images.pexels.com/photos/5709905/pexels-photo-5709905.jpeg alt="L Sweater" />
        <div class="card-content">
          <h3>Knitted Sweater (L)</h3>
          <p>Flowy and breathable fabric. Perfect for casual days or brunch dates.</p>
          <a href="L1.html"> <button>View Item</button> </a>
        </div>
      </div>

      <div class="card">
        <img src=https://images.pexels.com/photos/1059054/pexels-photo-1059054.jpeg alt="L Dress" />
        <div class="card-content">
          <h3>Pink Dress (L)</h3>
          <p>Oversized denim with vintage wash and great warmth for fall outings.</p>
          <a href="L2.html"> <button>View Item</button> </a>
        </div>
      </div>

      <div class="card">
        <img src=https://images.pexels.com/photos/1656684/pexels-photo-1656684.jpeg alt="L T-shirt" />
        <div class="card-content">
          <h3>Black T- Shirt(L)</h3>
          <p>Bold statement print on soft cotton. Express yourself in comfort.</p>
         <a href="L3.html"> <button>View Item</button> </a>
        </div>
      </div>
    </div>
  </section>

</body>
</html>
