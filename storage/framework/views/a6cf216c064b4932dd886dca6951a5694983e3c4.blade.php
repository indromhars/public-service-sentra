    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('landing') }}">
                            <x-jet-application-mark class="block h-9 w-auto" />
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-jet-nav-link href="{{ route('aspirasi-form') }}" :active="request()->routeIs('aspirasi-form')">
                            {{ __('Aspirasi Baru') }}
                        </x-jet-nav-link>
                    </div>
                </div>

            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-jet-responsive-nav-link href="{{ route('aspirasi-form') }}" :active="request()->routeIs('aspirasi-form')">
                    {{ __('Aspirasi Baru') }}
                </x-jet-responsive-nav-link>
            </div>
        </div>
    </nav>