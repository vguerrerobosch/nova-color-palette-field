Nova.booting((Vue, router, store) => {
    Vue.component('index-color-palette', require('./components/IndexField'))
    Vue.component('detail-color-palette', require('./components/DetailField'))
    Vue.component('form-color-palette', require('./components/FormField'))
})
