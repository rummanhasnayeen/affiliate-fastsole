jQuery(function($){
    $('.misha_loadmore').click(function(){
       var button = $(this),
            data = {
                'action': 'loadmore',
                'query': misha_loadmore_params.posts, // that's how we get params from wp_localize_script() function
                'page' : misha_loadmore_params.current_page
            };

       $.ajax({
            url : misha_loadmore_params.ajaxurl,
            data : data,
            type : 'POST',
            beforeSend : function ( xhr ) {
                button.text('Loading...');
            },
            success : function( data ){

                if( data ) {


                    button.text( 'More posts default' );
                    $('#response').append( data );
                    misha_loadmore_params.current_page++;

                    if ( misha_loadmore_params.current_page == misha_loadmore_params.max_page )
                        button.remove();


                } else {
                    button.remove();
                }
            }
        });

        return false;
    });
});