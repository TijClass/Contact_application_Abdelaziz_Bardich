// delete contact
function deleteContact(id){
    swal({
        title: "Êtes-vous sûr?",
        text: "Vous êtes sur le point de supprimer un contact de votre liste",
        icon: "warning",
        buttons: ["Annuler", "Supprimer"],
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            $.post({
                url:"./core/controllers/delete-contact.php",
                data:{id:id},
                success:function (res) {
                    if(res == 1){
                        $('tr[data-id="'+id+'"]').fadeOut(500);
                        setTimeout(() => {
                            $('tr[data-id="'+id+'"]').remove(); 
                        }, 600);
                        swal("Contact supprimé avec succès!", {icon: "success",});
                    }
                },
                error:function (err) {
                    console.error(err);
                }
            })
        }
      });
    // swal({
    //     title: "Êtes-vous sûr?",
    //     text: "Vous êtes sur le point de supprimer un contact de votre liste",
    //     icon: "warning",
    //     buttons: ["Annuler", "supprimer"],
    //     // buttons: true,
    //     dangerMode: true,
    //   })
    //   .then((willDelete) => {
    //     if (willDelete) {
    //         $.post({
    //             url:"./core/controllers/delete-contact.php",
    //             data:{id:id},
    //             success:function (res) {
    //                 if(res == 1){
    //                     $('tr[data-id="'+id+'"]').fadeOut(500);
    //                     setTimeout(() => {
    //                         $('tr[data-id="'+id+'"]').remove(); 
    //                     }, 600);
    //                     swal("Contact supprimé avec succès!", {icon: "success",});
    //                 }
    //             },
    //             error:function (err) {
    //                 console.error(err);
    //             }
    //         })
    //     }
    //   });
}
// clear forms
function clearForm() {
    $('input[type="text"]').val('');
    $('input[type="email"]').val('');
    $('input[type="number"]').val('');
    $('input[type="password"]').val('');
    $('input').prop('checked',false);
    $('textarea').val('');
}


function showEditModal(id) {
    $.get({
        url:"./core/controllers/get-contact-infos.php?id="+id,
        success:function(res){
            if(res != 0){
                let data = JSON.parse(res);
                $("#edit-person").modal('toggle');
                $("#old-id").val(id);
                $("#old-first-name").val(data[0]['first_name']);
                $("#old-last-name").val(data[0]['last_name']);
                $("#old-email-txt").val(data[0]['email']);
                $("#old-adress-text").val(data[0]['address1']);
                $("#old-phone-txt").val(data[0]['phone']);
                switch (data[0]['group']) {
                    case "family":
                        $("#old-family").prop("checked",true);
                        break;
                    case "friend":
                        $("#old-friend").prop("checked",true);
                        break;
                    case "business":
                        $("#old-business").prop("checked",true);
                        break;
                }
                $("#old-note-text").val(data[0]['notes']);
            }
        },
        error:function(err){
            console.error(err);
        }
    });
}