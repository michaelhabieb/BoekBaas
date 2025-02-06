<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-black leading-tight text-center">
            Welkom bij BoekBaas
        </h2>
    </x-slot>

    <!-- Introductie Sectie -->
    <div class="bg-green-700 text-white py-16 text-center">
        <div class="max-w-5xl mx-auto px-6">
            <h1 class="text-4xl font-bold">Ontdek en leen jouw favoriete boeken</h1>
            <p class="mt-4 text-lg text-gray-200">
                Bij BoekBaas kun je eenvoudig boeken bekijken en lenen.  
                Blader door de collectie, ontdek nieuwe titels en haal je favoriete boeken op bij de bibliotheek.
            </p>
        </div>
    </div>

    <!-- Over BoekBaas Sectie -->
    <div class="max-w-6xl mx-auto px-6 py-12 grid md:grid-cols-2 gap-8 items-center">
        <div>
            <h2 class="text-3xl font-semibold text-green-700">Hoe werkt BoekBaas?</h2>
            <p class="mt-4 text-gray-600">
                BoekBaas biedt jou de mogelijkheid om eenvoudig door onze boekencollectie te bladeren.  
                Vind interessante boeken, bekijk details en leen ze online.  
                Je kunt het boek vervolgens ophalen in de bibliotheek.
            </p>
            <p class="mt-4 text-gray-600">
                Met BoekBaas heb je altijd toegang tot een breed scala aan boeken, van romans tot studieboeken.
            </p>
        </div>
        <div>
            <img src="https://source.unsplash.com/700x450/?library,books" 
                 alt="Bibliotheek" class="rounded-lg shadow-md w-full h-auto object-cover">
        </div>
    </div>

    <!-- Kenmerken Sectie -->
    <div class="bg-gray-100 py-12">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-green-700">Uitgebreide Collectie</h3>
                <p class="mt-2 text-gray-600">
                    Blader door een breed aanbod van boeken, van klassiekers tot de nieuwste titels.
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-green-700">Eenvoudig Lenen</h3>
                <p class="mt-2 text-gray-600">
                    Reserveer boeken online en haal ze op in de bibliotheek wanneer het jou uitkomt.
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-green-700">Altijd Toegang</h3>
                <p class="mt-2 text-gray-600">
                    Bekijk alle boeken en je uitleningen eenvoudig via BoekBaas, waar en wanneer je wilt.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
