<template>
    <panel-item :field="field">
        <p slot="value"><span class="block h-8 border border-80 rounded" :style="{ backgroundColor: `#${field.value}`, width: '6rem'}"></span></p>
    </panel-item>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>
