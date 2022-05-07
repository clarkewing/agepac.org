<x-app-layout title="La formation EPL">
    <x-slot
        name="header"
        class="bg-white"
    >
        <div class="pt-6 pb-16 sm:pb-24 lg:pb-32">
            <main class="mt-8 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 lg:mt-18">
                <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                    <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left lg:flex lg:flex-col lg:justify-center">
                        <h1 class="block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl">
                            <span class="text-universe">La formation</span>
                            <span class="text-vermilion-400">EPL</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                            La formation d’un EPL se déroule en 5 phases débutant par la préparation de l’ATPL théorique
                            et finissant par l’apprentissage du travail en équipage.
                        </p>
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

            <div class="relative lg:mt-12 lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
                <div class="relative">
                    <x-feature-section-header>
                        <x-slot name="title">L’ATPL théorique</x-slot>
                    </x-feature-section-header>

                    <p class="mt-8 text-base text-gray-600">
                        Les neuf premiers mois de la formation EPL sont consacrés à l’ATPL théorique sur le campus
                        principal de l’ENAC à Toulouse. Cette formation est dispensée par des enseignants experts dans
                        leur domaine (chercheurs, ingénieurs ou même médecins). Les EPL ont aussi accès à un matériel
                        varié tel qu’un laboratoire moteurs ou même des simulateurs utilisés pour la formation des
                        contrôleurs aériens (qui sont exploités au cours de la formation). Ainsi, les apprentis pilotes
                        vivent pendant cette période auprès des aiguilleurs du ciel et des ingénieurs, leur permettant
                        ainsi de mieux découvrir les autres acteurs de leur futur environnement professionnel. Toutes
                        ces expériences surpassant les prérequis réglementaires permettent aux EPL de parfaire leur
                        compréhension du fonctionnement du monde aéronautique. Tous les EPL finissent la partie
                        théorique en passant le test d’anglais FCL.055D de l’OACI. De plus, ils suivent trois heures de
                        cours d’anglais par semaine pendant la théorie puis quatre semaines de cours intensifs durant la
                        pratique. Lors de la formation en vol, les communications radio sont effectuées principalement
                        en anglais afin de préparer les EPL à évoluer dans un environnement international.
                    </p>
                </div>

                <div class="mt-10 -mx-4 relative lg:mt-0" aria-hidden="true">
{{--                    <x-pattern.dots class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" />--}}

                    <div class="relative space-y-6 lg:space-y-10 px-4 sm:px-6 lg:px-0">
                        <img
                            class="mx-auto rounded-lg shadow-xl"
                            width="490"
                            src="https://images.unsplash.com/photo-1596495868755-0e705ed41be4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1024&q=80"
                            alt=""
                        />
                    </div>
                </div>
            </div>

            <x-pattern.dots class="hidden lg:block absolute right-full transform translate-x-1/2 translate-y-12" width="404" height="784" />

            <div class="relative mt-12 sm:mt-16 lg:mt-24">
                <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                    <div class="lg:col-start-2">
                        <x-feature-section-header>
                            <x-slot name="title">La phase VFR</x-slot>
                            <x-slot name="description">
                                Cette phase est constituée de deux modules — maniabilité et navigation — permettant
                                l’acquisition des compétences nécessaires afin d’obtenir la licence de pilote commercial
                                (CPL).<br>
                                A l’issue du passage du CPL, les EPL commenceront alors leur formation aux instruments
                                sur monomoteur (IR/SE).
                            </x-slot>
                        </x-feature-section-header>

                        <img
                            class="lg:hidden mt-8 w-full rounded-lg shadow-xl"
                            src="{{ asset('media/tb20s-on-apron.jpg') }}"
                            alt="TB20 aircraft lined up on airfield apron"
                        />

                        <p class="mt-8 text-lg leading-6 font-medium text-gray-900">
                            Module maniabilité
                        </p>
                        <p class="mt-2 text-base text-gray-600">
                            Le module de maniabilité (32h de vol) permet à l’élève pilote de se familiariser avec le
                            TB20 et d’assimiler les techniques de pilotage élémentaires.
                        </p>
                        <p class="mt-2 text-base text-gray-600">
                            Il s’agira alors d’effectuer des exercices tels que des décrochages, des tours de piste, du
                            vol moteur réduit, des changements de configuration, des exercices de panne…, autant
                            d’exercices qui lui permettront de disposer de compétences et réflexes indispensables à la
                            conduite d’un vol de manière sûre.
                        </p>
                        <img
                            class="lg:hidden mt-4 w-full rounded-lg shadow-xl"
                            src="{{ asset('media/lacher-solo.jpg') }}"
                            alt="An EPL getting splashed by his classmates following his first solo flight"
                        />
                        <p class="mt-4 text-base text-gray-600">
                            Le “lâcher solo” intervient une fois que l’instructeur estime son niveau suffisant afin de
                            voler seul. Une alternance de vols solos (tours de piste et vols locaux) et de vols avec
                            instructeur débute alors.
                        </p>
                        <p class="mt-2 text-base text-gray-600">
                            Un test en vol (Progress Check) a lieu à la fin de ce module afin de vérifier que le niveau
                            de l’élève est en adéquation avec les exigences de l’ENAC et lui permet alors d’accéder au
                            module de navigation.
                        </p>

                        <p class="mt-8 text-lg leading-6 font-medium text-gray-900">
                            Module navigation
                        </p>
                        <p class="mt-2 text-base text-gray-600">
                            Au début de ce deuxième module l’élève pilote dispose d’une solide base de pilotage et a
                            maintenant assez de disponibilité afin de gérer d’autres aspects d’un vol VFR.<br>
                            L’élève se familiarisera dans un premier temps avec une méthode de navigation qui lui
                            permettra de gérer de manière efficace son vol entre deux terrains différents à travers la
                            gestion de différents éléments tels que les automatismes, le carburant, la trajectoire, les
                            communications radio…
                        </p>
                        <p class="mt-2 text-base text-gray-600">
                            Une fois cette méthode acquise, l’instructeur l'amènera en dehors de sa zone de confort en
                            navigant vers des terrains très différents (haute densité de trafic, pistes courtes, plans
                            d’approche particuliers…) tout en introduisant la gestion de situations inhabituelles et de
                            pannes.
                        </p>
                        <img
                            class="lg:hidden mt-4 w-full rounded-lg shadow-xl"
                            src="{{ asset('media/students-on-tb20-wing.jpg') }}"
                            alt="A couple EPL students preparing their flight bags on the wing of a TB20"
                        />
                        <p class="mt-4 text-base text-gray-600">
                            Tout au long de ce module de navigation, la formation des EPL est réalisée de manière à ce
                            qu’ils acquièrent les compétences attendues d’un pilote professionnel. Une attention est
                            particulièrement accordée à ce que la rigueur et l’optimisation soient toujours présentes
                            dans leurs actions.
                        </p>
                        <p class="mt-2 text-base text-gray-600">
                            Le TB20 est par ailleurs une machine très évoluée (pas variable, train rentrant, pilote
                            automatique…) qui leur permet de se rapprocher le plus possible de l’avion sur lequel ils
                            évolueront professionnellement dans quelques années.
                        </p>
                        <p class="mt-2 text-base text-gray-600">
                            Ce module de navigation est aussi marqué par le passage d’un autre test en vol propre à
                            l’ENAC dont la réussite permet de débuter les navigations solos (9h au total). Parmi
                            celles-ci aura lieu la mémorable navigation solo de 300Nm nécessaire afin de se présenter au
                            CPL.
                        </p>
                        <img
                            class="lg:hidden mt-4 w-full rounded-lg shadow-xl"
                            src="{{ asset('media/tb20-vfr-map.jpg') }}"
                            alt="An EPL student in the cockpit reviewing his VFR map during a navigation flight"
                        />
                        <p class="mt-4 text-base text-gray-600">
                            Les EPL profitent également pendant ce module du simulateur FNPT2 TB20 de l’ENAC mis à leur
                            disposition afin de se familiariser avec le vol sans visibilité avant d’effectuer ces mêmes
                            exercices en vol. [Image simu en IMC]
                        </p>
                        <p class="mt-2 text-base text-gray-600">
                            Le passage du CPL marque alors la fin de ce module et de cette phase.
                        </p>
                    </div>

                    <div class="mt-10 -mx-4 relative lg:mt-0 lg:col-start-1">
{{--                        <x-pattern.dots class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" />--}}

                        <div class="hidden lg:block relative space-y-6 lg:space-y-10">
                            <img
                                class="mx-auto lg:rounded-lg lg:shadow-xl"
                                width="490"
                                src="{{ asset('media/tb20s-on-apron.jpg') }}"
                                alt="TB20 aircraft lined up on airfield apron"
                            />
                            <img
                                class="mx-auto lg:rounded-lg lg:shadow-xl"
                                width="490"
                                src="{{ asset('media/lacher-solo.jpg') }}"
                                alt="An EPL getting splashed by his classmates following his first solo flight"
                            />
                            <img
                                class="mx-auto lg:rounded-lg lg:shadow-xl"
                                width="490"
                                src="{{ asset('media/students-on-tb20-wing.jpg') }}"
                                alt="A couple EPL students preparing their flight bags on the wing of a TB20"
                            />
                            <img
                                class="mx-auto lg:rounded-lg lg:shadow-xl"
                                width="490"
                                src="{{ asset('media/tb20-vfr-map.jpg') }}"
                                alt="An EPL student in the cockpit reviewing his VFR map during a navigation flight"
                            />
                        </div>
                    </div>
                </div>
            </div>

            <x-pattern.dots class="hidden lg:block absolute left-full transform -translate-x-1/2 translate-y-12" width="404" height="360" />

            <div class="relative mt-12 lg:mt-24 lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
                <div class="relative">
                    <x-feature-section-header>
                        <x-slot name="title">La phase PPPI</x-slot>
                    </x-feature-section-header>

                    <p class="mt-8 text-base text-gray-600">
                        Avant de débuter l'entraînement IFR, les stagiaires entreprennent un stage de perfectionnement
                        au pilotage en position inusuelle durant lequel ils découvrent un avion à train classique, le
                        CAP10, ainsi que la voltige élémentaire. Ils valident ainsi l’Advanced UPRT avec un programme
                        bien plus riche que  celui requis par la réglementation Aircrew, avec un total de 11 heures de
                        vol.
                    </p>
                </div>

                <div class="mt-10 -mx-4 relative lg:mt-0" aria-hidden="true">
{{--                    <x-pattern.dots class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" />--}}

                    <div class="relative space-y-6 lg:space-y-10 px-4 sm:px-6 lg:px-0">
                        <img
                            class="mx-auto rounded-lg shadow-xl"
                            width="490"
                            src="{{ asset('media/cap10-startup.jpg') }}"
                            alt="A CAP 10 aircraft starting up"
                        />
                    </div>
                </div>
            </div>

            <x-pattern.dots class="hidden lg:block absolute right-full transform translate-x-1/2 translate-y-12" width="404" height="360" />

            <div class="relative mt-12 sm:mt-16 lg:mt-24">
                <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                    <div class="lg:col-start-2">
                        <x-feature-section-header>
                            <x-slot name="title">La phase IRSE</x-slot>
                        </x-feature-section-header>

                        <p class="mt-8 text-base text-gray-600">
                            La phase IFR débute par 25 heures de simulateur sur lequel les EPL apprennent les techniques
                            élémentaires, procédures et la navigation sur le TB20, un avion sur lequel ils commencent à
                            développer de l’expérience. L'entraînement se poursuit ensuite par 40 heures de vol pour
                            développer les connaissances et compétences nécessaires à la conduite efficace du vol en
                            espace congestionné. Cette phase contient deux tests internes.
                        </p>
                    </div>

                    <div class="mt-10 -mx-4 relative lg:mt-0 lg:col-start-1">
{{--                        <x-pattern.dots class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" />--}}

                        <div class="relative space-y-6 lg:space-y-10 px-4 sm:px-6 lg:px-0">
                            <img
                                class="mx-auto rounded-lg shadow-xl"
                                width="490"
                                src="{{ asset('media/tb20-imc-curtain.jpg') }}"
                                alt="View from inside TB20 cockpit with instrument training curtain pulled"
                            />
                        </div>
                    </div>
                </div>
            </div>

            <x-pattern.dots class="hidden lg:block absolute left-full transform -translate-x-1/2 translate-y-12" width="404" height="360" />

            <div class="relative mt-12 lg:mt-24 lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
                <div class="relative">
                    <x-feature-section-header>
                        <x-slot name="title">La phase IRME</x-slot>
                    </x-feature-section-header>

                    <p class="mt-8 text-base text-gray-600">
                        Pendant trois mois, 25 heures de simulateur et 25 heures de vol, les élèves découvrent les
                        opérations multimoteurs sur le Beechcraft Baron 58 équipé de la dernière avionique Garmin TXi.
                    </p>
                    <p class="mt-2 text-base text-gray-600">
                        Les deux principaux objectifs de cette phase sont de gagner en confiance vis-à-vis du pilotage
                        d’un puissant bimoteur et de découvrir les premières problématiques liées aux opérations en
                        compagnie aérienne. Les stagiaires passent quatre examens en vol pendant cette phase, comprenant
                        deux tests internes, la Qualification de Classe (QC) et la Qualification de vol aux instruments
                        sur Multimoteur (IRME PBN).
                    </p>
                </div>

                <div class="mt-10 -mx-4 relative lg:mt-0" aria-hidden="true">
{{--                    <x-pattern.dots class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" />--}}

                    <div class="relative space-y-6 lg:space-y-10 px-4 sm:px-6 lg:px-0">
                        <img
                            class="mx-auto rounded-lg shadow-xl"
                            width="490"
                            src="{{ asset('media/be58-approach.jpg') }}"
                            alt="An EPL flying an approach in a twin-engine BE58"
                        />
                    </div>
                </div>
            </div>

            <x-pattern.dots class="hidden lg:block absolute right-full transform translate-x-1/2 translate-y-12" width="404" height="360" />

            <div class="relative mt-12 sm:mt-16 lg:mt-24">
                <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                    <div class="lg:col-start-2">
                        <x-feature-section-header>
                            <x-slot name="title">La phase MCC/JOC</x-slot>
                        </x-feature-section-header>

                        <p class="mt-8 text-base text-gray-600">
                            Les EPL terminent leur formation par une phase de MCC (Multi Crew Cooperation) et JOC (Jet
                            Orientation Course) de 60 heures sur le campus de Toulouse. Celle-ci s’effectue sur un
                            FNPTII-MCC A320. L’ENAC insiste sur l’importance d’un volume horaire supérieur à celui
                            requis par le règlement afin d’assurer une parfaite assimilation des procédures de vol en
                            équipage et ainsi faire face aux différentes situations inhérentes au transport de passager
                            et fret.
                        </p>
                    </div>

                    <div class="mt-10 -mx-4 relative lg:mt-0 lg:col-start-1">
{{--                        <x-pattern.dots class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" />--}}

                        <div class="relative space-y-6 lg:space-y-10 px-4 sm:px-6 lg:px-0">
                            <img
                                class="mx-auto rounded-lg shadow-xl"
                                width="490"
                                src="{{ asset('media/a320-sim-smiles.jpg') }}"
                                alt="A couple of EPL students smiling at the camera from their seats in the A320 simulator"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
