<template>
    <div>
        <button
            v-for="link in links"
            :key="link.url"
            :disabled="!link.url"
            @click="$emit('change', link.url)"
            v-html="link.label"
        ></button>
    </div>
</template>

<script>
export default {
    props: {
        links: Array,
    },
};
</script>
