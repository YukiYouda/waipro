<x-app-layout>

    <x-flash-message :message="session('notice')" />
    <x-validation-errors :errors="$errors" />

    <div class="container lg:w-1/2 md:w-4/5 w-11/12 mx-auto mt-8 px-8 bg-white shadow-md">
        <h2 class="text-center text-lg font-bold pt-6 tracking-widest">メッセージ</h2>
        <form action="{{ route('entries.messages.store', $entry) }}" method="POST" class="rounded pt-3 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="body">
                    本文
                </label>
                <textarea name="body" rows="10"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    required>{{ old('body') }}</textarea>
            </div>
            <input type="submit" value="送信"
                class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        </form>
    </div>

    <div class="w-4/5 md:w-3/5 lg:w-2/5 m-auto mt-10 pb-10">
            <ul>
                @foreach ($messages as $message)
                    <p class="text-xs @if($message->user_id == auth()->user()->id) text-right @endif">{{$message->created_at}} ＠{{$message->user->name}}</p>
                    <li class="w-max mb-3 p-2 rounded-lg bg-blue-200 relative @if($message->user_id == auth()->user()->id) self ml-auto @else other @endif">
                        {{$message->body}}
                    </li>
                @endforeach
            </ul>
    </div>

    {{-- @foreach ($messages as $message)
        <div class="container lg:w-1/2 md:w-4/5 w-11/12 mx-auto mt-3 px-8 bg-white shadow-md mb-4">
            {{ $message->created_at }} {{ $message->user->name }} <br>
            {{ $message->body }}
        </div>
    @endforeach --}}
    
</x-app-layout>
