<template>
    <el-row justify="center" align="middle">
        <Search/>
    </el-row>
</template>

<script>
import Search from "./Search";

export default {
    name: "App",
    components: {Search},
    data() {
        return {}
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

.bg-purple-dark {
    background: #99a9bf;
}

.bg-purple {
    background: #d3dce6;
}

.bg-purple-light {
    background: #e5e9f2;
}

.grid-content {
    border-radius: 4px;
    min-height: 36px;
}

.row-bg {
    padding: 10px 0;
    background-color: #f9fafc;
}
</style>
