<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="navigation">
            <ul>
                <!-- Logo -->
                <li>
                    <a href="{{ route('dashboard') }}">
                        <span class="icon">
                            <x-application-logo class="block w-auto fill-current text-white-800" />
                        </span>
                        <span class="title">Brand Name</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('dashboard')}}" >
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">{{ __('Dashboard') }}</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('profile.edit') }}">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">{{ __('Profile') }}</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Services</span>
                    </a>
                </li>

                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}">
                            <span class="icon">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </span>
                            <span class="title" onclick="event.preventDefault();
                            this.closest('form').submit();">{{ __('Log Out') }}</span>
                        </a>
                    </form>
                </li>
            </ul>
        </div>
</nav>
