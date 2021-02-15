import axios from 'axios'

export default {
    state: {
        allCategoryItem: [],
        allPostItem: [],
    },
    getters: {
        allcategory(state){
            return state.allCategoryItem
        },
        allpost(state){
            return state.allPostItem
        }
    },
    actions: {
        allCategory(context){
            axios.get('/all-category')
                .then((response) => {
                    context.commit('allcategory', response.data.categories)
                })
        },
        allPost(context){
            axios.get('/all-post')
                .then((response) => {
                    context.commit('allpost', response.data.posts)
                })
        }
    },
    mutations: {
        allcategory(state,payload){
            return state.allCategoryItem = payload
        },
        allpost(state,payload){
            return state.allPostItem = payload
        }
    }
}
