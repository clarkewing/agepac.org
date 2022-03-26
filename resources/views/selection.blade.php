<x-app-layout>
    <x-slot
        name="header"
        class="bg-white"
    >
        <div class="pt-6 pb-16 sm:pb-24 lg:pb-32">
            <main class="mt-8 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 lg:mt-18">
                <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                    <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left lg:flex lg:flex-col lg:justify-center">
                        <h1 class="block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl">
                            <span class="text-universe">Alors comme ça tu veux</span>
                            <span class="text-vermilion-400">devenir EPL</span>
                            <span class="text-universe">?</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                            L’ENAC propose 4 voies d'accès au cursus EPL. Toutes ont en commun un concours très sélectif.
                        </p>
                        <div class="mt-8 sm:max-w-lg sm:mx-auto sm:text-center lg:text-left lg:mx-0">
                            <p class="text-base font-medium text-gray-900">
                                Découvre le Guide EPL, régulièrement mis à jour.
                            </p>
                            <a
                                class="mt-3 flex w-full sm:shrink-0 sm:inline-flex sm:w-auto items-center justify-center px-6 py-3 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="#"
                            >
                                <x-heroicon-o-download class="-ml-1 mr-3 h-5 w-5" />
                                Télécharger le Guide EPL
                            </a>
                            <p class="mt-3 text-sm text-gray-500">
                                Si tu trouves le Guide EPL utile, n'hésite pas à
                                <a href="#" class="font-medium text-gray-900 underline">faire un don</a>.
                                Les dons permettent à l'AGEPAC d'exister.
                            </p>
                        </div>
                    </div>
                    <div class="mt-12 sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                        <div class="mx-auto w-full rounded-lg shadow-lg">
                            <div class="block w-full bg-white rounded-lg overflow-hidden">
                                <img
                                    class="w-full"
                                    src="{{ asset('media/flight-group-tb20.jpg') }}"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-50 overflow-hidden">
        <div class="relative max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
            <x-pattern.dots class="hidden lg:block absolute left-full transform -translate-x-1/2 -translate-y-1/4" width="404" height="784" />

            <x-feature-header>
                <x-slot name="title">Le Concours</x-slot>
                <x-slot name="description">
                    La formation EPL dispensée à l’ENAC comporte trois voies d’accès "historiques" et une quatrième,
                    plus récente, décrite plus bas.
                </x-slot>
            </x-feature-header>

            <div class="relative mt-12 lg:mt-24 lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
                <div class="relative">
                    <x-feature-section-header>
                        <x-slot name="title">Les filières</x-slot>
                    </x-feature-section-header>

                    <dl class="mt-10 space-y-10">
                        <x-feature-section-item>
                            <x-slot name="icon">S</x-slot>
                            <x-slot name="title">Cursus EPL/S (Scientifique)</x-slot>
                            <x-slot name="description">
                                Le cursus EPL/S (Scientifique) est ouvert aux jeunes ayant un bagage scientifique mais
                                pas nécessairement un bagage aéronautique. Appelés "ab initio" , ils se formeront de A à
                                Z à l’ENAC jusqu'à l’obtention de leur "Frozen ATPL". Concrètement, ils auront en main
                                une fois diplômés : la partie théorique de la licence de pilote de ligne (ATPL) validée,
                                une licence de pilote commercial (CPL), une qualification de vol aux instruments sur
                                avions multimoteurs (IRME) et un certificat de formation au travail en équipage (MCC).
                                Ils auront également réussi l’examen spécifique de la langue anglaise de l’appendice 1
                                du FCL.055D.
                            </x-slot>
                        </x-feature-section-item>

                        <x-feature-section-item>
                            <x-slot name="icon">U</x-slot>
                            <x-slot name="title">Cursus EPL/U (Universitaire)</x-slot>
                            <x-slot name="description">
                                Le cursus EPL/U (Universitaire) s’adresse à des candidats ayant débuté un cursus
                                universitaire depuis au moins 2 ans et détenteurs de l’ATPL théorique. Ils devront avoir
                                déjà obtenu leur FCL.055D. Ils pourront rejoindre la formation directement en formation
                                pratique, en commençant par le CPL, la licence de pilote commercial.
                            </x-slot>
                        </x-feature-section-item>

                        <x-feature-section-item>
                            <x-slot name="icon">P</x-slot>
                            <x-slot name="title">Cursus EPL/P (Pratique)</x-slot>
                            <x-slot name="description">
                                Le cursus EPL/P (Pratique) concerne des candidats à un stade déjà bien entamé de leur
                                formation ; ils doivent être en possession de leur ATPL théorique, du FCL.055D, ainsi
                                que de leur licence de pilote commercial (CPL). Ils rejoindront la formation ENAC pour
                                la phase de vol aux instruments sur avion multimoteur (IRME) puis termineront par la
                                formation au travail en équipage (MCC).
                            </x-slot>
                        </x-feature-section-item>
                    </dl>

                    <x-alert class="mt-6" type="info">
                        Retrouve l’ensemble des critères d'éligibilité sur le
                        <a
                            class="inline-flex items-center font-medium text-blue-700 underline hover:text-blue-600 hover:no-underline"
                            href="https://www.enac.fr/fr/epl-eleve-pilote-de-ligne"
                            target="_blank"
                        >
                            <span>site officiel de l’ENAC</span>
                            <x-heroicon-s-external-link class="ml-1 w-4 h-4" />
                        </a>
                    </x-alert>
                </div>

                <div class="mt-10 -mx-4 relative lg:mt-0" aria-hidden="true">
                    <x-pattern.dots class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" />
                    <img
                        class="relative mx-auto lg:rounded-lg lg:shadow-xl"
                        width="490"
                        src="{{ asset('media/mpl-overhead.jpg') }}"
                        alt=""
                    />
                </div>
            </div>

            <x-pattern.dots class="hidden lg:block absolute right-full transform translate-x-1/2 translate-y-12" width="404" height="784" />

            <div class="relative mt-12 sm:mt-16 lg:mt-24">
                <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                    <div class="lg:col-start-2">
                        <x-feature-section-header>
                            <x-slot name="title">Les étapes du concours</x-slot>
                            <x-slot name="description">
                                Tant redouté par beaucoup, le concours d'entrée est extrêmement sélectif. Il se compose
                                comme suit :
                            </x-slot>
                        </x-feature-section-header>

                        <dl class="mt-10 space-y-10">
                            <x-feature-section-item>
                                <x-slot name="icon">1</x-slot>
                                <x-slot name="title">Les Écrits</x-slot>
                                <x-slot name="badge">EPL/S</x-slot>
                                <x-slot name="description">
                                    Seulement pour le cursus EPL/S, la première étape du concours consiste en 3 épreuves
                                    écrites: une épreuve de Mathématiques, une épreuve de Physique et une épreuve
                                    d’anglais. Le niveau des ces épreuves est celui d’une première année de classe
                                    préparatoire aux grandes écoles.
                                </x-slot>
                            </x-feature-section-item>

                            <x-feature-section-item>
                                <x-slot name="icon">2</x-slot>
                                <x-slot name="title">Les PSY 1</x-slot>
                                <x-slot name="badge">EPL/S/U/P</x-slot>
                                <x-slot name="description">
                                    Constitués de tests psychotechniques et psychomoteurs, ils permettent d’évaluer des
                                    aptitudes mentales nécessaires au métier de pilote de ligne telles que l’attention
                                    divisée, le raisonnement logique, le repérage dans l’espace ou encore le calcul
                                    mental.
                                </x-slot>
                            </x-feature-section-item>

                            <x-feature-section-item>
                                <x-slot name="icon">3</x-slot>
                                <x-slot name="title">Les PSY 2</x-slot>
                                <x-slot name="badge">EPL/S/U/P</x-slot>
                                <x-slot name="description">
                                    Enfin la troisième étape est cruciale car elle permet d’évaluer la capacité au
                                    travail en équipage des candidats et leur motivation. Pour ce faire, les candidats
                                    vont être mis en situation par le biais d’épreuves de groupe; des débats et des
                                    énigmes. Ensuite les candidats passeront des entretiens individuels : un premier
                                    mené par des pilotes et un second mené par un psychologue. Pour finir, la sélection
                                    se clôture par un oral d’anglais. Dans le cadre des filières U et P c’est la note
                                    obtenue à l’oral d’anglais qui permettra de classer les candidats. Pour la filière
                                    S, les notes des écrits rentreront également en compte.
                                </x-slot>
                            </x-feature-section-item>
                        </dl>
                    </div>

                    <div class="mt-10 -mx-4 relative lg:mt-0 lg:col-start-1">
                        <x-pattern.dots class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" />
                        <img
                            class="relative mx-auto lg:rounded-lg lg:shadow-xl"
                            width="490"
                            src="{{ asset('media/be58-wing-from-rear.jpg') }}"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12 bg-gray-50 overflow-hidden">
        <div class="relative max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
            <x-pattern.dots class="hidden lg:block absolute left-full transform -translate-x-1/2 -translate-y-1/4" width="404" height="784" />

            <x-feature-header>
                <x-slot name="title">Le Cycle Préparatoire à l'ATPL</x-slot>
            </x-feature-header>

            <div class="relative mt-6 lg:mt-12 lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
                <div class="relative">
                    <div class="mt-10 text-base text-gray-500 space-y-10">
                        <p>
                            Depuis 2011, il existe une quatrième voie d'accès à la formation de pilote de ligne de
                            l’ENAC : le cycle préparatoire à l’ATPL. Envisagée comme une année de prépa intégrée,
                            l’année de cycle préparatoire à l’ATPL permet aux jeunes sélectionnés ayant depuis peu le
                            BAC en poche de se mettre à niveau en Mathématiques, Physique, Anglais et Français. Ils
                            aborderont également des sujets purement aéronautiques, le tout leur permettant de rejoindre
                            sereinement le cursus EPL/S à son commencement.
                        </p>
                        <p>
                            Les critères d'admissibilité nécessitent que le candidat ait entre 16 et 21 ans, qu’il
                            bénéficie d’une bourse de scolarité et qu’il soit titulaire d’un Brevet d’Initiation
                            Aéronautique (BIA), ou d’un autre titre aéronautique, ou bien encore qu’il soit présenté par
                            une fédération aéronautique ou un lycée aéronautique.
                        </p>
                    </div>

                    <x-alert class="mt-6" type="info">
                        Retrouve l’ensemble des informations concernant le cursus préparatoire à l'ATPL sur le
                        <a
                            class="inline-flex items-center font-medium text-blue-700 underline hover:text-blue-600 hover:no-underline"
                            href="https://www.enac.fr/fr/cycle-preparatoire-atpl"
                            target="_blank"
                        >
                            <span>site officiel de l’ENAC</span>
                            <x-heroicon-s-external-link class="ml-1 w-4 h-4" />
                        </a>
                    </x-alert>
                </div>

                <div class="mt-10 -mx-4 relative lg:mt-0" aria-hidden="true">
                    <x-pattern.dots class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" />
                    <img
                        class="relative mx-auto lg:rounded-lg lg:shadow-xl"
                        width="490"
                        src="{{ asset('media/pilot-tb20.jpg') }}"
                        alt=""
                    />
                </div>
            </div>

            <x-pattern.dots class="hidden lg:block absolute right-full transform translate-x-1/2 translate-y-12" width="404" height="784" />

            <div class="relative mt-12 sm:mt-16 lg:mt-24">
                <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                    <div class="lg:col-start-2">
                        <x-feature-section-header>
                            <x-slot name="title">Les étapes du concours</x-slot>
                        </x-feature-section-header>

                        <dl class="mt-10 space-y-10">
                            <x-feature-section-item>
                                <x-slot name="icon">1</x-slot>
                                <x-slot name="title">Le Dossier</x-slot>
                                <x-slot name="description">
                                    Il comporte le dossier scolaire du candidat mais aussi un dossier de candidature. Il
                                    leur est demandé une lettre de motivation et une ou deux lettres de recommandation
                                    par des instructeurs aéronautiques. Les candidats devront joindre leur titre
                                    aéronautique pour compléter ce dossier.
                                </x-slot>
                            </x-feature-section-item>

                            <x-feature-section-item>
                                <x-slot name="icon">2</x-slot>
                                <x-slot name="title">Les Écrits</x-slot>
                                <x-slot name="description">
                                    2/3 de mathématiques et 1/3 de physique pour composer l'évaluation scientifique des
                                    candidats. Les questions sont basées sur le programme de la classe de terminale
                                    STI2D (Sciences et Technologies de l’Industrie et du développement Durable) de
                                    l’année de la sélection. La seconde partie des écrits est l’évaluation aéronautique.
                                    Elle est basée sur le programme en vigueur du Brevet d’Initiation Aéronautique (BIA)
                                    de l’année de la sélection.
                                </x-slot>
                            </x-feature-section-item>

                            <x-feature-section-item>
                                <x-slot name="icon">3</x-slot>
                                <x-slot name="title">Les PSY 1</x-slot>
                                <x-slot name="description">
                                    Constitués de tests psychotechniques et psychomoteurs, ils permettent d’évaluer des
                                    aptitudes mentales nécessaires au métier de pilote de ligne telles que l’attention
                                    divisée, le raisonnement logique, le repérage dans l’espace ou encore le calcul
                                    mental.
                                </x-slot>
                            </x-feature-section-item>

                            <x-feature-section-item>
                                <x-slot name="icon">4</x-slot>
                                <x-slot name="title">Les PSY 2</x-slot>
                                <x-slot name="description">
                                    Enfin la quatrième étape est cruciale car elle permet d’évaluer la capacité au
                                    travail en équipage des candidats et leur motivation. Pour ce faire, les candidats
                                    vont devoir passer des épreuves de groupe. Ensuite les candidats passeront des
                                    entretiens individuels devant un jury pour mesurer leur motivation. Pour finir, la
                                    sélection se clôture par un oral d’anglais.
                                </x-slot>
                            </x-feature-section-item>
                        </dl>
                    </div>

                    <div class="mt-10 -mx-4 relative lg:mt-0 lg:col-start-1">
                        <x-pattern.dots class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" />
                        <img
                            class="relative mx-auto lg:rounded-lg lg:shadow-xl"
                            width="490"
                            src="{{ asset('media/cap10-startup.jpg') }}"
                            alt=""
                        />

                        <div class="px-4">
                            <x-alert class="relative mt-12 mx-auto max-w-[490px] shadow-xl" type="warning">
                                Chaque étape de sélection est éliminatoire. A l’issue des quatre étapes, les candidats
                                seront classés en fonction des notes attribuées ou obtenues au dossier de candidature, à
                                l’entretien de motivation, à l’oral d’anglais et à l'évaluation scientifique et
                                aéronautique. Il y a 5 places ouvertes par an.
                            </x-alert>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
