import React from 'react';
import { Link } from 'react-router-dom';

function Index(props) {
    return (
        <div>
            <ul>
                <li> <Link to={'/'}>Product List</Link> </li>
                <li> <Link to={'/create'}>Product Add</Link> </li>
                <li> <Link to={'/edit/1'}>Product Edit</Link> </li>
            </ul>
            <h1>Product Index</h1>
        </div>
    );
}

export default Index;