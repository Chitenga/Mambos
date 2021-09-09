var menu = document.querySelector(".menu")
var ham = document.querySelector(".hamburger")

ham.addEventListener("click", ()=>{
    menu.classList.toggle("active")
})

var tabButtons=document.querySelectorAll(".btn")
var tabPanels=document.querySelectorAll(".tabPanel")

function showPanel(panelIndex,colorCode) {
    tabButtons.forEach(function(node){
        node.style.backgroundColor="";
        node.style.color="";
    });
     tabPanels[panelIndex].style.backgroundColor=colorCode;
     tabPanels[panelIndex].style.color="white";
     tabPanels.forEach(function(node){
        node.style.display="none";
    });
    tabPanels [panelIndex].style.display="block";
    tabPanels [panelIndex].style.backgroundColor=colorCode;
}
showPanel(0,'white');

$(function() {
    $(".slider").slick({
        dots: false,
        infinite: true,
        centerMode: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
              }
            },
          ]
      });
      
});

$(function() {
  $(".slide").slick({
    dots: false,
    infinite: true,
    slidesToShow: 2,
    arrows:false,
    nextArrow:'#next1',
    prevArrow:'#next',
    autoplay:true,
    speed:300,
    slidesToScroll: 1,
  });
      responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
            },
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
            },
          },
        ]
    
});


