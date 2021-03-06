<x-app-layout>
    <div class="container mx-auto w-3/5 my-8 px-4 py-4">
        <div class="flex justify-between">
            <div class="w-2/5">
                <h3 class="mb-3 text-gray-400 text-sm">検索条件</h3>
                <ul>
                    <li class="mb-2"><a href="/" class="hover:text-blue-500 {{ strpos(url()->full(), 'category') ?: 'text-green-500 font-bold' }}">全て</a></li>
                    @foreach ($categories as $category)
                        <li class="mb-2"><a href="/?category={{ $category->id }}" class="hover:text-blue-500 {{ strpos(url()->full(), 'category=' . $category->id) ? 'text-green-500 font-bold' : '' }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="w-full">
                @foreach ($recruitments as $recruitment)
                    <div class="bg-white w-full px-10 py-8 hover:shadow-2xl transition duration-500 mb-10">
                        <div class="mt-4">
                            <div class="flex justify-between text-sm items-center mb-4">
                                <div class="border border-gray-900 px-2 h-7 leading-7 rounded-full">{{ $recruitment->category->name }}</div>
                                <div class="text-gray-700 text-sm text-right">
                                    <span>応募期限 :{{ $recruitment->due_date }}</span>
                                </div>
                            </div>
                            <h2 class="text-lg text-gray-700 font-semibold">{{ $recruitment->name }}
                            </h2>
                            <p class="mt-4 text-md text-gray-600">
                                {{ Str::limit($recruitment->description, 50) }}
                            </p>
                            <div class="flex justify-between items-center">
                                <div class="mt-4 flex items-center space-x-4 py-6">
                                    <div>
                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                            <img class="h-8 w-8 rounded-full object-cover" src="{{ $recruitment->user->profile_photo_url }}" alt="{{ $recruitment->user->name }}" />
                                        @endif
                                    </div>
                                    <div class="text-sm font-semibold">{{ $recruitment->user->name }}<span class="font-normal ml-2">{{ $recruitment->created_at->diffForHumans() }}</span></div>
                                </div>
                                <div>
                                    <a href="{{ route('recruitments.show', $recruitment) }}" class="flex justify-center bg-gradient-to-r from-indigo-500 to-blue-600 hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 mt-4 px-5 py-3 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">詳細</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
                <div class="block mt-3">
                    {{ $recruitments->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>