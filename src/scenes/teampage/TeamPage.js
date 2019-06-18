import React from 'react';
import './TeamPage.css';

const TeamPage = ({ title, subtitle, robot, texts, background, teamMembers, openSourceMaterial}) => {

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
      <div className='center hpa team-body'>
        <div className='max-width team-body'>
          <h2>{texts.robotTitle}</h2>
          {texts.robot}
        </div>
          {
              teamMembers && <h2>{texts.teamMembersTitle}</h2>
          }
          {
              teamMembers && teamMembers.map(teamMember => (
                  <div className='team-member-box'>
                      <div style={{backgroundImage: `url(${teamMember.photo})`}} className='team-member-photo' ></div>
                      <div className='team-member-description'>{teamMember.description}</div>
                  </div>
              ))

          }
          {
              openSourceMaterial && <h2>{texts.teamsOpenSourceTitle}</h2>
          }
          { //aqui vira um icone e o link da pagina com o material opensource (githup modelos 3d etc)
              openSourceMaterial && openSourceMaterial.map(teamMember => (
                  <div className='open-source-box'>
                      {teamMember.photo}
                      <div className='open-source-description'>{teamMember.description}</div>
                  </div>
              ))

          }
      </div>
    </div>
  );
}

export default TeamPage;