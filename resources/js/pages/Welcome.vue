<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

type Props = {
    referralLink: string;
}

const props = defineProps<Props>();

const openFaq = ref<number | null>(null);

const toggleFaq = (index: number) => {
    openFaq.value = openFaq.value === index ? null : index;
};

const features = [
    {
        icon: '🎮',
        title: 'Полное оформление в стиле Minecraft',
    },
    {
        icon: '💣',
        title: 'Каскадные символы и взрывы блоков',
    },
    {
        icon: '🔥',
        title: 'Бонусная игра с множителями',
    },
    {
        icon: '💎',
        title: 'Максимальный выигрыш — ×5000',
    },
    {
        icon: '📱',
        title: 'Идеально работает на телефоне',
    },
];

const faqs = [
    {
        question: 'Что такое Minedrop?',
        answer: 'Minedrop — слот в стиле Майнкрафт с каскадами, бонусами и множителями до ×5000.',
    },
    {
        question: 'Где играть в Minedrop?',
        answer: 'Minedrop доступен только на платформе 1win.',
    },
    {
        question: 'Есть ли фриспины?',
        answer: 'Да, слот имеет фриспины и бонусные раунды с повышенными множителями.',
    },
    {
        question: 'Подходит ли Minedrop для телефона?',
        answer: 'Да, слот полностью адаптирован под мобильные устройства.',
    },
];
</script>

<template>
    <Head title="Minedrop — слот в стиле Майнкрафт с бонусами и фриспинами МАЙНДРОП">
        <meta name="description" content="Minedrop — это новый слот на платформе 1win, выполненный в стиле Майнкрафт. Каскадные символы, множители, бонусы и шанс выиграть до ×5000!" />
    </Head>

    <main class="min-h-screen bg-black text-white mx-auto max-width-[1120px]">
        <!-- Header -->
        <header class="fixed w-full bottom-0 bg-orange-500">
            <div class="mx-auto flex h-16 max-w-5xl items-center justify-between px-4">
                <a href="/" class="flex items-center gap-2">
                    <img src="/images/hero.jpg" alt="Minedrop" class="h-10 w-10 rounded" />
                    <span class="text-xl font-bold text-[#9DFF20]">Minedrop</span>
                </a>
                <a
                    :href="props.referralLink"
                    target="_blank"
                    rel="noopener"
                    class="rounded-lg bg-[#0A8B1C] px-6 py-2.5 font-semibold text-white transition-all hover:bg-[#0A8B1C]/90 hover:shadow-lg hover:shadow-[#0A8B1C]/25"
                >
                    ИГРАТЬ
                </a>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="px-4 py-16 lg:py-24">
            <div class="mx-auto max-w-5xl">
                <div class="flex flex-col items-center gap-8 lg:flex-row lg:gap-12">
                    <!-- Hero Image -->
                    <div class="flex-shrink-0">
                        <img
                            src="/images/hero.jpg"
                            alt="Minedrop - слот в стиле Майнкрафт"
                            class="h-64 w-64 rounded-2xl shadow-2xl shadow-[#9DFF20]/20 lg:h-80 lg:w-80"
                        />
                    </div>
                    <!-- Hero Content -->
                    <div class="text-center lg:text-left">
                        <h1 class="mb-6 text-4xl font-bold leading-tight lg:text-5xl">
                            Minedrop — Слот в стиле Майнкрафт на 1win
                        </h1>
                        <p class="mb-8 text-lg text-gray-400">
                            Minedrop — это новый слот на платформе 1win, выполненный в стиле Майнкрафт.
                            Здесь тебя ждут каскадные символы, множители, эпичные бонусы и шанс выиграть до ×5000 твоей ставки!
                        </p>
                        <a
                            :href="props.referralLink"
                            target="_blank"
                            rel="noopener"
                            class="inline-flex items-center gap-2 rounded-lg bg-[#9DFF20] px-8 py-4 text-lg font-bold text-black transition-all hover:bg-[#9DFF20]/90 hover:shadow-lg hover:shadow-[#9DFF20]/25"
                        >
                            Играть в Minedrop на 1win
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="border-t border-[#1a1a1a] px-4 py-16">
            <div class="mx-auto max-w-5xl">
                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-5">
                    <div
                        v-for="(feature, index) in features"
                        :key="index"
                        class="flex items-center gap-3 rounded-xl bg-[#1a1a1a] p-4 transition-all hover:bg-[#222]"
                    >
                        <span class="text-2xl">{{ feature.icon }}</span>
                        <span class="text-sm font-medium">{{ feature.title }}</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="px-4 py-12">
            <div class="mx-auto max-w-5xl text-center">
                <p class="mb-6 text-xl font-semibold">Начни играть прямо сейчас!</p>
                <a
                    :href="props.referralLink"
                    target="_blank"
                    rel="noopener"
                    class="inline-flex items-center gap-2 rounded-lg bg-[#0A8B1C] px-8 py-4 text-lg font-bold text-white transition-all hover:bg-[#0A8B1C]/90 hover:shadow-lg hover:shadow-[#0A8B1C]/25"
                >
                    Перейти к игре
                </a>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="border-t border-[#1a1a1a] px-4 py-16">
            <div class="mx-auto max-w-3xl">
                <h2 class="mb-12 text-center text-3xl font-bold">Часто задаваемые вопросы</h2>
                <div class="space-y-4">
                    <div
                        v-for="(faq, index) in faqs"
                        :key="index"
                        class="overflow-hidden rounded-xl bg-[#1a1a1a]"
                    >
                        <button
                            class="flex w-full items-center justify-between p-5 text-left font-medium transition-colors hover:bg-[#222]"
                            @click="toggleFaq(index)"
                        >
                            <span>{{ faq.question }}</span>
                            <svg
                                class="h-5 w-5 shrink-0 text-[#9DFF20] transition-transform duration-200"
                                :class="{ 'rotate-180': openFaq === index }"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div
                            class="grid transition-all duration-200"
                            :class="openFaq === index ? 'grid-rows-[1fr]' : 'grid-rows-[0fr]'"
                        >
                            <div class="overflow-hidden">
                                <p class="px-5 pb-5 text-gray-400">{{ faq.answer }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="border-t border-[#1a1a1a] px-4 pt-4 pb-20">
            <div class="mx-auto max-w-5xl text-center">
                <p class="mb-4 text-sm uppercase tracking-wide text-gray-500">
                    ИГРАЙТЕ ОТВЕТСТВЕННО. ТОЛЬКО ДЛЯ ЛИЦ СТАРШЕ 18 ЛЕТ.
                </p>
                <p class="text-sm text-gray-600">
                    &copy; 2025 MINEDROPINFO, ВСЕ ПРАВА ЗАЩИЩЕНЫ.
                </p>
            </div>
        </footer>
    </main>
</template>
