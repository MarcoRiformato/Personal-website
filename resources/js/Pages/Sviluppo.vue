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
    <div class="flex items-start justify-end lg:order-first">
        <img src="svil0.png" alt="Product screenshot" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" width="2432" height="1442" />
    </div>
    </div>
</div>
</div>

<!--CTA-->
<div class="mx-auto max-w-7xl sm:px-6 sm:py-32 lg:px-8 ">
    <div class="relative isolate overflow-hidden px-6 py-24 bg-primary-content text-center shadow-2xl sm:rounded-3xl sm:px-16">
    <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight sm:text-4xl text-secondary">Boost your productivity today.</h2>
    <p class="mx-auto mt-6 max-w-xl text-lg leading-8">Incididunt sint fugiat pariatur cupidatat consectetur sit cillum anim id veniam aliqua proident excepteur commodo do ea.</p>
    <div class="mt-10 flex items-center justify-center gap-x-6">
        <button href="#" class="btn btn-primary">Prenota consulenza gratuita</button>
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
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
        <div class="lg:pr-8 lg:pt-4">
          <div class="lg:max-w-lg">
            <h2 class="text-base font-semibold leading-7 text-indigo-400">Secondo step</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Gestionale contenuti compreso</p>
            <p class="mt-6 text-lg leading-8 text-gray-300">Potenziate la vostra reputazione legale con studi di caso che dimostrano il vostro successo, presentate i vostri servizi in modo chiaro e attirate l'attenzione con articoli che attestano la vostra autorità nel settore. Gestite in autonomia i contenuti o, se preferite, lasciate che mi occupi di tutto con il servizio di scrittura 'Done For You'.</p>
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
        <img src="svil1.png" alt="Product screenshot" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-white/10 sm:w-[57rem] md:-ml-4 lg:-ml-0" width="2432" height="1442" />
      </div>
    </div>
</div>

<!--CTA-->
<div class="mx-auto max-w-7xl sm:px-6 sm:py-32 lg:px-8 ">
    <div class="relative isolate overflow-hidden px-6 py-24 bg-primary-content text-center shadow-2xl sm:rounded-3xl sm:px-16">
    <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight sm:text-4xl text-secondary">Boost your productivity today.</h2>
    <p class="mx-auto mt-6 max-w-xl text-lg leading-8">Incididunt sint fugiat pariatur cupidatat consectetur sit cillum anim id veniam aliqua proident excepteur commodo do ea.</p>
    <div class="mt-10 flex items-center justify-center gap-x-6">
        <button href="#" class="btn btn-primary">Prenota consulenza gratuita</button>
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
        <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png" alt="App screenshot" class="mb-[-12%] rounded-xl shadow-2xl ring-1 ring-white/10" width="2432" height="1442" />
        <div class="relative" aria-hidden="true">
          <div class="absolute -inset-x-20 bottom-0 bg-gradient-to-t from-gray-900 pt-[7%]" />
        </div>
      </div>
    </div>
</div>

<!--Cta-->
<div class="mx-auto max-w-7xl sm:px-6 sm:py-32 lg:px-8 ">
    <div class="relative isolate overflow-hidden px-6 py-24 bg-primary-content text-center shadow-2xl sm:rounded-3xl sm:px-16">
    <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight sm:text-4xl text-secondary">Boost your productivity today.</h2>
    <p class="mx-auto mt-6 max-w-xl text-lg leading-8">Incididunt sint fugiat pariatur cupidatat consectetur sit cillum anim id veniam aliqua proident excepteur commodo do ea.</p>
    <div class="mt-10 flex items-center justify-center gap-x-6">
        <button href="#" class="btn btn-primary">Prenota consulenza gratuita</button>
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
    name: 'Ideazione brand',
    description:
      'Avremo un colloquio conoscitivo durante il quale stabiliremo le priorità e gli obbiettivi da raggiungere. Sarà mia cura ideare un brand e pianificare il posizionamento della tua azienda online. ',
    icon: CloudArrowUpIcon,
  },
  {
    name: 'Sviluppo',
    description: 'In 100 giorni, svilupperemo un sito web su misura. Avremo cura di renderlo veloce e ottimizzato per i dispositivi mobili, che oggi costituiscono oltre il 50% della navigazione su internet',
    icon: LockClosedIcon,
  },
  {
    name: 'Consegna ed evoluzione continua',
    description: 'Una volta terminato lo sviluppo ed avvenuta la consegna, sarò sempre a tua disposizione per ulteriori modifiche. Eseguirò gratuitamente qualunque richiesta di modifica al sito che riguardi un testo od un immagine.',
    icon: ServerIcon,
  },
]

const secondos = [
  {
    name: 'Casi studio, servizi e articoli, cosa sono?',
    description:
      'La strategia che andremo ad applicare ha più strumenti. I casi studio sono delle documentazioni su qualche caso legale che avete vinto, di modo da poter mostrare la vostra capacità nel settore. I servizi, invece, è dove potremo esporre i vostri servizi al pubblico. Infine, gli articoli mostreranno ai visitatori che siete una voce autorevole nel mondo legale',
    icon: CloudArrowUpIcon,
  },
  {
    name: 'Gestione autonoma',
    description: 'Non ci sarà bisogno di chiedere password o aspettare una nostra risposta. Potrai creare, modificare ed eliminare articoli, servizi o casi studio in completa autonomia',
    icon: LockClosedIcon,
  },
  {
    name: 'Servizio di scrittura contenuti - Done For You',
    description: 'Se richiesto, posso anche occuparmi della creazione contenuti per te. In base al tuo obbiettivo o priorità, concorderemo insieme la frequenza e gli argomenti. In questo modo, avrai un sito  web autorevole e sempre aggiornato, ma senza dovertene occupare direttamente',
    icon: ServerIcon,
  }
]
</script>