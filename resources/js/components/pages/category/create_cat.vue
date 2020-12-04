<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success">
                        <h1 class="text-center text-light">Create Category</h1>
                    </div>

                    <div class="card-body">
                        <div class="col-10 offset-1">
                            <form
                                class="form"
                                action=""
                                method=""
                                @submit.prevent="create_category()"
                            >
                                <div class="form-group">
                                    <label for="cat" class="font-weight-bold"
                                        >Category</label
                                    >
                                    <input
                                        type="text"
                                        v-model="catform.name"
                                        id="cat"
                                        name="cat"
                                        class="form-control form-sm"
                                        :class="{
                                            'is-invalid': catform.errors.has(
                                                'name'
                                            )
                                        }"
                                    />
                                    <has-error
                                        :form="catform"
                                        field="name"
                                    ></has-error>
                                </div>
                                <div class="form-group">
                                    <input
                                        type="submit"
                                        name="cat_sub"
                                        class="btn btn-outline-success btn-sm submit_form"
                                        value="Create Category"
                                    />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Form } from "vform";
export default {
    data() {
        return {
            catform: new Form({
                name: ""
            })
        };
    },
    methods: {
        create_category() {
            this.catform.post("/api/category").then(({ data }) => {
                this.catform.name = "";
            });
        }
    }
};
</script>
