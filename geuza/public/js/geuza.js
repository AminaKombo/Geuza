$(document).ready(function(){
    
    var minimum_amount=$('#minamt').val();
    
    var php_link=$('#phplink').val();
    
    submitConversion();
    
    $('#amount').on('change',function(){
        
        var ge_amount=$(this).val();
        
        if(ge_amount>=minimum_amount){
            
            submitConversion();
            
        }//if
        else{
            
            $(this).val(minimum_amount);
            
        }//else
        
    });
    
    $('#from').on('change',function(){
        
        submitConversion();
        
    });
    
    $('#to').on('change',function(){
        
        submitConversion();
        
    });
    
    $('button[name=geuza]').on('click',function(e){
        
        e.preventDefault();
        
        if($(this).val()=="swapped"){
            
            var to_code=$('#to').val();
            
            var from_code=$('#from').val();
            
            $('#to').val(from_code);
            
            $('#from').val(to_code);
            
        }//if
        
        submitConversion();
        
    });
    
    function submitConversion(){
        
        location.href='#hustle';
        
        $('#stage-div').load(php_link+'pages/loading.php');
        
        var ge_amount=$('#amount').val();
        
        var ge_from=$('#from').val();
        
        var ge_to=$('#to').val();
       
        $.ajax({
            url:php_link+'pages/convert.php',
            type:'POST',
            data:{'jsend':true,'geuza':true,'amount':ge_amount,'from':ge_from,'to':ge_to},
            success: function(data, status){
                
                if(data=='ok'){
                    
                    $('#stage-div').load(php_link+"pages/stage.php");
                    
                }//if
                
            },
            error: function(xhr, desc, err){
                
                $('#stage-div').html(err);
                
            }
        });
        
    };
   
    
});