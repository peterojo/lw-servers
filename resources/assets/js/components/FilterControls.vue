<template>
    <div>
        <div class="filter-heading">
            <button v-if="hasFilters" class="btn btn-sm btn-danger pull-right" @click="clearFilters()">&times; Clear Filters</button>
            <h4>Filters</h4>
        </div>
        <div class="filter filter--btm-padding">
            <label>Storage Capacity</label>
            <vue-slider
                v-model="storageRange"
                :data="rangeSlider.data"
                :piecewise="true"
                :clickable="false"
                :tooltip-dir="rangeSlider.tooltipDir"
                @drag-end="rangeChanged"></vue-slider>
        </div>
        <div class="filter">
            <label>RAM Size</label>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="4gb" v-model="ramSizes"> 4 GB
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="8gb" v-model="ramSizes"> 8 GB
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="16gb" v-model="ramSizes"> 16 GB
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="32gb" v-model="ramSizes"> 32 GB
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="64gb" v-model="ramSizes"> 64 GB
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="128gb" v-model="ramSizes"> 128 GB
                </label>
            </div>
        </div>
        <div class="filter">
            <label>Hard Disk Type</label>
            <select class="form-control" v-model="hardDiskType" @change="diskTypeChanged">
                <option value="">Select Disk Type</option>
                <option>SAS</option>
                <option>SATA2</option>
                <option>SSD</option>
            </select>
        </div>
        <div class="filter">
            <label>Location</label>
            <select class="form-control" v-model="selectedlocation" @change="locationChanged">
                <option value="">Select Location</option>
                <option v-for="location in locations" :value="location.abbr">{{ location.name }}</option>
            </select>
        </div>
    </div>
</template>

<script>
    import vueSlider from 'vue-slider-component'

    export default {
        components: { vueSlider },

        data() {
            return {
                query               : {},
                ramSizes            : [],
                locations           : [],
                hardDiskType        : "",
                storageRange        : ['0', '0'],
                selectedlocation    : "",
                rangeSlider         : {
                    data            : [
                        '0', '250GB', '500GB', '1TB', '2TB', '4TB', '8TB', '12TB', '16TB', '24TB', '32TB'
                    ],
                    tooltipDir      : 'bottom'
                }
            }
        },

        watch: {
            ramSizes: function() {
                this.ramsChanged();
            }
        },

        methods: {
            pushQuery()
            {
                if (_.keys(this.query).length > 0) {
                    this.$router.push({
                        path    : 'filter',
                        query   : this.query
                    });
                } else {
                    this.$router.push({
                        path: '/'
                    });
                }
            },

            rangeChanged()
            {
                if (!(this.storageRange[0]=='0' && this.storageRange[1]=='0')) {
                    this.query['min_storage'] = this.storageRange[0];
                    this.query['max_storage'] = this.storageRange[1];
                } else {
                    delete this.query.min_storage;
                    delete this.query.max_storage;
                }
                this.pushQuery();
            },

            ramsChanged()
            {
                if (this.ramSizes.length > 0) {
                    this.query['ram'] = this.ramSizes.toString();
                } else {
                    delete this.query.ram;
                }
                this.pushQuery();
            },

            diskTypeChanged()
            {
                if (this.hardDiskType) {
                    this.query['disk_type'] = this.hardDiskType;
                } else {
                    delete this.query.disk_type;
                }
                this.pushQuery();
            },

            locationChanged()
            {
                if (this.selectedlocation) {
                    this.query['location'] = this.selectedlocation;
                } else {
                    delete this.query.location;
                }
                this.pushQuery();
            },

            clearFilters()
            {
                this.query = {};
                this.ramSizes = [];
                this.hardDiskType = "";
                this.storageRange = ['0', '0'];
                this.selectedlocation = "";

                setTimeout(() => {
                    this.$router.push({
                        path: '/'
                    });
                });
            },

            fetchLocations()
            {
                axios.get(route('locations.index'))
                    .then(response => {
                        this.locations = response.data.data;
                    });
            }
        },

        mounted()
        {
            this.fetchLocations();
        },

        computed: {
            hasFilters()
            {
                let filters = _.keys(this.$route.query);

                return filters.length > 0;
            }
        }
    }
</script>

<style scoped lang="scss">
    .filter-heading {
        border-bottom: 2px solid #1f648b;
        padding-bottom: 10px;

        & > h4 {
            font-weight:200;
            letter-spacing: 1rem;
        }
    }

    .filter {
        padding-top: 10px;
        border-bottom: 1px #d4d4d4 solid;
        padding-bottom: 20px;

        &.filter--btm-padding {
            padding-bottom: 40px;
        }
    }
</style>
