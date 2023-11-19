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
        <p class="mt-6 text-lg leading-8">Scopri dove si trova attualmente il tuo studio legale nel vasto mondo digitale e dove potrebbe arrivare. Attraverso un'analisi dettagliata, stabiliremo un piano d'azione SEO personalizzato, orientato a costruire solide fondamenta per la vostra visibilità online, mirando a traguardi commerciali chiari e realistici.</p>
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
    <div class="flex items-start justify-end lg:order-first">
        <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png" alt="Product screenshot" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" width="2432" height="1442" />
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
        <button href="#" class="btn btn-primary">Voglio scoprire il potenziale del mio studio</button>
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
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
        <div class="lg:pr-8 lg:pt-4">
            <div class="lg:max-w-lg">
            <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Strategia di Contenuto e Ottimizzazione Keyword</p>
            <p class="mt-6 text-lg leading-8 text-gray-300">Creeremo contenuti che parlano direttamente al tuo pubblico target, utilizzando un'analisi approfondita delle parole chiave per posizionarvi come punto di riferimento autorevole nel settore legale. Con strategie di contenuto mirate e ottimizzazione SEO, migliorerò il tuo ranking sui motori di ricerca per attirare traffico qualificato verso il tuo sito.</p>
            <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-300 lg:max-w-none">
                <div v-for="secondo in secondos" :key="secondo.name" class="relative pl-9">
                <dt class="inline font-semibold text-white">
                    <component :is="secondo.icon" class="absolute left-1 top-1 h-5 w-5 text-indigo-500" aria-hidden="true" />
                    {{ secondo.name }}
                </dt>
                {{ ' ' }}
                <dd class="inline">{{ secondo.description }}</dd>
                </div>
            </dl>
            </div>
        </div>
        <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png" alt="Product screenshot" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-white/10 sm:w-[57rem] md:-ml-4 lg:-ml-0" width="2432" height="1442" />
        </div>
    </div>
</div>

<!--CTA-->
<div class="mx-auto max-w-7xl sm:px-6 sm:py-32 lg:px-8 ">
    <div class="relative isolate overflow-hidden px-6 py-24 bg-primary-content text-center shadow-2xl sm:rounded-3xl sm:px-16">
    <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight sm:text-4xl text-secondary">Eleva la Tua Autorità Online</h2>
    <p class="mx-auto mt-6 max-w-xl text-lg leading-8">Trasforma il tuo sito in un punto di riferimento per il diritto con contenuti ricercati e parole chiave strategiche. Prendi la parola sul web e diventa una voce autorevole nel tuo settore</p>
    <div class="mt-10 flex items-center justify-center gap-x-6">
        <button href="#" class="btn btn-primary">Voglio aumentare la mia autorevolezza</button>
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
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
    <div class="lg:ml-auto lg:pl-4 lg:pt-4">
        <div class="lg:max-w-lg">
        <p class="mt-2 text-3xl font-bold tracking-tight sm:text-4xl text-primary">Analisi e Piano d'Azione</p>
        <p class="mt-6 text-lg leading-8">Assicurare che il vostro studio legale sia la prima scelta nella vostra area geografica è la mia priorità. Implementerò strategie SEO locali per distinguervi nella comunità, aumentando la vostra presenza nelle ricerche geografiche rilevanti e trasformando la visibilità in un maggior numero di contatti e consulenze</p>
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
    <div class="flex items-start justify-end lg:order-first">
        <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png" alt="Product screenshot" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" width="2432" height="1442" />
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
        <button href="#" class="btn btn-primary">Voglio ottimizzare la mia Visibilità Locale</button>
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
import { CloudArrowUpIcon, LockClosedIcon, ServerIcon } from '@heroicons/vue/20/solid'
    
const primos = [
    {
    name: 'Audit SEO',
    description:
        'Valutazione completa dell attuale presenza online dello studio legale e identificazione delle aree di miglioramento.',
    icon: CloudArrowUpIcon,
    },
    {
    name: 'Analisi della Concorrenza',
    description: 'Studio delle strategie SEO dei competitor diretti e indiretti per identificare opportunità di differenziazione.',
    icon: LockClosedIcon,
    },
    {
    name: 'Pianificazione degli Obiettivi',
    description: 'Definizione di metriche di misura realistiche e misurabili basati sugli obiettivi commerciali dello studio legale.',
    icon: ServerIcon,
    },
]

const secondos = [
    {
    name: 'Ricerca di argomenti di Nicchia',
    description:
        'Individuazione di argomenti specifici e parole chiave di nicchia che attraggono clienti potenziali del luogo.',
    icon: CloudArrowUpIcon,
    },
    {
    name: 'Creazione di Contenuti',
    description: 'Produzione di articoli di blog, pagine informative e casi studio per migliorare l engagement e la visibilità.',
    icon: ServerIcon,
    },
    {
    name: 'Ottimizzazione continua',
    description: 'Ogni anno, Google introduce diversi aggiornamenti alle proprie "regole" di ranking. Terremo il tuo sito sempre aggiornato ed all avanguardia',
    icon: LockClosedIcon,
    }
]

const terzos = [
    {
    name: 'Ottimizzazione Google My Business',
    description:
        'Configurazione e ottimizzazione della scheda Google My Business per aumentare la visibilità nelle ricerche locali.',
    icon: CloudArrowUpIcon,
    },
    {
    name: 'Link Building Locale',
    description: 'Strategie per acquisire backlinks da siti locali autorevoli per migliorare la visibilità nelle ricerche geografiche',
    icon: ServerIcon,
    },
    {
    name: 'Recensioni e Reputation Management',
    description: 'Monitoraggio e gestione delle recensioni online per migliorare la fiducia e l autorità locale dello studio legale.',
    icon: LockClosedIcon,
    }
]
</script>