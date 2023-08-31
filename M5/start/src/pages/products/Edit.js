import React from 'react';
import { useParams } from 'react-router-dom';

function Edit(props) {
    const {id} = useParams();
    return (
        <div>
            <h1>Product Edit: {id}</h1>
        </div>
    );
}

export default Edit;