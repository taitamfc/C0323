import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';

// ReactElement
const hello1 = React.createElement(
	"h1",
	{id: "msg", className: "title"},
	"Hello React Element"
);

const hello2 = (
  <h1 id="msg" className="title">
    Hello
  </h1>
)

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(hello1);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
