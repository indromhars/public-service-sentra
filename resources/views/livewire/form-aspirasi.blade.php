<div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-6 text-center text-3xl tracking-tight font-bold text-gray-900">Form Aspirasi</h2>
        <p class="mt-2 text-center text-sm text-gray-600">
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <form class="space-y-6" wire:submit.prevent="save" method="POST" action="@">

                <div>
                    <label for="topic" class="block text-sm font-medium text-gray-700"> Topik </label>
                    <div class="mt-1">
                        <input wire:model.defer="aspirasi.topic"  type="text" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="topic" class="block text-sm font-medium text-gray-700"> Deskripsi </label>
                    <div class="mt-1">
                        <textarea wire:model.defer="aspirasi.description" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                  rows="3"></textarea>
                    </div>
                </div>

                <div>
                    <label for="topic" class="block text-sm font-medium text-gray-700"> Lokasi </label>
                    <div class="mt-1">
                        <input wire:model.defer="aspirasi.location"  type="text" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="sender_name" class="block text-sm font-medium text-gray-700"> Nama Pengirim </label>

                    <div class="mt-1">
                        <input wire:model.defer="aspirasi.sender_name"  type="text" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>
                <div>
                    <label for="sender_name" class="block text-sm font-medium text-gray-700">Bukti Foto</label>
                    <div class="mt-1">
                        <input type="file" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-gray-700 hover:file:bg-indigo-100 transition-all" wire:model.defer="attachment">
                        @error('attachment') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>

                @if ($errors->any())
                    <div class="mt-6 text-red-700">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

{{--                <div x-data="{textOpen: false}">--}}
{{--                    <button id="buttonShow" type="button" x-on:click="textOpen = true">Show</button>--}}
{{--                    <div id="text" style="display: none;" x-show="textOpen" x-transition>Keluar textnya di sini</div>--}}
{{--                </div>--}}
{{--                --}}

{{--                <div x-data="{toggle: @entangle('notification')}" class="w-full flex">--}}
{{--                    <label for="topic" class="block text-sm font-medium text-gray-700 mr-2"> Kirimkan Saya Notifikasi </label>--}}
{{--                    <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->--}}
{{--                    <button type="button" class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" role="switch" aria-checked="false"--}}
{{--                            x-bind:class="toggle ? 'bg-indigo-600' : 'bg-gray-200'" @click="toggle = !toggle">--}}
{{--                        <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->--}}
{{--                        <span aria-hidden="true" :class="toggle ? 'translate-x-5' : 'translate-x-0'"--}}
{{--                              class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>--}}
{{--                    </button>--}}
{{--                </div>--}}

                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Kirim
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
