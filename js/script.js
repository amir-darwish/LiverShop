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