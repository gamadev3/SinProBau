import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    // server: {
    //     hmr: {
    //         host: "https://sinprobauru.com.br",
    //     },
    // },
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/navigation-bar.js",
                "resources/js/preview-image.js",
                "resources/js/submit-form.js",
                "resources/js/multi-step-form.js",
                "resources/js/become-a-member.js",
            ],
            refresh: true,
        }),
    ],
});
