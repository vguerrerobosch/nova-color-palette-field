<template>
    <span class="block h-6 border border-80 rounded" :style="{ backgroundColor: `#${field.value}`, width: '3rem'}"></span>
</template>

<script>
export default {
    props: ['resourceName', 'field'],
}
</script>
