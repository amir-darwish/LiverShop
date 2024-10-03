// جلب البيانات من API
fetch('https://filrouge.uha4point0.fr/V2/livres/livres') // استبدل الرابط برابط الـ API الخاص بك
  .then(response => response.json())
  .then(data => {
    const container = document.getElementById('book-container');

    data.forEach(book => {
      // إنشاء قالب HTML لكل كتاب
      const bookElement = document.createElement('div');
      bookElement.classList.add('box');

        bookElement.innerHTML = `
        <div class="icons">
          <a href="#" class="fas fa-search"></a>
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
        <div class="image">
          <img src="imgID/${book.id}.jpg" alt="">
        </div>
        <div class="content">
          <h3>${book.titre}</h3>
          <div class="price">${book.prix} €</div>
          <a href="#" class="btn">Ajouter au panier</a>
        </div>
      `;

      // إضافة الكتاب إلى الـ container
      container.appendChild(bookElement);
    });
  })
  .catch(error => console.error('Error fetching data:', error));










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