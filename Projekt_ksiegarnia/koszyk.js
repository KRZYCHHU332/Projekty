const addToCartButtons = document.querySelectorAll('.add-to-cart');
const cartItemsList = document.querySelector('.cart-items');
const cartTotal = document.querySelector('.cart-total');
const clearCartButton = document.querySelector('.clear-cart');

let cartItems = [];

// funkcja dodająca przedmiot do koszyka
function addToCart(event) {
  const button = event.target;
  const id = button.dataset.id;
  const name = button.dataset.name;
  const price = Number(button.dataset.price);

  // sprawdzamy, czy przedmiot o takim ID już nie znajduje się w koszyku
  const itemExists = cartItems.some(item => item.id === id);

  if (!itemExists) {
    const item = {
      id: id,
      name: name,
      price: price,
      quantity: 1
    };
    cartItems.push(item);
    showCartItems();
  }
}

// funkcja wyświetlająca listę przedmiotów w koszyku
function showCartItems() {
  cartItemsList.innerHTML = '';
  cartItems.forEach(item => {
    const li = document.createElement('li');
    li.innerText = `${item.name} - ${item.price} zł x ${item.quantity}`+" szt.";
    cartItemsList.appendChild(li);
  });

  // obliczamy sumę koszyka i wyświetlamy ją
  const total = cartItems.reduce((acc, item) => acc + item.price * item.quantity, 0);
  cartTotal.innerText = total;
}

// funkcja usuwająca przedmiot z koszyka
function removeItemFromCart(event) {
  const li = event.target.parentNode;
  const index = Array.from(cartItems);

  // znajdujemy indeks przedmiotu w koszyku
const itemIndex = Array.from(li.parentNode.children).indexOf(li);

// usuwamy przedmiot z koszyka
cartItems.splice(itemIndex, 1);
showCartItems();
}

// funkcja czyszcząca koszyk
function clearCart() {
cartItems = [];
showCartItems();
}

// nasłuchujemy zdarzenia kliknięcia na przycisku "Dodaj do koszyka"
addToCartButtons.forEach(button => button.addEventListener('click', addToCart));

// nasłuchujemy zdarzenia kliknięcia na przycisku "Usuń"
cartItemsList.addEventListener('click', removeItemFromCart);

// nasłuchujemy zdarzenia kliknięcia na przycisku "Wyczyść koszyk"
clearCartButton.addEventListener('click', clearCart);
