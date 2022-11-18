<div class="w-8/12 mx-auto">
    <div class="">
        <div class="mt-8">
            <label for="sortBy" class="block text-sm font-medium text-gray-700">Urut Berdasarkan</label>
            <select id="sortBy" wire:model="sortBy" class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                <option value="latest">Terbaru</option>
                <option value="oldest">Terlama</option>
            </select>
        </div>
    </div>
    <div class="flex flex-col items-center mt-4 w-full">
        @foreach($aspirasi as $a)
        <div class="flex flex-col items-center mt-10 w-full bg-white rounded-md">

            <div class="flex w-full mt-4 justify-between">
                <div class="ml-6 font-bold text-2xl justify-self-start">{{ $a->topic }}</div>
                <div class="mr-6 font-semibold text-base">{{ $a->location }}</div>
                <div class="mr-6">{{ $a->id }}</div>
            </div>
            <div class="flex flex-row w-full mt-4 justify-between">
                <div class="flex w-4/5 mb-8 ml-6">{{ $a->description }}</div>
                @if($a->status == 0)
                    <div class="flex flex-col">
                        <div class="text-red-600 ml-4">Open</div>
                        <button wire:click="pick({{ $a->id }})" class="flex w-20 h-10 mt-4 mr-6 mb-4 bg-indigo-600 text-white font-semibold rounded-md justify-center items-center">Pick</button>
                    </div>
                @elseif($a->status == 1)
                    <div class="flex flex-col">
                        <div class="text-yellow-600 text-center mr-4">Progress</div>
                        <button wire:click="resolve({{ $a->id }})" class="flex w-20 h-10 mt-4 ml-2 mr-6 mb-4 bg-indigo-600 text-white font-semibold rounded-md justify-center items-center">Selesai</button>
                    </div>
                @elseif($a->status == 2)
                    <div>
                        <div class="flex text-green-600 ml-6">Done</div>
                        <button wire:click="delete({{ $a->id }})" class="flex w-20 h-10 mt-4 ml-2 mr-6 mb-4 bg-red-600 text-white font-semibold rounded-md justify-center items-center">Delete</button>
                    </div>
                @endif
                <div>
                    <button wire:click="attachment({{ $a->id }})" class="flex w-20 h-10 mt-10 ml-2 mr-6 mb-4 bg-yellow-400 text-white font-semibold rounded-md justify-center items-center">Lampiran</button>
                </div>
            </div>
        </div>
        @endforeach
        <div class="mt-8 pb-6 w-full">
            {{ $aspirasi->links() }}
        </div>
    </div>
</div>
