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
                    window.location.href = "/testing/" + post_id;
                }
            } 
            else {
                event.stopPropagation();
            }
        })

        $('.show_posts').click(function(){
            $('.user_shared').hide();
            $('#post_label').removeClass('text-slate-500');
            $('#post_label').addClass('text-purple-600');
            $('#shared_label').removeClass('text-orange-600');
            $('#shared_label').addClass('text-slate-500');
            $('.user_posts').show();
        });
        
        $('.show_shared').click(function(){
            $('.user_posts').hide();
            $('#post_label').removeClass('text-purple-600');
            $('#post_label').addClass('text-slate-500');
            $('#shared_label').removeClass('text-slate-500');
            $('#shared_label').addClass('text-orange-600');
            $('.user_shared').show();
        });

        //for showing message on home
        $('.message').show(); 
        setTimeout(function() {
            $('.message').fadeOut(); // Hide the message after 4 seconds
        }, 4000); // 4000 milliseconds = 4 seconds
        
    });
</script>
<body class="bg-gray-200 p-0 m-0 box-border">