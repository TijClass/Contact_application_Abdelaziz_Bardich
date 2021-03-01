$(document).ready(function(){
    // Table filter
    $("#search").keyup(function() {
        let keyword = $(this).val().toLowerCase();
        $("table tbody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(keyword) > -1);
        });
    });
    // add person
    $('#add-person form').submit(function(e){
        e.preventDefault();
        let formData = $(this).serialize();
        $.post({
            url:'./core/controllers/add-contact.php',
            data:formData,
            success:function(res){
                if(res != 0){
                    $("#add-person").modal('toggle');
                    let data = JSON.parse(res);
                    $('table tbody').prepend(`<tr>
                    <td>${data['id']}</td>
                    <td>${data['fname']}</td>
                    <td>${data['lname']}</td>
                    <td>${data['email']}</td>
                    <td>${data['adress']}</td>
                    <td>${data['group']}</td>
                    <td>${data['note']}</td>
                    <td><a data-id="${data['id']}" href="#">Edit</a> <a href="./core/controllers/delete-contact.php?id=${data['id']}"><i class="fa fa-times-circle text-danger"></i></a></td>
                </tr>`);
                }
            },
            error:function(err){
                console.error(err);
            }
        })
    });
});