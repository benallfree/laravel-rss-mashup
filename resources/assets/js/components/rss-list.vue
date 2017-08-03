<template>
    <div class="chat-activity-list">
        <div v-show="isRefreshing" class="loading">
            Loading now.
        </div>
        <div v-for="rss in rssList" :key="rss.id" class="chat-element">
            <div class="media-body ">
                <small class="pull-right text-navy">{{ rss.time }}</small>
                <strong><a :href="rss.link">{{ rss.title }}</a></strong>
                <p class="m-b-xs">
                    {{ rss.content }}
                </p>
                <small class="text-muted">{{ rss.time }}</small>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            rssUrl: '',
        },
        data: function () {
            return {
                rssList: [],
                isRefreshing: true,
            };
        },
        mounted() {
            this.refreshList();
        },
        methods: {
            refreshList: function() {
                const instance = this;
                instance.isRefresing = true;

                axios.get(instance.rssUrl)
                    .then(function (response){
                       instance.rssList = response.data;
                       instance.isRefreshing = false;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }
    }
</script>