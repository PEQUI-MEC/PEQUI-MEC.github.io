import React, { Component } from 'react';
import brand from '../../images/PQMEC_Logo4.png';
import { NavLink, withRouter } from 'react-router-dom';
import {getLanguageText} from "../../texts";
import {getSceneLanguage} from "../../utils/getSceneLanguage";

class Header extends Component {

  render(){
    const lang = getSceneLanguage(this.props);
    // const {path} = this.props.location.path;
    const {location:{pathname}} = this.props;
    return (
      <div className='header-main'>
        <NavLink to={this.getToProps("/",lang)} style={{marginRight: 20}}>
          <img
            src={brand}
            height="35"
            alt="Pequi Mecânico"
          />
        </NavLink>
        <NavLink to={this.getToProps("/about", lang)} className='header-links'>{getLanguageText("ABOUT_US",lang)}</NavLink>
        <NavLink to={this.getToProps("/teams", lang)} className='header-links'>{getLanguageText("TEAMS",lang)}</NavLink>
        <NavLink to={this.getToProps("/contact", lang)} className='header-links'>{getLanguageText("CONTACT",lang)}</NavLink>
        <div style={{flex: 1}}/>
        <NavLink to={this.getToProps(pathname, ['en','pt'].find(v => v !== lang))} className='header-links'>{getLanguageText("LANGUAGE",lang)}</NavLink>
      </div>
    )
  }

  getToProps(path, lang){
      return {
          pathname: path,
          search: `lang=${lang}`
      };
  };

}

export default withRouter(Header);