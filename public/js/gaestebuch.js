
jQuery(document).ready(function($){

    //----- Open model CREATE -----//
    jQuery('#btn-add').click(function () {
        jQuery('#btn-save').val("add");
        jQuery('#myForm').trigger("reset");
        jQuery('#formModal').modal('show');
    });

    // CREATE
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var formData = {
            Vorname: jQuery('#Vorname').val(),
            Nachname: jQuery('#Nachname').val(),
            EMail: jQuery('#EMail').val(),
            Text: jQuery('#Text').val()
        };
        var state = jQuery('#btn-save').val();
        var type = "POST";
        var gaestebuch_id = jQuery('#gaestebuch_id').val();
        var ajaxurl = 'gaestebuch';
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function (data) {
                var gaestebuch = '<tr id="gaestebuch' + data.idEintrag + '"><td>' + data.idEintrag + '</td><td>' + data.Vorname + '</td><td>' + data.Nachname + '</td><td>'+data.EMail +'</td><td>'+data.Text +'</td>';
                if (state === "add") {
                    jQuery('#gaestebuch-list').append(gaestebuch);
                } else {
                    jQuery("#gaestebuch" + gaestebuch_id).replaceWith(gaestebuch);
                }
                jQuery('#myForm').trigger("reset");
                jQuery('#formModal').modal('hide')
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
});
