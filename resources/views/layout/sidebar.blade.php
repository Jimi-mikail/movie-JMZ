<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border border-blue border-radius-xl my-3 fixed-start ms-3 ps ps--active-y" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="/sikeu/home" target="_blank">
      <img src="/ltx/img/leetex_logo-removebg-preview.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold">Leetex Web</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse w-auto h-auto ps" id="sidenav-collapse-main">
    <ul class="navbar-nav">

        <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
            <a class="nav-link  {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg class="text-dark" width="16px" height="16px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>shop </title> <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Rounded-Icons" transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero"> <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)"> <g id="shop-" transform="translate(0.000000, 148.000000)"> <path class="color-background" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z" id="Path" opacity="0.598981585"></path> <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z" id="Path"></path> </g> </g> </g> </g> </svg>

              </div>
              <span class="nav-link-text ms-1">{{ __('home') }}</span>
            </a>
          </li>
        </li>


        <li class="nav-item">
            <hr class="horizontal dark" />
            <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">ERP</h6>
            </li>
@can('superadmin')
<li class="nav-item {{ Request::is('sikeu/allbarcode') ? 'active' : '' }}">
    <a class="nav-link  {{ Request::is('sikeu/allbarcode') ? 'active' : '' }}" href="/sikeu/allbarcode">
      <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
        <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <title>customer-support</title>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
              <g transform="translate(1716.000000, 291.000000)">
                <g transform="translate(1.000000, 0.000000)">
                  <path class="color-background opacity-6" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                  <path class="color-background" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                  <path class="color-background" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </div>
      <span class="nav-link-text ms-1">H-Barcode</span>
    </a>
  </li>
</li>






  <li class="nav-item">
    <a class="nav-link  {{ Request::is('sikeu/users') ? 'active' : '' }}" href="/sikeu/users">
      <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
        <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <title>customer-support</title>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
              <g transform="translate(1716.000000, 291.000000)">
                <g transform="translate(1.000000, 0.000000)">
                  <path class="color-background opacity-6" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                  <path class="color-background" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                  <path class="color-background" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </div>
      <span class="nav-link-text ms-1">{{ __('user') }}</span>
    </a>
  </li>
</li>
@endcan



<li class="nav-item active">
    <a data-bs-toggle="collapse" href="#applicationsExamples2" class="nav-link" aria-controls="applicationsExamples" role="button" aria-expanded="false">
        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
            <svg class="text-dark" width="12px" height="12px" viewBox="0 0 42 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <title>basket</title>
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1869.000000, -741.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <g transform="translate(1716.000000, 291.000000)">
            <g id="basket" transform="translate(153.000000, 450.000000)">
            <path class="color-background" d="M34.080375,13.125 L27.3748125,1.9490625 C27.1377583,1.53795093 26.6972449,1.28682264 26.222716,1.29218729 C25.748187,1.29772591 25.3135593,1.55890827 25.0860125,1.97535742 C24.8584658,2.39180657 24.8734447,2.89865282 25.1251875,3.3009375 L31.019625,13.125 L10.980375,13.125 L16.8748125,3.3009375 C17.1265553,2.89865282 17.1415342,2.39180657 16.9139875,1.97535742 C16.6864407,1.55890827 16.251813,1.29772591 15.777284,1.29218729 C15.3027551,1.28682264 14.8622417,1.53795093 14.6251875,1.9490625 L7.919625,13.125 L0,13.125 L0,18.375 L42,18.375 L42,13.125 L34.080375,13.125 Z" opacity="0.595377604"></path>
            <path class="color-background" d="M3.9375,21 L3.9375,38.0625 C3.9375,40.9619949 6.28800506,43.3125 9.1875,43.3125 L32.8125,43.3125 C35.7119949,43.3125 38.0625,40.9619949 38.0625,38.0625 L38.0625,21 L3.9375,21 Z M14.4375,36.75 L11.8125,36.75 L11.8125,26.25 L14.4375,26.25 L14.4375,36.75 Z M22.3125,36.75 L19.6875,36.75 L19.6875,26.25 L22.3125,26.25 L22.3125,36.75 Z M30.1875,36.75 L27.5625,36.75 L27.5625,26.25 L30.1875,26.25 L30.1875,36.75 Z"></path>
            </g>
            </g>
            </g>
             </g>
            </svg>
            </div>
    <span class="nav-link-text ms-1">ERP {{ __('inventory') }}</span>
    </a>
    <div class="collapse" id="applicationsExamples2">
    <ul class="nav ms-4 ps-3">

    <li class="nav-item {{ Request::is('sikeu/permintaan') ? 'active' : '' }}">
    <a class="nav-link  {{ Request::is('sikeu/permintaan') ? 'active' : '' }}" href="{{ route('list_acce') }}">
   {{ __('daftar_inv') }}
    </a>
    </li>

    <li class="nav-item {{ Request::is('sikeu/createorder') ? 'active' : '' }}">
        <a class="nav-link {{ Request::is('sikeu/createorder') ? 'active' : '' }}" href="/sikeu/createorder">
    <span class="sidenav-normal">{{ __('create_order') }}</span>
    </a>
    </li>
    <li class="nav-item {{ Request::is('sikeu/order') ? 'active' : '' }}">
        <a class="nav-link {{ Request::is('sikeu/order') ? 'active' : '' }}" href="/sikeu/order">
    <span class="sidenav-normal">{{ __('order_list') }}</span>
    </a>
    </li>

    </ul>
    </div>
    </li>


    <li class="nav-item">
        <hr class="horizontal dark" />
        <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Aksesoris</h6>
        </li>
    <li class="nav-item active">
        <a data-bs-toggle="collapse" href="#applicationsExamples3" class="nav-link" aria-controls="applicationsExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                <svg class="text-dark" width="12px" height="12px" viewBox="0 0 42 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>basket</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1869.000000, -741.000000)" fill="#FFFFFF" fill-rule="nonzero">
                <g transform="translate(1716.000000, 291.000000)">
                <g id="basket" transform="translate(153.000000, 450.000000)">
                <path class="color-background" d="M34.080375,13.125 L27.3748125,1.9490625 C27.1377583,1.53795093 26.6972449,1.28682264 26.222716,1.29218729 C25.748187,1.29772591 25.3135593,1.55890827 25.0860125,1.97535742 C24.8584658,2.39180657 24.8734447,2.89865282 25.1251875,3.3009375 L31.019625,13.125 L10.980375,13.125 L16.8748125,3.3009375 C17.1265553,2.89865282 17.1415342,2.39180657 16.9139875,1.97535742 C16.6864407,1.55890827 16.251813,1.29772591 15.777284,1.29218729 C15.3027551,1.28682264 14.8622417,1.53795093 14.6251875,1.9490625 L7.919625,13.125 L0,13.125 L0,18.375 L42,18.375 L42,13.125 L34.080375,13.125 Z" opacity="0.595377604"></path>
                <path class="color-background" d="M3.9375,21 L3.9375,38.0625 C3.9375,40.9619949 6.28800506,43.3125 9.1875,43.3125 L32.8125,43.3125 C35.7119949,43.3125 38.0625,40.9619949 38.0625,38.0625 L38.0625,21 L3.9375,21 Z M14.4375,36.75 L11.8125,36.75 L11.8125,26.25 L14.4375,26.25 L14.4375,36.75 Z M22.3125,36.75 L19.6875,36.75 L19.6875,26.25 L22.3125,26.25 L22.3125,36.75 Z M30.1875,36.75 L27.5625,36.75 L27.5625,26.25 L30.1875,26.25 L30.1875,36.75 Z"></path>
                </g>
                </g>
                </g>
                 </g>
                </svg>
                </div>
        <span class="nav-link-text ms-1">{{ __('wac') }}</span>
        </a>
        <div class="collapse" id="applicationsExamples3">
        <ul class="nav ms-4 ps-3">



            <li class="nav-item {{ Request::is('gudang/lisaccecories') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('gudang/lisaccecories') ? 'active' : '' }}" href="/gudang/lisaccecories">
            <span class="sidenav-normal">{{ __('acce_list') }}</span>
            </a>
            </li>
            <li class="nav-item {{ Request::is('gudang/order') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('gudang/order') ? 'active' : '' }}" href="/gudang/order">
            <span class="sidenav-normal">{{ __('order_list') }}</span>
            </a>
            </li>


            </ul>
            </div>
            </li>


            <li class="nav-item">
                <hr class="horizontal dark" />
                <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Packing</h6>
                </li>
            <li class="nav-item active">
                <a data-bs-toggle="collapse" href="#packing" class="nav-link" aria-controls="applicationsExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <svg class="text-dark" width="12px" height="12px" viewBox="0 0 42 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>basket</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-1869.000000, -741.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                        <g id="basket" transform="translate(153.000000, 450.000000)">
                        <path class="color-background" d="M34.080375,13.125 L27.3748125,1.9490625 C27.1377583,1.53795093 26.6972449,1.28682264 26.222716,1.29218729 C25.748187,1.29772591 25.3135593,1.55890827 25.0860125,1.97535742 C24.8584658,2.39180657 24.8734447,2.89865282 25.1251875,3.3009375 L31.019625,13.125 L10.980375,13.125 L16.8748125,3.3009375 C17.1265553,2.89865282 17.1415342,2.39180657 16.9139875,1.97535742 C16.6864407,1.55890827 16.251813,1.29772591 15.777284,1.29218729 C15.3027551,1.28682264 14.8622417,1.53795093 14.6251875,1.9490625 L7.919625,13.125 L0,13.125 L0,18.375 L42,18.375 L42,13.125 L34.080375,13.125 Z" opacity="0.595377604"></path>
                        <path class="color-background" d="M3.9375,21 L3.9375,38.0625 C3.9375,40.9619949 6.28800506,43.3125 9.1875,43.3125 L32.8125,43.3125 C35.7119949,43.3125 38.0625,40.9619949 38.0625,38.0625 L38.0625,21 L3.9375,21 Z M14.4375,36.75 L11.8125,36.75 L11.8125,26.25 L14.4375,26.25 L14.4375,36.75 Z M22.3125,36.75 L19.6875,36.75 L19.6875,26.25 L22.3125,26.25 L22.3125,36.75 Z M30.1875,36.75 L27.5625,36.75 L27.5625,26.25 L30.1875,26.25 L30.1875,36.75 Z"></path>
                        </g>
                        </g>
                        </g>
                         </g>
                        </svg>
                        </div>
                <span class="nav-link-text ms-1">{{ __('carton') }}</span>
                </a>
                <div class="collapse" id="packing">
                <ul class="nav ms-4 ps-3">



                    <li class="nav-item {{ Request::is('carton-gap') ? 'active' : '' }}">
                        <a class="nav-link {{ Request::is('carton-gap') ? 'active' : '' }}" href="/carton-gap">
                    <span class="sidenav-normal">{{ __('carton') }} GAP</span>
                    </a>
                    </li>
                    <li class="nav-item {{ Request::is('carton-gu') ? 'active' : '' }}">
                        <a class="nav-link {{ Request::is('carton-gu') ? 'active' : '' }}" href="/carton-gu">
                    <span class="sidenav-normal">{{ __('carton') }} GU</span>
                    </a>
                    </li>
                    <li class="nav-item {{ Request::is('carton-hnm') ? 'active' : '' }}">
                        <a class="nav-link {{ Request::is('carton-hnm') ? 'active' : '' }}" href="/carton-hnm">
                    <span class="sidenav-normal">{{ __('carton') }} H&M</span>
                    </a>
                    </li>
                    <li class="nav-item {{ Request::is('carton-target') ? 'active' : '' }}">
                        <a class="nav-link {{ Request::is('carton-target') ? 'active' : '' }}" href="/carton-target">
                    <span class="sidenav-normal">{{ __('carton') }} Target</span>
                    </a>
                    </li>
                    <li class="nav-item {{ Request::is('carton-jcp') ? 'active' : '' }}">
                        <a class="nav-link {{ Request::is('carton-jcp') ? 'active' : '' }}" href="/carton-jcp">
                    <span class="sidenav-normal">{{ __('carton') }} JCP</span>
                    </a>
                    </li>

                    </ul>
                    </div>
                    </li>

            <li class="nav-item">
                <hr class="horizontal dark" />
                <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">WWTP & STP</h6>
                </li>
@can('wwtp')
    {{-- start wwtp --}}
    <li class="nav-item active">
        <a data-bs-toggle="collapse" href="#applicationsExamples4" class="nav-link" aria-controls="applicationsExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                <svg class="text-dark" width="12px" height="12px" viewBox="0 0 42 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>basket</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1869.000000, -741.000000)" fill="#FFFFFF" fill-rule="nonzero">
                <g transform="translate(1716.000000, 291.000000)">
                <g id="basket" transform="translate(153.000000, 450.000000)">
                <path class="color-background" d="M34.080375,13.125 L27.3748125,1.9490625 C27.1377583,1.53795093 26.6972449,1.28682264 26.222716,1.29218729 C25.748187,1.29772591 25.3135593,1.55890827 25.0860125,1.97535742 C24.8584658,2.39180657 24.8734447,2.89865282 25.1251875,3.3009375 L31.019625,13.125 L10.980375,13.125 L16.8748125,3.3009375 C17.1265553,2.89865282 17.1415342,2.39180657 16.9139875,1.97535742 C16.6864407,1.55890827 16.251813,1.29772591 15.777284,1.29218729 C15.3027551,1.28682264 14.8622417,1.53795093 14.6251875,1.9490625 L7.919625,13.125 L0,13.125 L0,18.375 L42,18.375 L42,13.125 L34.080375,13.125 Z" opacity="0.595377604"></path>
                <path class="color-background" d="M3.9375,21 L3.9375,38.0625 C3.9375,40.9619949 6.28800506,43.3125 9.1875,43.3125 L32.8125,43.3125 C35.7119949,43.3125 38.0625,40.9619949 38.0625,38.0625 L38.0625,21 L3.9375,21 Z M14.4375,36.75 L11.8125,36.75 L11.8125,26.25 L14.4375,26.25 L14.4375,36.75 Z M22.3125,36.75 L19.6875,36.75 L19.6875,26.25 L22.3125,26.25 L22.3125,36.75 Z M30.1875,36.75 L27.5625,36.75 L27.5625,26.25 L30.1875,26.25 L30.1875,36.75 Z"></path>
                </g>
                </g>
                </g>
                 </g>
                </svg>
                </div>
        <span class="nav-link-text ms-1">WWTP & STP</span>
        </a>
        <div class="collapse" id="applicationsExamples4">
        <ul class="nav ms-4 ps-3">



            <li class="nav-item {{ Request::is('wwtp/barang-masuk') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('wwtp/barang-masuk') ? 'active' : '' }}" href="/wwtp/barang-masuk">
            <span class="sidenav-normal">{{ __('produk') }}</span>
            </a>
            </li>
            <li class="nav-item {{ Request::is('pemakaian') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('pemakaian') ? 'active' : '' }}" href="/pemakaian">
            <span class="sidenav-normal">{{ __('pemakaian') }}</span>
            </a>
            </li>
            <li class="nav-item {{ Request::is('cekph') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('cekph') ? 'active' : '' }}" href="/cekph">
            <span class="sidenav-normal">{{ __('daily_test') }}</span>
            </a>
            </li>
            <li class="nav-item {{ Request::is('summarywwtp') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('summarywwtp') ? 'active' : '' }}" href="/summarywwtp">
            <span class="sidenav-normal">{{ __('summary') }}</span>
            </a>
            </li>
            <li class="nav-item {{ Request::is('assetwwtp') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('assetwwtp') ? 'active' : '' }}" href="/assetwwtp">
            <span class="sidenav-normal">{{ __('asset') }}</span>
            </a>
            </li>
            <li class="nav-item {{ Request::is('grafik/wwtp') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('grafik/wwtp') ? 'active' : '' }}" href="/grafik/wwtp">
            <span class="sidenav-normal">{{ __('report') }} {{ __('cart') }}</span>
            </a>
            </li>

            </ul>
            </div>
            </li>
{{-- end wwtp --}}
@endcan



    </ul>
  </div>


  <div class="sidenav-footer mx-3 mt-3 pt-3">
    <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
    <div class="full-background" style="background-image: url('../../assets/img/curved-images/white-curved.jpg')"></div>
    <div class="card-body text-start p-3 w-100">
    <div class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
    <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true" id="sidenavCardIcon"></i>
    </div>
    <div class="docs-info">
    <h6 class="text-white up mb-0">{{ __('need_help') }}?</h6>
    <p class="text-xs font-weight-bold">{{ __('please_contact') }}</p>
    <a href="https://bmpgtpq.com/jimi-mikail-zamzami" target="_blank" class="btn btn-white btn-sm w-100 mb-0">{{ __('here') }}</a>
    </div>
    </div>
    </div>
    </div>
</aside>
