import { BrowserRouter, Route, Routes } from "react-router-dom";
import ProductIndex from "./pages/products/Index";
import ProductCreate from "./pages/products/Create";
import ProductEdit from "./pages/products/Edit";
import ProductShow from "./pages/products/Show";

// Import thư viện để lấy state từ store
import { useSelector, useDispatch } from "react-redux";
import { DEPOSIT } from "./redux/action";

function App() {
  const dispatch = useDispatch();
  const deposit_amount = useSelector( state => state.deposit_amount )

  const handleDeposit = () => {
    // let action = {
    //   type: DEPOSIT,
    //   payload: 10
    // }
    dispatch({
      type: DEPOSIT,
      payload: 10
    });
  }

  return (
    <>
    <div>
      Số tiền đóng góp hiện tại: {deposit_amount}
      <br/>
      <button onClick={ handleDeposit }>Depostit 10$</button>
    </div>
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<ProductIndex />} />
        <Route path="/create" element={<ProductCreate />} />
        <Route path="/edit/:id" element={<ProductEdit />} />
        <Route path="/show/:id" element={<ProductShow />} />
      </Routes>
    </BrowserRouter>
    </>
    
  );
}

export default App;
