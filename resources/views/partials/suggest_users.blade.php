  <div class="bg-gray-100 p-3 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-cyan-500 w-4 inline align-middle" viewBox="0 -960 960 960"><path d="M440-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm0-80q33 0 56.5-23.5T520-640q0-33-23.5-56.5T440-720q-33 0-56.5 23.5T360-640q0 33 23.5 56.5T440-560ZM884-20 756-148q-21 12-45 20t-51 8q-75 0-127.5-52.5T480-300q0-75 52.5-127.5T660-480q75 0 127.5 52.5T840-300q0 27-8 51t-20 45L940-76l-56 56ZM660-200q42 0 71-29t29-71q0-42-29-71t-71-29q-42 0-71 29t-29 71q0 42 29 71t71 29Zm-540 40v-111q0-34 17-63t47-44q51-26 115-44t142-18q-12 18-20.5 38.5T407-359q-60 5-107 20.5T221-306q-10 5-15.5 14.5T200-271v31h207q5 22 13.5 42t20.5 38H120Zm320-480Zm-33 400Z"/></svg>
                <h2 class="text-sm text-gray-500 font-semibold mb-2 inline align-middle">People you might follow</h2>
                @if($suggest_users != null)
                    @foreach ($suggest_users as $user)
                        <section class="pl-1 mb-1 hover:bg-slate-200 p-1 rounded-lg flex group flex-col lg:flex-row items-center justify-between transition duration-300 ease-in-out">
                            <div class="flex items-start lg:items-center">
                                <img src="{{ asset($user->profile_picture) }}" class="w-9 h-9 rounded-full border-2 shadow-md inline-block align-middle transition duration-300 ease-in-out" alt="profile">
                                <div class="inline-block align-middle ml-2 transition duration-300 ease-in-out">
                                    <p class="text-gray-500 text-sm -mb-2 transition duration-300 ease-in-out">{{$user->first_name}} {{$user->last_name}}</p>
                                    <a href="/profile/{{$user->username}}" class="text-cyan-600 text-xs text-md font-light transition duration-300 ease-in-out">
                                        {{'@'.$user->username}}
                                    </a>           
                                </div>
                            </div>
                            @livewire('suggested-follow',['user_id' => $user->id, 'ifRequsted' => false])
                        </section>
                    @endforeach
                @else
                    <p class="text-xs text-gray-500 ml-2">No suggestions at the moment...</p>
                @endif
            </div>