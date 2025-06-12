@extends('layouts.main')

@section('content')
 <div class="min-h-screen  from-slate-50  py-2 px-4 sm:px-6 lg:px-8">
  <div class="max-w-3xl mx-auto text-center">

    <h1 class="text-4xl font-bold text-gray-900 mb-4">About Us</h1>
    <div class="w-16 h-1 bg-green-600 mx-auto rounded-full mb-6"></div>

    <div class="bg-white rounded-xl shadow p-6 mb-6 border border-gray-100">
      <h2 class="text-2xl font-bold text-green-600 mb-3">{{ $companyName }}</h2>
      <p class="text-base text-gray-700 leading-relaxed">{{ $description }}</p>
    </div>

    <div class="bg-white rounded-xl shadow p-6 border border-gray-100">
      <h3 class="text-xl font-bold text-gray-900 mb-4">Our Team</h3>
      <div class="grid gap-3">
        @foreach($team as $member)
          <div class="flex items-center p-3 bg-green-50 rounded-lg border border-green-100">
            <div class="w-8 h-8 bg-green-600 text-white rounded-full flex items-center justify-center font-semibold mr-3">
              {{ strtoupper(substr(explode(' ', $member)[0], 0, 1)) }}
            </div>
            <span class="text-gray-800 text-sm">{{ $member }}</span>
          </div>
        @endforeach
      </div>
    </div>

  </div>
</div>


@endsection
