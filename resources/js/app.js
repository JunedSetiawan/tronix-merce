import "./bootstrap";
import "../css/app.css";
import "@protonemedia/laravel-splade/dist/style.css";
import Splide from "@splidejs/splide";
import "@splidejs/splide/dist/css/splide.min.css";


import ThemeToggle from "./components/ThemeToggle.vue";

// import "ionicons/dist/ionicons.js";

import { createApp } from "vue/dist/vue.esm-bundler.js";
import { renderSpladeApp, SpladePlugin } from "@protonemedia/laravel-splade";

const el = document.getElementById("app");



createApp({
    render: renderSpladeApp({ el }),
})
    .use(SpladePlugin, {
        max_keep_alive: 10,
        transform_anchors: true,
        progress_bar: true,
    })
    .component("theme-toggle", ThemeToggle)
    .mount(el);

    if (document.querySelector('.splide')) {
  let splide = new Splide(".splide", {
    type: "loop",
    focus: 0,
    gap: "1rem",
    perPage: 4,
    breakpoints: {
      640: {
        perPage: 2,
      },
      480: {
        perPage: 1,
      },
    },
  });

  splide.mount();
}