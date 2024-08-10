<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="icon" href="{{asset('storage/images/tealbean_logo_transparent.png')}}" type="image/x-icon">
    <!-- tailwind -->
    @vite('resources/css/app.css')
    <!--profile modals -->
    @vite('resources/js/own_profile.js')
    <!-- post form modals -->
    @vite('resources/js/posting.js')
    <title>Tealbean</title>
    @livewireStyles
    <!-- font -->
    <!-- <link rel="preload" href="/fonts/inter-var-latin.woff2" as="font" type="font/woff2" crossOrigin="anonymous"
    /> -->
</head>
<script>
    $(function(){
        //for closing modals
        $('.close_modal').click(function(){
            $('.modal').hide();
        });

        $('#show_likes').click(function(){
            $('#likers_modal').show();
        });

        //comment page back button
        $('#back').click(function(){
            window.history.back();
        });

        //for previewing picture before uploading
        $('.picture').change(function(event) {
            var input = event.target;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.picture_preview').attr('src', e.target.result);
                    $('.picture_preview').show();
                    $('#post_picture').hide();
                }
                reader.readAsDataURL(input.files[0]);
            }
        });

        //for showing followers
        $('#show_followers').click(function(){
            $('#followers_modal').show();
        });

        $('#show_followings').click(function(){
            $('#followings_modal').show();
        });

        //click posts and redirect to comments
        $('.post').click(function(){
            //stop propagation, there is livewire on like button
            if ($(event.target).closest('.livewire-component').length === 0) {
                var post_id = $(this).data('post-id');
                if (post_id) {
                    window.location.href = "/post/" + post_id;
                }
            } 
            else {
                event.stopPropagation();
            }
        })

        $('.show_posts').click(function(){
            $('.user_shared').hide();
            $('#post_label').removeClass('text-slate-500');
            $('#post_label').addClass('text-teal-500');
            $('#shared_label').removeClass('text-orange-600');
            $('#shared_label').addClass('text-slate-500');
            $('.user_posts').show();
        });
        
        $('.show_shared').click(function(){
            $('.user_posts').hide();
            $('#post_label').removeClass('text-teal-500');
            $('#post_label').addClass('text-slate-500');
            $('#shared_label').removeClass('text-slate-500');
            $('#shared_label').addClass('text-orange-600');
            $('.user_shared').show();
        });

        //for showing message on home
        $('.message').show(); 
        setTimeout(function() {
            $('.message').remove(); // Hide the message after 4 seconds
        }, 4000); // 4000 milliseconds = 4 seconds
        
        //auto resize textareas
        $('textarea').on('input', function() {
            autoResize(this);
        });
        
        //for clicking reply
        $('.reply_button').on('click', function() {
            var commentId = $(this).data('comment-id');
            $('.reply_form[data-comment-id="' + commentId + '"]').toggleClass('hidden');
        });

        //for going to profile when click 
        $('.profile').click(function(){
            var username = $(this).data('username');
            window.location.href = "/profile/" + username;
        })

        //for going to save posts
        $('#saves').click(function(){
            window.location.href = "/saves";
        })

        //for going to home
        $('.home').click(function(){
            window.location.href = "/";
        })
    
        //show settings modal when settings is clicked in the sidebar
        $('.settings').click(function() {
            $('#settings_modal').show();
            $('#profile_dropdown').hide();
        })

        //for showing username settings
        $('#show_username_settings').click(function(){
            //show this form
            $('#username_settings').remove();
            $('#username_form').show();
        })
        
    });

    //for autoresizing textboxes
    function autoResize(textarea) {
        $(textarea).height('auto');
        $(textarea).height(textarea.scrollHeight + 'px');
    }
</script>
<body class="{{$background}} p-0 m-0 box-border">