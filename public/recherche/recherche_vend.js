$(document).ready(function(){
    $('#search_vend').keyup(function(){
      var txt = $(this).val();
      if (txt != '') 
      {
        $.ajax({
              url:"recherche_vend.php",
              method:"POST",
              data:{search:txt},
              dataType:"text",
              success:function(data)
              {
                $('#resultat_vend').html(data);
              }
        });
      }
      else
      {
        $('#resultat_vend').html('');
        $.ajax({
              url:"recherche_vend.php",
              method:"POST",
              data:{search:txt},
              dataType:"text",
              success:function(data)
              {
                $('#resultat_vend').html(data);
              }
        });
      }
      });
});