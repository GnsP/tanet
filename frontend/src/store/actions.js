import StringMap from '../my-js-lib/string-map';

const actions = {
  auth: StringMap (x => `__APP_AUTH_${x.toUpperCase()}`) (
    'logIn',
    'logOut',
    'register',
  ),
  data: StringMap (x => `__APP_DATA_${x.toUpperCase()}`) (

  ),
  ui: StringMap (x => `__APP_UI_${x.toUpperCase()}`) (
    'setCurrentActivity',
  ),
};

export default actions;
