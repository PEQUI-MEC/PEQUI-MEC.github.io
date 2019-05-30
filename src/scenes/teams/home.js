import React, { Component } from 'react';
import { withTranslation } from 'react-i18next';

class Teams extends Component {
  render() {
    const { t } = this.props;
    return <div>{t('teams')}</div>;
  } 
}

export default withTranslation()(Teams);