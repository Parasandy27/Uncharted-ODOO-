<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f0f4f8;
      color: #333;
    }

    .contact-container {
      max-width: 900px;
      margin: 50px auto;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.1);
      padding: 40px;
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #2a5d73;
    }

    .form-group {
      display: flex;
      flex-direction: column;
      margin-bottom: 20px;
    }

    .form-group label {
      margin-bottom: 8px;
      font-weight: bold;
    }

    .form-group input,
    .form-group textarea {
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
      resize: vertical;
    }

    .form-group textarea {
      min-height: 120px;
    }

    .form-group input:focus,
    .form-group textarea:focus {
      outline: none;
      border-color: #2bc6ff;
      box-shadow: 0 0 5px rgba(43, 198, 255, 0.4);
    }

    .submit-btn {
      background-color: #2bc6ff;
      color: white;
      border: none;
      padding: 14px 25px;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
      background-color: #249ccf;
    }

    .contact-info {
      margin-top: 40px;
      border-top: 1px solid #ddd;
      padding-top: 30px;
      color: #555;
    }

    .contact-info h3 {
      margin-bottom: 10px;
      color: #2a5d73;
    }

    .contact-info p {
      margin: 5px 0;
    }

    @media (max-width: 600px) {
      .contact-container {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

  <div class="contact-container">
    <h2>Contact Us</h2>

    <form action="#" method="POST">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required />
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="you@example.com" required />
      </div>

      <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" placeholder="What's this about?" />
      </div>

      <div class="form-group">
        <label for="message">Your Message</label>
        <textarea id="message" name="message" placeholder="Write your message here..." required></textarea>
      </div>

      <button type="submit" class="submit-btn">Send Message</button>
    </form>

    <div class="contact-info">

      <h3>Email & Phone</h3>
      <p>Email: support@swapdressing.com</p>
      <p>Phone: +91 98765 43210</p>
    </div>
  </div>

</body>
</html>
