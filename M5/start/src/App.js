import { BrowserRouter, Route, Routes } from "react-router-dom";
import ProductIndex from "./pages/products/Index";
import ProductCreate from "./pages/products/Create";
import ProductEdit from "./pages/products/Edit";
import ProductShow from "./pages/products/Show";

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<ProductIndex />} />
        <Route path="/create" element={<ProductCreate />} />
        <Route path="/edit" element={<ProductEdit />} />
        <Route path="/show" element={<ProductShow />} />
      </Routes>
    </BrowserRouter>
  );
}

export default App;
