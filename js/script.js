//login
let loginForm = document.querySelector('.login-form-container');
document.querySelector('#login-btn').onclick = () => {
  loginForm.classList.toggle('active');
}
document.querySelector('#close-login-btn').onclick = () => {
  loginForm.classList.remove('active');
}
//afficher les livres 
fetch('/LivreShop/php_pages/apiFromDB.php') 
  .then(response => {
    return response.json();
  })
  .then(data => {
    const container = document.getElementById('book-container');
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
                      <p class ="book-pages">Pages: ${book.pages}</p>
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







// searchFrom = document.querySelector('.search-form');

// document.querySelector('#search-btn').onclick = () => {
//     searchFrom.classList.toggle('active');
// }
// window.onscroll = () => {

//     searchFrom.classList.remove('active');
//     if (window.scrollY > 80) {
//         document.querySelector('.header .header-2').classList.add('active');
//     } else {
//         document.querySelector('.header .header-2').classList.remove('active');
//     }
// }
// window.onload = () => {
//     if (window.scrollY > 80) {
//         document.querySelector('.header .header-2').classList.add('active');
//     } else {
//         document.querySelector('.header .header-2').classList.remove('active');
//     }
// }

// _______________preview_________________ 
// let previewContainer = document.querySelector('.products-preview');
// let previewBox = previewContainer.querySelectorAll('.preview');

// document.querySelectorAll('.featured-slider .icons').forEach(product => {
//     product.onclick = () => {
//         previewContainer.style.display = 'flex';
//         let name = product.getAttribute('data-name');
//         previewBox.forEach(previewBox => {
//             let target = previewBox.getAttribute('data-target');
//             if (name == target) {
//                 previewBox.classList.add('active');
//             }
//         });
//     };
// });