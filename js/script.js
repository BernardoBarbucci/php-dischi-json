const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: './script.php',
            albums: [],
        };
    },
    methods: {
        getAlbums() {
            axios.get(this.apiUrl).then((response) => {
                this.albums = response.data;
                console.log(response.data);
            });
        },
    },
    created() {
        this.getAlbums();
    },
}).mount('#app');