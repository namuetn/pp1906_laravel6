$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.cart_product_remove').click(function() {
        if(confirm('Delete this product, are you sure?')) {
            var url = '/orders/delete';
            var productId = $(this).data('product-id');
            var data = {
                'product_id': $(this).data('product-id')
            };
            
            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                success: function(result) {
                    if(result.status) {
                        $('.product-' + productId).remove();
                        $('.total-price').text('$' + result.total_price);
                        $('.cart_num').text(result.quantity);
                    }
            
                },
                error: function() {
                    alert('Something went wrong!');
                    // window.location.href = '/login';

                    location.reload();
                }
            });
        }
    });

    $('input[name="quantity"]').change(function() {
        var cartNumber = 0;
        $.each($('input[name="quantity"]'), function(){
            cartNumber = parseInt(cartNumber) + parseInt($(this).val());

        });

        if (confirm('Update this products, are you sure')) {
            var url = '/orders/update';
            var productId = $(this).parent().parent().parent().find('.cart_product_remove').data('product-id');
            var quantityUpdate = $(this).val();
            var data = {
                'product_id': productId,
                'quantity': quantityUpdate
            };

            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                success: function(result) {
                    if (result.status) {
                        console.log($('.total-price').text('$' + result.total_price));
                        $('.total-price').text('$' + result.total_price);
                        $('.cart_num').text(result.quantity);
                    }
                },
                error: function() {
                    alert('Something went wrong!');
                    location.reload();
                }
            });
        }
    });    
});