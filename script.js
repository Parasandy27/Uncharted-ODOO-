const products = [
  {
    title: "Vintage Jacket",
    price: "$65",
    image: "https://via.placeholder.com/300?text=Jacket"
  },
  {
    title: "Chunky Sneakers",
    price: "$90",
    image: "https://via.placeholder.com/300?text=Sneakers"
  },
  {
    title: "Tie-Dye Tee",
    price: "$25",
    image: "https://via.placeholder.com/300?text=Tee"
  },
  {
    title: "Corduroy Pants",
    price: "$50",
    image: "https://via.placeholder.com/300?text=Pants"
  },
  {
    title: "Retro Shades",
    price: "$20",
    image: "https://via.placeholder.com/300?text=Sunglasses"
  },
];

document.addEventListener("DOMContentLoaded", function () {
  const signInBtn = document.getElementById("signInBtn");

  if (signInBtn) {
    signInBtn.addEventListener("click", function () {
      // Redirect to login page
      window.location.href = "log.php";
    });
  }
});

function renderProducts() {
  const grid = document.getElementById('productGrid');
  grid.innerHTML = products.map(p => `
    <div class="product-card">
      <img src="${p.image}" alt="${p.title}" />
      <div class="product-info">
        <h4>${p.title}</h4>
        <div class="price">${p.price}</div>
      </div>
    </div>
  `).join('');
}

renderProducts();
function searchProducts() {
  const query = document.getElementById('searchInput').value.toLowerCase();
  const products = document.querySelectorAll('.product');
  products.forEach(product => {
    product.style.display = product.textContent.toLowerCase().includes(query) ? 'flex' : 'none';
  });
}

function filterCategory(category) {
  const products = document.querySelectorAll('.product');
  products.forEach(product => {
    product.style.display = product.dataset.category === category ? 'flex' : 'none';
  });
}

// Redirect each size button to a size-specific page
document.addEventListener('DOMContentLoaded', () => {
  const sizeButtons = document.querySelectorAll('.size-box button');
  sizeButtons.forEach(button => {
    button.addEventListener('click', () => {
      const size = button.previousElementSibling.textContent;
      const sizeURL = `sizes/${size.toLowerCase()}.html`;
      window.location.href = sizeURL;
    });
  });
});
