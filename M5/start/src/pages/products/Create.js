import React from 'react';
import { Formik, Form, Field } from "formik";
import * as Yup from "yup";
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

    const handleSubmit = (values) => {
        console.log(values);
    }

    return (
        <div>
            <h1>Product Create</h1>
            <Formik
                initialValues={{
                    name: "",
                    price: "",
                }}
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