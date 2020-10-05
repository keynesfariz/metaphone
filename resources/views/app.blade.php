<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="antialiased bg-gradient-to-br from-green-400 to-teal-600 min-h-screen min-w-screen">
  <div class="w-full sm:max-w-sm mx-auto sm:py-8">
    <div class="sm:rounded-lg overflow-hidden shadow-lg">
      <header class="bg-white border-b border-gray-200 p-6 space-y-4">
        <div class="flex flex items-center justify-between text-gray-500">
          <button type="button" class="hover:text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </button>
          <h1 class="font-bold text-black">Metaphone Groceries</h1>
          <button type="button" class="hover:text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
            </svg>
          </button>
        </div>
        <form class="h-10 flex items-center bg-gray-200 text-gray-500 rounded-lg overflow-hidden">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 ml-2">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
          <input name="q" placeholder="Search fruits, vegetables, meats..." class="flex-1 h-full bg-transparent focus:outline-none pl-2 pr-4 text-gray-700" value="{{ request()->input('q') ?? null }}">
          @if (request()->has('q'))
            <a href="{{ url('/') }}" class="px-2 hover:text-gray-700">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </a>
          @endif
        </form>
      </header>
      <main class="bg-gray-100 p-4">
        <div class="grid grid-cols-2 gap-4">
          @foreach ($products as $item)
            <div class="bg-white rounded-md w-full shadow-sm overflow-hidden">
              <div class="relative" style="padding-bottom: 80%">
                <img src="{{ $item->image }}" alt="" class="absolute object-cover h-full w-full">
              </div>
              <div class="p-4">
                <h3 class="font-light leading-5 mb-1">{{ $item->name}}</h3>
                <p class="font-bold">${{ $item->price }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </main>
    </div>
  </div>
</body>

</html>