<template>
<AppLayout title="Sviluppo">

<!--Sviluppo su misura-->
<div class="overflow-hidden bg-secondary-content pt-4 py-4">
<div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
    <div class="lg:ml-auto lg:pl-4 lg:pt-4">
        <div class="lg:max-w-lg">
        <h2 class="text-base font-semibold leading-7 text-secondary">Primo step</h2>
        <p class="mt-2 text-3xl font-bold tracking-tight sm:text-4xl text-primary">Un sito web moderno e veloce</p>
        <p class="mt-6 text-lg leading-8">Creerò il vostro brand distintivo e il posizionamento online, sviluppando in 45 giorni un sito web veloce e mobile-friendly. Post consegna, offrirò aggiornamenti continui per testi e immagini, garantendo al vostro sito dinamicità e attualità.</p>
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
        <img src="svil0.webp" alt="Product screenshot" class="w-[40rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10" width="2432" height="1442" />
    </div>
    </div>
</div>
</div>

<!--CTA-->
<div class="mx-auto max-w-7xl sm:px-6 sm:py-32 lg:px-8 ">
    <div class="relative isolate overflow-hidden px-6 py-24 bg-primary-content text-center shadow-2xl sm:rounded-3xl sm:px-16">
    <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight sm:text-4xl text-secondary">Rivoluziona la tua presenza online</h2>
    <p class="mx-auto mt-6 max-w-xl text-lg leading-8">Dalla definizione del brand allo sviluppo in 45 giorni, siamo i tuoi alleati nel mondo digitale</p>
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
import { CloudArrowUpIcon, LockClosedIcon, ServerIcon, LightBulbIcon, CodeBracketIcon, ArrowPathIcon,
  ClipboardDocumentIcon, PencilSquareIcon, CheckCircleIcon

} from '@heroicons/vue/20/solid'

function openCalendlyPopup(event) {
event.preventDefault();
Calendly.initPopupWidget({ url: 'https://calendly.com/marco-riformato/incontro-di-valutazione' });
}

const primos = [
  {
    name: 'Ideazione brand',
    description:
      'Avremo un colloquio conoscitivo durante il quale stabiliremo le priorità e gli obbiettivi da raggiungere. Sarà mia cura ideare un brand e pianificare il posizionamento della tua azienda online. ',
    icon: LightBulbIcon,
  },
  {
    name: 'Sviluppo',
    description: 'In 45 giorni, svilupperemo un sito web su misura. Avremo cura di renderlo veloce e ottimizzato per i dispositivi mobili, che oggi costituiscono oltre il 50% della navigazione su internet',
    icon: CodeBracketIcon,
  },
  {
    name: 'Consegna ed evoluzione continua',
    description: 'Una volta terminato lo sviluppo ed avvenuta la consegna, sarò sempre a tua disposizione per ulteriori modifiche. Eseguirò gratuitamente qualunque richiesta di modifica al sito che riguardi un testo od un immagine.',
    icon: ArrowPathIcon,
  },
]
</script>