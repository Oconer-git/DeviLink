@include('partials.landing_page_header', ['title' => 'Register User- Fellowdevs', 'background' => asset('storage/images/landing_cover.jpg')])    
@if(session('message'))
    <div class="message hidden w-1/2 md:w-3/12 bg-green-100 border border-red-400/20 shadow-lg shadow-green-500 text-green-700 px-4 py-3 rounded-md fixed z-20 right-10 top-8" role="alert">
        <span class="block sm:inline">{{session('message')}}</span>
    </div>
@endif
<div class="p-4">
    <div class="bg-whitesmoke w-full lg:w-7/12 mx-auto my-auto shadow-md outline-2 rounded-md drop-shadow-sm box-border">
        <img src="{{asset('storage/images/registration_tealbean.gif')}}" alt="tealbean gif" class="hidden md:w-half md:inline-block md:rounded-r-none md:rounded-l-md">
        <div class="inline-block align-middle px-4 py-12 w-full md:w-half">
            <section class="text-center">
                <img src="{{asset('storage/images/waiting.png')}}" class="w-36 mx-auto rounded-md" alt="waiting logo">
                <svg xmlns="http://www.w3.org/2000/svg" class="inline fill-current text-orange-500 w-10 align-middle" viewBox="0 -960 960 960" ><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg>
                <h1 class="inline font-bold text-xl text-orange-700 align-middle">Plase verify your email</h1>
            </section>
            <section class="text-center mt-2 text-sm">
                <p> You’re almost there! We’ve sent an email to the address you provided. Please check your inbox for an email with the subject <strong>Verify Email Address</strong> and click inside to activate your account.</p>
                <p class="mt-4"> Click the link below to request that we resend the email.</p>
                <form action="{{route('verification.send')}}" class="mt-4" method="POST">
                    @csrf
                    <button type="submit" class="text-sm font-bold text-cyan-700 underline hover:text-orange-700">
                        Resend verification
                    </button>
                </form>
            </section>
        </div>
    </div>
</div>
@include('partials.footer')