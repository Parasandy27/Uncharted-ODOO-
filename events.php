<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Events | Swap Dressing</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9f9f9;
      color: #333;
    }

    .header {
      background-color: #2bc6ff;
      color: white;
      padding: 40px 20px;
      text-align: center;
    }

    .header h1 {
      margin: 0;
      font-size: 36px;
    }

    .event-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      padding: 40px 20px;
      max-width: 1200px;
      margin: auto;
    }

    .event-card {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      transition: transform 0.3s ease;
    }

    .event-card:hover {
      transform: translateY(-5px);
    }

    .event-image {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .event-content {
      padding: 20px;
      flex-grow: 1;
    }

    .event-date {
      font-size: 14px;
      color: #999;
      margin-bottom: 10px;
    }

    .event-title {
      font-size: 20px;
      margin: 0 0 10px;
      color: #2a5d73;
    }

    .event-desc {
      font-size: 15px;
      line-height: 1.5;
      margin-bottom: 20px;
    }

    .event-btn {
      align-self: flex-start;
      background-color: #2bc6ff;
      color: white;
      padding: 10px 18px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 14px;
      transition: background-color 0.3s ease;
      text-decoration: none;
    }

    .event-btn:hover {
      background-color: #1f9fcf;
    }

    @media (max-width: 600px) {
      .header h1 {
        font-size: 28px;
      }
    }
  </style>
</head>
<body>

  <div class="header">
    <h1>Upcoming Events</h1>
    <p>Stay up-to-date with all the latest Swap Dressing happenings</p>
  </div>

  <div class="event-container">

    <div class="event-card">
      <img src="https://hayden-hill.com/cdn/shop/articles/women_holding_a_clothes_swap_party.jpg?v=1694717161" class="event-image" alt="Event 1" />
      <div class="event-content">
        <div class="event-date">August 25, 2025</div>
        <h2 class="event-title">Swap & Style: Fashion Exchange Meetup</h2>
        <p class="event-desc">Join fashion lovers in Pune for an evening of sustainable clothing swaps, styling tips, and networking with eco-conscious influencers.</p>
        <a href="#" class="event-btn">Learn More</a>
      </div>
    </div>

    <div class="event-card">
      <img src="https://sepiastories.in/wp-content/uploads/2023/05/recyled-fashion-3.webp" class="event-image" alt="Event 2" />
      <div class="event-content">
        <div class="event-date">September 10, 2025</div>
        <h2 class="event-title">Eco Fashion Talk: Rethink Your Wardrobe</h2>
        <p class="event-desc">A webinar by Swap Dressing on how to reduce textile waste and make smarter clothing choices. Includes a Q&A with experts!</p>
        <a href="#" class="event-btn">Learn More</a>
      </div>
    </div>

    <div class="event-card">
      <img src="https://www.connectpos.com/wp-content/uploads/2024/09/pop-up-shop-7.jpg" class="event-image" alt="Event 3" />
      <div class="event-content">
        <div class="event-date">October 5, 2025</div>
        <h2 class="event-title">Festive Preloved Pop-Up</h2>
        <p class="event-desc">Come shop curated festive outfits from the Swap Dressing community. Live music, snacks, and sustainable shopping!</p>
        <a href="#" class="event-btn">Learn More</a>
      </div>
    </div>

  </div>

</body>
</html>
