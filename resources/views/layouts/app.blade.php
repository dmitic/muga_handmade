@include('includes.head')

@include('includes.navbar')

    <main>
    {{-- <main class="py-4"> --}}
        
        @yield('content')

        @yield('prikazi-about')

    </main>
    
@include('includes.footer')