<script setup>
import { computed } from "vue";
import { useStore } from "vuex";

import { Head } from "@inertiajs/vue3";

const store = useStore();
const isUserLogin = computed(() => store.state.STORE_SESSION.isUserLogin);
</script>

<template>
    <Head title="Welcome" />

    <template v-if="isUserLogin">
        <router-view />
    </template>
    <template v-else>
        <div class="w-full flex justify-center">tes ini asdlaskdklah</div>
    </template>
</template>
