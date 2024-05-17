<template>
  <AppLayout title="Marketing online per studi legali">
<div class="bg-base overflow-hidden">
<div class="relative isolate  sm:px-4">

  <!-- Landing -->
<div class="relative isolate overflow-hidde">
    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2830&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover" />
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" />
    </div>
    <div class="mx-auto max-w-2xl py-8">
      <div class="hidden sm:mb-8 sm:flex sm:justify-center">
        <!--<div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-400 ring-1 ring-white/10 hover:ring-white/20">
          Aperte le candidature per il mese di aprile<a href="#" class="font-semibold text-white"><span class="absolute inset-0" aria-hidden="true" />Candidati <span aria-hidden="true">&rarr;</span></a>
        </div>-->
      </div>
      <div class="text-center">
        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Ottieni più clienti qualificati<br/> per il tuo stuido</h1>
        <p class="mt-6 text-lg leading-8 text-gray-300">Agenzia di marketing specializzata in studi legali</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <btn @click.prevent="openCalendlyPopup" href="#" class="btn btn-primary">Parliamo</btn>
        </div>
      </div>
    </div>
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" />
    </div>
</div>

<!-- DigitaLegale -->
<div id="Landing" class="py-8 mx-auto max-w-7xl px-6 lg:flex lg:items-start lg:gap-x-10 lg:px-8">
  <div class="mx-auto max-w-2xl lg:mx-0 lg:flex-auto">
    <div class="grid grid-cols-1 gap-12 mt-10">
      <div v-for="feature in servizi" :key="feature.name">
        <div class="flow-root rounded-lg bg-secondary-content px-6 pb-8">
          <div class="-mt-6">
            <div>
              <span class="bg-secondary-focus inline-flex items-center justify-center rounded-xl p-3 shadow-lg">
                <component :is="feature.icon" class="h-8 w-8 text-white" aria-hidden="true" />
              </span>
            </div>
            <h3 class="mt-8 text-lg font-semibold leading-8 tracking-tight text-secondary">{{ feature.name }}</h3>
            <p class="mt-5 text-base leading-7">{{ feature.description }}</p>
            <button @click="$inertia.visit(route(feature.href))" class="mt-6 text-sm font-semibold leading-6 text-primary cursor-pointer">
              Scopri di più →
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="lg:flex-shrink-0 lg:flex-grow lg:flex lg:flex-col lg:items-start lg:mt-0 lg:items-center">
    <svg viewBox="0 0 366 729" role="img" class="mx-auto w-[22.875rem] max-w-full drop-shadow-xl lg:mt-0">
    <title>App screenshot</title>
    <defs>
    <clipPath id="2ade4387-9c63-4fc4-b754-10e687a0d332">
        <rect width="316" height="684" rx="36" />
    </clipPath>
    </defs>
    <path fill="#4B5563" d="M363.315 64.213C363.315 22.99 341.312 1 300.092 1H66.751C25.53 1 3.528 22.99 3.528 64.213v44.68l-.857.143A2 2 0 0 0 1 111.009v24.611a2 2 0 0 0 1.671 1.973l.95.158a2.26 2.26 0 0 1-.093.236v26.173c.212.1.398.296.541.643l-1.398.233A2 2 0 0 0 1 167.009v47.611a2 2 0 0 0 1.671 1.973l1.368.228c-.139.319-.314.533-.511.653v16.637c.221.104.414.313.56.689l-1.417.236A2 2 0 0 0 1 237.009v47.611a2 2 0 0 0 1.671 1.973l1.347.225c-.135.294-.302.493-.49.607v377.681c0 41.213 22 63.208 63.223 63.208h95.074c.947-.504 2.717-.843 4.745-.843l.141.001h.194l.086-.001 33.704.005c1.849.043 3.442.37 4.323.838h95.074c41.222 0 63.223-21.999 63.223-63.212v-394.63c-.259-.275-.48-.796-.63-1.47l-.011-.133 1.655-.276A2 2 0 0 0 366 266.62v-77.611a2 2 0 0 0-1.671-1.973l-1.712-.285c.148-.839.396-1.491.698-1.811V64.213Z" />
    <path fill="#343E4E" d="M16 59c0-23.748 19.252-43 43-43h246c23.748 0 43 19.252 43 43v615c0 23.196-18.804 42-42 42H58c-23.196 0-42-18.804-42-42V59Z" />
    <foreignObject width="316" height="684" transform="translate(24 24)" clip-path="url(#2ade4387-9c63-4fc4-b754-10e687a0d332)">
    <img src="tel5.webp" alt="" />
    </foreignObject>
  </svg>
  <div class="flex flex-col items-center justify-center lg:flex-col lg:items-center lg:justify-center gap-x-6 lg:mt-0 py-16">
      <p class="text-center lg:max-w-md px-4 lg:px-0">Scegliere un' agenzia per il proprio studio legale non è una scelta facile. Ci sono molte agenzie generaliste che promettono di vendere siti "ottimizzati per SEO", ma non si curano di seguire il proprio cliente ed assicurarsi che ottenga effettivamente dei risultati. Esiste però un nuovo metodo, che permette di ottenere più contatti da parte di clienti qualificati, evitando perditempo dal basso valore economico.</p>
      <div class="flex flex-col items-center justify-center py-8">
      <p class="text-secondary">Scopri di più, senza impegno:</p>
      <a href="#" class="btn btn-primary button-glow mt-2" @click.prevent="openCalendlyPopup">Prenota una chiamata</a>
    </div>
  </div>
  </div>
</div>

<!-- Chi sono -->
<div class="mx-auto max-w-7xl sm:px-6">
  <div class="relative isolate overflow-hidden bg-primary-content py-5 px-6 sm:rounded-3xl sm:px-10  sm:py-24 lg:py-12 xl:px-24">
      <ul role="list" class="-mt-12  divide-y divide-gray-200 xl:col-span-3">
        <li v-for="person in people" :key="person.name" class="flex flex-col items-center gap-10 pt-12 sm:flex-row sm:items-start">
          <img class="aspect-[4/5] w-52 flex-none rounded-2xl object-cover " :src="person.imageUrl" alt="" />
          <div class="max-w-xl flex-auto">
            <h3 class="text-lg font-semibold leading-8 tracking-tight text-secondary">{{ person.name }}</h3>
            <p class="mt-6 text-base text-xl italic">{{ person.bio }}</p>
            <!--<ul role="list" class="mt-6 flex gap-x-6">
              <li>
                <a :href="person.twitter">
                  <span class="sr-only">Twitter</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
                  </svg>
                </a>
              </li>
              <a href="a" class="text-info">@MarcoRiformato</a>
              <li class="ml-8">
                <a :href="person.linkedinUrl" class="">
                  <span class="sr-only">LinkedIn</span>
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" x="0px" y="0px" width="18" height="18" viewBox="0 0 50 50" fill="currentColor" class="icon icons8-Facebook-Filled" >
                        <path d="M40,0H10C4.486,0,0,4.486,0,10v30c0,5.514,4.486,10,10,10h30c5.514,0,10-4.486,10-10V10C50,4.486,45.514,0,40,0z M39,17h-3 c-2.145,0-3,0.504-3,2v3h6l-1,6h-5v20h-7V28h-3v-6h3v-3c0-4.677,1.581-8,7-8c2.902,0,6,1,6,1V17z"></path>
                  </svg>
                </a>
              </li>
              <a class=" text-info" href="au">Marco Riformato DigitaLegale</a>
            </ul>-->
          </div>
        </li>
      </ul>
  </div>
</div>

<!-- Features -->
<div class="bg-gray-900 py-8">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-base font-semibold leading-7 text-indigo-400">Come funziona?</h2>
        <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Strategia di marketing specializzata per studi legali</p>
        <p class="mt-6 text-lg leading-8 text-gray-300">Non si tratta della solita agenzie generalista, ma di un percorso dedicato per il marketing online degli studi legali</p>
      </div>
      <dl class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 text-base leading-7 text-gray-300 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:gap-x-16">
        <div v-for="feature in features" :key="feature.name" class="relative pl-9">
          <dt class="inline font-semibold text-white">
            <component :is="feature.icon" class="absolute left-1 top-1 h-5 w-5 text-indigo-500" aria-hidden="true" />
            {{ feature.name }}
          </dt><br/>
          {{ ' ' }}
          <dd class="inline">{{ feature.description }}</dd>
      </div>
    </dl>
  </div>
</div>

<!--Stats-->
<div class="bg-gray-800 py-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
        <div v-for="stat in stats" :key="stat.id" class="mx-auto flex max-w-xs flex-col gap-y-4">
          <dt class="text-base leading-7 text-gray-400">{{ stat.name }}</dt>
          <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">{{ stat.value }}</dd>
        </div>
      </dl>
    </div>
</div>

<!-- CTA -->
<div>
    <div class="mx-auto max-w-7xl py-12 lg:px-8">
      <div class="relative isolate overflow-hidden bg-gray-900 px-6 py-8 text-center shadow-2xl sm:rounded-3xl sm:px-16">
        <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl">Pronto per un agenzia di marketing specializzata che funziona?</h2>
        <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-300">Prenota una consulenza gratuita e senza impegno</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="#" @click.prevent="openCalendlyPopup" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Clicca per una consulenza strategica gratuita</a>
        </div>
        <p class="pt-4">Oppure chiama il 388 568 6658</p>
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
  </div>

<!-- Longer description
<div class="bg-gray-900 px-6 py-12 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-4xl font-bold tracking-tight text-primary sm:text-6xl">Un modo migliore di fare marketing</h2>
      <p class="mt-6 text-lg leading-8">Scegliere un' agenzia per il proprio studio legale non è una scelta facile. Ci sono molte agenzie generaliste che promettono di vendere siti "ottimizzati per SEO", ma non si curano di seguire il proprio cliente ed assicurarsi che ottenga effettivamente dei risultati. Esiste però un nuovo metodo, che permette di ottenere più contatti da parte di clienti qualificati, evitando perditempo dal basso valore economico.</p>
      <p class="mt-6 text-lg leading-8 text-gray-300">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
      <p class="mt-6 text-lg leading-8 text-gray-300">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
    </div>
</div> -->

<!-- FAQs -->
<div
  id="faq"
  class="-mt-20 mx-auto max-w-7xl px-6 sm:py-32 lg:px-8 ">
    <div class="mx-auto max-w-4xl divide-y divide-white/10">
      <h2 class="text-2xl font-bold leading-10 text-primary tracking-tight">FAQ</h2>
      <dl class="mt-10 space-y-6 divide-y divide-white/10">
        <Disclosure as="div" v-for="faq in faqs" :key="faq.question" class="pt-6" v-slot="{ open }">
          <dt>
            <DisclosureButton class="flex w-full items-start justify-between text-left">
              <span class="text-secondary font-semibold leading-7">{{ faq.question }}</span>
              <span class="ml-6 flex h-7 items-center">
                <PlusSmallIcon v-if="!open" class="h-6 w-6" aria-hidden="true" />
                <MinusSmallIcon v-else class="h-6 w-6" aria-hidden="true" />
              </span>
            </DisclosureButton>
          </dt>
          <DisclosurePanel as="dd" class="mt-2 pr-12">
            <p class="text-base leading-7">{{ faq.answer }}</p>
          </DisclosurePanel>
        </Disclosure>
      </dl>
    </div>
</div>
  
</div>
</div>
</AppLayout>
</template>
      
<script setup>
import { ref } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue';
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { MinusSmallIcon, PlusSmallIcon, GlobeEuropeAfricaIcon, MagnifyingGlassIcon, CursorArrowRaysIcon, UserGroupIcon, ShieldCheckIcon, ClockIcon, PhoneIcon, CodeBracketSquareIcon
} from '@heroicons/vue/24/outline'

function openCalendlyPopup(event) {
event.preventDefault();
Calendly.initPopupWidget({ url: 'https://calendly.com/marco-riformato/incontro-di-valutazione' });
}

const scrollToSection = (sectionId) => {
const element = document.getElementById(sectionId);
if (element) {
  element.scrollIntoView({ behavior: 'smooth' });
}
};

const features = [
  {
    name: 'Percorso dedicato 1:1',
    description: 'Verrete seguiti dallo studio del brand, allo sviluppo, alla scrittura di articoli, gestione della visibilità e dei risultati. Non si tratta di un approccio "automatizzato" come spesso succede.',
    href: 'sviluppo',
    icon: UserGroupIcon,
  },
  {
    name: 'Esclusiva provinciale',
    description: 'Seguo un solo studio legale per provincia. Non sarebbe rispettoso (nè possibile) promettere a più studi della stessa zona di raggiungere un certo termine X per cui magari sono -indirettamente o meno- in competizione. L\' esclusiva da anche modo di dedicare più tempo ad ogni cliente.',
    href: 'seo',
    icon: ShieldCheckIcon,
  },
  {
    name: 'Anche per gli avvocati più indaffarati',
    description: 'Occupandomi anche della creazione di contenuti per il sito, così come del continuo aggiornamento dei servizi o di ogni sezione del sito, non vi è alcuna richiesta di tempo da parte dell\'avvocato: ognuno si occupi in ciò che fa meglio. Lascia a noi il tuo marketing online.',
    href: 'cro',
    icon: ClockIcon,
  },
  {
    name: 'Sempre in contatto',
    description: 'Niente approccio "finito il sito, passo al prossimo". Rimarremo sempre aggiornati con 2 videochiamate da 1 ora mensili, durante le quali parleremo dell\'andamento del sito, dove andiamo bene, dove c\'è da migliorare, ma sopratutto per ricalibrare continuamente la strategia.',
    href: 'cro',
    icon: PhoneIcon,
  },
]

const servizi = [
  {
    name: 'Sviluppo del sito',
    description: 'Creato su misura per il vostro studio, veloce e ottimizzato per mobile. NO siti vetrina generici. Esperienza dell\'utente al centro: categorie di attività, facilità di navigazione e tanto altro per assicurarci che il sito, oltre che esteticamente apprezzabile, sia effettivamente utile per i visitatori.',
    href: 'sviluppo',
    icon: CodeBracketSquareIcon,
  },
  {
    name: 'Maggiore visibilità nelle ricerce Google (SEO)',
    description: 'Visibilità mirata. Appariremo in cima ai risultati di ricerca dove conta. Manterrò il sito sempre aggiornato con la scrittura di 5 articoli mensili, scelti e concordati insieme allo studio. NO a "tieni il sito e buona fortuna", verrete seguiti con 2 videochiamate mensili. Gestione scheda Google My Business compresa',
    href: 'seo',
    icon: MagnifyingGlassIcon,
  },
  {
    name: 'Converti i visitatori in effettivi clienti',
    description: 'Una volta che abbiamo un sito nuovo e vi abbiamo portato del traffico, è importante assicurarci che quante più persone che visitano il sito diventino degli effettivi clienti. Tracciamento dei click, movimenti di mouse e tanto altro per evolvere continuamente il sito.',
    href: 'cro',
    icon: CursorArrowRaysIcon,
  }
]

const faqs = [
  {
    question: "Cos'è la SEO?",

    answer: "La Search Engine Optimization consiste nella pratica di ottimizzare ed aggiornare un sito di modo che risulti più in alto nelle ricerche di Google. "
  },
  {
    question: "Cos'è la CRO?",

    answer: "La Convertion Rate Optimization, ovvero Ottimizzazione del tasso di conversione, consiste nello studio ed evoluzione continua di un sito per fare in modo di raggiungere l obbiettivo (più tempo passato sulla pagina, scaricare un contenuto per ottenere l indirizzo email,)"
  },
  {
    question: "Quanto tempo ci vuole per vedere dei risultati?",

    answer: "Dipende dal servizio: un nuovo sito web può garantire risultati in poche settimane, mentre la ottimizzazione SEO e CRO può richiedere diversi mesi. Non voglio illuderti con risultati immediati, preferisco una promessa in meno ed un risultato in più"
  },
  {
    question: "Avete una tabella prezzi?",

    answer: "La mia prima priorità è portare dei risultati. Per questo motivo posso comunicare una stima di prezzo solamente dopo una prima chiamata conoscitiva"
  },
  {
    question: "Offri supporto post-vendita?",

    answer: "Non svilupperò un sito per poi abbandonarti. Il percorso prevede un affiancamento e assistenza continua, in base al tipo di contratto stabilito"
  }
]

const people = [
  {
    name: 'Marco Riformato',
    role: '',
    imageUrl:
      'rifo.jpg',
    bio: 'Nato e cresciuto tra l\'isola d\'Elba e Firenze, sono uno sviluppatore da diversi anni. Aiuto gli studi legali in Italia a crescere e prosperare online. Prendo pienamente in carico la gestione del marketing online, dando modo anche agli avvocati più indaffarati di prosperare online.',
    twitterUrl: '#',
    linkedinUrl: '#',
  },
]

const stats = [
  { id: 1, name: 'Numero di avvocati in Italia', value: '2.4M' },
  { id: 2, name: 'Numero di utenti su internet in Italia', value: '51M' },
  { id: 3, name: 'Percentuale degli utenti sulla popolazione totale', value: '87,9%' },
]

const mobileMenuOpen = ref(false)
</script>

<style>
@keyframes glow {
  0%, 100% {
    box-shadow: 0 0 1px #9ecaed, 0 0 2px #9ecaed, 0 0 3px #9ecaed, 0 0 5px #2e9afe, 0 0 8px #2e9afe, 0 0 10px #2e9afe, 0 0 25px #2e9afe, 0 0 23px #2e9afe;
    opacity: 1;
  }
  50% {
    box-shadow: none;
    opacity: 0.8;
  }
}

.button-glow {
  animation: glow 7s infinite;
  /* Rest of your button styling */
}


</style>
