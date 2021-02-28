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
            url:'./controllers/add-contact.php',
            data:formData,
            success:function(res){
                console.log(res);
            },
            error:function(err){
                console.error(err);
            }
        })
    });
});