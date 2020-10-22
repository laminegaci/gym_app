<template>
    <Layout>
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>this is the page {{ message }} </h1>
                    <p v-text="firstName"></p>
                    <p v-html="lastName">{{ lastName }}</p>
                    <input type="text" v-model="lastName">
                    <p>{{ input }}</p>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from "./../../Shared/Layout";
export default {
    components: {
        Layout
    },

     data: function() {
         return {
            firstName: 'Fooooo',
            lastName: '<strong>Barrrr</strong>',
            input: 'aaa'
         }
    },

    props: ['message'],
}
</script>
