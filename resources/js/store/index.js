import axios from 'axios'

export default {
    state: {
        allCategoryItem: [],
    },
    getters: {
        allcategory(state){
            return state.allCategoryItem
        }
    },
    actions: {
        allCategory(context){
            axios.get('/all-category')
                .then((response) => {
                    context.commit('allcategory', response.data.categories)
                })
        }
    },
    mutations: {
        allcategory(state,payload){
            return state.allCategoryItem = payload
        }
    }
}
