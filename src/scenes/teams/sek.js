import React, { Component } from 'react';
import TeamPage from '../teampage/TeamPage';
import { withTranslation } from 'react-i18next';
import HeaderPhoto from '../../images/SEK.jpg';

class Sek extends Component {
  render() {
    const { t } = this.props;
    const texts = {
    robotTitle: <>{t('sek.robotTitle')}</>,
    robot: <>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac odio metus. Proin quis velit sed elit sodales ultrices at et lorem. Nullam hendrerit fringilla iaculis. Aliquam id lectus pellentesque, sodales nulla ornare, venenatis libero. Suspendisse pellentesque vestibulum arcu, vitae dictum arcu. Duis neque nisi, euismod ac est nec, lacinia viverra orci. Etiam pretium malesuada mi at dignissim. Suspendisse massa libero, tincidunt non convallis nec, ornare eu arcu. Cras dignissim nibh quam, sit amet semper augue volutpat et. Nulla placerat lectus augue, eget rutrum nibh facilisis eget. Phasellus vel vulputate diam. Ut venenatis, enim a semper lobortis, massa nulla dictum nunc, sit amet aliquam justo sapien vel tortor. Cras eu mattis nunc. Mauris in sapien non augue faucibus laoreet in non massa.
      </p>
      <p>
        Sed efficitur nunc vitae est tempor, ut semper nisl ornare. Morbi faucibus pretium lacus, a tempor quam tempus non. Nulla in tellus dolor. Vivamus at tincidunt odio, id efficitur quam. Duis interdum purus non arcu fringilla, vel facilisis augue posuere. Fusce eleifend, ipsum sit amet congue placerat, dolor turpis maximus magna, in dapibus odio orci id tellus. Donec sagittis sem id purus sollicitudin, eget blandit mi scelerisque. Ut laoreet urna a elit volutpat fringilla. Nunc massa ex, elementum vitae egestas interdum, mattis vel erat. Mauris a accumsan lectus.
      </p>
    </>
  }
  return (
    <TeamPage
      title="SEK"
      subtitle="IEEE Standard Educational Kit"
      robot="[Robot Name]"
      texts={texts}
      background={HeaderPhoto}
    />
  );
  }
  
}

export default withTranslation()(Sek);