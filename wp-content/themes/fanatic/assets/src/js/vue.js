import VueIsYourPasswordSafe from 'vue-isyourpasswordsafe'
Vue.use(VueIsYourPasswordSafe, {
    minLength: 8,
    maxLength: 64
});
