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
}
</script>

<style>

.main-content {
    padding: 20px 10px 0px 10px;
}

@media screen and (min-width: 1200px) {
    .main-content {
        padding-top: 50px;
    }
}
</style>
