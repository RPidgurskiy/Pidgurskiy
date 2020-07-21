

let changeBg=document.querySelector(".btn_bg");
  
    document.body.style.background="white"; 
    changeBg.addEventListener("click", function(){
    if (document.body.style.background=="white"){
        document.body.style.background="lightgreen";
        document.body.style.transition="1s";
    }else if(document.body.style.background=="lightgreen"){
        document.body.style.background="white";
        document.body.style.transition="1s";
    }
    });


// let changeBg = document.querySelector('.btn_bg');


// changeBg.addEventListener("click", function() {

//     document.body.classList.toggle("colorred_bg");
//     bg.style.backgroundColor = '';
// });


function openNav() {
    document.getElementById("myNav").style.height = "100%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.height = "0%";
  }