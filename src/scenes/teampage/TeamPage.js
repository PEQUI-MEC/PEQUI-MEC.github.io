import React from 'react';
import './TeamPage.css';

const TeamPage = ({ title, subtitle, robot, texts, background}) => {

  return (
    <div>
      <div 
        style={{backgroundImage: `url(${background})`}}
        className="team-header-photo center"
      >
        <div className='max-width sc-hpa team-inner-header'>
          <h1>{title}</h1>
          <p>{subtitle}</p>
        </div>
      </div>
      <div className='center hpa'>
        <div className='max-width team-body'>
          <h2>{texts.robotTitle}</h2>
          {texts.robot}
        </div>
      </div>
    </div>
  );
}

export default TeamPage;