//Photo Review
$(document).on('click', '.photo-review-more', function(event){
  var button = $(this),
      data = {
    'action': 'loadmore_photoreviews',
    'query': loadmore_photoreviews_params.posts, // that's how we get params from wp_localize_script() function
    'page' : loadmore_photoreviews_params.current_page,
  };

  $.ajax({
    url: loadmore_photoreviews_params.ajaxurl, // AJAX handler
    data: data,
    type: 'POST',
    beforeSend : function ( xhr ) {
      button.text('Загружаем...'); // change the button text, you can also add a preloader image
    },
    success : function( data ){
      if( data ) { 
        button.text( 'Загрузить еще' ).prev().before(data); // insert new posts          
        loadmore_photoreviews_params.current_page++;
        console.log(loadmore_photoreviews_params.current_page);
        console.log(loadmore_photoreviews_params);
        $('.p_reviews__photos a:last-of-type').after(data);
        if ( loadmore_photoreviews_params.current_page == loadmore_photoreviews_params.max_page ) 
          button.remove(); // if last page, remove the button

        // you can also fire the "post-load" event here if you use a plugin that requires it
        // $( document.body ).trigger( 'post-load' );
      } else {
        button.remove(); // if no data, remove the button as well
      }
    }
  });
});
$(document).on('click', '.photo-review-mobile-more', function(event){
  var button = $(this),
      data = {
    'action': 'loadmore_photoreviews_mobile',
    'query': loadmore_photoreviews_params.posts, // that's how we get params from wp_localize_script() function
    'page' : loadmore_photoreviews_params.current_page,
  };

  $.ajax({
    url: loadmore_photoreviews_params.ajaxurl, // AJAX handler
    data: data,
    type: 'POST',
    beforeSend : function ( xhr ) {
      button.text('Загружаем...'); // change the button text, you can also add a preloader image
    },
    success : function( data ){
      if( data ) { 
        button.text( 'Загрузить еще' ).prev().before(data); // insert new posts          
        loadmore_photoreviews_params.current_page++;
        console.log(loadmore_photoreviews_params.current_page);
        console.log(loadmore_photoreviews_params);
        $('.p_reviews__photos a:last-of-type').after(data);
        if ( loadmore_photoreviews_params.current_page == loadmore_photoreviews_params.max_page ) 
          button.remove(); // if last page, remove the button

        // you can also fire the "post-load" event here if you use a plugin that requires it
        // $( document.body ).trigger( 'post-load' );
      } else {
        button.remove(); // if no data, remove the button as well
      }
    }
  });
});