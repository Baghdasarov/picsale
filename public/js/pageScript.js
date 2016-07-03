$(document).ready(function(){
    /*menu*/
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
         var token = $(this).data('token');
         var getFiltGalKey = $(this).data('filter');
            $.ajax({
                url: 'getFilterGallery',
                type: 'post',
                dataType: 'json',
                data: {_token :token,"getFiltrGalKey":getFiltGalKey},
                success: function(result) {
                    $(".isotop").html("");
                    if(result.data.length>0){
                        $.each(result.data, function( index, value ) {
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
                }
            });

        })
    /*END filter gallery*/
})
