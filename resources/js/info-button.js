$(function(){
    
    $('.book-list .info-button button').on('click', function(){

        const id = $(this).data('id');
        document.location.href = '/book/show/' + id;

    });

});