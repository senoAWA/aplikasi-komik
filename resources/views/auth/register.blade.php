<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" /> -->
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap');
</style>

<body>
    <div class="min-h-screen bg-gray-50 flex items-center justify-center p-4">
        <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
            <div>
                <h2 style="font-family: 'Caveat', cursive;" class="text-3xl font-bold text-gray-700 mb-6 text-center">KomikKita </h2>
                <h2 class="text-1x5 font-bold text-gray-700 mb-6 text-center transform translate-y-[-2rem]">Daftarkan Akun Anda Sekarang</h2>
            </div>
            <form class="space-y-4" action="/regist" method="POST">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                    <input type="name"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                        placeholder=" name" name="name" autofocus required/>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                        placeholder="your@email.com" name="email" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                        placeholder="password" name="password" required/>
                </div>
                <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 rounded-lg transition-colors">
                    create accounts
                </button>
            </form>
            <div class="mt-6 text-center text-sm text-gray-600">
                already have an account
                <a href="/login" class="text-indigo-600 hover:text-indigo-500 font-medium">Sign in</a>
            </div>
        </div>
    </div>

</body>

</html>