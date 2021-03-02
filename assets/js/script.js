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
                console.log(res);
                if(res != 0){
                    $("#add-person").modal('toggle');
                    clearForm();
                    let data = JSON.parse(res);
                    $('table tbody').prepend(`<tr data-id="${data['id']}">
                    <td>${data['id']}</td>
                    <td>${data['fname']}</td>
                    <td>${data['lname']}</td>
                    <td>${data['email']}</td>
                    <td>${data['adress']}</td>
                    <td>${data['phone']}</td>
                    <td>${data['group']}</td>
                    <td>${data['note']}</td>
                    <td>
                        <a onclick="showEditModal(${data['id']})" class="btn btn-link">Edit</a>
                        <a onclick="deleteContact(${data['id']})">
                            <i class="fa fa-times-circle text-danger"></i>
                        </a>
                    </td>
                </tr>`);
                }
            },
            error:function(err){
                console.error(err);
            }
        })
    });

    // Edit contact
    $('#edit-person form').submit(function (e) {
        e.preventDefault();
        let formData = $(this).serialize();
        $.post({
            url:'./core/controllers/edit-contact-infos.php',
            data:formData,
            success:function(res){
                console.log(res);
                if(res != 0){
                    let data = JSON.parse(res);
                    $("#edit-person").modal('toggle');
                    clearForm();
                    $(`tr[data-id="${data['id']}"`).html(`
                    <td>${data['id']}</td>
                    <td>${data['fname']}</td>
                    <td>${data['lname']}</td>
                    <td>${data['email']}</td>
                    <td>${data['adress']}</td>
                    <td>${data['phone']}</td>
                    <td>${data['group']}</td>
                    <td>${data['note']}</td>
                    <td>
                        <a onclick="showEditModal(${data['id']})" class="btn btn-link">Edit</a>
                        <a onclick="deleteContact(${data['id']})">
                            <i class="fa fa-times-circle text-danger"></i>
                        </a>
                    </td>`);
                    $(`tr[data-id="${data['id']}"`).fadeOut();
                    $(`tr[data-id="${data['id']}"`).fadeIn();
                    
                }
            },
            error:function(err){
                console.error(err);
            }
        });
    })
});