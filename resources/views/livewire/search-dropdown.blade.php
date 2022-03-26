<div class="relative mt-3 md:mt-2" x-data="{ isOpen: true }" @click.away="isOpen=false" >
    
    <input 
            type="text" 
            wire:model.debounce.500="search" 
            class="bg-gray-600 text-white rounded-full w-64 px-4 pl-8 py-1 
            focus:outline-none focus:shadow-outline" 
            placeholder="Search"
            @focus="isOpen = true"
    >
    <div class="absolute top-0 mt-1 ml-2">
        <i class="fa fa-search text-gray-800" style="font-size:14px" aria-hidden="true"></i>
    </div>

    <div wire:loading class="spinner top-0 right-0 mr-4 mt-4"></div>

    @if (strlen($search) >= 2)
        <div 
            class="absolute bg-gray-600 rounded w-64 mt-2" 
            x-show="isOpen"
            @keydown.escape.window="isOpen = false"
        >
            @if ($searchResults->count() > 0)
            <ul>
                @foreach ($searchResults as $result)
                <li class="border-b border-gray-900">
                    @if ($result['poster_path'])
                        <a href="{{ route('movies.show', $result['id']) }}" 
                        class="block hover:bg-gray-900 px-3 py-3 flex items-center">
                            <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$result['poster_path'] }}" class="w-10 h-10 rounded" alt="poster">
                            <span class="ml-4">{{ $result['title'] }}</span>
                        </a>
                    @else
                        <img src="https://via.placeholder.com/58*75" alt="">
                    @endif
                    
                </li>     
                @endforeach
            </ul>    
            @else
                <div class="p-3">No Results For "{{ $search }}"</div>
            @endif
        </div>
    @endif

</div>