$(document).ready(function(){
    var url      = window.location.href;
    var data_filter = localStorage.getItem("data_filter");
    /*menu*/
    if(url.split('/')[3].length > 0){
        $(".nav.navbar-nav li").each(function(){
            $urlsplit = url.split('?');
            if($urlsplit[0].split('/')[3] == $(this).data('name')){
                $(".nav.navbar-nav li a").css('background','none');
                $(".nav.navbar-nav li").removeClass('clickMenuGround');
                $(this).addClass('clickMenuGround');
            }else if($urlsplit[0].split('/')[3].length == 0){
               $(".nav.navbar-nav .active").addClass('clickMenuGround');
            }
        })
    }else{
        $(".nav.navbar-nav li a").css('background','none');
        $(".nav.navbar-nav li").removeClass('clickMenuGround');
        $(".nav.navbar-nav li[data-name='home']").addClass('clickMenuGround');
    }
    $(".nav.navbar-nav li").click(function(){
        $(".nav.navbar-nav li a").css('background','none');
        $(".nav.navbar-nav li").removeClass('clickMenuGround');
        $(this).addClass('clickMenuGround');
    })
    $(document).scroll(function(){
        if($(document).scrollTop() > "200"){
            $('.nav.navbar-nav').addClass('headerMenuPosition');
        }else{
            $('.nav.navbar-nav').removeClass('headerMenuPosition');
        }
    })
    /*end menu*/
    /*slider*/
    $(function() {
        $(".rslides").responsiveSlides();
    });
    $(".rslides").responsiveSlides({
        auto: true,             // Boolean: Animate automatically, true or false
        speed: 500,            // Integer: Speed of the transition, in milliseconds
        timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
        pager: false,           // Boolean: Show pager, true or false
        nav: false,             // Boolean: Show navigation, true or false
        random: false,          // Boolean: Randomize the order of the slides, true or false
        pause: false,           // Boolean: Pause on hover, true or false
        pauseControls: true,    // Boolean: Pause when hovering controls, true or false
        prevText: "Previous",   // String: Text for the "previous" button
        nextText: "Next",       // String: Text for the "next" button
        maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
        navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
        manualControls: "",     // Selector: Declare custom pager navigation
        namespace: "rslides",   // String: Change the default namespace used
        before: function(){},   // Function: Before callback
        after: function(){}     // Function: After callback
    });
    /*end slider*/

    /*Filter gallery*/
        $("#isotop_filters span").click(function(){
             $("#isotop_filters span").removeClass('is-checked');
             $(this).addClass('is-checked');
             var token = $("#isotop_filters").data('token');
             var getFiltGalKey = $(this).data('filter');
                $.ajax({
                    url: url,
                    type: 'get',
                    dataType: 'json',
                    data: {_token :token,"getFiltrGalKey":getFiltGalKey},
                    success: function(result) {
                        $(".isotop").html("");
                        if(result.data.rows.data.length>0){
                            $.each(result.data.rows.data, function( index, value ) {
                                if(value.image.length>0){
                                    var imgSrc = "images/uploads/"+value.image;
                                }else{
                                    var imgSrc = 'images/resources/unknown.jpg';
                                }
                                $(".isotop").append("<div class='grid isotop_item category01'>" +
                                    "<div data-fancybox-group='1' class='thumb'>" +
                                    "<img src="+imgSrc+" alt=''>" +
                                    "<span class='thumb_overlay'>" +
                                    "<span><span><p>"+value.name+"</p>Цена։"+value.price+"</span></span></span></div></div>");
                            });

                        }else{
                            $(".isotop").html("<h4>В этом разделе нет картин<h4>");
                        }
                        if(result.data.paginationMarkup.length>0){
                            $("#pagination").html(result.data.paginationMarkup);
                        }else{
                            $("#pagination").html('');
                        }
                    }
                });

        })

        if(data_filter !== null && data_filter.length>0){
            $("#isotop_filters span").each(function(){
                if($(this).data('filter')==data_filter){
                    $("#isotop_filters span").removeClass('is-checked')
                    $(this).addClass('is-checked');
                    $($("#isotop_filters .is-checked")).click();
                }
            })
        }
        $(document).on('click',"#pagination .pagination a",function(){
                localStorage.removeItem("data_filter");
                localStorage.setItem("data_filter", $("#isotop_filters .is-checked").data('filter'));

        });

    /*END filter gallery*/
    /*footer*/
    
    
    /*END footer*/
})

