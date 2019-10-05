
export default {
  namespaced: true,
  state: {
    navVisibility: true,
    categories: null
  },
  mutations: {
    updateNavVisibility(state, visibility) {
      state.navVisibility = visibility;
    },
    updateCategories(state, categories) {
      state.categories = categories;
    }
  },
 
};
