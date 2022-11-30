<div class="sticky top-0 z-100 bg-universe shadow-lg shadow-gray-600/25">
    <div class="mx-auto max-w-7xl py-3 px-3 sm:px-6 md:py-4 lg:px-8">
        <div class="flex flex-wrap items-center justify-between">
            <div class="flex flex-1 items-center max-w-full">
                <span class="flex rounded-lg px-2 py-1">
                    <x-30-years-logo class="h-8 md:h-10 text-white" aria-hidden="true" />
                </span>
                <p class="ml-3 truncate font-medium text-white">
                    @if(today()->isBefore('2022-12-07'))
                        <span class="lg:hidden">Le Gala des 30 ans approche !</span>
                        <span class="hidden lg:inline">L’AGEPAC fête ses 30 ans ! Rejoignez-nous pour un gala à l’effigie de l’association !</span>
                    @elseif(today()->is('2022-12-07'))
                        <span class="lg:hidden">J-3 avant le Gala des 30 ans !</span>
                        <span class="hidden lg:inline">L’AGEPAC fête ses 30 ans dans 3 jours ! Rejoignez-nous pour le Gala des 30 ans !</span>
                    @elseif(today()->is('2022-12-08'))
                        <span class="lg:hidden">J-2 avant le Gala des 30 ans !</span>
                        <span class="hidden lg:inline">L’AGEPAC fête ses 30 ans dans 2 jours ! Rejoignez-nous pour le Gala des 30 ans !</span>
                    @elseif(today()->is('2022-12-09'))
                        <span class="lg:hidden">J-1 avant le Gala des 30 ans !</span>
                        <span class="hidden lg:inline">L’AGEPAC fête ses 30 ans demain ! Rejoignez-nous pour le Gala des 30 ans !</span>
                    @elseif(today()->is('2022-12-10'))
                        <span class="lg:hidden">Le Gala des 30 ans c’est aujourd’hui !</span>
                        <span class="hidden lg:inline">Aujourd’hui, l’AGEPAC fête ses 30 ans à l’Aéroclub de France !</span>
                    @endif
                </p>
            </div>
            <div class="mt-2 w-full flex-shrink-0 sm:mt-0 sm:w-auto">
                <x-button.gold class="inline-flex justify-center w-full sm:w-auto" href="https://gala.agepac.org/">
                    En savoir plus
                </x-button.gold>
            </div>
        </div>
    </div>
</div>
