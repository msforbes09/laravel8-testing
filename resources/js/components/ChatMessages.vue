<template>
    <div class="content">
        <p v-for="message in messages">
            <strong>{{ message.user.name }} : </strong>
            {{ message.message }} 
        </p>
    </div>
</template>

<script>
    export default {
        props: ['messages']
    };
</script>
