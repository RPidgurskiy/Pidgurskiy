// function myFunction() {
//     let bg = document.querySelector('btn_bg');
//     if (bg.style.backgroundColor === 'red') {
//         bg.style.backgroundColor = 'blue';
//     } else {
//         bg.style.backgroundColor = 'red';
//     }
// }


let changeBg = document.querySelector('.btn_bg');


changeBg.addEventListener("click", function() {

    document.body.classList.toggle("colorred_bg");
    bg.style.backgroundColor = '';
});


function openNav() {
    document.getElementById("myNav").style.height = "100%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.height = "0%";
  }