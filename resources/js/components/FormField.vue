<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">
            <div class="flex flex-wrap -mx-1">
                <template v-for="color in field.colors">
                    <div class="px-1 w-1/6 my-1">
                        <input
                            type="radio"
                            :name="field.attribute"
                            :id="`${field.attribute}_${color}`"
                            :value="color"
                            v-model="value"
                            class="hidden color-palette"
                        />
                        <label
                            :for="`${field.attribute}_${color}`"
                            class="block h-12 border border-80 rounded"
                            :style="{ 'backgroundColor': `#${color}` }"
                        >
                        </label>
                    </div>
                </template>
            </div>
        </template>
    </default-field>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],

    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.field.value || ''
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            formData.append(this.field.attribute, this.value || '')
        },

        /**
         * Update the field's internal value.
         */
        handleChange(value) {
            this.value = value
        },
    },
}
</script>
<style>
    .color-palette:checked + label {
        border-width: 2px;
        border-color: #444;
        box-shadow: 0 0 8px #4099de;
    }
</style>
