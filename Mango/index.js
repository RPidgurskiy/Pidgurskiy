function openNav() {
  document.getElementById("sideNav").style.width = "250px";
  document.getElementById("main").style.marginRight = "200px";
}

function closeNav() {
  document.getElementById("sideNav").style.width = "0";
  document.getElementById("main").style.marginRight = "0";
}



var helpers = {
  addZeros: function (n) {
    return (n < 10) ? '0' + n : '' + n;
  }
};

function sliderInit() {
  var $slider = $('.slider-holder');
  $slider.each(function () {
    var $sliderParent = $(this).parent();
    $(this).slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      dots: false,
      arrows: true,
      appendArrows: $('.arrows'),
      prevArrow: '<button id="prev" type="button" class="btn btn-prev"><img src="img/Arrow_left.png" alt=""></button>',
      nextArrow: '<button id="next" type="button" class="btn btn-next"><img src="img/Arrow_right.png" alt=""></button>',
      infinite: true,
      variableWidth: true,
      speed: 300,
      centerMode: true,
      centerPadding: '50px',
      responsive: [
        {
          breakpoint: 767,
          settings: {
            adaptiveHeight: true,
            centerMode: true,
            centerPadding: '10px',
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 420,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '10px',
            slidesToShow: 2,
            slidesToScroll: 1,
            variableWidth: true,
          }
        }
      ]
    });

    if ($(this).find('.item').length > 1) {
      $(this).siblings('.slides-numbers').show();
    }

    $(this).on('afterChange', function (event, slick, currentSlide) {
      $sliderParent.find('.slides-numbers .active').html(helpers.addZeros(currentSlide + 1));
    });

    var sliderItemsNum = $(this).find('.slick-slide').not('.slick-cloned').length;
    $sliderParent.find('.slides-numbers .total').html(helpers.addZeros(sliderItemsNum));

  });

  $('.slick-next').on('click', function () {
    console.log('test');
    $('.slider-holder').slick('slickGoTo', 5);
  });
};

sliderInit();



let graip_top = document.querySelector('.graip_top');
let graip_right = document.querySelector('.graip_right');
let ellipse = document.querySelector('.block1901_caption');
let mingr_right = document.querySelector('.min_gr_r');
let mingr_left = document.querySelector('.min_gr_l');

graip_top.addEventListener('mousemove', function (e) {
  let x = e.clientX / window.innerWidth;
  let y = e.clientY / window.innerHeight;
  graip_top.style.transform = 'translate(+' + x * 50 + 'px, +' + y * 50 + 'px)';
});

graip_right.addEventListener('mousemove', function (e) {
  let x = e.clientX / window.innerWidth;
  let y = e.clientY / window.innerHeight;
  graip_right.style.transform = 'translate(+' + x * 50 + 'px, +' + y * 50 + 'px)';

});

ellipse.addEventListener('mousemove', function (e) {
  let x = e.clientX / window.innerWidth;
  let y = e.clientY / window.innerHeight;
  ellipse.style.transform = 'translate(+' + x * 50 + 'px, +' + y * 50 + 'px)';
});

mingr_right.addEventListener('mousemove', function (e) {
  let x = e.clientX / window.innerWidth;
  let y = e.clientY / window.innerHeight;
  mingr_right.style.transform = 'translate(+' + x * 50 + 'px, +' + y * 50 + 'px)';
});

mingr_left.addEventListener('mousemove', function (e) {
  let x = e.clientX / window.innerWidth;
  let y = e.clientY / window.innerHeight;
  mingr_left.style.transform = 'translate(+' + x * 50 + 'px, +' + y * 50 + 'px)';
});









window.onscroll = function () { scrollNav() };

function scrollNav() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("navbar").style.backgroundColor = "#79777652";
    document.getElementById("logo").style.width = "85px";

  } else {
    document.getElementById("navbar").style.backgroundColor = "";
    document.getElementById("logo").style.width = "100px";

  }
}


let modal = document.getElementById("myModal");

// Get the button that opens the modal
let btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}