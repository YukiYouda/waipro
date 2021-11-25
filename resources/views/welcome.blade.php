<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/top.css') }}">
</head>

<body class="antialiased">
    <!-- hero - start -->
    <div class="bg-white pb-6 sm:pb-8 lg:pb-12">
        <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
            <header class="flex justify-between items-center py-4 md:py-8 mb-4">
                <!-- logo - start -->
                <a href="/" class="inline-flex items-center text-black-800 text-2xl md:text-3xl font-bold gap-2.5"
                    aria-label="logo">
                    <svg width="95" height="94" viewBox="0 0 95 94" class="w-6 h-auto text-indigo-500"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M96 0V47L48 94H0V47L48 0H96Z" />
                    </svg>
                    ごりプロ
                </a>
                <!-- logo - end -->
            </header>
            <section
                class="min-h-96 flex justify-center items-center flex-1 flex-shrink-0 bg-gray-100 overflow-hidden shadow-lg rounded-lg relative py-16 md:py-20 xl:py-48">
                <!-- image - start -->
                <img src="/images/bg_gorilla_office.png" loading="lazy" alt="Photo by Fakurian Design"
                    class="w-full h-full object-cover object-center absolute inset-0" />
                <!-- image - end -->

                <!-- overlay - start -->
                <div class="mix-blend-multiply absolute inset-0"></div>
                <!-- overlay - end -->

                <!-- text start -->
                <div class="sm:max-w-xl flex flex-col items-center relative p-4">
                    <h1 class="text-black text-4xl sm:text-5xl md:text-6xl font-bold text-center mb-8 md:mb-8">ごりプロ</h1>
                    <p class="text-black text-lg sm:text-xl font-bold text-center mb-4 md:mb-8">ごりごりコードを書いて、ごりごり成長しよう！
                    </p>
                    <div class="w-full flex flex-col sm:flex-row sm:justify-center gap-2.5">
                        <a href="{{ route('login') }}"
                            class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">ログイン</a>

                        <a href="{{ route('register') }}"
                            class="inline-block bg-gray-200 hover:bg-gray-300 focus-visible:ring ring-indigo-300 text-gray-500 active:text-gray-700 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">新規登録</a>
                    </div>
                </div>
                <!-- text end -->
            </section>
            <!-- features - start -->
            <div class="bg-white py-6 sm:py-8 lg:py-12">
                <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
                    <!-- text - start -->
                    <div class="mb-10 md:mb-16">
                        <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">ごりプロの特徴</h2>

                        <p class="text-gray-500 md:text-lg text-center mx-auto">
                            ごりプロは一緒にチーム開発をする仲間を探し、仲間とごりごりコードを書いて、ごりごりスキルアップできるサービスです。</p>
                    </div>
                    <!-- text - end -->

                    <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-8 md:gap-12 xl:gap-16">
                        <!-- feature - start -->
                        <div class="flex gap-4 md:gap-6">
                            <div
                                class="w-12 md:w-14 h-12 md:h-14 flex justify-center items-center flex-shrink-0 bg-indigo-500 text-white rounded-lg md:rounded-xl shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                            </div>

                            <div>
                                <h3 class="text-lg md:text-xl font-semibold mb-2">スキルアップ</h3>
                                <p class="text-gray-500 mb-2">チーム開発を通して、より実際の現場に近いスキルを習得することができます！</p>
                            </div>
                        </div>
                        <!-- feature - end -->

                        <!-- feature - start -->
                        <div class="flex gap-4 md:gap-6">
                            <div
                                class="w-12 md:w-14 h-12 md:h-14 flex justify-center items-center flex-shrink-0 bg-indigo-500 text-white rounded-lg md:rounded-xl shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                            </div>

                            <div>
                                <h3 class="text-lg md:text-xl font-semibold mb-2">仲間</h3>
                                <p class="text-gray-500 mb-2">一緒に学習する仲間を見つけ、独学のモチベーションを維持し、互いに高め合うことができます！</p>
                            </div>
                        </div>
                        <!-- feature - end -->

                        <!-- feature - start -->
                        <div class="flex gap-4 md:gap-6">
                            <div
                                class="w-12 md:w-14 h-12 md:h-14 flex justify-center items-center flex-shrink-0 bg-indigo-500 text-white rounded-lg md:rounded-xl shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                            </div>

                            <div>
                                <h3 class="text-lg md:text-xl font-semibold mb-2">転職</h3>
                                <p class="text-gray-500 mb-2">チーム開発で作った制作物を用いて転職することができます！</p>
                            </div>
                        </div>
                        <!-- feature - end -->
                    </div>
                </div>
            </div>
            <!-- features - end -->
        </div>
    </div>
    <div>
        <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center">ご利用の流れ</h2>
    </div>
    <!-- hero - end -->
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="grid gap-6 row-gap-10 lg:grid-cols-2">
            <div class="lg:py-6 lg:pr-16">
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div>
                            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                                    <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="w-px h-full bg-gray-300"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-lg font-bold">Step 1</p>
                        <p class="text-gray-700">
                            まずは、自分のGithubアカウントを用意してください。
                        </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div>
                            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                                    <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="w-px h-full bg-gray-300"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-lg font-bold">Step 2</p>
                        <p class="text-gray-700">
                            自分の作りたいアプリを見つけて、チーム開発に参加しよう！ もしくは、自分で作りたいアプリのチームメンバーを募集しよう！
                        </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div>
                            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                                    <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="w-px h-full bg-gray-300"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-lg font-bold">Step 3</p>
                        <p class="text-gray-700">
                            一緒に開発できる仲間が見つかったら、ごりごりコードを書いて、ごりごり開発しよう！
                        </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div>
                            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                                    <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="w-px h-full bg-gray-300"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-lg font-bold">Step 4</p>
                        <p class="text-gray-700">
                            あなたのGithubのリポジトリを企業が見て、採用のオファーが届きます！
                        </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div>
                            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                <svg class="w-6 text-gray-600" stroke="currentColor" viewBox="0 0 24 24">
                                    <polyline fill="none" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-miterlimit="10" points="6,12 10,16 18,8">
                                    </polyline>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="pt-1">
                        <p class="mb-2 text-lg font-bold">内定</p>
                        <p class="text-gray-700"></p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <img class="inset-0 object-cover object-bottom w-full rounded shadow-lg h-96 lg:absolute lg:h-full"
                    src="https://images.pexels.com/photos/3184287/pexels-photo-3184287.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                    alt="" />
            </div>
        </div>
    </div>
</body>

</html>
