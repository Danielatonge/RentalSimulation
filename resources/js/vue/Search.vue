<template>
    <div>
        <el-row :gutter="20">
            <el-col :xs="12" :sm="12" :md="16">
                <div class="grid-content">
                    <el-input placeholder="Enter name" v-model="name" @change="fetchGivenParams">
                        <template slot="prepend">Search</template>
                    </el-input>
                </div>
            </el-col>
            <el-col :xs="6" :sm="6" :md="4">
                <div class="grid-content">
                    <el-input
                        @change="fetchGivenParams"
                        type="number"
                        placeholder="Start price"
                        v-model="startPrice">
                    </el-input>
                </div>
            </el-col>
            <el-col :xs="6" :sm="6" :md="4">
                <div class="grid-content">
                    <el-input
                        @change="fetchGivenParams"
                        type="number"
                        controls-position="right"
                        placeholder="End price"
                        v-model="endPrice">
                    </el-input>
                </div>
            </el-col>
        </el-row>
        <el-row :gutter="20">
            <el-col :xs="12" :sm="6" :md="4">
                <div class="grid-content">
                    <div class="input-label">
                        Enter bedroom:
                    </div>
                    <el-input
                        @change="fetchGivenParams"

                        v-model="bedrooms">
                    </el-input>
                </div>
            </el-col>
            <el-col :xs="12" :sm="6" :md="4">
                <div class="grid-content">
                    <div class="input-label">
                        Enter bathroom:
                    </div>
                    <el-input
                        @change="fetchGivenParams"

                        v-model="bathrooms">
                    </el-input>
                </div>
            </el-col>
            <el-col :xs="12" :sm="6" :md="4">
                <div class="grid-content">
                    <div class="input-label">
                        Enter storey:
                    </div>
                    <el-input
                        @change="fetchGivenParams"
                        v-model="storeys">
                    </el-input>
                </div>
            </el-col>
            <el-col :xs="12" :sm="6" :md="4">
                <div class="grid-content ">
                    <div class="input-label">
                        Enter garage:
                    </div>
                    <el-input
                        @change="fetchGivenParams"
                        v-model="garage">
                    </el-input>
                </div>
            </el-col>

        </el-row>
        <el-row class="result-section">
            <el-col :xs="24" :md="24">
                <TableView :items="tableData" :loading="loading"/>
            </el-col>
        </el-row>
    </div>
</template>

<script>
import axios from 'axios';
import TableView from "./TableView";

export default {
    name: "Search",
    components: {TableView},
    data() {
        return {
            name: null,
            startPrice: null,
            endPrice: null,
            bedrooms: null,
            bathrooms: null,
            storeys: null,
            garage: null,
            tableData: [],
            loading: false,
        }
    },
    methods: {
        async fetchGivenParams() {
            this.done = false;
            this.loading = true;
            const {name, startPrice, endPrice, bedrooms, bathrooms, storeys, garage} = this;
            const url = `/api?name=${name}&startPrice=${startPrice}&endPrice=${endPrice}`
                + `&bedrooms=${bedrooms}&bathrooms=${bathrooms}&storeys=${storeys}&garage=${garage}`;
            axios.get(url).then((response) => {
                this.tableData = response.data;
                this.done = true;
                this.loading = false;
            })
        },
        async fetchItems() {
            this.done = false;
            this.loading = true;
            axios.get('/api/rentals').then((response) => {
                this.tableData = response.data;
                this.done = true;
                this.loading = false;
            })
        }
    },
    mounted() {
        this.fetchItems()
    }
}
</script>

<style>
.el-row {
    margin-bottom: 20px;
}

.el-col {
    border-radius: 4px;
}

.grid-content {
    border-radius: 4px;
    min-height: 36px;
}

.input-label {
    margin-bottom: 5px;
    padding-left: 2px;
}

.grid-content {
    margin-bottom: 12px;
}

.result-section {
    margin-top: 50px;
}
</style>
