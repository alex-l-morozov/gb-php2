$('.cart-add').on('click', function(e) {
    e.preventDefault(); //отменить выполнение действия по умолчанию
    e.stopPropagation(); //остановить дальнейшее всплытие события
    $.ajax({
        type: "GET",
        dataType: "html",
        url: './?asAjax&path=cart/add/' + $(this).attr('data-product-id'),
        success: function (data) {
        }
    });
});
$('.cart-del').on('click', function(e) {
    e.preventDefault(); //отменить выполнение действия по умолчанию
    e.stopPropagation(); //остановить дальнейшее всплытие события
    $.ajax({
        type: "GET",
        dataType: "html",
        url: './?asAjax&path=cart/delete/' + $(this).attr('data-product-id'),
        success: function (data) {
            location.reload();
        }
    });
});
