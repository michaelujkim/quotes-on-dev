(function($){

//   $('#close-comments').on('click', function(event) {
//     event.preventDefault();
//     $.ajax({
//        method: 'post',
//        url: red_vars.rest_url + 'wp/v2/posts/' + red_vars.post_id,
//        data: {
//           comment_status: 'closed'
//        },
//        beforeSend: function(xhr) {
//           xhr.setRequestHeader( 'X-WP-Nonce', red_vars.wpapi_nonce );
//        }
//     }).done( function(response) {
//        alert('Success! Comments are closed for this post.');
//     });
//  });
$('#new-quote-button').on('click', function(event) {

  event.preventDefault();
 $.ajax({
  url: api_vars.root_url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
  method: 'GET'
})
.done((function(data){
  
  $('.hentry').empty();
  
  // $.each(storiesWithPicture, function(index,value){
    
  //   console.log(photos);

  var output = '<span class="quote-title">';
  output += data[0].excerpt.rendered;
  output += '</span>';

    $('.hentry').append( 
      output,
      data[0].title.rendered,
      data[0]._qod_quote_source_url
      
   );

  }))
 


 })


 $('#quote-submit-button').on('click', function(event) {
  var quoteAuthor =$('#quote-author').val();
  var quoteContent =$('#quote-content').val();
  var quoteSource =$('#quote-source').val();
  var quoteSourceUrl =$('#quote-source-url').val();

  
    event.preventDefault();
   $.ajax({
    url: api_vars.root_url + 'wp/v2/posts',
    method: 'POST',
    data: {
      title: quoteAuthor, 
      content: quoteContent, 
      _qod_quote_source: quoteSource,
      _qod_quote_source_url: quoteSourceUrl },


    beforeSend: function (xhr) {
      xhr.setRequestHeader('X-WP-Nonce', api_vars.nonce);
    }

  })
 
  .done((function(){
   alert ("thank for your submission");
    
   $('#quote-author').empty();
   $('#quote-content').empty();
   $('#quote-source').empty();
   $('#quote-source-url').empty();
    
    
   
      
  
    }))
   
  
  
   })

})(jQuery);