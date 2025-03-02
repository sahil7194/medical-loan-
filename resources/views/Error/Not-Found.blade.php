@extends('structure.layout')
@section('title')
    Not Found
@endsection

@section('content')

<div class="container overflow-hidden lg:max-w-[1250px]">
    <div class="mx-auto w-full max-w-[570px]">
      <div class="wow fadeInUp mb-8 w-full" data-wow-delay=".2s">
        <img
          src="{{asset('./assets/images/404.svg')}}"
          alt="404"
          class="mx-auto max-w-full"
        />
      </div>

      <div class="wow fadeInUp text-center" data-wow-delay=".2s">
        <h2
          class="mb-[18px] text-[28px] font-bold text-black dark:text-white sm:text-[35px]"
        >
          Sorry, the page can't be found
        </h2>
        <p
          class="mb-[30px] text-base font-medium text-body sm:text-lg"
        >
          The page you were looking for appears to have been moved,
          deleted or does not exist.
        </p>

        <a
          href="/"
          class="inline-flex justify-center rounded-md bg-primary py-3 px-8 text-base font-medium text-white hover:bg-opacity-90"
        >
          Back to homepage
        </a>
      </div>
    </div>
  </div>
@endsection
