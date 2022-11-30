$(function(){

    $('.book-list .edit-delete .delete-button').on('click', function(){

        const id = $(this).data('id');
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({

            type: 'POST',
            url: '/book/delete',
            data: {id: id},
            dataType: 'json',
            success: function(data){
                
                $('.delete-modal .delete-form h3').html('Are you sure want to delete this book: <strong>' + data.title + '</strong> ?');

                $('.delete-modal .delete-form #id').val(data.id);
            }
        });

    });

});