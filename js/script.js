const { createApp } = Vue

createApp({
    data() {
        return {
            albums: []
        };
    },
    mounted() {
        axios.get('../json/albums.json')
            .then(response => {
                this.albums = response.data;
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    }
}).mount('#app');




