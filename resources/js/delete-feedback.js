$(function(){

    $('.inbox .delete-feedback').on('click', function(){

        const id = $(this).data('id');
        document.location.href = '/feedback/delete/' + id;

    });

});