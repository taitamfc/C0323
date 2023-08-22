import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';

// ReactElement
const books = ['Van','Su','Dia']
const element = (
  <>
    <h1>Danh sach mon hoc</h1>
    <ul>
        {
          books.map( (book,key) => (
            <li>{key} -  {book} </li>
          ) )
        }
    </ul>

    <ul>
        {
          books.map( function(book,key){
            return (
              <li>{key} -  {book} </li>
            )
          })
        }
    </ul>
  </>
)

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(element);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
