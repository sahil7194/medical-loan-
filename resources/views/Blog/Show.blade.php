
@extends('structure.layout')
@section('title')
    {{$blog->title}}
@endsection

@section('content')

<div class="container overflow-hidden lg:max-w-[1250px]">
    <div class="mx-auto w-full max-w-[970px]">
      <div class="wow fadeInUp mb-10" data-wow-delay=".2s">
        <img
          src="{{$blog->image}}"
          alt="blog-details"
          class="object-conter w-full object-cover"
        />
      </div>

      <div class="mx-auto w-full max-w-[770px] text-center">
        <h1
          class="wow fadeInUp mb-5 text-[28px] font-semibold leading-tight text-black dark:text-white sm:text-[32px]"
          data-wow-delay=".25s"
        >
          {{$blog->title}}
        </h1>
        <div
          class="wow fadeInUp -mx-3 mb-9 flex flex-wrap items-center justify-center"
          data-wow-delay=".3s"
        >
          <div class="mb-2 inline-flex items-center px-3">

            <p class="text-base font-medium text-body">
              By {{$blog->user->name}}
            </p>
          </div>

          <div class="mb-2 inline-flex items-center px-3">
            <p
              class="flex items-center text-base font-medium text-body"
            >
              <span class="mr-2">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_59_156)">
                    <path
                      d="M15.5833 2.74984H19.2499C19.493 2.74984 19.7262 2.84641 19.8981 3.01832C20.07 3.19023 20.1666 3.42339 20.1666 3.6665V18.3332C20.1666 18.5763 20.07 18.8094 19.8981 18.9814C19.7262 19.1533 19.493 19.2498 19.2499 19.2498H2.74992C2.5068 19.2498 2.27365 19.1533 2.10174 18.9814C1.92983 18.8094 1.83325 18.5763 1.83325 18.3332V3.6665C1.83325 3.42339 1.92983 3.19023 2.10174 3.01832C2.27365 2.84641 2.5068 2.74984 2.74992 2.74984H6.41658V0.916504H8.24992V2.74984H13.7499V0.916504H15.5833V2.74984ZM13.7499 4.58317H8.24992V6.4165H6.41658V4.58317H3.66659V8.24984H18.3333V4.58317H15.5833V6.4165H13.7499V4.58317ZM18.3333 10.0832H3.66659V17.4165H18.3333V10.0832Z"
                      fill="#79808A"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_59_156">
                      <rect width="22" height="22" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </span>
              {{$blog->created_at->format('d M, Y');}}
            </p>
          </div>

          {{-- <div class="mb-2 inline-flex items-center px-3">
            <p
              class="flex items-center text-base font-medium text-body"
            >
              <span class="mr-2">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_59_159)">
                    <path
                      d="M5.917 17.4167L1.83325 20.625V3.66667C1.83325 3.42355 1.92983 3.19039 2.10174 3.01849C2.27365 2.84658 2.5068 2.75 2.74992 2.75H19.2499C19.493 2.75 19.7262 2.84658 19.8981 3.01849C20.07 3.19039 20.1666 3.42355 20.1666 3.66667V16.5C20.1666 16.7431 20.07 16.9763 19.8981 17.1482C19.7262 17.3201 19.493 17.4167 19.2499 17.4167H5.917ZM5.28267 15.5833H18.3333V4.58333H3.66659V16.8529L5.28267 15.5833ZM10.0833 9.16667H11.9166V11H10.0833V9.16667ZM6.41658 9.16667H8.24992V11H6.41658V9.16667ZM13.7499 9.16667H15.5833V11H13.7499V9.16667Z"
                      fill="#79808A"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_59_159">
                      <rect width="22" height="22" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </span>
              50
            </p>
          </div>

          <div class="mb-2 inline-flex items-center px-3">
            <p
              class="flex items-center text-base font-medium text-body"
            >
              <span class="mr-2">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_59_162)">
                    <path
                      d="M10.9999 2.75C15.9426 2.75 20.0548 6.30667 20.9174 11C20.0557 15.6933 15.9426 19.25 10.9999 19.25C6.05727 19.25 1.9451 15.6933 1.08252 11C1.94419 6.30667 6.05727 2.75 10.9999 2.75ZM10.9999 17.4167C12.8695 17.4163 14.6835 16.7813 16.1451 15.6156C17.6067 14.4499 18.6293 12.8226 19.0455 11C18.6277 9.17886 17.6045 7.55334 16.143 6.38919C14.6816 5.22504 12.8684 4.59115 10.9999 4.59115C9.13149 4.59115 7.31832 5.22504 5.85686 6.38919C4.39541 7.55334 3.37214 9.17886 2.95435 11C3.37061 12.8226 4.39322 14.4499 5.85482 15.6156C7.31642 16.7813 9.13042 17.4163 10.9999 17.4167ZM10.9999 15.125C9.90592 15.125 8.85671 14.6904 8.08312 13.9168C7.30953 13.1432 6.87494 12.094 6.87494 11C6.87494 9.90598 7.30953 8.85677 8.08312 8.08319C8.85671 7.3096 9.90592 6.875 10.9999 6.875C12.094 6.875 13.1432 7.3096 13.9168 8.08319C14.6903 8.85677 15.1249 9.90598 15.1249 11C15.1249 12.094 14.6903 13.1432 13.9168 13.9168C13.1432 14.6904 12.094 15.125 10.9999 15.125ZM10.9999 13.2917C11.6077 13.2917 12.1906 13.0502 12.6204 12.6205C13.0502 12.1907 13.2916 11.6078 13.2916 11C13.2916 10.3922 13.0502 9.80932 12.6204 9.37955C12.1906 8.94978 11.6077 8.70833 10.9999 8.70833C10.3921 8.70833 9.80925 8.94978 9.37948 9.37955C8.94971 9.80932 8.70827 10.3922 8.70827 11C8.70827 11.6078 8.94971 12.1907 9.37948 12.6205C9.80925 13.0502 10.3921 13.2917 10.9999 13.2917Z"
                      fill="#79808A"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_59_162">
                      <rect width="22" height="22" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </span>
              343
            </p>
          </div> --}}
        </div>

        <div class="text-left">
          <p
            class="wow fadeInUp mb-9 text-base text-body leading-5"
            data-wow-delay=".2s"
          >
            {{$blog->content}}
          </p>

          {{-- <div class="-mx-3 flex flex-wrap">
            <div class="w-full px-3 sm:w-7/12">
              <div class="wow fadeInUp" data-wow-delay=".2s">
                <p class="mb-4 text-base text-body">
                  Popular Tags :
                </p>
                <div class="flex flex-wrap items-center">
                  <a
                    href="javascript:void(0)"
                    class="mr-3 mb-3 inline-flex h-9 items-center justify-center rounded bg-[#F8FAFB] px-[18px] text-sm font-semibold text-body hover:bg-primary hover:text-white dark:bg-[#15182A] dark:text-white dark:hover:bg-primary"
                  >
                    Design
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="mr-3 mb-3 inline-flex h-9 items-center justify-center rounded bg-[#F8FAFB] px-[18px] text-sm font-semibold text-body hover:bg-primary hover:text-white dark:bg-[#15182A] dark:text-white dark:hover:bg-primary"
                  >
                    Development
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="mr-3 mb-3 inline-flex h-9 items-center justify-center rounded bg-[#F8FAFB] px-[18px] text-sm font-semibold text-body hover:bg-primary hover:text-white dark:bg-[#15182A] dark:text-white dark:hover:bg-primary"
                  >
                    Ui/UX
                  </a>
                </div>
              </div>
            </div>

            <div class="w-full px-3 sm:w-5/12">
              <div class="wow fadeInUp" data-wow-delay=".2s">
                <p
                  class="mb-4 text-base text-body sm:text-right"
                >
                  Share this post :
                </p>
                <div
                  class="flex flex-wrap items-center space-x-3 sm:justify-end"
                >
                  <a
                    href="javascript:void(0)"
                    name="social share"
                    aria-label="social share"
                    class="inline-flex h-9 w-9 items-center justify-center rounded bg-[#F8FAFB] text-sm font-semibold text-body hover:bg-primary hover:text-white dark:bg-[#15182A] dark:text-white dark:hover:bg-primary"
                  >
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M15.8333 2.5C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V15.8333C17.5 16.2754 17.3244 16.6993 17.0118 17.0118C16.6993 17.3244 16.2754 17.5 15.8333 17.5H4.16667C3.72464 17.5 3.30072 17.3244 2.98816 17.0118C2.67559 16.6993 2.5 16.2754 2.5 15.8333V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H15.8333ZM15.4167 15.4167V11C15.4167 10.2795 15.1304 9.5885 14.621 9.07903C14.1115 8.56955 13.4205 8.28333 12.7 8.28333C11.9917 8.28333 11.1667 8.71667 10.7667 9.36667V8.44167H8.44167V15.4167H10.7667V11.3083C10.7667 10.6667 11.2833 10.1417 11.925 10.1417C12.2344 10.1417 12.5312 10.2646 12.75 10.4834C12.9688 10.7022 13.0917 10.9989 13.0917 11.3083V15.4167H15.4167ZM5.73333 7.13333C6.10464 7.13333 6.46073 6.98583 6.72328 6.72328C6.98583 6.46073 7.13333 6.10464 7.13333 5.73333C7.13333 4.95833 6.50833 4.325 5.73333 4.325C5.35982 4.325 5.0016 4.47338 4.73749 4.73749C4.47338 5.0016 4.325 5.35982 4.325 5.73333C4.325 6.50833 4.95833 7.13333 5.73333 7.13333ZM6.89167 15.4167V8.44167H4.58333V15.4167H6.89167Z"
                        fill="currentColor"
                      />
                    </svg>
                  </a>
                  <a
                    href="javascript:void(0)"
                    name="social share"
                    aria-label="social share"
                    class="inline-flex h-9 w-9 items-center justify-center rounded bg-[#F8FAFB] text-sm font-semibold text-body hover:bg-primary hover:text-white dark:bg-[#15182A] dark:text-white dark:hover:bg-primary"
                  >
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M18.7165 4.99992C18.0749 5.29159 17.3832 5.48325 16.6665 5.57492C17.3999 5.13325 17.9665 4.43325 18.2332 3.59159C17.5415 4.00825 16.7749 4.29992 15.9665 4.46659C15.3082 3.74992 14.3832 3.33325 13.3332 3.33325C11.3749 3.33325 9.77487 4.93325 9.77487 6.90825C9.77487 7.19159 9.8082 7.46659 9.86654 7.72492C6.89987 7.57492 4.2582 6.14992 2.49987 3.99159C2.19154 4.51659 2.01654 5.13325 2.01654 5.78325C2.01654 7.02492 2.64154 8.12492 3.6082 8.74992C3.01654 8.74992 2.46654 8.58325 1.9832 8.33325C1.9832 8.33325 1.9832 8.33325 1.9832 8.35825C1.9832 10.0916 3.21654 11.5416 4.84987 11.8666C4.54987 11.9499 4.2332 11.9916 3.9082 11.9916C3.6832 11.9916 3.4582 11.9666 3.24154 11.9249C3.69154 13.3333 4.99987 14.3833 6.57487 14.4083C5.3582 15.3749 3.81654 15.9416 2.1332 15.9416C1.84987 15.9416 1.56654 15.9249 1.2832 15.8916C2.86654 16.9083 4.74987 17.4999 6.76654 17.4999C13.3332 17.4999 16.9415 12.0499 16.9415 7.32492C16.9415 7.16659 16.9415 7.01658 16.9332 6.85825C17.6332 6.35825 18.2332 5.72492 18.7165 4.99992Z"
                        fill="currentColor"
                      />
                    </svg>
                  </a>
                  <a
                    href="javascript:void(0)"
                    name="social share"
                    aria-label="social share"
                    class="inline-flex h-9 w-9 items-center justify-center rounded bg-[#F8FAFB] text-sm font-semibold text-body hover:bg-primary hover:text-white dark:bg-[#15182A] dark:text-white dark:hover:bg-primary"
                  >
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.99984 1.69995C5.4165 1.69995 1.6665 5.44162 1.6665 10.05C1.6665 14.2166 4.7165 17.6749 8.69984 18.2999V12.4666H6.58317V10.05H8.69984V8.20828C8.69984 6.11662 9.94151 4.96662 11.8498 4.96662C12.7582 4.96662 13.7082 5.12495 13.7082 5.12495V7.18328H12.6582C11.6248 7.18328 11.2998 7.82495 11.2998 8.48328V10.05H13.6165L13.2415 12.4666H11.2998V18.2999C13.2635 17.9898 15.0517 16.9879 16.3414 15.475C17.6312 13.9621 18.3376 12.038 18.3332 10.05C18.3332 5.44162 14.5832 1.69995 9.99984 1.69995Z"
                        fill="currentColor"
                      />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </div>
@endsection
