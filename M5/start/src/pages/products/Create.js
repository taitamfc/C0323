import React, { useState } from 'react';
import { Formik, Form, Field } from "formik";
import * as Yup from "yup";
import { useNavigate } from 'react-router-dom';
const SignupSchema = Yup.object().shape({
    name: Yup.string()
        .min(2, "Too Short!")
        .max(50, "Too Long!")
        .required("Required"),
    price: Yup.string()
        .min(2, "Too Short!")
        .max(50, "Too Long!")
        .required("Required")
});

function Create(props) {
    let navigate = useNavigate();
    const [product,setProduct] = useState({
        name: "",
        price: "",
    })

    const handleSubmit = (values) => {
        // Lấy từ localStorage
        let products = localStorage.getItem('products');
        if(!products){
            // Nếu không có giá trị thì đặt mảng rỗng
            products = []
        }else{
            // Nếu có tượng tự json_decode
            products = JSON.parse(products);
        }
        products.push(values);

        // Lưu vào localStorage
        // JSON.stringify: json_encode
        localStorage.setItem('products',JSON.stringify(products))

        // Chuyen huong
        navigate("/");
    }

    return (
        <div>
            <h1>Product Create</h1>
            <Formik
                initialValues={product}
                validationSchema={SignupSchema}
                onSubmit={(values) => handleSubmit(values)}
            >
                {({ errors, touched }) => (
                    <Form>
                        <label htmlFor="name">Name</label>
                        <Field name="name" />
                        {errors.name && touched.name ? (
                            <div>{errors.name}</div>
                        ) : null}
                        <label htmlFor="price">Price</label>

                        <Field name="price" />
                        {errors.price && touched.price ? (
                            <div>{errors.price}</div>
                        ) : null}

                        <button type="submit">Submit</button>
                    </Form>
                )}
            </Formik>
        </div>
    );
}

export default Create;