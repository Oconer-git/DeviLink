<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Email Verification</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-slate-200 p-2">
        <div class="w-7/12 mx-auto max-h-[600px] bg-white drop-shadow-md rounded-md pb-8">
            <section class="bg-gradient-to-br from-cyan-300 to-teal-600 rounded-t-md shadow-md px-3 py-2 drop-shadow-sm">
                <img src="{{asset('/storage/images/tealbean_logo_transparent.png')}}" class="w-12 mx-auto inline -mr-2" alt="tealbean logo">
                <h1 class="text-white font-bold drop-shadow-xl text-2xl inline align-middle">Welcome to Tealbean!</h1>
            </section>

            <section class="px-6 text-sm text-gray-600 py-3 text-center">
                <img src="{{asset('/storage/images/figure_landing.png')}}" class="w-40 mx-auto" alt="tealbean community">
                <p class="font-bold mb-2 text-xl text-teal-800"> Awesome to have you on board with Tealban! </p>
                <p class="mb-9"> You're in <strong>,</strong> and we're super pumped to have you with us. Before we dive into the fun stuff, we just need to confirm your email. It’s quick and easy, and then you'll be good to go!</p>
                <a class="rounded-md bg-cyan-500 h-24 font-bold px-3 py-2 text-white shadow-md drop-shadow-md mt-4" href="">Verify Email Address</a>
            </section>

        </div>
    </body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <style>
        body {
            background-color: #d5d5e8   ; /* Slate-200 */
            padding: 0.5rem; /* 2 */
            font-family: Arial, sans-serif;
        }

        /* Container */
        .container {
            width: 80%; /* 7/12 */
            margin: 0 auto;
            max-height: 900px;
            background-color: #e8e6ed;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Drop-shadow-md */
            border-radius: 0.375rem; /* Rounded-md */
            padding-bottom: 2rem; /* pb-8 */
        }

        /* Header Section */
        .header {
            background: linear-gradient(to bottom right, #fa00d4, #00796b); /* Gradient from cyan-300 to teal-600 */
            border-top-left-radius: 0.375rem; /* Rounded-t-md */
            border-top-right-radius: 0.375rem; /* Rounded-t-md */
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05); /* Shadow-md */
            padding: 0.3rem 0.5rem; /* px-3 py-2 */
        }

        .header h1 {
            color: #ffffff; /* White */
            font-weight: bold; /* Font-bold */
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.4); /* Drop-shadow-xl */
            font-size: 1.5rem; /* text-2xl */
            text-align:center;
        }

        /* Main Content Section */
        .main-content {
            padding: 1.5rem 1.5rem; /* px-6 py-3 */
            color: #4b5563; /* text-gray-600 */
            text-align: center;
        }

        .main-content img {
            width: 18rem; /* w-40 */
            margin: 0 auto;
        }

        .main-content p {
            margin-bottom: 1rem; /* mb-9 */
        }

        .main-content .highlight-text {
            font-weight: bold; /* Font-bold */
            font-size: 1.25rem; /* text-xl */
            color: #004d40; /* text-teal-800 */
        }

        .main-content a {
            display: inline-block;
            border-radius: 0.375rem; /* rounded-md */
            background-color: #00bcd4; /* bg-cyan-500 */
            font-weight: bold; /* Font-bold */
            padding: 12px 24px; /* px-3 py-2 */
            color: #ffffff; /* text-white */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* shadow-md */
            margin-top: .5rem; /* mt-4 */
            text-decoration: none;
            line-height: 1rem; /* Center text vertically */
        }
    </style>
</head>
<body>
    <div class="container">
        <section class="header">
            <h1>Fellowdevs.io is the scene for coders keen!</h1>
        </section>

        <section class="main-content">
            <img src="https://static.vecteezy.com/system/resources/previews/022/996/345/non_2x/3d-space-rocket-render-with-transparent-background-free-png.png" alt="tealbean community">
            <p class="highlight-text">Awesome to have you on board with Fellowdevs.io!</p>
            <p>You're in <strong> {{$user->first_name}},</strong> and we're super   pumped to have you with us. Before we dive into the fun stuff, we just need to confirm your email. It’s quick and easy, and then you'll be good to go!</p>
            <a href="{{$url}}">Verify Email Address</a>
        </section>
    </div>
</body>
</html>