<div class="relative px-4 pt-5 pb-4 text-left sm:w-full sm:max-w-lg sm:p-6">
    <div class="sm:flex sm:items-start">
        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <div>
                <img src='{{ (!empty($aspirasi->attachment)) ? Storage::url("attachments/$aspirasi->attachment") : '' }}' alt="" class="w-full rounded-md">
            </div>
        </div>
    </div>
    <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
        <button wire:click="$emit('closeModal')" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:w-auto sm:text-sm"
                wire:loading.attr="disabled">
            Tutup
        </button>
    </div>
</div>
