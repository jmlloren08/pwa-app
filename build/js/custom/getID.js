$(document).ready(function(){
 
    $(document).on("click","#btnedit",function(){
        var id = $(this).data("id");
        GetDetails(id);
      })
  
    function GetDetails(id2){
        $.ajax({
          method: 'POST',
          url: 'ifetchtable.php',
          data: {id:id2},
          dataType: 'JSON',
          success:function(jay){
            $('#txtdataid').val(jay.data.id);
            $('#txtdatafname').val(jay.data.first_name);
          }
        });
      }
  })