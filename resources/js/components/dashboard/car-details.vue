<template>
    <Main>
        <section class="content" v-if="!loading">
            <div class="card card-solid">
                <div class="card-body">
                    <div class="row">
                        <!-- Main Car Image -->
                        <div class="col-12 col-sm-6">
                            <h3 class="d-inline-block d-sm-none">
                                {{ car.make }} {{ car.model }}
                            </h3>
                            <div class="col-12">
                                <img
                                    :src="`/storage/${car.image}`"
                                    class="product-image"
                                    alt="Product Image"
                                />
                            </div>
                            <div class="col-12 product-image-thumbs">
                                <!-- Thumbnails for Additional Images -->
                                <div
                                    v-for="image in car.images"
                                    :key="image.id"
                                    class="product-image-thumb"
                                    :class="{
                                        active: image.id === activeImageId,
                                    }"
                                >
                                    <img
                                        :src="`/storage/${image.image_path}`"
                                        alt="Product Image"
                                        @click="setActiveImage(image.id)"
                                    />
                                </div>
                            </div>
                        </div>

                        <!-- Car Details -->
                        <div class="col-12 col-sm-6">
                            <h3 class="my-3">{{ car.make }} {{ car.model }}</h3>
                            <p>
                                Raw denim you probably haven't heard of them
                                jean shorts Austin. Nesciunt tofu stumptown
                                aliqua butcher retro keffiyeh dreamcatcher
                                synth. Cosby sweater eu banh mi, qui irure terr.
                            </p>
                            <hr />

                            <h4 class="mt-3">
                                Size <small>Please select one</small>
                            </h4>
                            <div
                                class="btn-group btn-group-toggle"
                                data-toggle="buttons"
                            >
                                <label class="btn btn-default text-center">
                                    <input
                                        type="radio"
                                        name="color_option"
                                        id="color_option_b1"
                                        autocomplete="off"
                                    />
                                    <span class="text-xl">S</span>
                                    <br />
                                    Small
                                </label>
                                <label class="btn btn-default text-center">
                                    <input
                                        type="radio"
                                        name="color_option"
                                        id="color_option_b2"
                                        autocomplete="off"
                                    />
                                    <span class="text-xl">M</span>
                                    <br />
                                    Medium
                                </label>
                                <label class="btn btn-default text-center">
                                    <input
                                        type="radio"
                                        name="color_option"
                                        id="color_option_b3"
                                        autocomplete="off"
                                    />
                                    <span class="text-xl">L</span>
                                    <br />
                                    Large
                                </label>
                                <label class="btn btn-default text-center">
                                    <input
                                        type="radio"
                                        name="color_option"
                                        id="color_option_b4"
                                        autocomplete="off"
                                    />
                                    <span class="text-xl">XL</span>
                                    <br />
                                    Xtra-Large
                                </label>
                            </div>
                            <div class="bg-gray py-2 px-3 mt-4">
                                <h2 class="mb-0">$80.00</h2>
                                <h4 class="mt-0">
                                    <small>Ex Tax: $80.00 </small>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- Tabs for Additional Information -->
                    <div class="row mt-4">
                        <nav class="w-100">
                            <div
                                class="nav nav-tabs"
                                id="product-tab"
                                role="tablist"
                            >
                                <a
                                    class="nav-item nav-link active"
                                    id="product-desc-tab"
                                    data-toggle="tab"
                                    href="#product-desc"
                                    role="tab"
                                    aria-controls="product-desc"
                                    aria-selected="true"
                                    >Description</a
                                >
                                <a
                                    class="nav-item nav-link"
                                    id="product-comments-tab"
                                    data-toggle="tab"
                                    href="#product-comments"
                                    role="tab"
                                    aria-controls="product-comments"
                                    aria-selected="false"
                                    >Comments</a
                                >
                                <a
                                    class="nav-item nav-link"
                                    id="product-rating-tab"
                                    data-toggle="tab"
                                    href="#product-rating"
                                    role="tab"
                                    aria-controls="product-rating"
                                    aria-selected="false"
                                    >Rating</a
                                >
                            </div>
                        </nav>
                        <div class="tab-content p-3" id="nav-tabContent">
                            <div
                                class="tab-pane fade show active"
                                id="product-desc"
                                role="tabpanel"
                                aria-labelledby="product-desc-tab"
                            >
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Morbi vitae condimentum erat.
                                Vestibulum ante ipsum primis in faucibus orci
                                luctus et ultrices posuere cubilia Curae; Sed
                                posuere, purus at efficitur hendrerit, augue
                                elit lacinia arcu, a eleifend sem elit et nunc.
                                Sed rutrum vestibulum est, sit amet cursus dolor
                                fermentum vel. Suspendisse mi nibh, congue et
                                ante et, commodo mattis lacus. Duis varius
                                finibus purus sed venenatis. Vivamus varius
                                metus quam, id dapibus velit mattis eu. Praesent
                                et semper risus. Vestibulum erat erat,
                                condimentum at elit at, bibendum placerat orci.
                                Nullam gravida velit mauris, in pellentesque
                                urna pellentesque viverra. Nullam non
                                pellentesque justo, et ultricies neque. Praesent
                                vel metus rutrum, tempus erat a, rutrum ante.
                                Quisque interdum efficitur nunc vitae
                                consectetur. Suspendisse venenatis, tortor non
                                convallis interdum, urna mi molestie eros, vel
                                tempor justo lacus ac justo. Fusce id enim a
                                erat fringilla sollicitudin ultrices vel metus.
                            </div>
                            <div
                                class="tab-pane fade"
                                id="product-comments"
                                role="tabpanel"
                                aria-labelledby="product-comments-tab"
                            >
                                Vivamus rhoncus nisl sed venenatis luctus. Sed
                                condimentum risus ut tortor feugiat laoreet.
                                Suspendisse potenti. Donec et finibus sem, ut
                                commodo lectus. Cras eget neque dignissim,
                                placerat orci interdum, venenatis odio. Nulla
                                turpis elit, consequat eu eros ac, consectetur
                                fringilla urna. Duis gravida ex pulvinar mauris
                                ornare, eget porttitor enim vulputate. Mauris
                                hendrerit, massa nec aliquam cursus, ex elit
                                euismod lorem, vehicula rhoncus nisl dui sit
                                amet eros. Nulla turpis lorem, dignissim a
                                sapien eget, ultrices venenatis dolor. Curabitur
                                vel turpis at magna elementum hendrerit vel id
                                dui. Curabitur a ex ullamcorper, ornare velit
                                vel, tincidunt ipsum.
                            </div>
                            <div
                                class="tab-pane fade"
                                id="product-rating"
                                role="tabpanel"
                                aria-labelledby="product-rating-tab"
                            >
                                Cras ut ipsum ornare, aliquam ipsum non, posuere
                                elit. In hac habitasse platea dictumst. Aenean
                                elementum leo augue, id fermentum risus
                                efficitur vel. Nulla iaculis malesuada
                                scelerisque. Praesent vel ipsum felis. Ut
                                molestie, purus aliquam placerat sollicitudin,
                                mi ligula euismod neque, non bibendum nibh neque
                                et erat. Etiam dignissim aliquam ligula, aliquet
                                feugiat nibh rhoncus ut. Aliquam efficitur
                                lacinia lacinia. Morbi ac molestie lectus, vitae
                                hendrerit nisl. Nullam metus odio, malesuada in
                                vehicula at, consectetur nec justo. Quisque
                                suscipit odio velit, at accumsan urna vestibulum
                                a. Proin dictum, urna ut varius consectetur,
                                sapien justo porta lectus, at mollis nisi orci
                                et nulla. Donec pellentesque tortor vel nisl
                                commodo ullamcorper. Donec varius massa at
                                semper posuere. Integer finibus orci vitae
                                vehicula placerat.
                            </div>
                        </div>
                    </div>
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
            car: null,
            loading: true,
            activeImageId: null,
        };
    },
    mounted() {
        // Fetch data based on the ID in the route parameters
        const id = this.$route.params.id;

        this.fetchCarData(`http://127.0.0.1:8000/api/cars/${id}`);
    },
    methods: {
        async fetchCarData(url) {
            try {
                const response = await fetch(url);
                const data = await response.json();
                this.car = data;

                // Set the first image as the active image by default
                if (this.car.images.length > 0) {
                    this.activeImageId = this.car.images[0].id;
                }
            } catch (error) {
                console.error("Error fetching car data:", error);
            } finally {
                this.loading = false;
            }
        },
        setActiveImage(imageId) {
            this.activeImageId = imageId;
        },
    },
};
</script>

<style scoped>
.product-image {
    width: 100%;
    height: auto;
    max-height: 500px; /* Adjust as needed */
    object-fit: cover;
}

.product-image-thumb {
    width: 100px;
    height: 100px;
    margin: 5px;
    cursor: pointer;
    border: 2px solid transparent;
}

.product-image-thumb.active {
    border-color: #007bff;
}
</style>
