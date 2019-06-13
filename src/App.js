import React, { Component } from 'react';
import { HashRouter , Route, Switch} from 'react-router-dom';
import './App.css';
import AtHome from "./scenes/teams/athome";
import Home from "./scenes/home";
import Header from "./scenes/header";
import Teams from "./scenes/teams/home";
import Sek from './scenes/teams/sek';

class App extends Component {
  render() {
    return (
      <div className="App">
        <HashRouter>
          <Header/>
          <Switch>
            <Route exact path="/" component={Home}/>
            <Route exact path="/atHome" component={AtHome}/>
            <Route exact path="/sek" component={Sek}/>
            <Route exact path="/teams" component={Teams}/>
          </Switch>
        </HashRouter>
      </div>
    );
  }
}

export default App;
