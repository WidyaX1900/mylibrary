$(function(){

    $('.delete-rental').on('click', function(){

        const id = $(this).data('id');
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({

            type: 'POST',
            url: '/rental/delete',
            data: {id: id},
            dataType: 'json',
            success: function(data){
                
                $('.delete-form-rental #id').val(data.id)
            }

        });

    });

});