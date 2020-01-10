$(document).ready(function(){
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.category-button').click(function() {
       
        var url = '/products/category/{category}';
        var data = {
            'category_id': $(this).data('category-id')
        };
        
        $.ajax({
            url: url,
            type: 'GET',
            data: data,
            success: function(result) {
                if(result.product) {
                    $(this).data('category-id').show();
                }
                // $(this).data('category-id').hide();
            },
        });
    });    
});