import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';

function Show(props) {
    // Khoi tao
    const {id} = useParams();
    const [product,setProduct] = useState({});

    // Mounting
    useEffect( () => {
         // Lấy từ localStorage
         let products = localStorage.getItem('products');
         products = JSON.parse(products);

         console.log(products[id]);

        //  Gan gia tri cho state
        setProduct(products[id]);
    },[] )


    return (
        <div>
            <h1>Product Show: {id}</h1>

            <p>{ product.name }</p>
            <p>{ product.price }</p>
        </div>
    );
}

export default Show;