<nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
        <a class="navbar-brand brand-logo-mini" href="index.html"><img
                src="{{ asset('admin/assets/images/logo-mini.svg') }}" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                    <input type="text" class="form-control" placeholder="Search products">
                </form>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                    data-bs-toggle="dropdown">

                    <div class="loader">

                        <svg viewBox="0 0 24 24" fill="none" height="24" width="24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                            class="w-6 h-6 text-gray-800 dark:text-white">
                            <path
                                d="M12 5.365V3m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175 0 .593 0 1.292-.538 1.292H5.538C5 18 5 17.301 5 16.708c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.365ZM8.733 18c.094.852.306 1.54.944 2.112a3.48 3.48 0 0 0 4.646 0c.638-.572 1.236-1.26 1.33-2.112h-6.92Z"
                                stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor">
                            </path>
                        </svg>
                        @if (Helper::Count_Reservation_Notification() > 0)
                            <span class="msg-count">
                                {{ Helper::Count_Reservation_Notification() }}
                            </span>
                        @endif
                        Reservation
                        @if (Helper::Count_Reservation_Notification() > 0)
                            <div class="point"></div>
                        @endif
                    </div>
                    {{-- <i class="mdi mdi-bell"></i>
                    @if (Helper::Count_Reservation_Notification() > 0)
                        <sup style="color: blue">+{{ number_format(Helper::Count_Reservation_Notification()) }}</sup>
                    @endif --}}
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0">Reservation</h6>
                    <div class="dropdown-divider"></div>
                    @foreach (Helper::Reservation_Notification() as $reservation)
                        <a class="dropdown-item preview-item " href="{{ route('reservation.show', $reservation->id) }}">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-calendar text-success"></i>
                                </div>
                            </div>
                            <div class="preview-item-content ">
                                <p class="preview-subject mb-1">New Reservation Arrived

                                </p>
                                <p class="text-muted ellipsis mb-0"> {{ $reservation->created_at->format('d/m/Y') }}
                                </p>
                            </div>
                        </a>
                    @endforeach


                    <p class="p-3 mb-0 text-center"><a href="{{ route('reservation.index') }}">See all
                            Reservation</a>
                        <span style="">+{{ number_format(Helper::Count_Reservation_Notification()) }}</span>
                    </p>
                </div>
            </li>


            <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{-- <i class="mdi mdi-email"></i> --}}
                    <button class="inbox-btn">
                        <svg viewBox="0 0 512 512" height="16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z">
                            </path>
                        </svg>
                        @if (Helper::CountMessage() > 0)
                            <span class="msg-count">
                                {{ Helper::CountMessage() }}
                            </span>
                        @endif
                    </button>

                    {{-- @if (Helper::CountMessage() > 0)
                        <sup style="color: green">+{{ Helper::CountMessage() }}</sup>
                    @endif --}}
                    {{-- <span class="count bg-success"></span> --}}
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="messageDropdown">
                    <h6 class="p-3 mb-0">Messages</h6>


                    <div class="dropdown-divider"></div>

                    @foreach (Helper::contact() as $contact)
                        <a class="dropdown-item preview-item" href="{{ route('contacts.show', $contact->id) }}">
                            <div class="preview-thumbnail">
                                <img src="user/assets/img/bg-img/images.png" alt="image"
                                    class="rounded-circle profile-pic">
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1">{{ $contact->name }} send you a message</p>
                                <p class="text-muted mb-0">{{ $contact->created_at }}</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                    @endforeach

                    <div class="dropdown-divider"></div>
                    <a href="{{ route('contacts.index') }}">
                        <p class="p-3 mb-0 text-center">{{ Helper::CountMessage() }} new messages</p>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                    data-bs-toggle="dropdown">
                    <div class="loader">

                        <svg viewBox="0 0 24 24" fill="none" height="24" width="24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                            class="w-6 h-6 text-gray-800 dark:text-white">
                            <path
                                d="M12 5.365V3m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175 0 .593 0 1.292-.538 1.292H5.538C5 18 5 17.301 5 16.708c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.365ZM8.733 18c.094.852.306 1.54.944 2.112a3.48 3.48 0 0 0 4.646 0c.638-.572 1.236-1.26 1.33-2.112h-6.92Z"
                                stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor">
                            </path>
                        </svg>
                        @if (Helper::ReadNotification())
                            <span class="msg-count">
                                {{ Helper::CountNotification() }}
                            </span>
                        @endif
                        orders
                        @if (Helper::ReadNotification())
                            <div class="point"></div>
                        @endif
                    </div>

                    {{-- <i class="mdi mdi-bell"></i> --}}
                    {{-- @if (Helper::ReadNotification())
                        <sup style="color: red">+{{ number_format(Helper::CountNotification()) }}</sup>
                    @endif --}}
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0">Notifications</h6>
                    <div class="dropdown-divider"></div>
                    @foreach (Helper::notification() as $notification)
                        <a class="dropdown-item preview-item "
                            href="{{ route('orderadmin.show', $notification->order_id) }}">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-calendar text-success"></i>
                                </div>
                            </div>
                            <div class="preview-item-content ">
                                <p class="preview-subject mb-1">New Order Arrived

                                </p>
                                <p class="text-muted ellipsis mb-0"> {{ $notification->created_at->format('d/m/Y') }}
                                </p>
                            </div>
                        </a>
                    @endforeach


                    <p class="p-3 mb-0 text-center"><a href="{{ route('show_notification') }}">See all
                            notifications</a>
                        <span>+{{ number_format(Helper::CountNotification()) }}</span>
                    </p>
                </div>
            </li>
            <li>



                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="Btn">

                        <div class="sign"><svg viewBox="0 0 512 512">
                                <path
                                    d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z">
                                </path>
                            </svg></div>

                        <div class="text">Logout</div>
                    </button>
                </form>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
        </button>
    </div>
</nav>
