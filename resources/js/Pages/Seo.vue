<template>
<AppLayout title="SEO">

<!-- component -->
<div class="w-full h-screen -mt-20">
    <div class="w-full h-screen flex flex-col items-center justify-between bg-black bg-opacity-70">
        <div class="flex-1 flex flex-col items-center justify-center">
            <h1 class="text-6xl lg:text-7xl xl:text-8xl text-gray-200 tracking-wider font-bold font-seriftext-center">Lavori in corso</h1>
        </div>
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