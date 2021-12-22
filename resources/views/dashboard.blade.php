<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="sm:py-3 py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                
                {{-- Dashboard --}}

                <div class="sm:w-full flex">
{{-- 
                  <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                      <span>Dropdown</span>
                      <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                      <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #1</a>
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #2</a>
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #3</a>
                      </div>
                    </div>
                  </div> --}}



                    <div class="flex flex-col sm:w-1/5 screen-left">
                        <div class="flex items-center justify-center h-14 border-b">
                          <div class="" style="font-family: 'Tangerine', cursive;font-size:27px">Marian Alumni Association</div>
                        </div>
                        <div class="overflow-y-auto overflow-x-hidden flex-grow">
                          <ul class="flex flex-col py-4 space-y-1">
                            <li class="px-5">
                              <div class="flex flex-row items-center h-9">
                                <div class="text-sm font-light tracking-wide text-gray-500">Menu</div>
                              </div>
                            </li>
                            <li>
                              <a href="{{route('dashboard')}}" class="relative flex flex-row items-center h-9 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6 @if( $navigations == 'dashboard') {{ $navigate_class }} @endif ">
                                <span class="inline-flex justify-center items-center ml-4">
                                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                              </a>
                            </li>

                            <li>
                              <a href="{{route('tasks')}}" class="relative flex flex-row items-center h-9 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 @if( $navigations == 'tasks') {{ $navigate_class }} @endif pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Available Tasks</span>
                              </a>
                            </li>

                            <li>
                                <a href="{{route('registerInfo')}}" class="relative flex flex-row items-center h-9 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 @if( $navigations == 'register') {{ $navigate_class }} @endif pr-2">
                                  <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                                  </span>
                                  <span class="ml-2 text-sm tracking-wide truncate">Update profile</span>
                                  <span class="px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">Important !</span>
                                </a>
                              </li>
                              <li>
                
                            <li>
                              <a href="{{url('/MarianGirls_Alumni_Chats')}}" class="relative flex flex-row items-center h-9 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 @if( $navigations == 'messages') {{ $navigate_class }} @endif pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">MAA Chat-Ground</span>
                                <span class="px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-indigo-500 bg-indigo-50 rounded-full">New</span>
                              </a>
                            </li>

                            
                            <li class="px-5">
                              <div class="flex flex-row items-center h-9">
                                <div class="text-sm font-light tracking-wide text-gray-500">Settings</div>
                              </div>
                            </li>
                 
                              <a href="#" class="relative flex flex-row items-center h-9 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                  </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="relative flex flex-row items-center h-9 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Logout</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>

                      {{-- Dashboard contents --}}

                      <div class="dashboard-height sm:w-4/5 overflow-y-scroll mx-3 text-center rounded-2xl border-x-2 border-grey-200 border-t-2 screen-right">

                        @if( $navigations == 'dashboard' )

                        @include('navigations.dashboard')

                        @elseif ( $navigations == 'register')

                        @include('navigations.register')
                            
                        @elseif( $navigations == 'inbox')

                        @include('navigations.inbox')

                        @elseif ( $navigations == 'messages')

                        @include('navigations.messages')

                        @elseif ( $navigations == 'notifications')

                        @include('navigations.notifications')

                        @elseif ( $navigations == 'tasks')

                        @include('navigations.tasks')                        
                            
                        @endif

                      </div>

                      {{-- End of dashboard contents --}}
                </div>

                {{-- End of Dashboard --}}

            </div>
        </div>
    </div>
</x-app-layout>
