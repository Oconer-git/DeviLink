 //show settings profile when click
 $('#profile_settings').click(function(){
    $('#requests_dropdown').hide();
    $('#profile_dropdown').toggle();
})
$('#requests_notif').click(function(){
    $('#profile_dropdown').hide();
    $('#requests_dropdown').toggle();
})

$('#following_requests').toggle(250);
//for uploading photos in post
$('#upload_post_picture').click(function(){
    $('#post_picture').toggle();
})

//for opening post form modal
$('#post_modal').click(function(){
    $('#post_form').show();
});

//for automatic focus in textareas
$('.textarea').focus();