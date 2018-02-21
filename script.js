var colour,brand,size,price;
$(function(){
    $('.item_filter').click(function(){
        $('.details').html('<div id="loaderpro" style="" ></div>');

         colour = multiple_values('colour');
         brand  = multiple_values('brand');
         size   = multiple_values('size');
         price  = multiple_values('price');

        $.ajax({
            url:"ajax.php",
            type:'post',
       data:{colour:colour,brand:brand,size:size,price:price},
            success:function(result){
                $('.details').html(result);
            }
        });
    });

});


function multiple_values(inputclass){
    var val = new Array();
    $("."+inputclass+":checked").each(function() {
        val.push($(this).val());
    });
    return val;
}


/*$(function() {
        $( "#slider-range" ).slider({
          range: true,
          min: 0,
          max: 3000,
          values: [ 100, 3000 ],
          slide: function( event, ui ) {
            $( "#priceshow" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            $( ".price1" ).val(ui.values[ 0 ]);
            $( ".price2" ).val(ui.values[ 1 ]);
            $('.product-data').html('<div id="loaderpro" style="" ></div>');
             colour = multiple_values('colour');
             brand  = multiple_values('brand');
             size   = multiple_values('size');
            $.ajax({
                url:"ajax.php",
                type:'post',
                data:{colour:colour,brand:brand,size:size,sprice:ui.values[ 0 ],eprice:ui.values[ 1 ]},
                success:function(result){
                    $('.product-data').html(result);
                }
            });
          }
        });*/
