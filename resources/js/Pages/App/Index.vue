<template>
    <div>
        <mt-tab-container v-model="selected">
            <mt-tab-container-item id="index">
                <el-button type="primary">上传<i class="el-icon-upload el-icon--right"></i></el-button>
                <div>A</div>
            </mt-tab-container-item>
            <mt-tab-container-item id="list">
                <div>B</div>
            </mt-tab-container-item>
            <mt-tab-container-item id="activity">
                <div>C</div>
            </mt-tab-container-item>
            <mt-tab-container-item id="mine">
                <div>D</div>
            </mt-tab-container-item>
        </mt-tab-container>

        <mt-tabbar v-model="selected">
            <mt-tab-item id="index">
                <img slot="icon" src="">
                首页
            </mt-tab-item>
            <mt-tab-item id="list">
                <img slot="icon" src="">
                列表
            </mt-tab-item>
            <mt-tab-item id="activity">
                <i slot="icon" class="el-icon-share"></i>
                活动
            </mt-tab-item>
            <mt-tab-item id="mine">
                <img slot="icon" src="">
                我的
            </mt-tab-item>
        </mt-tabbar>
    </div>
</template>>

<script>
export default {
    props: ['data'],
    data:function() {
        return {
            selected: "index",
        }
    }
}
</script>
