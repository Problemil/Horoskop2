$(document).ready(function() {
    //Show horoscope
    viewHoroscope = function() {
      $.ajax({
        url: "PHP/viewHoroscope.php",
        method: "GET",
        success: function(results) {
          $(".content").html(results);
        }
      });
    };
  
    //Saves horsocope
    $("#addHoroscope").click(function() {
  
      $.ajax({
        url: "PHP/addHoroscope.php",
        method: "POST",
        data: {
          prsnnmr: $("#type").val()
        },
        success: function(results) {
          viewHoroscope();
        }
      });
      
    });
  
    //delete horoscope
    $("#deleteHoroscope").click(function() {
      $.ajax({
        url: "PHP/deleteHoroscope.php",
        method: "DELETE",
        data: {
          prsnnmr: $("#type").val()
        },
        success: function(results) {
          if(results){
              $(".content").html("Horoskopet togs bort");
          }else{
              $(".content").html("Horoskopet togs inte bort");
          }
        }
      });
      
    });
  
    //updates horoscope
    $("#updateHoroscope").click(function() {
      $.ajax({
        url: "PHP/updateHoroscope.php",
        method: "PUT",
        data: {
          prsnnmr: $("#type").val()
        },
        success: function(results) {
            console.log(results);
          viewHoroscope();
        }
      });
    });
  });
  