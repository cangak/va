$(document).ready(function(){
   $('.ceknim').click(function(){
         var userid = $('.nim').val();

         // AJAX request
         $.ajax({
               url: 'respons.php',
               type: 'post',
               data: {userid: userid},
               success: function(response){ 
                    // Add response in Modal body
                    $('.modal-body').html(response);

                    // Display Modal
                    $('#empModal').modal('show'); 
               }
         });
    });
});