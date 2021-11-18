<x-app-layout>
<div class="container mx-auto w-3/5 my-8 px-4 py-4">
        @foreach ($recruitments as $recruitment)
            <div class="bg-white w-full px-10 py-8 hover:shadow-2xl transition duration-500">
                <div class="mt-4">
                    <div class="flex justify-between text-sm items-center mb-4">
                        <div class="border border-gray-900 px-2 h-7 leading-7 rounded-full">{{ $recruitment->category->name }}</div>
                        <div class="text-gray-700 text-sm text-right">
                            <span>応募期限 :{{ $recruitment->due_date }}</span>
                            <span class="inline-block mx-1">|</span>
                            <span>エントリー :{{ $recruitment->Entries->count() }}</span>
                        </div>
                    </div>
                    <h2 class="text-lg text-gray-700 font-semibold">{{ $recruitment->name }}
                    </h2>
                    <p class="mt-4 text-md text-gray-600">
                        {{ Str::limit($recruitment->description, 50) }}
                    </p>
                    <div class="flex justify-end items-center">
                        <a href="{{ route('recruitments.show', $recruitment) }}" class="flex justify-center bg-gradient-to-r from-indigo-500 to-blue-600 hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 mt-4 px-5 py-3 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">more</a>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
</x-app-layout>