// document.addEventListener("DOMContentLoaded", function() {
//
//     var parentFrame = document.querySelectorAll('.frame');
//
//     for (var i = 0; i < parentFrame.length; i++) {
//
//         parentFrame[i].addEventListener("click", function(){
//             this.nextElementSibling.style.display="block";
//         });
//
//
//         parentFrame[i].addEventListener("mouseleave", function () {
//             this.nextElementSibling.style.display="none";
//         })
//     }
// });





// var slideIndex = 1;
// showDivs(slideIndex);
//
// function plusDivs(n) {
//     showDivs(slideIndex += n);
// }
//
// function showDivs(n) {
//     var i;
//     var x = document.getElementsByClassName("mySlides");
//     if (n > x.length) {slideIndex = 1}
//     if (n < 1) {slideIndex = x.length}
//     for (i = 0; i < x.length; i++) {
//         x[i].style.display = "none";
//     }
//     x[slideIndex-1].style.display = "block";
// }



// jQuery(function () {
//
//
//     jQuery (document).ready(function(){
//         jQuery('.slider').slick({
//             autoplay: true,
//             autoplaySpeed: 2000,
//             slidesToShow: 1,
//
//         });
//     });
// });