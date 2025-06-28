import './bootstrap';

import { createApp } from 'vue';

const app = createApp({});

// Importa e registra o componente WelcomeComponent
import WelcomeComponent from './components/WelcomeComponent.vue';
app.component('welcome-component', WelcomeComponent); // Registra com o nome 'welcome-component'

import RegisterFormComponent from './components/RegisterFormComponent.vue';
app.component('register-form-component', RegisterFormComponent);

app.mount('#app');