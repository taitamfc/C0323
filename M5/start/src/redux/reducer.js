// Import action
import { DEPOSIT, WITHDRAW } from "./action";

// Khai bao giá trị khởi tạo của state
const initialState = {
    deposit_amount: 0,
    withdraw_amount: 0
};

// Khai báo reducer
const rootReducer = (state = initialState, action) => {
    /*
    action = {
        type: DEPOSIT,
        payload: 10
    }
    */ 

    switch (action.type) {
        case DEPOSIT:
            return { ...state,deposit_amount:action.payload  }

            state.deposit_amount = action.payload;
            return state;

            break;
        case WITHDRAW:
            return { ...state,deposit_amount:action.payload  }
            break;
        default:
            return state; 
            break;
    }
}

// console.log('rootReducer',rootReducer);

export default rootReducer;