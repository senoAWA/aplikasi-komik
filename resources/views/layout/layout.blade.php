<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" /> -->
  @vite('resources/css/app.css')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap');
</style>

<body class="bg-gray-600">

  <!-- kotak kreator -->

  <nav style="background-image: url(img/bg.jpg);" class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

      <!-- logo  -->
      <div class="relative w-20 h-16 flex items-center ">
        <img src="{{ asset('img/logo.png') }}"
          alt="Logo"
          class="absolute top-1/2 left-0 -translate-y-1/2 h-20 w-auto object-contain drop-shadow-[0_0_7px_white]" />

        <span style="font-family: 'Caveat', cursive;" class="text-3xl font-semibold dark:text-white ml-24 font-stretch">
          KomikKita
        </span>
      </div>
      <!-- search  -->
      <div class="flex md:order-2 items-center gap-2 ">
        <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
          </svg>
          <span class="sr-only">Search</span>
        </button>
        <div class="relative hidden md:block">
          <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
            <span class="sr-only">Search icon</span>
          </div>
          <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
        </div>
        @if (Auth::check())
        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse gap-2">
          <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
            <span class="sr-only">Open user menu</span>
            <img class="rounded-full"
              src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=random&color=fff&size=45"
              alt="Avatar">
          </button>
        </div>

        <!-- Dropdown menu profile -->
        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
          <div class="px-4 py-3">
            <span class="block text-sm text-gray-900 dark:text-white">{{Auth::user()->name}}</span>
            <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{Auth::user()->email}}</span>
          </div>
          <ul class="py-2" aria-labelledby="user-menu-button">
            @if (Auth::user()->role == 'admin')
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
            </li>
            @endif
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
            </li>
            <li>
              <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Logout</a>
            </li>
          </ul>
        </div>
        @else

        <a href="/login" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Login</a>

        @endif










        <!-- Dropdown menu -->
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
            </li>
            <li>
              <a href="/logout" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <nav class="bg-gray-50 dark:bg-gray-700 flex items-center">

    @if (Auth::check())
    @if (Auth::user()->role == 'creator' || Auth::user()->role == 'admin')

    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
      class="  font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center gap-2"
      type="button">
      <!-- Ikon diperbesar dengan w-6 h-6 (atau bisa lebih besar) -->
      <svg class="w-8 h-8 dark:text-white" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>
    @elseif (Auth::user()->role == 'user')
    <div class="ml-4">
      <a href="/upgrade" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
     focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-2 dark:bg-blue-600 
     dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
        Buat Komikmu
      </a>
    </div>

    @endif
    @endif


    <div class="max-w-screen-xl px-4 py-3 mx-auto ">
      <div class="flex items-center">
        <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
          <li class="flex gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256">
              <path d="M219.31,108.68l-80-80a16,16,0,0,0-22.62,0l-80,80A15.87,15.87,0,0,0,32,120v96a8,8,0,0,0,8,8h64a8,8,0,0,0,8-8V160h32v56a8,8,0,0,0,8,8h64a8,8,0,0,0,8-8V120A15.87,15.87,0,0,0,219.31,108.68ZM208,208H160V152a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8v56H48V120l80-80,80,80Z"></path>
            </svg>
            <a href="#" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Home</a>
          </li>
          <li class="flex gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256">
              <path d="M208,24H72A32,32,0,0,0,40,56V224a8,8,0,0,0,8,8H192a8,8,0,0,0,0-16H56a16,16,0,0,1,16-16H208a8,8,0,0,0,8-8V32A8,8,0,0,0,208,24ZM120,40h48v72L148.79,97.6a8,8,0,0,0-9.6,0L120,112Zm80,144H72a31.82,31.82,0,0,0-16,4.29V56A16,16,0,0,1,72,40h32v88a8,8,0,0,0,12.8,6.4L144,114l27.21,20.4A8,8,0,0,0,176,136a8,8,0,0,0,8-8V40h16Z"></path>
            </svg>
            <a href="#" class="text-gray-900 dark:text-white hover:underline">Daftar Komik</a>
          </li>
          <li class="flex gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256">
              <path d="M178,40c-20.65,0-38.73,8.88-50,23.89C116.73,48.88,98.65,40,78,40a62.07,62.07,0,0,0-62,62c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,228.66,240,172,240,102A62.07,62.07,0,0,0,178,40ZM128,214.8C109.74,204.16,32,155.69,32,102A46.06,46.06,0,0,1,78,56c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,155.61,146.24,204.15,128,214.8Z"></path>
            </svg>
            <a href="#" class="text-gray-900 dark:text-white hover:underline">Favorit</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  @yield('konten')
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>