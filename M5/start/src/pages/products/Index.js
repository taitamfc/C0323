import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';

function Index(props) {

    // Constructor
    const [products,setProducts] = useState([]);

    useEffect( () => {
        // Lấy từ localStorage
        let productData = localStorage.getItem('products');
        if(!productData){
            productData = []
        }else{
            productData = JSON.parse(productData);
        }
        setProducts(productData);
    },[] );

    const handleDelete = (id) => {
        let new_products = [...products];
        new_products.splice(id,1)
        setProducts(new_products);

        localStorage.setItem('products',JSON.stringify(new_products))
    }

    return (
        <div>
            <ul>
                <li> <Link to={'/'}>Product List</Link> </li>
                <li> <Link to={'/create'}>Product Add</Link> </li>
            </ul>
            <h1>Product Index</h1>
            <table border={1} width={'100%'}>
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                {
                    products.map( (product,index) => (
                        <tr key={index}>
                            <td>{index + 1}</td>
                            <td>{product.name}</td>
                            <td>{product.price}</td>
                            <td>
                                <Link to={'/show/' + index}>Show</Link> | 
                                <Link to={'/edit/' + index}>Edit</Link> |
                                <button onClick={ () => handleDelete(index) }>Delete</button>
                            </td>
                        </tr>
                    ))
                }
                </tbody>
                
            </table>
        </div>
    );
}

export default Index;