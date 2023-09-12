import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import Product from '../../models/Product';
// import axios from 'axios';

function Index(props) {

    // Constructor
    const [products,setProducts] = useState([]);

    useEffect( () => {
        getAll();
    },[] );

    const getAll = () => {
        // const data = Product.getAll();
        // console.log(data);

        Product.all().then((res) => {
            console.log("Data:", res.data);
            setProducts(res.data);
        })
        .catch((error) => {
            console.log("Error:", error);
        })

        // axios.get('https://6083df209b2bed00170404a0.mockapi.io/angular/products').then((res) => {
        //     // console.log("Data:", res.data);
        //     setProducts(res.data);
        // })
        // .catch((error) => {
        //     // console.log("Error:", error);
        // })
    }

    const handleDelete = (id) => {
        Product.destroy(id).then((res) => {
            console.log("Data:", res.data);
            alert('Xoa thanh cong')

            // getAll();
        })
        .catch((error) => {
            console.log("Error:", error);
            alert('Xoa that bai')
        })
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
                            <td>{product.id}</td>
                            <td>{product.name}</td>
                            <td>{product.price}</td>
                            <td>
                                <Link to={'/show/' + product.id}>Show</Link> | 
                                <Link to={'/edit/' + product.id}>Edit</Link> |
                                <button onClick={ () => handleDelete(product.id) }>Delete</button>
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