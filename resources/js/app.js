import { createApp } from "vue";
import App from "./components/App.vue";
import router from "./router";
import axios from "./axios"; // Import Axios instance

const app = createApp(App);
app.config.globalProperties.$http = axios; // Make Axios available globally

createApp(App).use(router).mount("#app");
