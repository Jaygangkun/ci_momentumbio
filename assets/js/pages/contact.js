(function($){
    $(document).on('click', '#btn_submit', function() {

        if($('#first_name').val() == '') {
            alert('Please Input First Name!');
            $('#first_name').focus();
            return;
        }

        if($('#last_name').val() == '') {
            alert('Please Input Last Name!');
            $('#last_name').focus();
            return;
        }

        if($('#email').val() == '') {
            alert('Please Input Email!');
            $('#email').focus();
            return;
        }

        if($('#company').val() == '') {
            alert('Please Input Company!');
            $('#company').focus();
            return;
        }

        if($('#interest_area').val() == '') {
            alert('Please Choose Interest Area!');
            $('#interest_area').focus();
            return;
        }

        $.ajax({
            url: baseURL + '/ajax/contact',
            type: 'post',
            data: {
                first_name: $('#first_name').val(),
                last_name: $('#last_name').val(),
                email: $('#email').val(),
                company: $('#company').val(),
                interest_area: $('#interest_area').val(),
                additional: $('#additional').val(),
            },
            dataType: 'json',
            success: function(resp) {
                if(resp.success) {
                    showAlert("<p>Thank you for your interesest in Momentum Biotechnologies.<br>We'll be in touch shortly.</p>", function() {
                        $('#first_name').val('');
                        $('#last_name').val('');
                        $('#email').val('');
                        $('#company').val('');
                        $('#interest_area').val('');
                        $('#additional').val('');
                    });
                }
                else {
                    showAlert(resp.error);
                }
            }
        })
    })
})(jQuery)