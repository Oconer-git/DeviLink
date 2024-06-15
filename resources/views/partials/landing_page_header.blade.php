<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jrumble -->
    @vite('resources/js/jrumble/jquery-1.7.2.min.js')
    @vite('resources/js/jrumble/jquery.jrumble.1.3.min.js')
    @vite('resources/js/jrumble/prettify.js')
    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <!-- tailwind -->
    @vite('resources/css/app.css')
    <!-- icon -->
    <link rel="icon" href="{{asset('devilink_logo.svg')}}" type="image/x-icon">
    <title>{{$title}}</title>
    </head>
    <script type="module">

        $(function() {
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
        })
    </script>
<body>