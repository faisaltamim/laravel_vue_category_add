<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div
                        class="card-header bg-dark d-flex justify-content-between align-items-center"
                    >
                        <h1 class=" mt-1 text-light">
                            All Categories List
                        </h1>
                        <router-link
                            :to="{ name: 'new-category' }"
                            class="btn btn-success"
                            >Create New</router-link
                        >
                    </div>

                    <div class="card-body">
                        <table border="1px" class="table ">
                            <thead class="">
                                <tr>
                                    <th style="width:70px">Serial No</th>
                                    <th style="width:70px">Database Id</th>
                                    <th>Category Name</th>
                                    <th>Category Slug</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="(single_cat, index) in categories"
                                    :key="single_cat.id"
                                >
                                    <td style="width:70px">{{ index + 1 }}</td>
                                    <td style="width:70px">
                                        {{ single_cat.id }}
                                    </td>
                                    <td>{{ single_cat.name }}</td>
                                    <td>{{ single_cat.slug }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            categories: []
        };
    },
    methods: {
        loadMyCategories() {
            axios.get("/api/category").then(myresponsedata => {
                this.categories = myresponsedata.data;
            });
        }
    },
    mounted() {
        this.loadMyCategories();
    }
};
</script>
