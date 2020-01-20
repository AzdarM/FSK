document.getElementById('status').innerHTML = "Sending...";
formData = {
    'mailname': $('input[name=mailtext]').val(),
    'mailemail': $('input[name=mailemail]').val(),
    'mailsubject': $('input[name=mailsubject]').val(),
    'mailtext': $('input[name=mailtext]').val(),
};



$.ajax({
    url: "mailMe.php",
    type: "POST",
    data: formData,
    success: function(data, textStatus, jqXHR) {

        $('#status').text(data.message);
        if (data.code) //If mail was sent successfully, reset the form.
            $('#mailme-form').closest('form').find("input[type=text], textarea").val("");
    },
    error: function(jqXHR, textStatus, errorThrown) {
        $('#status').text(jqXHR);
    }
});