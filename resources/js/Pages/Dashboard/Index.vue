<template>
    <Layout>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>dashboard {{ data }} </h1>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from "./../../Shared/Layout";
export default {
    props: ['data'],

    components: {
        Layout
    }
}
</script>
