import React from 'react';
import ReactDOM from 'react-dom';
import NavBar from "./includes/NavBar";
import Home from "./Home";

function Example() {
    return (
        <>
            <NavBar />
            <Home/>
        </>

    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
