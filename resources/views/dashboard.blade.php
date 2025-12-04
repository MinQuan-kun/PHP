<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard - {{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-900">
    <div class="min-h-screen">
        
        <nav class="bg-white border-b border-gray-200 px-4 py-3 shadow-sm">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <div class="flex items-center gap-4">
                    <a href="{{ route('dashboard') }}" class="text-xl font-bold text-indigo-600">
                        MyApp
                    </a>
                </div>

                <div class="flex items-center gap-4">
                    <span class="text-sm font-medium">
                        Xin chào, {{ Auth::user()->name }}
                    </span>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm text-red-600 hover:text-red-800 border border-red-200 bg-red-50 hover:bg-red-100 px-3 py-1.5 rounded transition">
                            Đăng xuất
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <main class="py-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                    <div class="p-6">
                        <h1 class="text-2xl font-bold mb-2">Dashboard Tổng quan</h1>
                        <p class="text-gray-600">Đây là giao diện dashboard tùy chỉnh, không phụ thuộc vào layout mặc định.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                        <div class="text-gray-500 text-sm mb-1">Người dùng</div>
                        <div class="text-3xl font-bold text-gray-800">1,234</div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                        <div class="text-gray-500 text-sm mb-1">Doanh thu</div>
                        <div class="text-3xl font-bold text-green-600">$12,400</div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                        <div class="text-gray-500 text-sm mb-1">Đơn hàng mới</div>
                        <div class="text-3xl font-bold text-blue-600">45</div>
                    </div>
                </div>

            </div>
        </main>
    </div>
</body>
</html>