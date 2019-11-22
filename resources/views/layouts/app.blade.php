@include('includes.head')

@include('includes.navbar')

<main>
    {{-- <main class="py-4"> --}}
    <div class="content">
        @yield('content')
    </div>
    @yield('prikazi-about')
    
    @yield('prikazi-kontakt')
</main>

@include('includes.footer')