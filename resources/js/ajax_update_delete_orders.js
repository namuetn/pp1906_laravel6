$(document).ready(function () {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $('.cart_product_remove').click(function () {

      swal({
  title: "Are you sure?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    var url = '/orders/delete';
      var productId = $(this).data('product-id');
      var data = {
        'product_id': $(this).data('product-id')
      };
      $.ajax({
        url: url,
        type: 'POST',
        data: data,
        success: function success(result) {
          if (result.status) {
            $('.product-' + productId).remove();
            $('.total-price').text('$' + result.total_price);
            $('.cart_num').text(result.quantity);
          }
        },
        error: function error() {
          alert('Something went wrong!'); // window.location.href = '/login';

          location.reload();
        }
      });
    swal("Delete success!", {
      icon: "success",
    });
  }
});


  });
  $('input[name="quantity"]').change(function () {
    var cartNumber = 0;
    $.each($('input[name="quantity"]'), function () {
      cartNumber = parseInt(cartNumber) + parseInt($(this).val());
    });
      if($('input[name="quantity"]').val() <= 0){
        swal("Do not enter a negative number");

      } else {
      var url = '/orders/update';
      var productId = $(this).parent().parent().parent().find('.cart_product_remove').data('product-id');
      var price = $(this).parent().parent().parent().find('.price1').text();
       console.log(price);
      var quantityUpdate = $(this).val();
      var totalOnePro = price * quantityUpdate;
      var data = {
        'product_id': productId,
        'quantity': quantityUpdate
      };
      var test = $(this).parent().parent().parent().find('.cart_product_total');
      $.ajax({
        url: url,
        type: 'POST',
        data: data,
        success: function success(result) {

          if (result.status) {
            $('.total-price').text('$' + result.total_price);
            test.text('$' + totalOnePro);
            $('.cart_num').text(result.quantity);
            swal("Update success!", "", "success");
          }
        },
        error: function error() {

            swal('Something went wrong!');
            location.reload();

        }
      });
    }

  });
});
