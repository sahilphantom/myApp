<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-semibold mb-6">Student Registration Form</h2>

        @if(session('success'))
            <p class="mb-4 text-green-600 font-medium">{{ session('success') }}</p>
        @endif

        <form method="POST" action="/students/create" >
            @csrf

            {{-- Name --}}
            <div class="mb-4">
                <label class="block font-medium mb-1">Name</label>
                <input type="text" name="name" class="w-full border px-3 py-2 rounded" value="{{ old('name') }}">
                @error('name')
                    <p class="text-green-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Email --}}
            <div class="mb-4">
                <label class="block font-medium mb-1">Email</label>
                <input type="email" name="email" class="w-full border px-3 py-2 rounded" value="{{ old('email') }}">
                @error('email')
                    <p class="text-green-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Age --}}
            <div class="mb-4">
                <label class="block font-medium mb-1">Age</label>
                <input type="number" name="age" class="w-full border px-3 py-2 rounded" value="{{ old('age') }}">
                @error('age')
                    <p class="text-green-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Submit</button>
        </form>
    </div>

</body>
</html>
