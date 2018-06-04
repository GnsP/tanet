import { combineReducers } from 'redux';
import ui from './ui-reducer';
import data from './data-reducer';
import auth from './auth-reducer';

const rootReducer = combineReducers({
  ui,
  data,
  auth,
});

export default rootReducer;
