import { createStore } from "redux";

// Import reducer
import rootReducer from "./reducer";

const store = createStore(rootReducer);

console.log('store',store.getState());

export default store;