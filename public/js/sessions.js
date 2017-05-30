$(".btn-azure").click(function(e) {
    $('.btn-azure.active').removeClass("active");
    $(this).addClass("active");
    switch (e.target.id) {
        case 'day':
        case 'week':
        case 'month':
        case 'year':
            $.ajax({
                url: 'timeRange/' + e.target.id,
                success: function (res) {
                    var usersHeading = getUsersHeading(res.activeUsers);
                    $('#activeSessionsValue').html(res.activeUsers + ' ' + usersHeading);
                    $('.progress-bar').css('width', res.activeUsers + '%').attr('aria-valuenow', res.usersCount * 10);
                },
                headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
            });
            break;
        default:
            $.ajax({
                url: 'activeSessions',
                success: function (res) {
                    var usersHeading = getUsersHeading(res.activeSessions);
                    $('#activeSessionsValue').html(res.activeSessions + ' ' + usersHeading);
                    $('.progress-bar').css('width', res.activeSessions + '%').attr('aria-valuenow', res.activeSessions*10);
                },
                headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
            });
            break;
    }
});