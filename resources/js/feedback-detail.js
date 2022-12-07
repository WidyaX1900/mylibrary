$(function(){

    $('.feedback-detail').on('click', function(){

        const id = $(this).data('id');
        document.location.href = '/feedback/show/' + id;
    });

});