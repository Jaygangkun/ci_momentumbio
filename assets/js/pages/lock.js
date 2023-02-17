(function($){
    $(document).on('keypress', '#password', function(e) {
        if(e.which == 13) {
            if($(this).val() == '') {
                alert('Please Input password');
                return;
            }

            $.ajax({
                url: baseURL + '/ajax/unlock',
                type: 'post',
                data: {
                    password: $(this).val()
                },
                dataType: 'json',
                success: function(resp) {
                    if(resp.success) {
                        // alert("Sent email Successfully")
                        location.href = baseURL;
                    }
                    else {
                        alert(resp.error);
                    }
                }
            })
        }
    })
})(jQuery)