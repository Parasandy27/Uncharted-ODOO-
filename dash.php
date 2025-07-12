<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Editable Dashboard with Photo Control</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background: #f3f4f6;
      padding: 40px;
    }

    .dashboard {
      max-width: 900px;
      margin: auto;
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      overflow: hidden;
      animation: fadeIn 0.6s ease-in-out;
    }

    /* Profile Section */
    .profile {
      display: flex;
      align-items: center;
      padding: 30px;
      border-bottom: 1px solid #e5e7eb;
      flex-wrap: wrap;
      gap: 20px;
    }

    .photo-container {
      position: relative;
      width: 100px;
      height: 100px;
      border-radius: 50%;
      overflow: hidden;
      border: 3px solid #6366f1;
      cursor: pointer;
    }

    .photo-container img {
      width: 100%;
      height: 100%;
      margin-left: 15px;
      margin-top: 25px;
    }

    .add-icon {
      
      bottom: 0;
      right: 0;
      background: #6366f1;
      color: white;
      width: 24px;
      height: 24px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      font-size: 16px;
      border: 2px solid white;
      margin-left: 35px;
    }

    #photo-upload {
      display: none;
    }

    #remove-btn {
      background: #ef4444;
      color: white;
      padding: 6px 10px;
      font-size: 14px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      margin-top: 6px;
      display: none;
    }

    .info {
      display: flex;
      flex-direction: column;
      gap: 10px;
      flex: 1;
    }

    .info input {
      padding: 10px;
      font-size: 16px;
      border: 1px solid #d1d5db;
      border-radius: 6px;
      width: 100%;
    }

    .container-section {
      display: flex;
      flex-direction: column;
      gap: 20px;
      padding: 30px;
    }

    .card {
      background: #6366f1;
      color: white;
      border-radius: 12px;
      padding: 20px;
      animation: slideUp 0.5s ease forwards;
      box-shadow: 0 2px 12px rgba(0, 0, 0, 0.15);
    }

    .card h3 {
      font-size: 20px;
      margin-bottom: 12px;
    }

    .card .input-list {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .card input {
      padding: 10px;
      font-size: 15px;
      border-radius: 6px;
      border: none;
      outline: none;
    }

    .card input::placeholder {
      color: #6366f1;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.98); }
      to { opacity: 1; transform: scale(1); }
    }

    @keyframes slideUp {
      from { transform: translateY(20px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    @media (max-width: 768px) {
      .profile {
        flex-direction: column;
        text-align: center;
      }
    }
  </style>
</head>
<body>

  <div class="dashboard">
    <!-- Profile Section with Inputs -->
    <div class="profile">
      <!-- Photo Upload Area -->
      <label for="photo-upload" class="photo-container" id="photo-container">
        <img src="https://via.placeholder.com/100" id="profile-photo" alt="Upload Photo">
      </label>
      <input type="file" id="photo-upload" accept="image/*" onchange="previewPhoto(event)" />
      <button id="remove-btn" onclick="removePhoto()">Remove Photo</button>

      <!-- Info Inputs -->
      <div class="info">
        <input type="text" placeholder="Full Name" />
        <input type="tel" placeholder="Phone Number" />
        <input type="email" placeholder="Email Address" />
        <input type="text" placeholder="Home Address" />
      </div>
    </div>

    <!-- My Listings and Purchases -->
    <div class="container-section">
      <!-- My Listings -->
      <div class="card">
        <h3>🛒 My Listings</h3>
        <div class="input-list">
          <input type="text" placeholder="Item 1 - ₹ price" />
          <input type="text" placeholder="Item 2 - ₹ price" />
          <input type="text" placeholder="Item 3 - ₹ price" />
        </div>
      </div>

      <!-- My Purchases -->
      <div class="card">
        <h3>📦 My Purchases</h3>
        <div class="input-list">
          <input type="text" placeholder="Purchase 1 - ₹ price" />
          <input type="text" placeholder="Purchase 2 - ₹ price" />
          <input type="text" placeholder="Purchase 3 - ₹ price" />
        </div>
      </div>
    </div>
  </div>

  <script>
    function previewPhoto(event) {
      const img = document.getElementById('profile-photo');
      const removeBtn = document.getElementById('remove-btn');
      img.src = URL.createObjectURL(event.target.files[0]);
      removeBtn.style.display = 'inline-block';
    }

    function removePhoto() {
      const img = document.getElementById('profile-photo');
      const input = document.getElementById('photo-upload');
      const removeBtn = document.getElementById('remove-btn');
      img.src = 'https://via.placeholder.com/100';
      input.value = '';
      removeBtn.style.display = 'none';
    }
  </script>

</body>
</html>
