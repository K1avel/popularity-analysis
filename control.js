$(document).ready(function(){
    $("username").blur(function(){
      var username = $(this).val();
      $.ajax({
        url:"lucrare_an.php",
        method:"POST",
        data:{user_name:username},
        datatype:"text",
        success:function(html)
        {
          $('#availability').html(html);
        }
      });
    });
    
        });