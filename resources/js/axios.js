// resources/js/axios.js
import axios from "axios";

const instance = axios.create({
    baseURL: "http:localhost:8000/api/", // Replace with your API base URL
    headers: {
        "Content-Type": "application/json",
    },
});

export default instance;
