$(function(){

    $('.edit-rental').on('click', function(){

        const id = $(this).data('id');
        document.location.href = '/rental/edit/' + id;

    });

});