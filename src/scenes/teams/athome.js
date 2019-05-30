import React, { Component } from 'react';
import { withTranslation } from 'react-i18next';

class AtHome extends Component {
    render() {
        const { t } = this.props;

        return <div>{t('atHome')}</div>;
    }  
}

export default withTranslation()(AtHome);