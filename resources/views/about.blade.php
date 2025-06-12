@extends('layouts.main')

@section('content')
   <div class="min-h-screen bg-gradient-to-br from-slate-50 to-green-50 py-16 px-4 sm:px-6 lg:px-8">
  <div class="max-w-4xl mx-auto">

    <div class="text-center mb-16">
      <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6 tracking-tight">About Us</h1>
      <div class="w-24 h-1 bg-green-600 mx-auto rounded-full"></div>
    </div>

    <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 mb-12 border border-gray-100">
      <div class="text-center mb-8">
        <h2 class="text-3xl md:text-4xl font-bold text-green-600 mb-6">{{ $companyName }}</h2>
        <p class="text-lg md:text-xl text-gray-700 leading-relaxed max-w-3xl mx-auto">{{ $description }}</p>
      </div>
    </div>

    <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 border border-gray-100">
      <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 text-center">Our Team</h3>

      <div class="grid gap-4 md:gap-6">
        @foreach($team as $member)
          <div class="flex items-center p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border border-green-100 hover:shadow-md transition-all duration-300 hover:scale-[1.02]">
            <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4 flex-shrink-0">
              {{ strtoupper(substr(explode(' ', $member)[0], 0, 1)) }}
            </div>
            <div class="flex-grow">
              <p class="text-gray-800 font-medium text-lg">{{ $member }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    <div class="mt-16 text-center">
      <div class="inline-flex items-center space-x-2 text-gray-400">
        <div class="w-8 h-px bg-gray-300"></div>
        <div class="w-2 h-2 bg-green-600 rounded-full"></div>
        <div class="w-16 h-px bg-gray-300"></div>
        <div class="w-2 h-2 bg-green-600 rounded-full"></div>
        <div class="w-8 h-px bg-gray-300"></div>
      </div>
    </div>

  </div>
</div>

@endsection
