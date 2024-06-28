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

    <title>{{$title}}</title>
</head>
<script>
   $(function(){
        // show settings profile when click
        $('#profile_settings').click(function(){
            $('#profile_dropdown').toggle(250);
        })
        // open update profile form modal
        $('#update_profile').click(function(){
            $('#profile_form').show();
        });
        // open about form modal in profile
        $('#update_about').click(function(){
            $('#about_form').show();
        });
        // open skilss form modal in profile
          $('#update_skills').click(function(){
            $('#skills_form').show();
        });

        $('.close').click(function(){
            location.reload();
        })
   });
</script>
<body class="bg-gray-200 p-0 m-0 box-border">