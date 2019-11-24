@include('includes.head')

@include('includes.navbar')

<main>
    {{-- <main class="py-4"> --}}
    <div class="content">
        @yield('content')
    </div>
    @yield('prikazi-kontakt')
    @yield('prikazi-about')
</main>

@include('includes.footer')