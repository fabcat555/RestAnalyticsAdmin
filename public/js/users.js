$(".btn-azure").click(function(e) {
    $('.btn-azure.active').removeClass("active");
    $(this).addClass("active");
    var table = $('#users-table').DataTable();
    table.clear();
    $.ajax({
        url: "users/data/" + e.target.id,
        success: function(res) {
            switchTableHeading(e.target.id);
            table.rows.add(res.data);
            table.draw();
        },
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
});