<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cart Page</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f8;
      padding: 20px;
      margin: 0;
    }

    .container {
      max-width: 900px;
      margin: auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
    }

    h2 {
      margin-bottom: 20px;
      text-align: center;
    }

    .cart-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #ddd;
      padding: 15px 0;
    }

    .cart-item-details {
      flex: 2;
    }

    .cart-item-actions {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .cart-item-actions input {
      width: 50px;
      padding: 5px;
      text-align: center;
    }

    .remove-btn {
      background-color: red;
      color: white;
      border: none;
      padding: 6px 12px;
      border-radius: 6px;
      cursor: pointer;
    }

    .total {
      text-align: right;
      font-size: 18px;
      margin-top: 20px;
    }

    .checkout-btn {
      margin-top: 10px;
      text-align: right;
    }

    .checkout-btn button {
      background-color: #000;
      color: #fff;
      padding: 12px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Your Cart</h2>

    <div id="cartList"></div>

    <div class="total" id="totalAmount">Total: ₹0</div>

    <div class="checkout-btn">
      <button onclick="checkout()">Checkout</button>
    </div>
  </div>

  <script>
    // Sample cart items (can be dynamically loaded or stored in localStorage/sessionStorage)
    let cart = [
    ];

    function renderCart() {
      const cartList = document.getElementById("cartList");
      cartList.innerHTML = "";

      let total = 0;

      cart.forEach((item, index) => {
        total += item.price * item.quantity;

        cartList.innerHTML += `
          <div class="cart-item">
            <div class="cart-item-details">
              <strong>${item.name}</strong><br>
              Price: ₹${item.price}
            </div>
            <div class="cart-item-actions">
              <input type="number" min="1" value="${item.quantity}" onchange="updateQuantity(${index}, this.value)">
              <button class="remove-btn" onclick="removeItem(${index})">Remove</button>
            </div>
          </div>
        `;
      });

      document.getElementById("totalAmount").innerText = `Total: ₹${total}`;
    }

    function updateQuantity(index, qty) {
      qty = parseInt(qty);
      if (qty > 0) {
        cart[index].quantity = qty;
        renderCart();
      }
    }

    function removeItem(index) {
      cart.splice(index, 1);
      renderCart();
    }

    function checkout() {
      alert("Thank you for your purchase!");
      cart = [];
      renderCart();
    }

    renderCart();
  </script>

</body>
</html>
