<div class="w-8/12 mx-auto">
    <div class="flex flex-col items-center mt-4">
        @foreach($aspirasi as $a)
            <div class="flex flex-col items-center mt-10 w-full bg-white rounded-md">
                <div class="flex w-full mt-4 justify-between">
                    <div class="ml-6 font-bold text-2xl justify-self-start">{{ $a->topic }}</div>
                    <div class="mr-6 font-semibold text-base">{{ $a->location }}</div>
                    <div class="mr-6">{{ $a->id }}</div>
                </div>
                <div class="flex flex-row w-full mt-4 justify-between">
                    <div class="flex w-4/5 mb-8 ml-6">{{ $a->description }}</div>
                    <div>
                        <div class="flex text-white ml-6">Done</div>
                        <button wire:click="attachment({{ $a->id }})" class="flex w-20 h-10 mt-4 ml-2 mr-6 mb-4 bg-yellow-400 text-white font-semibold rounded-md justify-center items-center">Lampiran</button>
                    </div>
                    <div>
                        @if($a->status == 0)
                            <div class="flex flex-col">
                                <div class="text-red-600 mr-4 mt-12">Open</div>
                            </div>
                        @elseif($a->status == 1)
                            <div class="flex flex-col">
                                <div class="text-yellow-600 mr-6 mt-12">Progress</div>
                            </div>
                        @elseif($a->status == 2)
                            <div>
                                <div class="flex text-green-600 ml-10 mt-6">Done</div>
                                <div class="flex py-2 mr-2">
                                    @for($star = 1; $star < 6; $star++)
                                        @if ($star <= $a->rate)
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                            </svg>

                                        @else
                                            <svg wire:click="rate({{ $a->id }}, {{ $star }})" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cursor-pointer">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                            </svg>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        @endforeach
        <div class="mt-6 pb-4 w-full">
            {{ $aspirasi->links() }}
        </div>
    </div>
</div>
