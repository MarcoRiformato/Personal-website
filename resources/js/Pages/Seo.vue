<template>
<AppLayout title="SEO">

<!--Audit e strategia-->
<div class="overflow-hidden bg-secondary-content pt-4 py-4">
<div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
    <div class="lg:ml-auto lg:pl-4 lg:pt-4">
        <div class="lg:max-w-lg">
        <!--<h2 class="text-base font-semibold leading-7 text-secondary">Primo step</h2>-->
        <p class="mt-2 text-3xl font-bold tracking-tight sm:text-4xl text-primary">Analisi e Piano d'Azione</p>
        <p class="mt-6 text-lg leading-8">Con un audit SEO mirato, valutiamo la vostra presenza online per identificare miglioramenti strategici, e tramite l'analisi della concorrenza, scopriamo opportunità uniche per distinguervi e prosperare su Google.</p>
        <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 lg:max-w-none">
            <div v-for="primo in primos" :key="primo.name" class="relative pl-9">
            <dt class="inline font-semibold">
                <component :is="primo.icon" class="absolute left-1 top-1 h-5 w-5 text-info" aria-hidden="true" />
                <p class="text-secondary">{{ primo.name }}</p>
            </dt>
            {{ ' ' }}
            <dd class="inline">{{ primo.description }}</dd>
            </div>
        </dl>
        </div>
    </div>
    <div class="flex items-center justify-end lg:order-first">
        <img src="seo1.webp" alt="Product screenshot" class="w-[30rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[30rem]"/>
    </div>
    </div>
</div>
</div>

<!--CTA-->
<div class="mx-auto max-w-7xl sm:px-6 sm:py-32 lg:px-8 ">
    <div class="relative isolate overflow-hidden px-6 py-24 bg-primary-content text-center shadow-2xl sm:rounded-3xl sm:px-16">
    <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight sm:text-4xl text-secondary">Svela il Potenziale del Tuo Studio Legale</h2>
    <p class="mx-auto mt-6 max-w-xl text-lg leading-8">Scopri come massimizzare la tua presenza online con un'analisi SEO completa e un piano d'azione strategico. Facciamo emergere il tuo studio nel mondo digitale.</p>
    <div class="mt-10 flex items-center justify-center gap-x-6">
        <button href="#" class="btn btn-primary" @click.prevent="openCalendlyPopup">Prenota consulenza gratuita</button>
    </div>
    <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]" aria-hidden="true">
        <circle cx="512" cy="512" r="512" fill="url(#827591b1-ce8c-4110-b064-7cb85a0b1217)" fill-opacity="0.7" />
        <defs>
        <radialGradient id="827591b1-ce8c-4110-b064-7cb85a0b1217">
            <stop stop-color="#7775D6" />
            <stop offset="1" stop-color="#E935C1" />
        </radialGradient>
        </defs>
    </svg>
    </div>
</div>

<!--Creazione contenuti-->
<div class="overflow-hidden bg-secondary-content pt-4 py-4">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 items-center">
        <div class="lg:pr-8 lg:pt-4">
            <div class="lg:max-w-lg">
            <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Strategia di Contenuto e Ottimizzazione Keyword</p>
            <p class="mt-6 text-lg leading-8 text-gray-300">Attraverso la ricerca di argomenti di nicchia, individuiamo parole chiave e tematiche che attirano clienti locali. Creiamo contenuti autorevoli per rafforzare la vostra visibilità. Con un'ottimizzazione continua, manteniamo il sito aggiornato e competitivo rispetto agli algoritmi di Google.</p>
            <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-300 lg:max-w-none">
                <div v-for="secondo in secondos" :key="secondo.name" class="relative pl-9">
                <dt class="inline font-semibold text-white">
                    <component :is="secondo.icon" class="absolute left-1 top-1 h-5 w-5 text-indigo-500" aria-hidden="true" />
                    {{ secondo.name }}<br/>
                </dt>
                {{ ' ' }}
                <dd class="inline">{{ secondo.description }}</dd>
                </div>
            </dl>
            </div>
        </div>
        <img src="seo2.webp" alt="Product screenshot" class="w-[25rem] max-w-none rounded-xl shadow-xl ring-1 ring-white/10 sm:w-[40rem] md:-ml-4 lg:-ml-0"/>
        </div>
    </div>
</div>

<!--CTA-->
<div class="mx-auto max-w-7xl sm:px-6 sm:py-32 lg:px-8 ">
    <div class="relative isolate overflow-hidden px-6 py-24 bg-primary-content text-center shadow-2xl sm:rounded-3xl sm:px-16">
    <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight sm:text-4xl text-secondary">Eleva la Tua Autorità Online</h2>
    <p class="mx-auto mt-6 max-w-xl text-lg leading-8">Trasforma il tuo sito in un punto di riferimento per il diritto con contenuti ricercati e parole chiave strategiche. Prendi la parola sul web e diventa una voce autorevole nel tuo settore</p>
    <div class="mt-10 flex items-center justify-center gap-x-6">
        <button href="#" class="btn btn-primary" @click.prevent="openCalendlyPopup">Prenota consulenza gratuita</button>
    </div>
    <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]" aria-hidden="true">
        <circle cx="512" cy="512" r="512" fill="url(#827591b1-ce8c-4110-b064-7cb85a0b1217)" fill-opacity="0.7" />
        <defs>
        <radialGradient id="827591b1-ce8c-4110-b064-7cb85a0b1217">
            <stop stop-color="#7775D6" />
            <stop offset="1" stop-color="#E935C1" />
        </radialGradient>
        </defs>
    </svg>
    </div>
</div>

<!--GMB-->
<div class="overflow-hidden bg-secondary-content pt-4 py-4">
<div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
    <div class="lg:ml-auto lg:pl-4 lg:pt-4">
        <div class="lg:max-w-lg">
        <p class="mt-2 text-3xl font-bold tracking-tight sm:text-4xl text-primary">Google My Business e SEO locale</p>
        <p class="mt-6 text-lg leading-8">Ottimizzo la vostra scheda Google My Business per massimizzare la visibilità locale. Impiego strategie di link building per migliorare il ranking su Google e gestisco le recensioni online per rafforzare la vostra reputazione.</p>
        <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 lg:max-w-none">
            <div v-for="terzo in terzos" :key="terzo.name" class="relative pl-9">
            <dt class="inline font-semibold">
                <component :is="terzo.icon" class="absolute left-1 top-1 h-5 w-5 text-info" aria-hidden="true" />
                <p class="text-secondary">{{ terzo.name }}</p>
            </dt>
            {{ ' ' }}
            <dd class="inline">{{ terzo.description }}</dd>
            </div>
        </dl>
        </div>
    </div>
    <div class="flex items-center justify-end lg:order-first">
        <img src="seo3.webp" alt="Product screenshot" class="w-[30rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[30rem]" width="2432" height="1442" />
    </div>
    </div>
</div>
</div>

<!--Cta-->
<div class="mx-auto max-w-7xl sm:px-6 sm:py-32 lg:px-8 ">
    <div class="relative isolate overflow-hidden px-6 py-24 bg-primary-content text-center shadow-2xl sm:rounded-3xl sm:px-16">
    <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight sm:text-4xl text-secondary">Conquista il Mercato Locale</h2>
    <p class="mx-auto mt-6 max-w-xl text-lg leading-8">Aumenta la tua visibilità dove conta di più: nella tua comunità. Con il nostro approccio SEO locale, sarai la prima scelta in zona per servizi legali.</p>
    <div class="mt-10 flex items-center justify-center gap-x-6">
        <button href="#" class="btn btn-primary" @click.prevent="openCalendlyPopup">Prenota consulenza gratuita</button>
    </div>
    <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]" aria-hidden="true">
        <circle cx="512" cy="512" r="512" fill="url(#827591b1-ce8c-4110-b064-7cb85a0b1217)" fill-opacity="0.7" />
        <defs>
        <radialGradient id="827591b1-ce8c-4110-b064-7cb85a0b1217">
            <stop stop-color="#7775D6" />
            <stop offset="1" stop-color="#E935C1" />
        </radialGradient>
        </defs>
    </svg>
    </div>
</div>
    
</AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { CloudArrowUpIcon, LockClosedIcon, ServerIcon, DocumentMagnifyingGlassIcon, ChartPieIcon, MagnifyingGlassIcon,
    PencilSquareIcon, ArrowPathIcon, BuildingStorefrontIcon, MapPinIcon, StarIcon

} from '@heroicons/vue/20/solid'

function openCalendlyPopup(event) {
event.preventDefault();
Calendly.initPopupWidget({ url: 'https://calendly.com/marco-riformato/incontro-di-valutazione' });
}

const primos = [
    {
    name: 'Audit SEO',
    description:
        'Valutazione completa dell attuale presenza online dello studio legale e identificazione delle aree di miglioramento, in base alle priorità e gli obbiettivi concordati',
    icon: DocumentMagnifyingGlassIcon,
    },
    {
    name: 'Analisi della Concorrenza',
    description: 'Studio delle strategie SEO dei competitor diretti e indiretti per identificare opportunità di differenziazione e crescita nelle ricerche di Google',
    icon: ChartPieIcon,
    }
]

const secondos = [
    {
    name: 'Ricerca di argomenti di Nicchia',
    description:
        'Individuazione di argomenti specifici e parole chiave di nicchia che attraggono potenziali clienti del luogo.',
    icon: MagnifyingGlassIcon,
    },
    {
    name: 'Creazione di Contenuti',
    description: 'Produzione di articoli, pagine informative, servizi e casi studio per ottenere maggiore visibilità ed autorevolezza nel settore.',
    icon: PencilSquareIcon,
    },
    {
    name: 'Ottimizzazione continua',
    description: 'Aggiorneremo costantemente il sito in risposta ai frequenti cambiamenti nelle regole di ranking di Google. Così facendo, ci assicureremo che il sito rimanga sempre competitivo e ben posizionato nei risultati di ricerca.',
    icon: ArrowPathIcon,
    }
]

const terzos = [
    {
    name: 'Ottimizzazione Google My Business',
    description:
        'Una scheda Google My Business ottimizzata è fondamentale per comparire in alto alle ricerche di Google. Mi occuperò della sua inizializzazione, gestione ed evoluzione continua',
    icon: BuildingStorefrontIcon,
    },
    {
    name: 'Link Building Locale',
    description: 'Strategie per ottenere collegamenti dai siti locali influenti per aumentare la visibilità nelle ricerche specifiche per zona. I "backlinks" sono come dei riferimenti digitali da altri siti web. Quando un sito autorevole mette un link al tuo sito, è come ricevere un voto di fiducia. Questo aiuta a migliorare la tua posizione nei risultati di ricerca di Google, specialmente per le ricerche legate a una specifica località.',
    icon: MapPinIcon,
    },
    {
    name: 'Recensioni e Reputation Management',
    description: 'Gestione attenta delle recensioni online, sia positive che negative, per aumentare la fiducia e l\'autorità del tuo studio legale nella comunità locale. Monitorerò e risponderò alle recensioni per assicurare che riflettano positivamente la reputazione e la qualità dei servizi offerti dallo studio.',
    icon: StarIcon,
    }
]
</script>