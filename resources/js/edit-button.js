$(function(){

    $('.book-list .edit-delete .edit-button').on('click', function(){

        const id = $(this).data('id');
        document.location.href = '/book/edit/' + id;

    });

});