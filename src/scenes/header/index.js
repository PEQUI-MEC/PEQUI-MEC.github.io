import React, { Component } from 'react';
import brand from '../../images/PQMEC_Logo4.png';
import { NavLink } from 'react-router-dom';

class Header extends Component {

  render(){
    return (<>
      <div className='header-main'>
        <NavLink to="/" style={{marginRight: 20}}>
          <img
            src={brand}
            height="35"
            alt="Pequi Mecânico"
          />
        </NavLink>
        <NavLink to="/about" className='header-links'>Sobre Nós</NavLink>
        <NavLink to="/teams" className='header-links'>Equipes</NavLink>
        <NavLink to="/contact" className='header-links'>Contato</NavLink>
      </div>
    </>)
  }
}

export default Header;