<x-app-layout>
    <div class="container lg:w-1/2 md:w-4/5 w-11/12 mx-auto mt-8 px-8 bg-indigo-800 shadow-md rounded-md">
        <h2 class="text-center text-lg text-white font-bold pt-6 tracking-widest">募集情報編集</h2>

        <x-validation-errors :errors="$errors" />

        <form action="{{ route('recruitments.update', $recruitment) }}" method="POST"
            class="rounded pt-3 pb-8 mb-4">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-white mb-2" for="title">
                    作成するアプリ名
                </label>
                <input type="text" name="name"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-pink-600 w-full py-2 px-3"
                    required placeholder="例: Todoアプリ" value="{{ old('name', $recruitment->name) }}">
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2" for="occupation_id">
                    主な使用言語
                </label>
                <select name="category_id" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-pink-600 w-full py-2 px-3">
                    <option disabled selected value="">選択してください</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" @if($category->id == old('category_id', $recruitment->category_id)) selected @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2" for="description">
                    アプリの概要
                </label>
                <textarea name="description" rows="4"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-pink-600 w-full py-2 px-3"
                    required placeholder="例: Todoリストを管理するアプリです。">{{ old('description', $recruitment->description) }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2" for="period">
                    作業期間
                </label>
                <input type="text" name="period"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-pink-600 w-full py-2 px-3"
                    required placeholder="例: 150~200時間程度" value="{{ old('period', $recruitment->period) }}">
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2" for="number">
                    募集人数
                </label>
                <input type="text" name="number"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-pink-600 w-full py-2 px-3"
                    required placeholder="例: 3人程度" value="{{ old('number', $recruitment->number) }}">
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2" for="due_date">
                    募集期限
                </label>
                <input type="date" name="due_date"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-pink-600 w-full py-2 px-3"
                    required placeholder="募集期限" value="{{ old('due_date', $recruitment->due_date) }}">
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2" for="gain">
                    得られるもの
                </label>
                <textarea name="gain" rows="4"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-pink-600 w-full py-2 px-3"
                    required placeholder="例: 業務知識、多人数開発の楽しさと難しさ、gitの練習">{{ old('gain', $recruitment->gain) }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2" for="caution">
                    注意事項
                </label>
                <textarea name="caution" rows="4"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-pink-600 w-full py-2 px-3"
                    required placeholder="例: 週に10時間は開発できる時間を確保してください。経験、未経験は問いません。">{{ old('caution', $recruitment->caution) }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2" for="comment">
                    一言
                </label>
                <textarea name="comment" rows="4"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-pink-600 w-full py-2 px-3"
                    required placeholder="例: 一緒に楽しく学びましょう！">{{ old('comment', $recruitment->comment) }}</textarea>
            </div>
            <input type="submit" value="更新"
                class="w-full flex justify-center bg-gradient-to-r from-pink-500 to-purple-600 hover:bg-gradient-to-l hover:from-purple-500 hover:to-pink-600 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">
        </form>
    </div>
</x-app-layout>