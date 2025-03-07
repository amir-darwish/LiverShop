//login
let loginForm = document.querySelector('.login-form-container');
document.querySelector('#login-btn').onclick = () => {
  loginForm.classList.toggle('active');
}
document.querySelector('#close-login-btn').onclick = () => {
  loginForm.classList.remove('active');
}

// setup pagination
const booksPerPage = 5;
let currentPage = 1;
let books = [];


fetch('/LivreShop/php_pages/apiFromDB.php')
  .then(response => response.json())
  .then(data => {
    books = data;
    displayBooks();
    setupPagination();
  })
  .catch(error => console.error('Error fetching data:', error));

// Display books in the current page
function displayBooks() {
  const container = document.getElementById('book-container');
  container.innerHTML = '';

  const start = (currentPage - 1) * booksPerPage;
  const end = start + booksPerPage;
  const booksToDisplay = books.slice(start, end);

  booksToDisplay.forEach(book => {
    const bookElement = document.createElement('div');
    bookElement.classList.add('box');

    bookElement.innerHTML = `
      <div class="icons">
        <a href="https://www.google.com/search?q=${book.titre}" target="_blank" class="fas fa-search"></a>
        <a href="#" class="fa-solid fa-book-open-reader"></a>
        <a href="livre_information.php?id=${book.id}" class="fas fa-eye"></a>
      </div>
      <div class="image">
        <img src="${book.photo}" alt="">
      </div>
      <div class="content">
        <h3>${book.titre}</h3>
        <div class="price">${book.prix} €</div>
        <a href="#" class="btn">Ajouter au panier</a>
      </div>
    `;

    container.appendChild(bookElement);
  });
}

// setup Pagination buttons
function setupPagination() {
  const paginationContainer = document.getElementById('pagination');
  paginationContainer.innerHTML = '';

  const totalPages = Math.ceil(books.length / booksPerPage);

  for (let i = 1; i <= totalPages; i++) {
    const pageButton = document.createElement('button');
    pageButton.textContent = i;
    pageButton.addEventListener('click', () => {
      currentPage = i;
      
      displayBooks();
      updateActivePageButton();
    });
    paginationContainer.appendChild(pageButton);
  }
  updateActivePageButton();

}
// update active page button
function updateActivePageButton() {
  const paginationContainer = document.getElementById('pagination');
  const buttons = paginationContainer.getElementsByTagName('button');
  for (let button of buttons) {
    button.classList.remove('active');
  }
  buttons[currentPage - 1].classList.add('active');
}
// afficher les livres numerique
fetch('/Book_Store/php_pages/apiLNFromDB.php')
  .then(response => response.json())
  .then(data => {
      const container = document.getElementById('book-container2');
      console.log(data);

      container.innerHTML = '';

    data.forEach(book => {
      const bookElement = document.createElement('div');
      bookElement.classList.add('box');

      bookElement.innerHTML = `
        <div class="icons">
          <a href="https://www.google.com/search?q=${book.titre}" target="_blank" class="fas fa-search"></a>
          <a href="#" class="fa-solid fa-book-open-reader"></a>
          <a href="livre_information.php?id=${book.id}" class="fas fa-eye"></a>
        </div>
        <div class="image">
          <img src="${book.photo}" alt="">
        </div>
        <div class="content">
          <h3>${book.titre}</h3>
          <div class="price">${book.prix} €</div>
          <a href="#" class="btn">Ajouter au panier</a>
        </div>
      `;

      container.appendChild(bookElement);
    });
  })
  .catch(error => console.error('Error fetching data:', error));

// POP UP
function openModal(auteurId) {
  var modal = document.getElementById("myModal");
  modal.style.display = "block";

  fetch('/Book_Store/php_pages/apiFromDB.php')
    .then(response => response.json())
    .then(data => {
      var booksList = document.getElementById('books-list');
      booksList.innerHTML = '';

      var filteredBooks = data.filter(book => book.auteur == auteurId);

      if (filteredBooks.length > 0) {
        filteredBooks.forEach(book => {
          var bookCard = document.createElement('div');
          bookCard.classList.add('book-card');

          bookCard.innerHTML = `
            <h3>${book.titre} (${book.sorti})</h3>
            <p class="book-info">${book.synopsis}</p>
            <p class="book-pages">Pages: ${book.pages}</p>
            <p class="book-price">Prix: ${book.prix}€</p>
          `;
          booksList.appendChild(bookCard);
        });
      } else {
        booksList.innerHTML = '<p class="no-books">Aucun livre trouvé pour cet auteur.</p>';
      }
    })
    .catch(error => {
      console.error('Error fetching books:', error);
      var booksList = document.getElementById('books-list');
      booksList.innerHTML = '<p class="no-books">Erreur lors du chargement des livres</p>';
    });
}

function closeModal() {
  var modal = document.getElementById("myModal");
  modal.style.display = "none";
}

window.onclick = function(event) {
  var modal = document.getElementById("myModal");
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// afficher les livres numerique
fetch('/Book_Store/php_pages/apiLNFromDB.php')
  .then(response => response.json())
  .then(data => {
      const container = document.getElementById('book-container2');
      console.log(data);

      container.innerHTML = '';

    data.forEach(book => {
      const bookElement = document.createElement('div');
      bookElement.classList.add('box');

      bookElement.innerHTML = `
        <div class="icons">
          <a href="https://www.google.com/search?q=${book.titre}" target="_blank" class="fas fa-search"></a>
          <a href="#" class="fa-solid fa-book-open-reader"></a>
          <a href="livre_information.php?id=${book.id}" class="fas fa-eye"></a>
        </div>
        <div class="image">
          <img src="${book.photo}" alt="">
        </div>
        <div class="content">
          <h3>${book.titre}</h3>
          <div class="price">${book.prix} €</div>
          <a href="#" class="btn">Ajouter au panier</a>
        </div>
      `;

      container.appendChild(bookElement);
    });
  })
  .catch(error => console.error('Error fetching data:', error));

