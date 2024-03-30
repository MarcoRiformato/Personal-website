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
import { CloudArrowUpIcon, LockClosedIcon, ServerIcon } from '@heroicons/vue/20/solid'

function openCalendlyPopup(event) {
event.preventDefault();
Calendly.initPopupWidget({ url: 'https://calendly.com/marco-riformato/incontro-di-valutazione' });
}

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