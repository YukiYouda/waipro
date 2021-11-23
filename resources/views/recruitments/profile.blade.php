<x-app-layout>
    
<div class="px-4 py-5 rounded-t sm:px-6">
                <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-md">
                    <ul class="divide-y divide-gray-200">
                        <li>
                            <a class="block hover:bg-gray-50 dark:hover:bg-gray-900">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <img src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" class="rounded-full h-20 w-20 object-cover">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="block hover:bg-gray-50 dark:hover:bg-gray-900">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <p class="text-md text-gray-700 dark:text-white md:truncate">
                                            名前
                                        </p>
                                    </div>
                                    <div class="mt-2 sm:flex sm:justify-between">
                                        <div class="sm:flex">
                                            <p
                                                class="flex items-center text-md font-light text-gray-500 dark:text-gray-300">
                                                {{ $user->name }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="block hover:bg-gray-50 dark:hover:bg-gray-900">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <p class="text-md text-gray-700 dark:text-white md:truncate">
                                            スキル
                                        </p>
                                    </div>
                                    <div class="mt-2 sm:flex sm:justify-between">
                                        <div class="sm:flex">
                                            <p
                                                class="flex items-center text-md font-light text-gray-500 dark:text-gray-300">
                                                {{ $user->skill}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="block hover:bg-gray-50 dark:hover:bg-gray-900">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <p class="text-md text-gray-700 dark:text-white md:truncate">
                                            経歴
                                        </p>
                                    </div>
                                    <div class="mt-2 sm:flex sm:justify-between">
                                        <div class="sm:flex">
                                            <p
                                                class="flex items-center text-md font-light text-gray-500 dark:text-gray-300">
                                                {{ $user->career }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="block hover:bg-gray-50 dark:hover:bg-gray-900">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <p class="text-md text-gray-700 dark:text-white md:truncate">
                                            Twitterアカウント
                                        </p>
                                    </div>
                                    <div class="mt-2 sm:flex sm:justify-between">
                                        <div class="sm:flex">
                                            <p
                                                class="flex items-center text-md font-light text-gray-500 dark:text-gray-300">
                                                {{ $user->twitter_account }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="block hover:bg-gray-50 dark:hover:bg-gray-900">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <p class="text-md text-gray-700 dark:text-white md:truncate">
                                            Facebookアカウント
                                        </p>
                                    </div>
                                    <div class="mt-2 sm:flex sm:justify-between">
                                        <div class="sm:flex">
                                            <p
                                                class="flex items-center text-md font-light text-gray-500 dark:text-gray-300">
                                                {{ $user->facebook_account }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="block hover:bg-gray-50 dark:hover:bg-gray-900">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <p class="text-md text-gray-700 dark:text-white md:truncate">
                                            Instagramアカウント
                                        </p>
                                    </div>
                                    <div class="mt-2 sm:flex sm:justify-between">
                                        <div class="sm:flex">
                                            <p
                                                class="flex items-center text-md font-light text-gray-500 dark:text-gray-300">
                                                {{ $user->instagram_account }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="block hover:bg-gray-50 dark:hover:bg-gray-900">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <p class="text-md text-gray-700 dark:text-white md:truncate">
                                            Qiitaアカウント
                                        </p>
                                    </div>
                                    <div class="mt-2 sm:flex sm:justify-between">
                                        <div class="sm:flex">
                                            <p
                                                class="flex items-center text-md font-light text-gray-500 dark:text-gray-300">
                                                {{ $user->qiita_account }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <li>
                            <a class="block hover:bg-gray-50 dark:hover:bg-gray-900">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <p class="text-md text-gray-700 dark:text-white md:truncate">
                                            Githubアカウント
                                        </p>
                                    </div>
                                    <div class="mt-2 sm:flex sm:justify-between">
                                        <div class="sm:flex">
                                            <p
                                                class="flex items-center text-md font-light text-gray-500 dark:text-gray-300">
                                                {{ $user->github_account }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="block hover:bg-gray-50 dark:hover:bg-gray-900">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <p class="text-md text-gray-700 dark:text-white md:truncate">
                                            自己PR
                                        </p>
                                    </div>
                                    <div class="mt-2 sm:flex sm:justify-between">
                                        <div class="sm:flex">
                                            <p
                                                class="flex items-center text-md font-light text-gray-500 dark:text-gray-300">
                                                {{ $user->self_pr }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
    {{ $user->profile_photo_path }}
</x-app-layout>