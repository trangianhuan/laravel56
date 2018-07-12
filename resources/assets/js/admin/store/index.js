import Vuex from 'vuex'
import Vue from 'vue';
import article from './modules/article.js'
import user from './modules/user.js'

Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production';

export default new Vuex.Store({
    //Assign the modules to the store
    modules: {
        article: article,
        user: user
    },
    // #root state
    state: {
        loading: false,
    },
    // #root mutations
    mutations: {

    },

    // root actions
    actions: {

    },
    // If strict mode should be enabled
    strict: debug,
});
