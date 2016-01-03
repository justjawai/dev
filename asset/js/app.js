/*Variable declaration*/
var $contactForm = $("#form_contact_us"),
    $NewsSubmitForm = $("#form_news_submit"),
    $AdvertisementForm = $("#form_advertisement"),
    $loader = $(".loader"),
    $img_preview = $("#img-preview");



/*Contact form submission*/
$contactForm.on('submit', function(e){
   e.preventDefault();
    $loader.show();
    $.ajax({
        type : 'POST',
        url : baseurl+'contactSave',
        data : $contactForm.serialize()
    }).done(function(response){
        notify(response, $contactForm);
        captcha();
    }).always(function(){
        $loader.hide();

    });
});

$NewsSubmitForm.on('submit', function(e){
    e.preventDefault();
    $loader.show();
    tinymce.triggerSave();
    $.ajax({
        type : 'POST',
        url : baseurl+'newsSave',
        data : $NewsSubmitForm.serialize()
    }).done(function(response){
        notify(response, $NewsSubmitForm);
        captcha();
    }).always(function(){
        $loader.hide();
    });
});


$AdvertisementForm.on('submit', function(e){
    e.preventDefault();
    $loader.show();
    $.ajax({
        type : 'POST',
        url : baseurl+'advertisementSave',
        data : $AdvertisementForm.serialize()
    }).done(function(response){
        notify(response, $AdvertisementForm);
        captcha();
    }).always(function(){
        $loader.hide();
    });
});





function notify(response, form){
    if(response.code == 0){
        $.toast({
            text : response.value,
            hideAfter : 5000,
            position: 'top-right',
            icon: 'warning'
        })

    }else if(response.code == 1){
        form.trigger('reset');
        if(typeof variable !== 'undefined'){
            tinyMCE.activeEditor.setContent('');
        }
        $img_preview.attr('src','https://placeholdit.imgix.net/~text?txtsize=33&txt=upload%20image&w=140&h=100');
        $.toast({
            text : response.value,
            hideAfter : 5000,
            position: 'top-right',
            icon: 'success'
        })

    }else{
        $.toast({
            text : response.value,
            hideAfter : 5000,
            position: 'top-right',
            icon: 'error'
        })

    }
}


//page advertisement css

$(".ad_size").on('click', function(e){
    e.preventDefault();
    $(".ad_size").removeClass('ad_selected');
    $(this).addClass('ad_selected');
    $(".add_size_value").val($(this).data('size'));
});



function captcha(){
    $.get(baseurl+'captcha', function(response){
        $(".captcha").html(response);
    })
};

//file upload

$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = baseurl+'upload';
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        limitMultiFileUploadSize:1024,
        done: function (e, data) {
            console.log(data);
            $.each(data.result.files, function (index, file) {
                var $src = (baseurl+'uploads/thumbnail/'+file.name) ? baseurl+'uploads/thumbnail/'+file.name : 'https://placeholdit.imgix.net/~text?txtsize=33&txt=upload%20image&w=140&h=100';
                $img_preview.attr('src',$src);
                $("#image_val").val((file.name) ? file.name : '');
            });
        },
        error:function(){
          alert('File size too big');
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});


