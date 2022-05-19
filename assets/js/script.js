
$(document).ready(function(){
  $("#myModal").modal('show');


  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
});

// A $( document ).ready() block.
$(document).ready(function () {
  mybutton = document.getElementById("myBtn");
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction();
  };

  function scrollFunction() {
    if (
      document.body.scrollTop > 20 ||
      document.documentElement.scrollTop > 20
    ) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  mybutton.addEventListener("click", function () {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  });
  setInterval(myTimer, 1000);

  function myTimer() {
    const d = new Date();
document.getElementById("demo").innerHTML = d.toUTCString();
  }
  

  var xValues = ["Fonds", "Real estate", "Stocks", "Bonds", "Crypto"];
var yValues = [55, 49, 44, 24, 24, 70];
var barColors = ["#cc0000", "#e68a00","#990033","#e65c00","#008000"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Where People Invest in 2022"
    }
  }
});
  
  
});

