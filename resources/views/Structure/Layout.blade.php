<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        @yield('title', 'Medical Loan')
    </title>
    <link rel="icon" href="favicon.ico">
    <link href="{{asset('./assets/css/style.css')}}" rel="stylesheet">
</head>

<body class="bg-white dark:bg-black">

    @include('structure.header')

    <main>
        <section class="pt-[150px] pb-[60px] lg:pt-[220px]">
            <div class="container overflow-hidden lg:max-w-[1250px]">
                @yield('content')
            </div>
        </section>
    </main>

    @include('structure.footer')
    <a href="javascript:void(0)"
        class="back-to-top fixed bottom-8 right-8 left-auto z-[999] hidden h-10 w-10 items-center justify-center rounded-md bg-primary text-white shadow-md duration-300 ease-in-out hover:bg-opacity-80">
        <span class="mt-[6px] h-3 w-3 rotate-45 border-t border-l border-white"></span>
    </a>
    <!-- ======= Back To Top End ======= -->
    <script defer src="{{asset('./assets/js/script.js')}}"></script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"915f987c49e49e2e","version":"2025.1.0","r":1,"token":"9a6015d415bb4773a0bff22543062d3b","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}}}'
        crossorigin="anonymous"></script>
</body>

</html>
