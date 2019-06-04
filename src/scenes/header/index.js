import React, { Component } from 'react';
import brand from '../../images/PQMEC_Logo4.png';
import { NavLink } from 'react-router-dom';
import { withTranslation } from 'react-i18next';
import brFlag from '../../images/br.svg';
import usFlag from '../../images/us.svg';

class Header extends Component {
  render(){
    const { t, i18n } = this.props;

    const changeLanguage = lng => {
      i18n.changeLanguage(lng);
    };

    return (
      <div className='header-main'>
        <NavLink to="/" style={{marginRight: 20}}>
          <img
            src={brand}
            height="35"
            alt="Pequi Mecânico"
          />
        </NavLink>
        <NavLink to="/about" className='header-links'>{t('navbar.about')}</NavLink>
        <NavLink to="/teams" className='header-links'>{t('navbar.teams')}</NavLink>
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