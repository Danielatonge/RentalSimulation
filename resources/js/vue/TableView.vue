<template>
    <el-table
        v-if="items.length"
        v-loading="loading"
        :data="items"
        height="500"
        style="width: 100%">
        <el-table-column
            prop="name"
            label="Name"
            width="250">
        </el-table-column>
        <el-table-column
            prop="price"
            label="Price"
            width="180">
        </el-table-column>
        <el-table-column
            prop="bedrooms"
            label="Bedroom"
            width="100">
        </el-table-column>
        <el-table-column
            prop="bathrooms"
            label="Bathroom"
            width="100">
        </el-table-column>
        <el-table-column
            prop="storeys"
            label="Storey"
            width="100">
        </el-table-column>
        <el-table-column
            prop="garages"
            label="Garage"
            width="100">
        </el-table-column>
    </el-table>
    <div v-else>
        No Results Found
    </div>
</template>

<script>
export default {
    name: "TableView",
    props: {
        items: Array,
        loading: {
            type: Boolean,
            required: true
        }
    },

}
</script>

<style scoped>

</style>
