import React, { Component } from 'react';
import { HashRouter , Route, Switch} from 'react-router-dom';
import './App.css';
import AtHome from "./scenes/teams/athome";
import Home from "./scenes/home";
import Header from "./scenes/header";
import Teams from "./scenes/teams/home";
import {getSceneLanguage} from "./utils/getSceneLanguage";


class App extends Component {
  render() {
    return (
      <div className="App">
        <HashRouter>
          <Route path="/" render={
              (props) => <Header {...props} />
          }/>
          <Switch>
            <Route exact path="/" render={
                (props) => <Home lang={getSceneLanguage(props)} />
            }/>
            <Route exact path="/atHome" render={
                (props) => <AtHome lang={getSceneLanguage(props)} />
            }/>
            <Route exact path="/teams" render={
                (props) => <Teams lang={getSceneLanguage(props)} />
            }/>
          </Switch>
        </HashRouter>
      </div>
    );
  }
}

export default App;
