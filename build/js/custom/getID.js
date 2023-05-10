$(document).ready(function(){
 
    $(document).on("click","#btnedit",function(){
        var id = $(this).data("id");
        GetDetails(id);
      })
  
    function GetDetails(recs){
        $.ajax({
          method: 'POST',
          url: 'ifetchtable.php',
          data: {id:recs},
          dataType: 'JSON',
          success:function(records){
            $('#first_name').val(records.data.first_name);
            $('#last_name').val(records.data.last_name);
            $('#email').val(records.data.email);
            $('#address').val(records.data.address);
            $('#birthdate').val(records.data.birthdate);
          }
        });
      }
})

$(document).ready(function(){
 
    $(document).on("click","#btndelete",function(){
        var id = $(this).data("id");
        GetDetails(id);
      })
        
    function GetDetails(recs){
        $.ajax({
          method: 'POST',
          url: '../../pages/tables/ifetchtable.php',
          data: {id:recs},
          dataType: 'JSON',
          success:function(records){
            $('#first_name2').val(records.data.first_name);
            $('#last_name2').val(records.data.last_name);
            $('#email2').val(records.data.email);
            $('#address2').val(records.data.address);
            $('#birthdate2').val(records.data.birthdate);
          }
        });
      }
})