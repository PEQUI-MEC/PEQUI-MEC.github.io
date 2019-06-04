import React, { Component } from 'react';
import brand from '../../images/PQMEC_Logo4.png';
import { NavLink } from 'react-router-dom';
import { withTranslation } from 'react-i18next';
import { FaBars, FaSortDown } from 'react-icons/fa';
import brFlag from '../../images/br.svg';
import usFlag from '../../images/us.svg';
import './header.css';

class Header extends Component {
  render(){
    const { t, i18n } = this.props;

    const changeLanguage = lng => {
      i18n.changeLanguage(lng);
    };

    const setResponsive = () => {
      const navbar = document.getElementById('header-main');
      if (navbar.classList.contains('responsive'))
        navbar.classList.remove('responsive');
      else
        navbar.classList.add('responsive');
    }

    return (
      <div id='header-main' className='header-main'>
        <div className='header-mobile'>
          <NavLink to="/" style={{marginRight: 20}}>
            <img
              src={brand}
              height="35"
              alt="Pequi Mecânico"
            />
          </NavLink>
          <FaBars className="header-icon" size='1em' onClick={setResponsive}/>
        </div>
        <NavLink to="/about" className='header-links'>{t('navbar.about')}</NavLink>
        <div className="dropdown">
          <NavLink exact to="/teams" className='header-links dropbtn'>
            {t('navbar.teams')}
            <FaSortDown size='1em'/>
          </NavLink>
          <div className="dropdown-content">
            <NavLink to="/teams/athome">@Home</NavLink>
            <NavLink to="/teams/open">Open Flying Robot</NavLink>
            <NavLink to="/teams/simulation2d">Simulation 2D</NavLink>
            <NavLink to="/teams/humanoid">Soccer Humanoid League</NavLink>
            <NavLink to="/teams/sek">Standard Educational Kit (SEK)</NavLink>
            <NavLink to="/teams/vsss">Very Small Size Soccer (VSSS)</NavLink>
          </div>
        </div>
        <NavLink to="/contact" className='header-links'>{t('navbar.contact')}</NavLink>
        <div className='header-languages'>
          {t('navbar.language')}
            <img
              onClick={() => changeLanguage('pt')}
              src={brFlag}
              height="16"
              alt="Português"
            />
            <img
              onClick={() => changeLanguage('en')}
              src={usFlag}
              height="16"
              alt="English"
            /> 
        </div>
      </div>
    )
  }
}

export default withTranslation()(Header);