$(function(){

    function searchData(){

        const keyword = document.getElementById('keyword');
        const filter = keyword.value.toUpperCase();
        const rentalTable = document.getElementById('rental-table');
        const tr = rentalTable.getElementsByTagName('tr');
        var td = undefined;
        var textValue = undefined;

        for(let i = 0; i < tr.length; i++){

            td = tr[i].getElementsByTagName('td')[1];
            
            if(td){

                textValue = td.textContent || td.innerText;

                if(textValue.toUpperCase().indexOf(filter) > -1){

                    tr[i].style.display = '';
                
                } else {

                    tr[i].style.display = 'none';
                }
            }
        }
    }

    $('#keyword').on('keyup', function(e){

        searchData();

    });

});