import React, { Component } from 'react';
import {FaExclamationTriangle} from "react-icons/fa";
import './App.css';

class App extends Component {
  render() {
    return (
      <div className="App">
        <header className="App-header">
          <p>
            <FaExclamationTriangle style={{color:'yellow', fontSize:60}}/>
          </p>
          <p>
            Site fora do ar!! Volte em breve.
          </p>
          <a
            className="App-link"
            href="https://www.instagram.com/pequimecanico/"
            target="_blank"
            rel="noopener noreferrer"
          >
            Siga o nosso instagram
          </a>
        </header>
      </div>
    );
  }
}

export default App;
