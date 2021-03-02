// delete contact
function deleteContact(id){
    $.post({
        url:"./core/controllers/delete-contact.php",
        data:{id:id},
        success:function (res) {
            if(res == 1){
                $('tr[data-id="'+id+'"]').fadeOut().delay(1500).remove();
            }
        },
        error:function (err) {
            console.error(err);
        }
    })
}
// clear forms
function clearForm() {
    $('input').val('');
    $('input').prop('checked',false);
    $('textarea').val('');
    $('select').val('');
}