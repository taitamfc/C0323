import { createStore } from "redux";
import { applyMiddleware } from "redux";

// Import reducer
import rootReducer from "./reducer";
import { DEPOSIT } from "./action";

const feeDeposit = (store) => (next) => (action) => {
    console.log("action", action);
    if( action.type == DEPOSIT ){
        action.payload = action.payload - 2;
    }
    next(action);
};

// const store = createStore(rootReducer);
const store = createStore(rootReducer, applyMiddleware(feeDeposit));



console.log('store',store.getState());

export default store;