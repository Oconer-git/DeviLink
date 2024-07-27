<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jquery -->
    <!-- jquery date plugin -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <!-- jrumble -->
    @vite('resources/js/jrumble/jquery.jrumble.1.3.min.js')
    @vite('resources/js/jrumble/prettify.js')

    <!-- tailwind -->
    @vite('resources/css/app.css')
    <!-- icon -->
    <link rel="icon" href="{{asset('devilink_logo.svg')}}" type="image/x-icon">
    <title>{{$title}}</title>
    </head>
    <script type="module">
        
        $(function() {
            $( "#datepicker" ).datepicker();

            $('#devilink_label').jrumble({
                speed: 200,
                rotate: 10,
                opactity: false,
                opacity: .5
            });

            var demoStart = function(){
                $('#devilink_label').trigger('startRumble');
                setTimeout(demoStop, 300);
            };

            var demoStop = function(){
                $('#devilink_label').trigger('stopRumble');
                setTimeout(demoStart, 300);
            };


            $("#main_field").fadeIn(4000);
            $("#devilink_label").fadeIn(4000);
            $("#online_label").fadeIn(4000);

            demoStart();
            

             //stop propagation on google sign in 
            // $('.sign_in').click(function(){
            //     event.stopPropagation();
            // })

            $('.google_sign_in').click(function(){
                event.preventDefault();
                // Stop event propagation
                event.stopPropagation();
                window.location.href = "{{ route('google.redirect') }}"

            })
            $('#back_to_login').click(function(){
                event.preventDefault();
                // Stop event propagation
                event.stopPropagation();
                window.location.href = "/"

            })
        })
    </script>
<body class="bg-gradient-to-l from-white to-gray-300 ">