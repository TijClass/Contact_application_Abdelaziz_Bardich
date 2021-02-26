$(document).ready(function(){
    $("#search").keyup(function() {
        let keyword = $(this).val().toLowerCase();
        $("table tbody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(keyword) > -1);
        });
    });
});