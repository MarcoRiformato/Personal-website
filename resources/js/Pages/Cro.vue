<template>
<AppLayout title="SEO">

<!--Audit e proposte CRO-->
<div class="overflow-hidden bg-secondary-content pt-4 py-4">
<div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
    <div class="lg:ml-auto lg:pl-4 lg:pt-4">
        <div class="lg:max-w-lg">
        <!--<h2 class="text-base font-semibold leading-7 text-secondary">Primo step</h2>-->
        <p class="mt-2 text-3xl font-bold tracking-tight sm:text-4xl text-primary">Ottimizza le Conversioni del Tuo Sito Attuale</p>
        <p class="mt-6 text-lg leading-8">Hai già un sito web e non vuoi cambiare?<br/>Nessun problema: con un'analisi approfondita di CRO, evidenziamo punti di forza e aree di miglioramento del tuo sito. Riceverai un report chiaro e dettagliato, pronto per essere utilizzato dalla tua agenzia di sviluppo per ottimizzazioni immediate.</p>
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
    <p class="mx-auto mt-6 max-w-xl text-lg leading-8">Scopri il potenziale di conversione inespresso del tuo sito legale. Ti daremo un report dettagliato con consigli, proposte e idee immediatamente applicabili dalla tua agenzia</p>
    <div class="mt-10 flex items-center justify-center gap-x-6">
        <button href="#" class="btn btn-primary">Voglio un audit CRO del mio sito</button>
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

<!--Analisi comportamentale-->
<div class="overflow-hidden bg-secondary-content pt-4 py-4">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
        <div class="lg:pr-8 lg:pt-4">
            <div class="lg:max-w-lg">
            <p class="mt-2 text-3xl font-bold tracking-tight text-primary sm:text-4xl">Sviluppo Web focalizzato sulle conversioni</p>
            <p class="mt-6 text-lg leading-8 text-gray-300">Creiamo un nuovo sito ottimizzato per la CRO, applicando fin dall'inizio le migliori tecniche per massimizzare le conversioni. Utilizziamo analisi comportamentali come il tracciamento del mouse e A/B testing per capire come i visitatori interagiscono con il sito. Basandoci sui dati raccolti, modifichiamo ed evolviamo il sito per garantire un flusso costante di nuovi clienti.</p>
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
        <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png" alt="Product screenshot" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-white/10 sm:w-[57rem] md:-ml-4 lg:-ml-0" width="2432" height="1442" />
        </div>
    </div>
</div>

<!--CTA-->
<div class="mx-auto max-w-7xl sm:px-6 sm:py-32 lg:px-8 ">
    <div class="relative isolate overflow-hidden px-6 py-24 bg-primary-content text-center shadow-2xl sm:rounded-3xl sm:px-16">
    <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight sm:text-4xl text-secondary">Un nuovo sito.<br/> Ottimizzato sin dall'inizio per la CRO</h2>
    <p class="mx-auto mt-6 max-w-xl text-lg leading-8">Un sito che cresce con te è la chiave per un business in espansione. Parti con il piede giusto con strumenti analitici avanzati e un design sempre in evoluzione.</p>
    <div class="mt-10 flex items-center justify-center gap-x-6">
        <button href="#" class="btn btn-primary">Voglio un sito ottimizzato per le conversioni</button>
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

<!--Monitoraggio e chiamate-->
<div class="overflow-hidden bg-secondary-content pt-4 py-4">
<div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
    <div class="lg:ml-auto lg:pl-4 lg:pt-4">
        <div class="lg:max-w-lg">
        <p class="mt-2 text-3xl font-bold tracking-tight sm:text-4xl text-primary">Supporto costante</p>
        <p class="mt-6 text-lg leading-8">Con videochiamate settimanali, fissiamo obiettivi di crescita per il tuo sito e, mensilmente, riceverai un report dettagliato sul suo andamento.</p>
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
    <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight sm:text-4xl text-secondary">Supporto Strategico e Monitoraggio Costante</h2>
    <p class="mx-auto mt-6 max-w-xl text-lg leading-8">Non lasciare nulla al caso. Con report mensili dettagliati e sessioni di supporto settimanali, sarai sempre protagonista della rivoluzione digitale del tuo studio</p>
    <div class="mt-10 flex items-center justify-center gap-x-6">
        <button href="#" class="btn btn-primary">Voglio rivoluzionare il mio studio</button>
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
    name: 'Analisi di Conversion Rate Optimization (CRO):',
    description:
        'Faremo una approfondita analisi del tuo sito, studiando i punti di forza da evidenziare e debolezza, eventualmente da eliminare.',
    icon: CloudArrowUpIcon,
    },
    {
    name: 'Report pronto per la tua agenzia attuale',
    description: 'Ti consegneremo un report dettagliato di consigli, segnalazioni e proposte di modifica. Potrai consegnarlo direttamente alla tua agenzia di sviluppo, che potrà applicarli senza problemi',
    icon: LockClosedIcon,
    }
]

const secondos = [
    {
    name: 'Nuovo sito ottimizzato per la CRO',
    description:
        'In base agli obbiettivi e priorità che concorderemo, applichiamo sin dal principio tutte le tecniche e convenzioni migliori in materia CRO. Questo ci darà modo di aiutarti meglio.',
    icon: CloudArrowUpIcon,
    },
    {
    name: 'Analisi comportamentale',
    description: 'Tracciamento del mouse, registrazione delle sessioni, A/B testing. Tutte strategie e strumenti per raccogliere ed apprendere, con precisione, come i visitatori navighino il tuo sito',
    icon: ServerIcon,
    },
    {
    name: 'Evoluzione continua',
    description: 'In base ai dati raccolti, alle tendenze di mercato ed agli obbiettivi stabiliti, modificheremo ed evolveremo gradualmente il sito web, di modo che possa garantire un fusso costante di nuovi clienti.',
    icon: LockClosedIcon,
    }
]

const terzos = [
    {
    name: 'Chiamate settimanali',
    description:
        'Manterremo un contatto diretto, tramite delle videochiamate settimanali. Durante questi incontri avremo modo di concordare e definire gli obbiettivi per ogni fase di crescita del tuo sito.',
    icon: CloudArrowUpIcon,
    },
    {
    name: 'Report mensile',
    description: 'Ogni mese riceverai un report dettagliato sull\' andamento globale del tuo sito, che comprenderà i progressi nelle classifiche di Google, le analisi comportamentali degli utenti, e tanto altro',
    icon: ServerIcon,
    }
]
</script>