<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Welkom bij BoekBaas') }}
        </h2>
    </x-slot>

    <!-- Carousel Section -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Eerste slide met een bibliotheek afbeelding -->
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/1200x500?text=Library+Image" class="d-block w-100" alt="First slide">
            </div>
            <!-- Tweede slide met boeken afbeelding -->
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1200x500?text=Books+Collection" class="d-block w-100" alt="Second slide">
            </div>
            <!-- Derde slide met een leeservaring afbeelding -->
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1200x500?text=Reading+Experience" class="d-block w-100" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>

    <!-- Welkom Sectie -->
    <div class="bg-green-700 text-white py-16 text-center">
        <div class="max-w-7xl mx-auto px-6">
            <h1 class="text-4xl font-bold">Welkom bij BoekBaas</h1>
            <p class="mt-4 text-lg text-gray-200">
                Ontdek, beheer en leen boeken eenvoudig online. De bibliotheek binnen handbereik!
            </p>
            <a href="{{ route('books.index') }}" class="mt-6 inline-block bg-white text-green-700 px-6 py-3 rounded-lg shadow-md hover:bg-gray-100">
                Bekijk boeken → 
            </a>
        </div>
    </div>

    <!-- Secties met Informatie -->
    <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-3 gap-6">
        <!-- Sectie 1 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold text-green-700">Uitgebreide Collectie</h3>
            <p class="mt-2 text-gray-600">
                Van romans tot studieboeken, wij hebben het allemaal!
            </p>
        </div>

        <!-- Sectie 2 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold text-green-700">Eenvoudig Reserveren</h3>
            <p class="mt-2 text-gray-600">
                Reserveer je favoriete boeken online en haal ze op in de bibliotheek.
            </p>
        </div>

        <!-- Sectie 3 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold text-green-700">Community</h3>
            <p class="mt-2 text-gray-600">
                Deel je favoriete boeken en leeservaringen met anderen.
            </p>
        </div>
    </div>
</x-app-layout>
