<template>
<AppLayout title="Sviluppo">

<!--Sviluppo su misura-->
<div class="overflow-hidden bg-secondary-content pt-4 py-4">
<div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
    <div class="lg:ml-auto lg:pl-4 lg:pt-4">
        <div class="lg:max-w-lg">
        <h2 class="text-base font-semibold leading-7 text-secondary">Primo step</h2>
        <p class="mt-2 text-3xl font-bold tracking-tight sm:text-4xl text-primary">Sviluppo su misura</p>
        <p class="mt-6 text-lg leading-8">Creerò il vostro brand distintivo e il posizionamento online, sviluppando in 100 giorni un sito web veloce e mobile-friendly. Post consegna, offrirò aggiornamenti continui per testi e immagini, garantendo al vostro sito dinamicità e attualità.</p>
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
    <p class="mx-auto mt-6 max-w-xl text-lg leading-8">Dalla definizione del brand allo sviluppo in 100 giorni, siamo i tuoi alleati nel mondo digitale</p>
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

<!--Gestionale contenuti-->
<div class="overflow-hidden bg-secondary-content pt-8 py-4">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 items-center">
        <div class="lg:pr-8 lg:pt-4">
          <div class="lg:max-w-lg">
            <h2 class="text-base font-semibold leading-7 text-indigo-400">Semplice, efficace, senza pensieri.</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Gestione contenuti compresa</p>
            <p class="mt-6 text-lg leading-8 text-gray-300">Eleva il tuo studio legale con contenuti su misura. Gli <b>articoli</b> attirano traffico e interesse, mentre i <b>casi studio</b> dimostrano la tua competenza con esempi concreti. Io mi occuperò di tutto: tu pensa ai tuoi clienti, io alla tua presenza online.</p>
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
        <img src="svil1.webp" alt="Product screenshot" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-white/10 sm:w-[57rem] md:-ml-4 lg:-ml-0" width="2432" height="1442" />
      </div>
    </div>
</div>

<!--CTA-->
<div class="mx-auto max-w-7xl sm:px-6 sm:py-32 lg:px-8 ">
    <div class="relative isolate overflow-hidden px-6 py-24 bg-primary-content text-center shadow-2xl sm:rounded-3xl sm:px-16">
    <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight sm:text-4xl text-secondary">Consolida la tua autorevolezza</h2>
    <p class="mx-auto mt-6 max-w-xl text-lg leading-8">Valorizza il tuo studio legale con contenuti curati su misura per voi, garantendo autorevolezza e aggiornamento costante del sito senza sforzi</p>
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

<!--Calendly-->
<div class="pt-8 bg-secondary-content">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl sm:text-center">
        <h2 class="text-base font-semibold leading-7 text-indigo-400">Risparmia tempo prezioso</h2>
        <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Sistema di prenotazione chiamate automatizzato</p>
        <p class="mt-6 text-lg leading-8 text-gray-300">Hai solamente 2 ore al giorno libere per ricevere chiamate? Nessun problema, daremo ai tuoi clienti un sistema semplice ed intuitivo per prenotarsi esclusivamente quando lo vorrai tu</p>
      </div>
    </div>
    <div class="relative overflow-hidden pt-16">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div style="padding:43% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/887622126?badge=0&amp;autopause=0&amp;quality_selector=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="calendly"></iframe></div>

      </div>
    </div>
</div>

<!--Cta-->
<div class="mx-auto max-w-7xl sm:px-6 sm:py-32 lg:px-8 ">
    <div class="relative isolate overflow-hidden px-6 py-24 bg-primary-content text-center shadow-2xl sm:rounded-3xl sm:px-16">
    <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight sm:text-4xl text-secondary">Automatizza il processo di prenotazione</h2>
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
    description: 'In 100 giorni, svilupperemo un sito web su misura. Avremo cura di renderlo veloce e ottimizzato per i dispositivi mobili, che oggi costituiscono oltre il 50% della navigazione su internet',
    icon: CodeBracketIcon,
  },
  {
    name: 'Consegna ed evoluzione continua',
    description: 'Una volta terminato lo sviluppo ed avvenuta la consegna, sarò sempre a tua disposizione per ulteriori modifiche. Eseguirò gratuitamente qualunque richiesta di modifica al sito che riguardi un testo od un immagine.',
    icon: ArrowPathIcon,
  },
]

const secondos = [
  {
    name: 'Casi studio',
    description:
      'I case study sono strumenti potenti per dimostrare l\'efficacia e la professionalità del tuo studio legale. Attraverso l\'analisi di casi reali gestiti dallo studio, mostrano concretamente come hai affrontato e risolto specifiche problematiche legali. La loro pubblicazione sul tuo sito aumenterà la credibilità agli occhi dei potenziali clienti, fornendo loro esempi tangibili della tua competenza e dei tuoi successi.',
    icon: ClipboardDocumentIcon,
  },
  {
    name: 'Articoli',
    description: 'Gli articoli sono un elemento fondamentale per mantenere il tuo sito web sempre aggiornato. Attraverso una serie di contenuti rilevanti e ben scritti, non solo attirerai traffico sul tuo sito, ma offrirai anche un valore aggiunto ai tuoi visitatori. Come esperto in SEO, mi dedicherò a creare articoli ottimizzati per i motori di ricerca, garantendo che il tuo sito emerga nelle ricerche online',
    icon: PencilSquareIcon,
  }
]
</script>