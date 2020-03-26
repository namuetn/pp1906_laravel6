$(document).ready(function(){
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.add_to_cart').click(function() {
       
        var url = '/orders/' + $(this).data('product-id');
        var data = {
            'product_id': $(this).data('product-id'),
            'quantity' : $('input[name="quantity"]').val()
        };
        
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function(result) {
                $('.cart_num').text(result.quantity);
                alert('Order success!');
            },
            error: function() {
                alert('Please login before order');
                window.location.href = '/login';

               // location.reload();
            }
        });
    });    
});