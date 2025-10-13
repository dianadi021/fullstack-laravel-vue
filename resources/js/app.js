import "./bootstrap";
import router from "./router";
import { createApp, h } from "vue";
import { createStore } from "vuex";
import { createInertiaApp } from "@inertiajs/vue3";

const store = createStore({
	state() {
		return {
			STORE_SESSION: {
				_token: sessionStorage.getItem("_token"),
				isUserLogin: !!sessionStorage.getItem("_token")
			},
		};
	},
});

createInertiaApp({
    id: "app",
    resolve: (name) => {
        const pages = import.meta.glob("./**/*.vue", { eager: true });
        return pages[`./${name}.vue`];
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(router)
            .use(store)
            .use(plugin)
            .mount(el);
    },
});
