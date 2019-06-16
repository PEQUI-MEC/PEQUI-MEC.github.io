import React, { Component } from 'react';
import { withTranslation } from 'react-i18next';
import TeamPage from '../teampage/TeamPage';
import HeaderPhoto from '../../images/athome/Home2.jpg';
import Eduardo from '../../images/athome/Eduardo.jpeg'

class AtHome extends Component {
  render() {
    const { t } = this.props;
    const texts = {
      robotTitle: <>{t('atHome.robotTitle')}</>,
      robot: <>{t('atHome.robot')}</>,
      teamMembersTitle: <>{t('teamMembersTitle')}</>,
      teamsOpenSourceTitle: <>{t('teamsOpenSourceTitle')}</>
    };
    const teamMembersObject = [
      {
        photo: Eduardo,
        description: this.props.t('atHome.teamMember1'),
      },
      {
        photo: Eduardo,
        description: this.props.t('atHome.teamMember2'),
      },
      {
        photo: Eduardo,
        description: this.props.t('atHome.teamMember3'),
      },
    ];
    const openSourceObject = [
      {
        photo: Eduardo,
        description: this.props.t('atHome.teamMember1'),
      },
      {
        photo: Eduardo,
        description: this.props.t('atHome.teamMember2'),
      },
      {
        photo: Eduardo,
        description: this.props.t('atHome.teamMember3'),
      },
    ];
    return (
      <TeamPage
        title="@Home"
        subtitle="RoboCup@Home"
        texts={texts}
        background={HeaderPhoto}
        teamMembers={teamMembersObject}
        openSourceMaterial={openSourceObject}
      />
    );
  }
}

export default withTranslation()(AtHome);