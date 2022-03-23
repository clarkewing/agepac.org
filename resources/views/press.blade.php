<x-app-layout title="Presse">
    <x-slot name="header">
        <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-5xl py-4 border-b">
            Espace presse et médias
        </h2>
    </x-slot>

    <div class="bg-white">
        <div class="mx-auto pb-6 px-4 max-w-7xl sm:px-6 lg:px-8 lg:pb-12">
            <div class="max-w-xl">
                <p class="text-xl text-gray-500">
                    Vous souhaitez contacter notre service de presse ? Vous avez des questions sur
                    l’AGEPAC, la formation Élève Pilote de Ligne de l’ENAC, ou vous souhaitez obtenir
                    des photos ? Vous trouverez ici des informations  à ce sujet.
                </p>
            </div>
        </div>

        <div class="mx-auto py-6 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-12">
            <h3 class="text-3xl font-extrabold tracking-tight text-gray-700">
                Contacts
            </h3>
            <div class="max-w-3xl space-y-8">
                <div>
                    <h3 class="mt-6 text-2xl font-extrabold tracking-tight text-gray-500">
                        Questions médias
                    </h3>
                    <p class="mt-4 text-lg text-gray-500">
                        Vous êtes journaliste et vous souhaitez obtenir des informations sur l’AGEPAC ?
                        Vous pouvez nous joindre par email :
                        <a class="underline hover:text-gray-700" href="mailto:media@agepac.org">media@agepac.org</a>
                    </p>
                </div>
                <div>
                    <h3 class="mt-6 text-2xl font-extrabold tracking-tight text-gray-500">
                        Réseaux sociaux
                    </h3>
                    <p class="mt-4 text-lg text-gray-500">
                        Les réseaux sociaux sont votre tasse de thé et vous souhaitez collaborer avec l’AGEPAC ?
                        Entrez en contact avec notre community manager :
                        <a class="underline hover:text-gray-700" href="mailto:social@agepac.org">social@agepac.org</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="mx-auto py-6 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-12">
            <h3 class="text-3xl font-extrabold tracking-tight text-gray-700">
                Conditions générales
            </h3>
            <div class="max-w-3xl">
                <p class="mt-4 text-lg text-gray-500">
                    Les conditions générales auxquelles votre demande doit obligatoirement répondre :
                </p>
                <ul class="mt-2 ml-6 list-disc text-lg text-gray-500">
                    <li>
                        L’AGEPAC évalue chaque demande individuellement. Les prises de vue ne peuvent contenir aucun
                        élément susceptible de pouvoir affecter l’AGEPAC et/ou ses partenaires.
                    </li>
                    <li>
                        L’AGEPAC se réserve le droit d'interrompre tout tournage ou interview.
                    </li>
                    <li>
                        Une demande doit être soumise au minimum une semaine avant le jour d’un interview ou de tournage.
                    </li>
                    <li>
                        Nos membres se réservent le choix de ne pas vouloir apparaître à l'écran et/ou de conserver
                        leur anonymat lors de toute intervention.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
