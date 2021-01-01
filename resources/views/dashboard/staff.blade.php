<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SRAD Staff Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="p-6 sm:px-20 bg-white">
                        <div class="my-3 text-2xl text-center font-bold">
                            Student's Information
                        </div>
                    </div>
                
                    <div class="mt-6 text-gray-700">
                        <p>
                            Name    : Nurizko Maulana
                        </p>
                        <p>
                            Email   : nurizko.maulana@gmail.com
                        </p>
                        <p>
                            Session : 2018/2019/2
                        </p>
                        <p>
                            Program : Bachelor of Software Engineering
                        </p>
                    </div>
                </div>

                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="p-6 sm:px-20 bg-white">
                        <div class="my-3 text-2xl text-center font-bold">
                            Supervisor Information
                        </div>
                    </div>
                
                    <div class="mt-6 text-gray-700">
                        <p>
                            Date Completed    : Nurizko Maulana
                        </p>
                        <p>
                            name   : nurizko.maulana@gmail.com
                        </p>
                        <p>
                            Email : 2018/2019/2
                        </p>
                        <p>
                            Phome : Bachelor of Software Engineering
                        </p>
                        <p>
                            Faculty : Bachelor of Software Engineering
                        </p>
                        <p>
                            Research title : Bachelor of Software Engineering
                        </p>
                    </div>
                </div>
            </div>

                {{-- APPLICATION STATUS --}}
                <div class="p-6 sm:px-20 bg-white ">
                    <div class="my-3 text-2xl text-center font-bold">
                        Status Information
                    </div>
                </div>

                <div class="container bg-white mx-auto w-full h-full">
                    <div class="relative wrap overflow-hidden p-10 h-full">
                      <div class="border-2-2 absolute border-opacity-20 border-gray-700 h-full border" style="left: 50%"></div>
                      <!-- right timeline -->
                      <div class="mb-8 flex justify-between items-center w-full right-timeline">
                        <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-indigo-700 shadow-xl w-8 h-8 rounded-full">
                          <h1 class="mx-auto font-semibold text-lg text-white">1</h1>
                        </div>
                        <div class="order-1 bg-indigo-400 rounded-lg shadow-xl w-5/12 px-6 py-4">
                          <h3 class="mb-3 font-bold text-white text-xl">Review Initiated</h3>
                          <p class="mb-3 text-sm leading-snug tracking-wide text-white text-opacity-100">11/12/2020</p>
                          <div class="rounded-full bg-green-400 px-4 py-2 w-20 text-center font-bold text-white">Done</div>
                          {{-- <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> --}}
                        </div>
                      </div>
                  
                      <!-- left timeline -->
                      <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                        <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-indigo-700 shadow-xl w-8 h-8 rounded-full">
                          <h1 class="mx-auto text-white font-semibold text-lg">2</h1>
                        </div>
                        <div class="order-1 bg-indigo-400 rounded-lg shadow-xl w-5/12 px-6 py-4">
                          <h3 class="mb-3 font-bold text-white text-xl">Review Research Proposal</h3>
                          <p class=" mb-3 text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">15/12/2020</p>
                          <div class="rounded-full bg-green-400 px-4 py-2 w-20 text-center font-bold text-white">Done</div>
                          {{-- <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> --}}
                        </div>
                      </div>
                      
                      <!-- right timeline -->
                      <div class="mb-8 flex justify-between items-center w-full right-timeline">
                        <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-indigo-700 shadow-xl w-8 h-8 rounded-full">
                          <h1 class="mx-auto font-semibold text-lg text-white">3</h1>
                        </div>
                        <div class="order-1 bg-indigo-400 rounded-lg shadow-xl w-5/12 px-6 py-4">
                          <h3 class="mb-3 font-bold text-white text-xl">Review Decision</h3>
                          <p class="mb-3 text-sm leading-snug tracking-wide text-white text-opacity-100">20/12/2020</p>
                          <div class="rounded-full bg-green-400 px-4 py-2 w-20 text-center font-bold text-white">Done</div>
                          {{-- <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> --}}
                        </div>
                      </div>
                  
                      <!-- left timeline -->
                      <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                        <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-indigo-700 shadow-xl w-8 h-8 rounded-full">
                          <h1 class="mx-auto text-white font-semibold text-lg">4</h1>
                        </div>
                        <div class="order-1 bg-indigo-400 rounded-lg shadow-xl w-5/12 px-6 py-4">
                          <h3 class="mb-3 font-bold text-white text-xl">Asigned Supervisor</h3>
                          <p class="mb-3 text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">20/12/2020</p>
                          <div class="rounded-full bg-green-400 px-4 py-2 w-20 text-center font-bold text-white">Done</div>
                          {{-- <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                
                {{-- <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                                <path
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a
                                    href="https://laravel.com/docs">Documentation</a></div>
                        </div>
                
                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                Laravel has wonderful documentation covering every aspect of the framework. Whether you're new to the
                                framework or have previous experience, we recommend reading all of the documentation from beginning to
                                end.
                            </div>
                
                            <a href="https://laravel.com/docs">
                                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                    <div>Explore the documentation</div>
                
                                    <div class="ml-1 text-indigo-500">
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                            <path fill-rule="evenodd"
                                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                
                    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                                <path
                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                                </path>
                                <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a
                                    href="https://laracasts.com">Laracasts</a></div>
                        </div>
                
                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them
                                out, see for yourself, and massively level up your development skills in the process.
                            </div>
                
                            <a href="https://laracasts.com">
                                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                    <div>Start watching Laracasts</div>
                
                                    <div class="ml-1 text-indigo-500">
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                            <path fill-rule="evenodd"
                                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                
                    <div class="p-6 border-t border-gray-200">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                                <path
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a
                                    href="https://tailwindcss.com/">Tailwind</a></div>
                        </div>
                
                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                Laravel Jetstream is built with Tailwind, an amazing utility first CSS framework that doesn't get in
                                your way. You'll be amazed how easily you can build and maintain fresh, modern designs with this
                                wonderful framework at your fingertips.
                            </div>
                        </div>
                    </div>
                
                    <div class="p-6 border-t border-gray-200 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                                <path
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Authentication</div>
                        </div>
                
                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                Authentication and registration views are included with Laravel Jetstream, as well as support for user
                                email verification and resetting forgotten passwords. So, you're free to get started what matters most:
                                building your application.
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</x-app-layout>