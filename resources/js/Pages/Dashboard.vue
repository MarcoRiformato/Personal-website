<template>
  <AppLayout title="Main">
  <div class="bg-base overflow-hidden">
  <div class="relative isolate  sm:px-4">
  <!-- Landing -->
  <div id="Landing" class="-mt-20 mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:flex lg:items-center lg:gap-x-10 lg:px-8 lg:py-40">
      <div class="mx-auto max-w-2xl lg:mx-0 lg:flex-auto">
          <div class="flex"></div>
          <h1 class="text-primary max-w-lg text-4xl font-bold tracking-tight sm:text-6xl">DigitaLegale</h1>
          <p class="mt-6 text-lg leading-8">Creazione e ottimizzazione di siti web per studi legali. Dalla progettazione alla visibilità online, siamo il tuo partner per eccellere nel digitale. 🌐</p>
          <div class="mt-10 flex items-center gap-x-6 mb-20">
              <a href="#" class="btn btn-primary">Parliamo</a>
              <!--<a href="#" class="text-sm font-semibold leading-6 text-secondary">Casi studio <span aria-hidden="true">→</span></a>-->
          </div>
          <div class="grid grid-cols-1 gap-12">
          <div v-for="feature in features" :key="feature.name" class="">
              <div class="flow-root rounded-lg bg-secondary-content px-6 pb-8">
                  <div class="-mt-6">
                      <div>
                          <span class="bg-secondary-focus inline-flex items-center justify-center rounded-xl p-3 shadow-lg">
                              <component :is="feature.icon" class="h-8 w-8 text-white" aria-hidden="true" />
                          </span>
                      </div>
                      <h3 class="mt-8 text-lg font-semibold leading-8 tracking-tight text-secondary">{{ feature.name }}</h3>
                      <p class="mt-5 text-base leading-7">{{ feature.description }}</p>
                      <p class="mt-6">
                        <button @click="scrollToSection(feature.href)" class="text-sm font-semibold leading-6 text-primary cursor-pointer">
                          Scopri di più <span aria-hidden="true">→</span>
                        </button>
                      </p>
                  </div>
                  </div>
              </div>
          </div>
      </div>
      
      <div class="mt-16 sm:mt-24 lg:mt-0 lg:flex-shrink-0 lg:flex-grow">
        <svg viewBox="0 0 366 729" role="img" class="mx-auto w-[22.875rem] max-w-full drop-shadow-xl">
          <title>App screenshot</title>
          <defs>
          <clipPath id="2ade4387-9c63-4fc4-b754-10e687a0d332">
              <rect width="316" height="684" rx="36" />
          </clipPath>
          </defs>
          <path fill="#4B5563" d="M363.315 64.213C363.315 22.99 341.312 1 300.092 1H66.751C25.53 1 3.528 22.99 3.528 64.213v44.68l-.857.143A2 2 0 0 0 1 111.009v24.611a2 2 0 0 0 1.671 1.973l.95.158a2.26 2.26 0 0 1-.093.236v26.173c.212.1.398.296.541.643l-1.398.233A2 2 0 0 0 1 167.009v47.611a2 2 0 0 0 1.671 1.973l1.368.228c-.139.319-.314.533-.511.653v16.637c.221.104.414.313.56.689l-1.417.236A2 2 0 0 0 1 237.009v47.611a2 2 0 0 0 1.671 1.973l1.347.225c-.135.294-.302.493-.49.607v377.681c0 41.213 22 63.208 63.223 63.208h95.074c.947-.504 2.717-.843 4.745-.843l.141.001h.194l.086-.001 33.704.005c1.849.043 3.442.37 4.323.838h95.074c41.222 0 63.223-21.999 63.223-63.212v-394.63c-.259-.275-.48-.796-.63-1.47l-.011-.133 1.655-.276A2 2 0 0 0 366 266.62v-77.611a2 2 0 0 0-1.671-1.973l-1.712-.285c.148-.839.396-1.491.698-1.811V64.213Z" />
          <path fill="#343E4E" d="M16 59c0-23.748 19.252-43 43-43h246c23.748 0 43 19.252 43 43v615c0 23.196-18.804 42-42 42H58c-23.196 0-42-18.804-42-42V59Z" />
          <foreignObject width="316" height="684" transform="translate(24 24)" clip-path="url(#2ade4387-9c63-4fc4-b754-10e687a0d332)">
          <img src="https://tailwindui.com/img/component-images/mobile-app-screenshot.png" alt="" />
          </foreignObject>
      </svg>
      </div>
  </div>
  
  <!-- 3 Columns
  <div class="bg-primary-content py-24 sm:py-32  mx-auto lg:px-8 rounded-xl" >
      <div class="mx-auto max-w-7xl px-6 lg:px-8 ">
        <div class="mx-auto max-w-2xl lg:text-center">
          <h2 class="font-semibold leading-7 text-secondary">Deploy faster</h2>
          <p class="mt-2 text-3xl font-bold tracking-tight text-primary sm:text-4xl">Offriamo una soluzione tutto-incluso per il vostro studio legale</p>
          <p class="mt-6 text-lg leading-8">Dallo sviluppo di un sito per rimanere al passo coi tempi, alle strategie per fare in modo che tu compaia più in alto nelle ricerche Google, all'evoluzione per far convertire sempre più</p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
          <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
            <div v-for="summary in summaries" :key="summary.name" class="flex flex-col">
              <dt class="flex items-center gap-x-3 font-semibold leading-7 text-secondary">
                <component :is="summary.icon" class="h-5 w-5 flex-none text-primary" aria-hidden="true" />
                {{ summary.name }}
              </dt>
              <dd class="mt-4 flex flex-auto flex-col leading-7">
                <p class="flex-auto">{{ summary.description }}</p>
                <p class="mt-6">
                  <a :href="summary.href" class="text-sm font-semibold leading-6 text-primary">Scopri di più <span aria-hidden="true">→</span></a>
                </p>
              </dd>
            </div>
          </dl>
        </div>
      </div>
  </div> -->
  
  <!-- Chi sono -->
  <div class="-mt-20 mx-8 max-w-7xl py-4 bg-primary-content rounded-xl">
    <div class="gap-x-8 gap-y-20 px-6">
        <ul role="list" class="-mt-12 space-y-12 divide-y divide-gray-200 xl:col-span-3">
          <li v-for="person in people" :key="person.name" class="flex flex-col gap-10 pt-12 sm:flex-row">
            <img class="aspect-[4/5] w-52 flex-none rounded-2xl object-cover" :src="person.imageUrl" alt="" />
            <img class="aspect-[4/5] w-52 flex-none rounded-2xl object-cover" src="pc.jpg" alt="" />
            <div class="max-w-xl flex-auto">
              <h3 class="text-lg font-semibold leading-8 tracking-tight text-secondary">{{ person.name }}</h3>
              <p class="text-base leading-7 ">{{ person.role }}</p>
              <p class="mt-6 text-base leading-7 ">{{ person.bio }}</p>
              <ul role="list" class="mt-6 flex gap-x-6">
                <li>
                  <a :href="person.twitter">
                    <span class="sr-only">Twitter</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                      <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
                    </svg>
                  </a>
                </li>
                <li>
                  <a :href="person.linkedinUrl" class="">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
  </div>
  
  <!-- Sviluppo web -->
  <div  id="sviluppo"/>
  <div class="mt-4 mx-auto max-w-7xl sm:px-6 lg:px-8 py-4">
      <div class="relative isolate overflow-hidden bg-primary-content px-6 py-20 sm:rounded-3xl sm:px-10 sm:py-24 lg:py-12 xl:px-24">
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-center lg:gap-y-0">
          <div class="lg:row-start-2 lg:max-w-md">
            <h2 class="text-3xl font-bold tracking-tight sm:text-4xl text-primary">Sviluppo Web Su Misura<br /></h2>
            <p class="mt-6 text-lg leading-8">Eleva la presenza online del tuo studio legale con soluzioni web personalizzate, gestione autonoma dei contenuti e sistemi di prenotazione avanzati per massimizzare l'efficienza e l'impatto sul cliente.</p>
          </div>
          <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png" alt="Product screenshot" class="relative -z-20 min-w-full max-w-xl rounded-xl shadow-xl ring-1 ring-white/10 lg:row-span-4 lg:w-[64rem] lg:max-w-none" width="2432" height="1442" />
          <div class="max-w-xl lg:row-start-3 lg:mt-10 lg:max-w-md lg:border-t lg:border-white/10 lg:pt-10">
            <dl class="max-w-xl space-y-8 text-base leading-7 lg:max-w-none">
              <div v-for="sviluppo in sviluppi" :key="sviluppo.name" class="relative">
                <dt class="ml-9 inline-block font-semibold">
                  <component :is="sviluppo.icon" class="absolute left-1 top-1 h-5 w-5 text-primary" aria-hidden="true" />
                  <p class="text-secondary">{{ sviluppo.name }}</p>
                </dt>
                {{ ' ' }}<br />
                <dd class="inline">{{ sviluppo.description }}</dd>
              </div>
            </dl>
          </div>
        </div>
        <div class="pointer-events-none absolute left-12 top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-3xl lg:bottom-[-12rem] lg:top-auto lg:translate-y-0 lg:transform-gpu" aria-hidden="true">
          <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-25" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" />
        </div>
      </div>
  </div>
  
  <!-- CTA Sviluppo-->
  <div class="-mt-20 mx-auto max-w-7xl sm:px-6 sm:py-32 lg:px-8">
    <div class="relative isolate overflow-hidden bg-primary-content px-6 py-24 text-center shadow-2xl sm:rounded-3xl sm:px-16">
      <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight sm:text-4xl text-primary">Rivoluziona la tua presenza online. <br/>Siti su misura per studi legali innovatori </h2>
      <div class="mt-10 flex items-center justify-center gap-x-6">
        <a href="#" class="btn btn-primary">Cominciamo</a>
        <!--<a href="#" class="font-semibold leading-6 text-secondary">Casi studio <span aria-hidden="true">→</span></a>-->
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
  
  <!-- SEO -->
  <div id="seo" class="lg:-mt-14 mx-auto max-w-7xl sm:px-6 lg:px-8 py-4">
      <div class="relative isolate overflow-hidden bg-primary-content px-6 py-20 sm:rounded-3xl sm:px-10 sm:py-24 lg:py-12 xl:px-24">
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-center lg:gap-y-0">
          <div class="lg:row-start-2 lg:max-w-md">
            <h2 class="text-3xl font-bold tracking-tight sm:text-4xl text-primary">Aumenta la Visibilità Online<br /></h2>
            <p class="mt-6 text-lg leading-8">Aumenta la visibilità online del tuo studio legale. Con analisi approfondite, contenuti mirati e una strategia locale, faremo scalare il tuo studio legale nelle ricerche Google.</p>
          </div>
          <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png" alt="Product screenshot" class="relative -z-20 min-w-full max-w-xl rounded-xl shadow-xl ring-1 ring-white/10 lg:row-span-4 lg:w-[64rem] lg:max-w-none" width="2432" height="1442" />
          <div class="max-w-xl lg:row-start-3 lg:mt-10 lg:max-w-md lg:border-t lg:border-white/10 lg:pt-10">
            <dl class="max-w-xl space-y-8 text-base leading-7 lg:max-w-none">
              <div v-for="seo in seos" :key="seo.name" class="relative">
                <dt class="ml-9 inline-block font-semibold">
                  <component :is="seo.icon" class="absolute left-1 top-1 h-5 w-5 text-primary" aria-hidden="true" />
                  <p class="text-secondary">{{ seo.name }}</p>
                </dt>
                {{ ' ' }}<br />
                <dd class="inline">{{ seo.description }}</dd>
              </div>
            </dl>
          </div>
        </div>
        <div class="pointer-events-none absolute left-12 top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-3xl lg:bottom-[-12rem] lg:top-auto lg:translate-y-0 lg:transform-gpu" aria-hidden="true">
          <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-25" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" />
        </div>
      </div>
  </div>

  <!-- CTA Sviluppo-->
  <div class="-mt-20 mx-auto max-w-7xl sm:px-6 sm:py-32 lg:px-8">
    <div class="relative isolate overflow-hidden bg-primary-content px-6 py-24 text-center shadow-2xl sm:rounded-3xl sm:px-16">
      <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight sm:text-4xl text-primary">Aumenta la visibilità del tuo sito.<br/>Compari per primo nelle riceche Google </h2>
      <div class="mt-10 flex items-center justify-center gap-x-6">
        <a href="#" class="btn btn-primary">Cominciamo</a>
        <!--<a href="#" class="font-semibold leading-6 text-secondary">Casi studio <span aria-hidden="true">→</span></a>-->
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

  <!-- CRO -->
  <div id="cro" class="mx-auto max-w-7xl sm:px-6 lg:px-8 py-4">
      <div class="relative isolate overflow-hidden bg-primary-content px-6 py-20 sm:rounded-3xl sm:px-10 sm:py-24 lg:py-12 xl:px-24">
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-center lg:gap-y-0">
          <div class="lg:row-start-2 lg:max-w-md">
            <h2 class="text-3xl font-bold tracking-tight sm:text-4xl text-primary">Conversione: Il Tocco Finale alla tua presenza online<br /></h2>
            <p class="mt-6 text-lg leading-8">Dopo aver costruito un sito web di qualità e assicurato la sua visibilità con un'efficace strategia SEO, è cruciale capitalizzare quel traffico. La nostra Ottimizzazione delle Conversioni si focalizza su questo obiettivo: far sì che ogni visita si converta in un nuovo cliente </p>
          </div>
          <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png" alt="Product screenshot" class="relative -z-20 min-w-full max-w-xl rounded-xl shadow-xl ring-1 ring-white/10 lg:row-span-4 lg:w-[64rem] lg:max-w-none" width="2432" height="1442" />
          <div class="max-w-xl lg:row-start-3 lg:mt-10 lg:max-w-md lg:border-t lg:border-white/10 lg:pt-10">
            <dl class="max-w-xl space-y-8 text-base leading-7 lg:max-w-none">
              <div v-for="cro in cros" :key="cro.name" class="relative">
                <dt class="ml-9 inline-block font-semibold">
                  <component :is="cro.icon" class="absolute left-1 top-1 h-5 w-5 text-primary" aria-hidden="true" />
                  <p class="text-secondary">{{ cro.name }}</p>
                </dt>
                {{ ' ' }}<br />
                <dd class="inline">{{ cro.description }}</dd>
              </div>
            </dl>
          </div>
        </div>
        <div class="pointer-events-none absolute left-12 top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-3xl lg:bottom-[-12rem] lg:top-auto lg:translate-y-0 lg:transform-gpu" aria-hidden="true">
          <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-25" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" />
        </div>
      </div>
  </div>

  <!-- CTA Sviluppo-->
  <div class="-mt-20 mx-auto max-w-7xl sm:px-6 sm:py-32 lg:px-8">
    <div class="relative isolate overflow-hidden bg-primary-content px-6 py-24 text-center shadow-2xl sm:rounded-3xl sm:px-16">
      <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight sm:text-4xl text-primary">Capitalizza il traffico del tuo sito.<br/>Converti visitatori in clienti</h2>
      <div class="mt-10 flex items-center justify-center gap-x-6">
        <a href="#" class="btn btn-primary">Cominciamo</a>
        <!--<a href="#" class="font-semibold leading-6 text-secondary">Casi studio <span aria-hidden="true">→</span></a>-->
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

  <!-- Testimonial 
    <div 
    id="testimonials"
    class="pt-24 sm:pb-24 sm:pt-32 xl:pb-32">
    <div class="bg-base-200 pb-20 sm:pb-24 xl:pb-0">
      <div class="mx-auto flex max-w-7xl flex-col items-center gap-x-8 gap-y-10 px-6 sm:gap-y-8 lg:px-8 xl:flex-row xl:items-stretch">
        <div class="-mt-8 w-full max-w-2xl xl:-mb-8 xl:w-96 xl:flex-none">
          <div class="relative aspect-[2/1] h-full md:-mx-8 xl:mx-0 xl:aspect-auto">
            <img class="absolute inset-0 h-full w-full rounded-2xl bg-gray-800 object-cover shadow-2xl" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" alt="" />
          </div>
        </div>
        <div class="w-full max-w-2xl xl:max-w-none xl:flex-auto xl:px-16 xl:py-24">
          <figure class="relative isolate pt-6 sm:pt-12">
            <svg viewBox="0 0 162 128" fill="none" aria-hidden="true" class="absolute left-0 top-0 -z-10 h-32 stroke-white/20">
              <path id="b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb" d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
              <use href="#b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb" x="86" />
            </svg>
            <blockquote class="text-xl font-semibold leading-8 text-white sm:text-2xl sm:leading-9">
              <p>Una forza inarrestabile. Dal suo arrivo ha svoltato la nostra azienda in 100 giorni. Ha creato un sito, ha creato ed ottimizzato la nostra scheda Google My Business da zero. Ci ha aiutato con la creazioen dei contenuti. </p>
            </blockquote>
            <figcaption class="mt-8 text-base">
              <div class="font-semibold text-white">Pietro Gentili</div>
              <div class="mt-1 text-gray-400">Presidente Forum Giovani dell' Elba</div>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
    </div>-->
  
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
  import { CloudArrowUpIcon, LockClosedIcon, ServerIcon } from '@heroicons/vue/20/solid'
  import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
  import { MinusSmallIcon, PlusSmallIcon, ArrowPathIcon, GlobeEuropeAfricaIcon, MagnifyingGlassIcon, CursorArrowRaysIcon
 } from '@heroicons/vue/24/outline'

 const scrollToSection = (sectionId) => {
  const element = document.getElementById(sectionId);
  if (element) {
    element.scrollIntoView({ behavior: 'smooth' });
  }
};

  const features = [
    {
      name: 'Siti Web Professionali',
      description: 'Un sito web su misura per studi legali, progettato per rispondere alle esigenze dei vostri clienti e riflettere la professionalità del vostro team.',
      href: 'sviluppo',
      icon: GlobeEuropeAfricaIcon,
    },
    {
      name: 'Maggiore visibilità nelle ricerce Google (SEO)',
      description: 'Aumenta la visibilità del tuo studio legale nei motori di ricerca. Attrai clienti ideali grazie a tecniche SEO avanzate e contenuti ottimizzati.',
      href: 'seo',
      icon: MagnifyingGlassIcon,
    },
    {
      name: 'Converti Visitatori in Clienti',
      description: 'Ottimizza la tua presenza online e trasforma i visitatori in clienti fedeli. Approcci basati su dati per garantire risultati misurabili.',
      href: 'cro',
      icon: CursorArrowRaysIcon,
    },
  ]
  
  const people = [
    {
      name: 'Marco Riformato',
      role: '',
      imageUrl:
        'rifo.jpg',
      bio: 'Nato e cresciuto tra l\'isola d\'Elba e Firenze, sono uno sviluppatore da diversi anni. Il mio obiettivo principale è aiutare le aziende legali in Italia a crescere e prosperare online. Con le mie competenze in sviluppo, SEO e CRO, mi impegno a offrire soluzioni su misura che generano risultati concreti. Se sei alla ricerca di un esperto che capisce le sfide uniche del settore legale e sa come superarle, sono qui per te. Facciamo crescere insieme la tua presenza online!',
      twitterUrl: '#',
      linkedinUrl: '#',
    },
  ]
  
  const sviluppi = [
  {
  name: 'Gestionale CMS integrato',
  description: 'Seppure offriamo dei servizi di creazione contenuti nei nostri pacchetti SEO e CRO, avrai comunque la possibilità di gestire facilmente i contenuti del tuo sito con un sistema CMS integrato. Crea e modifica articoli, servizi e altro in libertà, senza complicazioni.',
  icon: CloudArrowUpIcon,
  },
  {
  name: 'Sistema di prenotazione online',
  description: 'Vogliamo aiutarti a risparmiare tempo. Il sistema di prenotazione ti darà modo di riservare una finestra oraria da te decisa, durante la quale clienti e potenziali clienti potranno fissare una chiamata. Niente più chiamate dell\' ultimo momento o messaggi su whatsapp per chiedere aggiornamenti.',
  icon: LockClosedIcon,
  },
  {
  name: 'Sviluppo su misura',
  description: 'Oltre la metà della ricerche oggi avviene dal cellulare, per questo offriamo design ottimizzati per dispositivi mobili. Costruiamo il sito da zero, evitando template standard che rallentano e omologano il web. Questo assicura un\'identità digitale unica per il tuo studio e una rapidità essenziale per mantenere gli utenti interessati. Ogni dettaglio è pensato per un\'esperienza d\'uso fluida e piacevole',
  icon: CloudArrowUpIcon,
  }
  ]

  const seos = [
  {
  name: 'Analisi Situazionale e Piano d\'Azione',
  description: 'Comprendiamo il punto di partenza e gli obiettivi specifici del tuo studio legale per sviluppare un piano SEO personalizzato e pratico. Il nostro approccio mira a tracciare una strada chiara verso la visibilità online e il raggiungimento dei tuoi traguardi commerciali',
  icon: CloudArrowUpIcon,
  },
  {
  name: 'Strategia di Contenuto e Ottimizzazione Keyword',
  description: 'Elaboriamo una strategia di contenuti focalizzata e una ricerca approfondita delle parole chiave per posizionarti come punto di riferimento nel settore legale. Attraverso contenuti ottimizzati, miriamo a migliorare il tuo ranking sui motori di ricerca e ad attrarre un pubblico qualificato sul tuo sito.',
  icon: LockClosedIcon,
  },
  {
  name: 'SEO Locale per la Visibilità nell\'Area di Competenza',
  description: 'Assicuriamo che il tuo studio legale emerga nelle ricerche locali, dove potenziali clienti cercano i servizi che offri. La nostra strategia SEO locale è progettata per aumentare la tua presenza nelle ricerche geografiche pertinenti, portando a un maggior numero di contatti e consulenze.',
  icon: CloudArrowUpIcon,
  }
  ]

  const cros = [
  {
  name: 'Massimizza le Conversioni del Tuo Sito Attuale',
  description: 'Se hai già un sito web, analizziamo in profondità la tua presenza online per scoprire come incrementare le conversioni. Riceverai un report con strategie concrete per trasformare i visitatori in clienti, pronto per essere implementato dalla tua attuale agenzia.',
  icon: CloudArrowUpIcon,
  },
  {
  name: 'Sviluppo Web su Misura per la Tua Crescita',
  description: 'Se ci affidi la creazione del tuo nuovo sito, lo progetteremo per massimizzare le conversioni fin dall\'inizio. Questo significa che implementeremo strumenti come test A/B, tracciamento del mouse, registrazione delle sessioni e chiediamo feedback ai tuoi visitatori. Inoltre, il tuo sito sarà in costante evoluzione, adattandosi alle preferenze dei tuoi clienti e alle nuove tendenze di mercato. L\'obiettivo è avere un sito web che funziona bene e porta risultati sempre.',
  icon: LockClosedIcon,
  },
  {
  name: 'Supporto Strategico e Monitoraggio Costante',
  description: 'Ogni mese, riceverai report dettagliati sulle prestazioni del tuo sito e del tuo settore di competenza, offrendoti una visione chiara di come stai andando e dove puoi migliorare. Inoltre, manteniamo una comunicazione regolare con chiamate settimanali per discutere strategie e feedback. Questo approccio integrato ti fornisce supporto in tempo reale e ti tiene sempre un passo avanti rispetto alla concorrenza.',
  icon: CloudArrowUpIcon,
  }
  ]
  
  const navigation = [
      { name: 'Product', href: '#' },
      { name: 'sviluppi', href: '#' },
      { name: 'Marketplace', href: '#' },
      { name: 'Company', href: '#' },
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
      question: "Quanto tempo ci vuole per vedere i risultati?",
  
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
  
  const mobileMenuOpen = ref(false)
  </script>