<!--
    ログイン前ページ
    このページは別ファイルにヘッダがあったりせず，このファイルで完結
    デザイン範囲はすべて
    掲示板へのリンクがどこかにあれば何をしても問題無し
    {{ __('〇〇') }}は，resources/lang/ja.jsonとリンク
-->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Bootstrap用JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/design.css') }}" />
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0 bg-white">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <p class="h1">HxS コンピュータ部</p>
            </div>

            <div class="mt-8 overflow-hidden contents-box sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6 border-t md:border-t-0 md:border-l bg-gray-100">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-card-heading" viewBox="0 0 16 16">
                                <path
                                    d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                <path
                                    d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z" />
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="{{ url('dashboard') }}"
                                    class="underline char-color text-decoration-none">掲示板</a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 char-color text-sm">
                                HxSコンピュータ部が提供する掲示板です．利用には学内ネットワーク・ログインが必要です．
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t md:border-t-0 md:border-l bg-gray-100">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="https://twitter.com/hxs_" target="_blank"
                                    class="underline char-color text-decoration-none">Twitter</a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 char-color text-sm">
                                大阪工業大学
                                HxSコンピュータ部の非公式アカウントです。ハードウェア（Hardware）とソフトウェア（Software）の両面からスキルアップを図る事を目標とした部活です。活動内容・イベント宣伝等をつぶやきます。
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t md:border-t-0 md:border-l bg-gray-100">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-dark">
                                <path
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="https://oithxs.github.io/"
                                    class="underline char-color text-decoration-none">HxS公式サイト</a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 char-color text-sm">
                                開発中のサイトとなりますが、HxSの成果物や最新情報などを掲載予定です。
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t md:border-t-0 md:border-l bg-gray-100">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-github" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="https://github.com/oithxs" target="_blank"
                                    class="underline char-color text-decoration-none">Github</a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 char-color text-sm">
                                大阪工業大学情報科学部HxSコンピュータ部の組織アカウントです。
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left"></div>

                <!-- ここから一応残しておく -->
                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Copyright © 2022 大阪工業大学 HxS コンピュータ部 All
                    Rights Reserved.
                </div>
                <!-- ここまで一応残しておく -->
            </div>
        </div>
    </div>
</body>

</html>
