import axios from 'axios';

const csrfToken = document.head.querySelector('meta[name="csrf-token"]');

const instance = axios.create({
    baseURL: 'https://localhost/',
    timeout: 2000,
    headers: {},
});

instance.defaults.headers.common['csrf-token'] = csrfToken;

export const http = instance;