<template>
    <div class="main-content">
        <el-row type="flex" justify="center">
            <el-col :xs="24" :sm="24" :md="24" :lg="12">
                <Search/>
            </el-col>
        </el-row>
    </div>
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

.main-content {
    padding: 20px 10px 0px 10px;
}

@media screen and (min-width: 1200px) {
    .main-content {
        padding-top: 50px;
    }
}


</style>
