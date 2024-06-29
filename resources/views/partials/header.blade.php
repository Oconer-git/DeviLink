<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="icon" href="{{asset('devilink_logo.svg')}}" type="image/x-icon">
 
    <!-- tailwind -->
    @vite('resources/css/app.css')

    <!--profile modals -->
    @vite('resources/js/own_profile.js')
    <title>{{$title}}</title>
</head>
<script>
   $(function(){
        // show settings profile when click
        $('#profile_settings').click(function(){
            $('#profile_dropdown').toggle(250);
        })

        $('#upload_post_picture').click(function(){
            $('#post_picture').toggle();
        })

        //for opening post form modal
        $('#post_modal').click(function(){
            $('#post_form').show();
        });

        //for closing post modal
        $('#close_post').click(function(){
            $('#post_form').hide();
        })

        //for automatic focus in textareas
        $('.textarea').focus();

        //for previewing picture before uploading
        $('.picture').change(function(event) {
            var input = event.target;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.picture_preview').attr('src', e.target.result);
                    $('.picture_preview').show();
                }
                reader.readAsDataURL(input.files[0]);
            }
        });
   });
</script>
<body class="bg-gray-200 p-0 m-0 box-border">