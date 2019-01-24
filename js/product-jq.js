$(function(){

        $('#query').keyup(function(event){
        if(event.keyCode == 13){
        
        var lat = document.getElementById("lat").innerHTML;
        // console.log(lat);
        var lon = document.getElementById("lon").innerHTML;
        // console.log(lon);
            $.ajax({
                type:'POST',
                url:'setsession.php',
                data:{lat:lat, lon:lon},
                success: function(data){
                    if(data=="YES"){
                        // console.log('YESaass')
                        window.location.href = "products-page.php";
                        }else{
                            console.log('NOoooo')
                        }
                   // console.log(data); 
               }
                })

        }
            });
    
    });


$(document).ready(function() {
    $('#filter').change(function(e) {                    
    function sorten()
    {
         var type = $('#filter option:selected').val();

        return type;
    }
        var type = sorten();
       console.log(type);

        var dataString = 'product_type=' + type;

        $.ajax({

            type: "GET",
            url: "filter.php",
            data: dataString,
            dataType: 'html',
            cache: false,
            success: function(response) {
                    // console.log(response);
                    // alert(response);
                    document.getElementById("products-container").innerHTML = response;

                }
        });

        return false;

    });

});
