$(document).ready(function(){
      fetch();

      function fetch(){
        $.get('https://api.covid19api.com/summary', 
          function(data){
            var tbval = document.getElementById('tbval');
            for(var i=1; i<(data['Countries'].length);i++){
              var x = tbval.insertRow();
              x.insertCell(0);
              tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
              tbval.rows[i].cells[0].style.background = '#7a4a91';
              tbval.rows[i].cells[0].style.color = '#fff';

              x.insertCell(1);
              tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
              tbval.rows[i].cells[1].style.background = '#4bb7d8';
              
              x.insertCell(2);
              tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
              tbval.rows[i].cells[2].style.background = '#4bb7d8';

              x.insertCell(3);
              tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
              tbval.rows[i].cells[3].style.background = '#f36e23';

              x.insertCell(4);
              tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
              tbval.rows[i].cells[4].style.background = '#4bb7d8';

              x.insertCell(5);
              tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
              tbval.rows[i].cells[5].style.background = '#9cc850';

              x.insertCell(6);
              tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
              tbval.rows[i].cells[6].style.background = '#f36e23';
            }
        });
    }

    $(".count").counterUp({
        delay: 10,
        time: 3000
      });

    //Check to see if the window is top if not then display button
     $(window).scroll(function(){
         if ($(this).scrollTop() > 100) {
             $('.scrollToTop').fadeIn();
         } else {
             $('.scrollToTop').fadeOut();
         }
     });

     //Click event to scroll to top
     $('.scrollToTop').click(function(){
         $('html, body').animate({scrollTop : 0},1000);
         return false;
     });


     // Add smooth scrolling to all links
     $("a").on('click', function(event) {

       // Make sure this.hash has a value before overriding default behavior
       if (this.hash !== "") {
         // Prevent default anchor click behavior
         event.preventDefault();

         // Store hash
         var hash = this.hash;

         // Using jQuery's animate() method to add smooth page scroll
         // The optional number (1000) specifies the number of milliseconds it takes to scroll to the specified area
         $('html, body').animate({
           scrollTop: $(hash).offset().top
         }, 1000, function(){
      
           // Add hash (#) to URL when done scrolling (default click behavior)
           window.location.hash = hash;
         });
       } // End if
     });
});
  



 
    
  
  