const items = [
  {
    id: 1,
    title: "Yellow Hoodie",
    price: 1299,
    imageUrl: "https://images.pexels.com/photos/1183266/pexels-photo-1183266.jpeg"
  },
  {
    id: 2,
    title: "Streetwear Jacket",
    price: 2499,
    imageUrl: "https://images.pexels.com/photos/91227/pexels-photo-91227.jpeg"
  },
  {
    id: 3,
    title: "Casual Shirt",
    price: 999,
    imageUrl: "https://images.pexels.com/photos/1040881/pexels-photo-1040881.jpeg"
  },
  {
    id: 4,
    title: "Oversized Tee",
    price: 799,
    imageUrl: "https://images.pexels.com/photos/428338/pexels-photo-428338.jpeg"
  },
  {
    id: 5,
    title: "Vintage Denim",
    price: 1899,
    imageUrl: "https://images.pexels.com/photos/428338/pexels-photo-428338.jpeg"
  },
  {
    id: 6,
    title: "Bomber Jacket",
    price: 2899,
    imageUrl: "https://images.pexels.com/photos/428339/pexels-photo-428339.jpeg"
  }
];

const container = document.getElementById('tiles-container');
const origin = container.dataset.moduleOrigin;

items.forEach((item, index) => {
  const tile = document.createElement('div');
  tile.className = 'tile';
  tile.innerHTML = `
    <img src="${item.imageUrl}" alt="${item.title}">
    <div class="tile-info">
      <h3>${item.title}</h3>
      <p>₹${item.price.toLocaleString('en-IN')}</p>
    </div>
  `;

  tile.addEventListener('click', () => {
    console.log('Tile Clicked:', {
      moduleOrigin: origin,
      itemId: item.id,
      index
    });

    alert(`Navigating to product page: ${item.title}`);
    // Simulated navigation: window.location.href = `/item/${item.id}`;
  });

  container.appendChild(tile);
});
