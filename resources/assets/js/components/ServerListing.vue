<template>
    <div>
        <div class="row">
            <div v-if="loading" class="loading">
                <div class="spinner-wrapper">
                    <span class="spinner-text">LOADING...</span>
                    <span class="spinner"></span>
                </div>
            </div>
            <div class="col-md-12" v-if="!loading&&servers.length==0">
                <p>No results found.</p>
            </div>
            <div v-for="server in servers" class="col-sm-6 col-md-4 col-lg-3 listing">
                <div class="listing__image">
                    <img v-if="loadingImages" src="http://placehold.it/200X134?text=Loading+random+image..." alt="Loading..." class="img-thumbnail">
                    <img v-else :src="filteredRandomImages[_.random(0, randomImages.length-1)]" alt="Random Image" class="img-thumbnail">
                </div>
                <div class="listing__title">
                    <h5>{{ server.model }}</h5>
                </div>
                <div class="listing__info">
                    <span class="listing__price">{{ server.currency + server.price }}</span>
                    <div class="clearfix"></div>
                    <p class="listing__detail">{{ server.ram }}</p>
                    <p class="listing__detail">{{ server.storage }}</p>
                </div>
                <div class="listing__location">
                    <i class="glyphicon glyphicon-map-marker"></i> {{ server.location.data.name }}
                </div>
            </div>
        </div>
        <div>
            <button v-if="!loading&&servers.length==maxTotal" @click="loadMore()" class="btn btn-block btn-default">More</button>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                page    : 1,
                servers : [],
                loading : true,
                randomImages: [],
                loadingImages: true,
                _:null
            }
        },

        computed: {
            currentQuery()
            {
                return this.$route.query;
            },

            maxTotal()
            {
                return this.page * 20;
            },

            filteredRandomImages()
            {
                let images = [];

                if (this.randomImages.length > 0) {
                    _.each(this.randomImages, image => {
                        images.push(image.urls.small);
                    });
                }

                return images;
            }
        },

        watch: {
            currentQuery: function() {
                this.fetchServers();
            }
        },

        methods: {
            fetchServers()
            {
                this.page = 1;
                this.loading = true;
                this.servers = [];

                axios.post(route('servers.filter'), this.currentQuery)
                    .then(response => {
                        this.servers = response.data.data;
                        this.loading = false;
                    })
                    .catch(error => {
                        console.log(error);
                    });
            },

            loadMore()
            {
                this.loading = true;
                let query = this.currentQuery;
                query.page = this.page+1;

                axios.post(route('servers.filter'), query)
                    .then(response => {
                        this.servers = this.servers.concat(response.data.data);
                        this.loading = false;
                        this.page++;
                    })
                    .catch(error => {
                        console.log(error);
                    });
            },

            loadRandomImages()
            {
                axios.get('https://api.unsplash.com/search/photos?query=computing&per_page=30&client_id=4e452670da507128754b9877eeaea90b8447ae6aca120827df09ee0ba6eddf3a')
                    .then(response => {
                        this.randomImages = response.data.results;
                    })
                    .then(() => {
                        this.loadingImages = false;
                    })
                    .catch(() => {

                    });
            }
        },

        mounted()
        {
            this._ = _;
            this.fetchServers();
            this.loadRandomImages();
        }
    }
</script>
<style scoped lang="scss">
    .listing {
        margin-bottom: 20px;

        &__image {
            text-align: center;
            height: 134px;
            overflow-y: hidden;
        }

        &__title {
            color: #1f648b;
            height: 3em;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight:400;
        }

        &__price {
            color: #000;
            float: right;
            clear: both;
            border: solid 2px #1f648b;
            padding: 0 5px;
            font-size: 10px;
            border-radius: 5px;

            &:hover {
                color: #ffffff;
                background-color: #1f648b;
            }
        }

        &__detail {
            font-size: 12px;
            text-align: center;
            font-weight:300;
            border-bottom: 1px solid #efefef;
            text-transform: uppercase;
        }

        &__location {
            color: #636b6f;
            font-size: 1.2rem;
            font-family: "Arial Rounded", sans-serif;
            border-bottom: solid 1px #d4d4d4;
        }
    }

    .loading {
        animation:fadein 2s;

        @keyframes fadein {
            from {opacity:0}
            to {opacity:1}
        }

        .spinner-wrapper {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 5;
            position: fixed;
            transition: all .3s ease-out;
            background-color: rgba(255, 255, 255, 0.97);

            .spinner-text {position:absolute;top:41.5%;left:47%;margin:16px 0 0 35px;font-size:9px;font-family:Arial;color:#BBB;letter-spacing:1px;font-weight:700}

            .spinner {
                top:40%;
                left:45%;
                width:1px;
                margin:0;
                height:1px;
                border:25px solid rgba(100,100,100,0.2);
                display:block;
                position:absolute;
                animation:spin 1.5s infinite;
                border-radius:50px;
                border-left-color:transparent;
                border-right-color:transparent;
            }

            @keyframes spin  {
                0%,100% {transform:rotate(0deg) scale(1)}
                50%     {transform:rotate(720deg) scale(0.6)}
            }
        }
    }
</style>