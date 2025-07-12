<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Swap Dressing - FAQ</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f0f4f8;
      margin: 0;
      padding: 20px;
    }

    .faq-container {
      max-width: 800px;
      margin: auto;
      background: #ffffff;
      border-radius: 8px;
      padding: 30px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .faq-title {
      text-align: center;
      font-size: 28px;
      color: #333;
      margin-bottom: 30px;
    }

    .faq-item {
      border-bottom: 1px solid #ddd;
      margin-bottom: 10px;
    }

    .faq-question {
      background-color: #f9fafc;
      padding: 15px 20px;
      font-size: 18px;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: background-color 0.3s ease;
    }

    .faq-question:hover {
      background-color: #e6f0ff;
    }

    .faq-answer {
      padding: 0 20px 15px;
      display: none;
      font-size: 16px;
      color: #555;
      animation: fadeIn 0.3s ease-in-out;
      line-height: 1.6;
    }

    .faq-item.active .faq-answer {
      display: block;
    }

    .arrow {
      transition: transform 0.3s ease;
    }

    .faq-item.active .arrow {
      transform: rotate(180deg);
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
  </style>
</head>
<body>

  <div class="faq-container">
    <h1 class="faq-title">Swap Dressing - FAQ</h1>

    <div class="faq-item">
      <div class="faq-question">
        <span>1. What is Swap Dressing?</span>
        <span class="arrow">▼</span>
      </div>
      <div class="faq-answer">
        Swap Dressing is a community-based platform where users can list their gently used clothing items and exchange them with others. Instead of buying new clothes, you can refresh your wardrobe in a sustainable and eco-conscious way. The platform supports fashion circularity and helps reduce textile waste by giving clothes a second life.
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">
        <span>2. How do I swap clothes?</span>
        <span class="arrow">▼</span>
      </div>
      <div class="faq-answer">
        Swapping is easy! First, create an account and upload clear photos and details of the clothes you'd like to swap. Browse listings from other users, and when you find something you like, send a swap request. If the other person agrees, you arrange the exchange — either via shipping or in person, based on mutual preference.
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">
        <span>3. Are there any charges involved?</span>
        <span class="arrow">▼</span>
      </div>
      <div class="faq-answer">
        Creating an account and listing items on Swap Dressing is completely free. However, there may be nominal fees for premium features like featured listings, swap protection, or delivery services. These are optional and designed to enhance your swapping experience.
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">
        <span>4. What condition should my clothes be in?</span>
        <span class="arrow">▼</span>
      </div>
      <div class="faq-answer">
        All clothes listed for swapping should be clean, gently used, and in good wearable condition. This means no large tears, stains, or excessive wear. Think about what you would feel happy receiving — that’s the standard to follow. High-quality listings increase your chances of successful swaps.
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">
        <span>5. Can I cancel a swap after confirming?</span>
        <span class="arrow">▼</span>
      </div>
      <div class="faq-answer">
        Yes, you can cancel a swap before any items are shipped or handed over. However, we encourage users to commit once they agree to a swap. Repeated cancellations may negatively affect your account credibility. Communication is key — if you need to cancel, please inform the other user promptly.
      </div>
    </div>

  </div>

  <script>
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
      item.querySelector('.faq-question').addEventListener('click', () => {
        item.classList.toggle('active');
      });
    });
  </script>

</body>
</html>
