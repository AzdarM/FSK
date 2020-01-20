document.getElementById('status').innerHTML = "Sending...";
formData = {
    'nameorg': $('input[name=nameorg]').val(),
    'inn': $('input[name=inn]').val(),
    'nameperson': $('input[name=nameperson]').val(),
    'phoneperson': $('input[name=phoneperson]').val(),
    'emailperson': $('input[name=emailperson]').val(),
    'summakredit': $('input[name=summakredit]').val(),
    'summapor': $('input[name=summapor]').val(),
    'timekredit': $('input[name=timekredit]').val(),
    'target': $('input[name=target]').val(),
    'comments': $('input[name=comments]').val(),
};


$.ajax({
    url: "mailOrder.php",
    type: "POST",
    data: formData,
    success: function(data, textStatus, jqXHR) {

        $('#status').text(data.message);
        if (data.code) //If mail was sent successfully, reset the form.
            $('#order-form').closest('form').find("input[type=text], textarea").val("");
    },
    error: function(jqXHR, textStatus, errorThrown) {
        $('#status').text(jqXHR);
    }
});