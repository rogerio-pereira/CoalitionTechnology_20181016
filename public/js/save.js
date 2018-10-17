$('#saveButton').click(function(event){
    $.ajax
    ({
        type: "POST",
        url: "/product/storeAjax",
        data: {
            _token: $("[name='_token']").val(),
            name: $('#name').val(),
            stock: $('#stock').val(),
            price: $('#price').val(),
        },
        success: function(data)
        {
            $.get("/product/all", function(dataReturn) {
                $("#productList").html(dataReturn);
            });
        }
    });
});