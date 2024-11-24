    <div class="bg-white px-5 flex justify-between fixed top-0 left-0 right-0">
        <img src="{{ asset('storage/images/assets/BuzJet Logo.png') }}" alt="BuzJet" width="150px" class="m-5">
        <box-icon name='menu' size='lg' class="md:hidden"></box-icon>
        <a href="{{route('profile.edit')}}" class="my-auto">
            <box-icon name='user-circle' size='lg' class=""></box-icon>
        </a>

    </div>
    <div class="lg:w-[240px] h-full
    fixed inset-y-20 start-0 z-[60] pt-3
    bg-white lg:translate-x-0 lg:end-auto lg:bottom-0 py-3 hidden sm:block sm:w-[140px] md:w-[200px]">
            <ul>
                <li class="{{ Request::is('/') ? 'me-3 ms-3 mb-3 py-3 ps-3 bg-blue-500 rounded-2xl text-white' : 'me-3 ms-3 mb-3 py-3 ps-3 hover:bg-blue-500 hover:rounded-2xl hover:text-white' }}"><a href="/" class='flex'><svg class='me-2' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="{{ Request::is('dashboard2') ? 'fill: rgba(255, 255, 255, 1);transform: ;msFilter:;' : 'fill: rgba(0, 0, 0, 1);transform: ;msFilter:;' }}"><path d="M12.71 2.29a1 1 0 0 0-1.42 0l-9 9a1 1 0 0 0 0 1.42A1 1 0 0 0 3 13h1v7a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-7h1a1 1 0 0 0 1-1 1 1 0 0 0-.29-.71zM6 20v-9.59l6-6 6 6V20z"></path></svg>Dashboard</a></li>
                {{-- active --}}
                <li class="{{ Request::is('destinations') ? 'me-3 ms-3 mb-3 py-3 ps-3 bg-blue-500 rounded-2xl text-white' : 'me-3 ms-3 mb-3 py-3 ps-3 hover:bg-blue-500 hover:rounded-2xl hover:text-white' }}"><a href="/destinations" class="flex"><svg class='me-2' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="{{ Request::is('destinations') ? 'fill: rgba(255, 255, 255, 1);transform: ;msFilter:;' : 'fill: rgba(0, 0, 0, 1);transform: ;msFilter:;' }}"><path d="M19 2H9c-1.103 0-2 .897-2 2v6H5c-1.103 0-2 .897-2 2v9a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4c0-1.103-.897-2-2-2zM5 12h6v8H5v-8zm14 8h-6v-8c0-1.103-.897-2-2-2H9V4h10v16z"></path><path d="M11 6h2v2h-2zm4 0h2v2h-2zm0 4.031h2V12h-2zM15 14h2v2h-2zm-8 .001h2v2H7z"></path></svg>Destinasi</a></li>

                <li class="{{ Request::is('transportations') ? 'me-3 ms-3 mb-3 py-3 ps-3 bg-blue-500 rounded-2xl text-white' : 'me-3 ms-3 mb-3 py-3 ps-3 hover:bg-blue-500 hover:rounded-2xl hover:text-white' }}"><a href="/transportations" class="flex"><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="{{ Request::is('transportations') ? 'fill: rgba(255, 255, 255, 1);transform: ;msFilter:;' : 'fill: rgba(0, 0, 0, 1);transform: ;msFilter:;' }}"><path d="m20.772 10.156-1.368-4.105A2.995 2.995 0 0 0 16.559 4H7.441a2.995 2.995 0 0 0-2.845 2.051l-1.368 4.105A2.003 2.003 0 0 0 2 12v5c0 .753.423 1.402 1.039 1.743-.013.066-.039.126-.039.195V21a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-2h12v2a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-2.062c0-.069-.026-.13-.039-.195A1.993 1.993 0 0 0 22 17v-5c0-.829-.508-1.541-1.228-1.844zM4 17v-5h16l.002 5H4zM7.441 6h9.117c.431 0 .813.274.949.684L18.613 10H5.387l1.105-3.316A1 1 0 0 1 7.441 6z"></path><circle cx="6.5" cy="14.5" r="1.5"></circle><circle cx="17.5" cy="14.5" r="1.5"></circle></svg>Transportasi</a></li>

                <li class="{{ Request::is('hotels') ? 'me-3 ms-3 mb-3 py-3 ps-3 bg-blue-500 rounded-2xl text-white' : 'me-3 ms-3 mb-3 py-3 ps-3 hover:bg-blue-500 hover:rounded-2xl hover:text-white' }}"><a href="/hotels" class="flex"><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="{{ Request::is('hotels') ? 'fill: rgba(255, 255, 255, 1);transform: ;msFilter:;' : 'fill: rgba(0, 0, 0, 1);transform: ;msFilter:;' }}"><circle cx="7.5" cy="11.5" r="2.5"></circle><path d="M17.205 7H12a1 1 0 0 0-1 1v7H4V6H2v14h2v-3h16v3h2v-8.205A4.8 4.8 0 0 0 17.205 7zM13 15V9h4.205A2.798 2.798 0 0 1 20 11.795V15h-7z"></path></svg>Hotel</a></li>

                <li class="{{ Request::is('packages') ? 'me-3 ms-3 mb-3 py-3 ps-3 bg-blue-500 rounded-2xl text-white' : 'me-3 ms-3 mb-3 py-3 ps-3 hover:bg-blue-500 hover:rounded-2xl hover:text-white' }}"><a href="/packages" class="flex"><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="{{ Request::is('packages') ? 'fill: rgba(255, 255, 255, 1);transform: ;msFilter:;' : 'fill: rgba(0, 0, 0, 1);transform: ;msFilter:;' }}"><path d="M22 8a.76.76 0 0 0 0-.21v-.08a.77.77 0 0 0-.07-.16.35.35 0 0 0-.05-.08l-.1-.13-.08-.06-.12-.09-9-5a1 1 0 0 0-1 0l-9 5-.09.07-.11.08a.41.41 0 0 0-.07.11.39.39 0 0 0-.08.1.59.59 0 0 0-.06.14.3.3 0 0 0 0 .1A.76.76 0 0 0 2 8v8a1 1 0 0 0 .52.87l9 5a.75.75 0 0 0 .13.06h.1a1.06 1.06 0 0 0 .5 0h.1l.14-.06 9-5A1 1 0 0 0 22 16V8zm-10 3.87L5.06 8l2.76-1.52 6.83 3.9zm0-7.72L18.94 8 16.7 9.25 9.87 5.34zM4 9.7l7 3.92v5.68l-7-3.89zm9 9.6v-5.68l3-1.68V15l2-1v-3.18l2-1.11v5.7z"></path></svg>Paket</a></li>
            </ul>
        </div>

    <main class="lg:ps-72 pt-8 pe-8 mt-20">
        @yield('content')
    </main>

