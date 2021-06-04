<div>
    <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach($products as $product)
            <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
                <div class="flex-1 flex flex-col p-8">
                    @if ($product->image_url != null)
                        <img class="w-32 h-32 flex-shrink-0 mx-auto bg-black rounded-full" src="{{ route('media.show', ['id' => $product->id]) }}" alt="" style="object-fit: cover;">
                    @endif

                    <h3 class="mt-6 text-gray-900 text-sm font-medium">{{ $product->name }}</h3>
                    <dl class="mt-1 flex-grow flex flex-col justify-between">
                        <dd class="text-gray-500 text-sm">{{ $product->description }}</dd>
                    </dl>
                </div>
                <div>
                    <div class="-mt-px flex divide-x divide-gray-200">
                        <div class="w-0 flex-1 flex">
                            <span class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                <span class="ml-3">R {{ number_format($product->price, 2, '.', ' ') }}</span>
                            </span>
                        </div>
                        <div class="-ml-px w-0 flex-1 flex">
                            @if(in_array($product->id, $wishlist_items))
                                <button type="button" wire:click="removeFromWishlist('{{$product->id}}')" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                                    <!-- Heroicon name: solid/phone -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"/></svg>
                                    <span class="ml-3">Remove from Wishlist</span>
                                </button>
                            @else
                                <button type="button" wire:click="addToWishlist('{{$product->id}}')" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                                    <!-- Heroicon name: solid/phone -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 5.173l2.335 4.817 5.305.732-3.861 3.71.942 5.27-4.721-2.524-4.721 2.525.942-5.27-3.861-3.71 5.305-.733 2.335-4.817zm0-4.586l-3.668 7.568-8.332 1.151 6.064 5.828-1.48 8.279 7.416-3.967 7.416 3.966-1.48-8.279 6.064-5.827-8.332-1.15-3.668-7.569z"/></svg>
                                    <span class="ml-3">Add to Wishlist</span>
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
        <!-- More people... -->
    </ul>
</div>
