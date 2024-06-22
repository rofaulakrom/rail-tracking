import axios from 'axios';
import './bootstrap';

axios.get(process.env.MIX_API_URL + '/train/location')
    .then(response => {
    console.log(response.data);
    // Update the map with the response data
    })
    .catch(error => {
    console.error('There was an error!', error);
    });

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
