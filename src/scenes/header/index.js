import React, { Component } from 'react';
import brand from '../../images/PQMEC_Logo4.png';
import { NavLink, withRouter } from 'react-router-dom';
import {getLanguageText} from "../../texts";
import {getSceneLanguage} from "../../utils/getSceneLanguage";

class Header extends Component {

  render(){
    const lang = getSceneLanguage(this.props);
    // const {path} = this.props.location.path;
    // const {location:{pathname}} = this.props;
    return (
      <div className='header-main'>
        <NavLink to="/" style={{marginRight: 20}}>
          <img
            src={brand}
            height="35"
            alt="Pequi Mecânico"
          />
        </NavLink>
        <NavLink to="/about" className='header-links'>{getLanguageText("ABOUT_US",lang)}</NavLink>
        <NavLink to="/teams" className='header-links'>{getLanguageText("TEAMS",lang)}</NavLink>
        <NavLink to="/contact" className='header-links'>{getLanguageText("CONTACT",lang)}</NavLink>
        <div style={{flex: 1}}/>
        <NavLink to={'/'} className='header-links'>{getLanguageText("LANGUAGE",lang)}</NavLink>
      </div>
    )
  }
}

export default withRouter(Header);