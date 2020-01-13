$(document).ready(function () {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $('.category-button').click(function () {
    var url = '/products/category/' + $(this).data('category-id');
    var data = {
      'category_id': $(this).data('category-id')
    };
    console.log(url);
    $.ajax({
      url: url,
      type: 'GET',
      data: data,
      success: function success(products) {
        var viewProduct = '';

        $.each(products, function( key, product ) {
          viewProduct = viewProduct +
            '<div class="product" style="float: left;">' +
                '<div class="product_image">' +
                                  
                  '<a href="#" class="img-prod">' +
                    '<img class="img-fluid" src=" http://localhost:8000/images/' + product.image + '">' +
                  '</a>' +
                '</div>' +
                '<a href="#" class="img-prod">' +
                  '<div class="rating rating_4" data-rating="4">' +
                    '<i class="fa fa-star"></i>' +
                    '<i class="fa fa-star"></i>' +
                    '<i class="fa fa-star"></i>' +
                    '<i class="fa fa-star"></i>' +
                    '<i class="fa fa-star"></i>' +
                  '</div>' +
                '</a>' +
                '<div class="product_content clearfix">' +
                  '<a href="#" class="img-prod"></a>' +
                    '<div class="product_info">' +
                      '<a href="#" class="img-prod"></a>' +
                      '<div class="product_name">' +
                        '<a href="#" class="img-prod"></a>' +
                        '<a href="http://localhost:8000/products/' + product.id + '">' + product.name + '</a>' +
                      '</div>' +
                      '<div class="product_price">' + product.price + '</div>' +
                    '</div>' +
                  
                  '<div class="product_options">' +
                    '<div class="product_buy product_option" data-product-id="2"><img src="theme/images/shopping-bag-white.svg" alt=""></div>' +
                    '<div class="product_fav product_option">+</div>' +
                  '</div>' +
                '</div>' +
              '</div>'
          ;
        });

        $('.product').remove();
        $('.product_grid').append(viewProduct);
      }
    });
  });
});