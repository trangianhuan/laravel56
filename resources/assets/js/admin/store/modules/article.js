export const SET_LIST_ARTICLE = 'SET_LIST_ARTICLE'
export const UPDATE_LIST_ARTICLE = 'UPDATE_LIST_ARTICLE'

const state = {
    listArticle: [],
}

// getters
const getters = {

}

const mutations = {
    [SET_LIST_ARTICLE] (state, data) {
        state.listArticle = data
    },
    [UPDATE_LIST_ARTICLE] (state, data) {
        let indexCate = _.findIndex(state.listArticle, function(o) { return o.id == data.id });
        state.listArticle[indexCate] = data
        state.listArticle = state.listArticle.slice(0)
    }
};
var url = 'http://localhost:3000/articles';
const actions = {
    getArticleList({ commit, state }) {
        return new Promise(function (resolve, reject) {
            axios.get(`${url}`).then(res => {
                commit(SET_LIST_ARTICLE, res.data.data)
                resolve('ok')
            }).catch(err => {
                reject('fail')
            })
        })
    },
    createArticle({commit, state}, data) {
        return new Promise(function (resolve, reject) {
            axios.post(url, data, { headers: { 'Content-Type': 'multipart/form-data' } }).then(res => {
                console.log('create article',res);
                if (res.data.success) {
                    resolve(true)
                } else {
                    reject(false)
                }
            }).catch(err => {
                reject(err.response.data)
            })
        })
    },
    updateArticle({commit, state}, data) {
        return new Promise(function (resolve, reject) {
            axios.post(`${stamp_url}/${data.id}`, data.newData).then(res => {
                if (res.data.success) {
                    resolve(true)
                } else {
                    reject(false)
                }
            }).catch(err=> {
                reject(err.response.data)
            })
        })
    },
    deleteArticle({commit, state}, id) {
        return new Promise(function (resolve, reject) {
            axios.post(`${url}/${id}`, { _method: 'DELETE' }).then(res => {
                if(res.data.success) {
                    resolve(true)
                } else {
                    reject(false)
                }
            }).catch(err => {
                reject(false)
            })
        })
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}
