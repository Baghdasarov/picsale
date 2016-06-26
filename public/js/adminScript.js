$(document).ready(function(){
    $(".deleteRow").click(function(event){
            event.preventDefault();
            var picDataId = $(this).data("id");
            var token = $(this).data('token');
            console.log(picDataId);
            console.log(token);
            $("button[data-confirm='delete-ok']").click(function(){
                $.ajax({
                    url: '/admin/destroy',
                    type: 'post',  // user.destroy
                    data: {_method: 'delete',_token :token,"picDataId":picDataId},
                    success: function(result) {
                        if(result == 1){
                            $("[data-id="+picDataId+"]").parents().get(1).remove();
                        }else{
                            alert("this row not found");
                        }
                    }
                });
            })
    })
    $(document).on('click','.imgSource',function(){
        $('#zoomImg').show("300").animate({opacity: '1'});

        if($(this).find('img')){
            var thisImgSrc = $(this).find('img').attr('src');
            $("#zoomImg .zoomImgContent img").attr("src",thisImgSrc);
        }
        $(".closeImg").click(function(){
            $('#zoomImg').animate({opacity: '0'}).hide("500");
        })
        $("#zoomImg").click(function(){
            $('#zoomImg').animate({opacity: '0'}).hide("300");
        })
    })
})