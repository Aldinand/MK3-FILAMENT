<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aldinand Santoso</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Header Section -->
    <header class="bg-blue-600 text-white py-6">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">Hi, I’m Aldinand Santoso</h1>
            <p class="mt-2 text-lg">Welcome to my personal landing page!</p>
        </div>
    </header>

    <!-- About Section -->
    <section class="py-12">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800">About Me</h2>
            <p class="mt-4 text-gray-600">
               Saya Lahir di Banyumas pada 13 September, 2007. Hobi saya adalah menonton film dan mendengarkan music.
            </p>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800">Skills</h2>
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Graphic Designer</h3>
                    <p class="mt-2 text-gray-600">Software : Photoshop, Adobe Ilustrator.</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Video Editor</h3>
                    <p class="mt-2 text-gray-600">Software : Vegas Pro 15, Capcut, Adobe Premiere.</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Event Organizer</h3>
                    <p class="mt-2 text-gray-600">Punya pengalaman dalam membuat acara/event musik.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Landing Pages Section -->
    <section class="py-12">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800">Landing Pages</h2>
            <div class="mt-8">
                @foreach($landingpages as $landingpage)
                    <div class="bg-white shadow-md rounded-lg p-6 mb-4">
                        <h3 class="text-xl font-semibold text-gray-800">{{ $landingpage->title }}</h3>
                        <img src="{{ $landingpage->picture }}" alt="{{ $landingpage->title }}" class="mt-2">
                        <p class="mt-2 text-gray-600">{{ $landingpage->content }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
   
    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p class="text-sm">&copy; 2024 Aldinand Santoso. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>