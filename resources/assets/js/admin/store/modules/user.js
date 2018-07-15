export const SET_LIST_USER = 'SET_LIST_USER'
export const UPDATE_LIST_USER = 'UPDATE_LIST_USER'

const state = {
    listUser: [],
}

const getters = {

}

const mutations = {
    [SET_LIST_USER] (state, data) {
        state.listUser = data
    },
    [UPDATE_LIST_USER] (state, data) {
        let indexCate = _.findIndex(state.listUser, function(o) { return o.id == data.id });
        state.listUser[indexCate] = data
        state.listUser = state.listUser.slice(0)
    }
};
var url = 'http://laravel56.local.com/api/user';
const actions = {
    getUserList({ commit, state }) {
        return new Promise(function (resolve, reject) {
            axios.get(`${url}`).then(res => {
                commit(SET_LIST_USER, res.data.data)
                resolve('ok')
            }).catch(err => {
                reject('fail')
            })
        })
    },
    createUser({commit, state}, data) {
        return axios.post(url, data)
    },
    updateUser({commit, state}, data) {
        axios.post(`${stamp_url}/${data.id}`, data).then(res => {
            console.log(res);
        }).catch(err=> {
            console.log(err);
        })

    },
    deleteUser({commit, state}, id) {
        axios.post(`${url}/${id}`, { _method: 'DELETE' }).then(res => {
            console.log(res);
        }).catch(err=> {
            console.log(err);
        })

    },
    changePass({commit, state}, data){
        axios.post(`${url}/${id}`, data).then(res => {
            console.log(res);
        }).catch(err=> {
            console.log(err);
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
