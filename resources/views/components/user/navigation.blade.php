<div class>
    <ul class="dashborad-menus">
        <li @if($nav=='dashboard')
            class="active"
        @endif>
            <a href="{{route('dashboard')}}">
                <i class="feather-grid"></i> <span>Dashboard</span>
            </a>
        </li>
        <li @if($nav=='profile')
            class="active"
        @endif>
            <a href="{{route('profile')}}">
                <i class="fa-solid fa-user"></i> <span>Profile</span>
            </a>
        </li>
        <li>
            <a href="my-listing.html">
                <i class="feather-list"></i> <span>My Listing</span>
            </a>
        </li>
        <li>
            <a href="bookmarks.html">
                <i class="fas fa-solid fa-heart"></i> <span>Bookmarks</span>
            </a>
        </li>
        <li>
            <a href="messages.html">
                <i class="fa-solid fa-comment-dots"></i> <span>Messages</span>
            </a>
        </li>
        <li>
            <a href="reviews.html">
                <i class="fas fa-solid fa-star"></i> <span>Reviews</span>
            </a>
        </li>
        <li>
            {{-- <a href="login.html">
                <i class="fas fa-light fa-circle-arrow-left"></i> <span>Logout</span>
            </a> --}}
            <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <i class="fas fa-light fa-circle-arrow-left"></i><span>{{ __('Logout') }}</span>
                    </x-dropdown-link>
                </form>
        </li>
    </ul>
</div>