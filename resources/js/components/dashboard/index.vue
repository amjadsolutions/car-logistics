<template>
    <Main>
        <section class="content">
            <div class="card card-solid">
                <div class="card-body pb-0">
                    <div class="row">
                        <!-- Render car items here -->
                        <div
                            v-for="car in cars"
                            :key="car.id"
                            class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column"
                        >
                            <div class="card bg-light d-flex flex-fill">
                                <div
                                    class="card-header text-muted border-bottom-0"
                                >
                                    {{ car.make }}
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead">
                                                <b>{{ car.model }}</b>
                                            </h2>

                                            <ul
                                                class="ml-4 mb-0 fa-ul text-muted"
                                            >
                                                <li class="small">
                                                    <span class="fa-li">
                                                        <i
                                                            class="fas fa-lg fa-calendar-alt"
                                                        ></i>
                                                    </span>
                                                    Year: {{ car.year }}
                                                </li>
                                                <br />
                                                <li class="small">
                                                    <span class="fa-li">
                                                        <i
                                                            class="fas fa-lg fa-dollar-sign"
                                                        ></i>
                                                    </span>
                                                    Price:
                                                    {{ car.price | currency }}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img
                                                :src="`/storage/${car.image}`"
                                                alt="car-image"
                                                class="img-circle img-fluid"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a
                                            :href="`/car/${car.id}`"
                                            class="btn btn-sm btn-primary"
                                        >
                                            <i class="fas fa-car"></i>&nbsp;
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <nav aria-label="Cars Page Navigation">
                        <ul class="pagination justify-content-center m-0">
                            <li
                                v-if="pagination.prev_page_url"
                                class="page-item"
                            >
                                <a
                                    class="page-link"
                                    @click="fetchData(pagination.prev_page_url)"
                                    >Previous</a
                                >
                            </li>
                            <li
                                v-for="page in pagination.last_page"
                                :key="page"
                                :class="{
                                    'page-item': true,
                                    active: page === pagination.current_page,
                                }"
                            >
                                <a
                                    class="page-link"
                                    @click="
                                        fetchData(
                                            pagination.path + `?page=${page}`
                                        )
                                    "
                                >
                                    {{ page }}
                                </a>
                            </li>
                            <li
                                v-if="pagination.next_page_url"
                                class="page-item"
                            >
                                <a
                                    class="page-link"
                                    @click="fetchData(pagination.next_page_url)"
                                    >Next</a
                                >
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </Main>
</template>

<script>
import Main from "./layouts/main.vue";

export default {
    name: "Index",
    components: {
        Main,
    },
    data() {
        return {
            cars: [],
            pagination: {
                current_page: 1,
                last_page: 1,
                next_page_url: null,
                prev_page_url: null,
                path: "",
            },
        };
    },
    mounted() {
        this.fetchData("http://127.0.0.1:8000/api/cars");
    },
    methods: {
        async fetchData(url) {
            try {
                const response = await fetch(url);
                const data = await response.json();
                this.cars = data.data;
                this.pagination = {
                    current_page: data.current_page,
                    last_page: data.last_page,
                    next_page_url: data.next_page_url,
                    prev_page_url: data.prev_page_url,
                    path: data.path,
                };
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        },
    },
};
</script>

<style scoped>
/* Scoped styles for the Dashboard Index page */
h1 {
    color: #333;
}
</style>
