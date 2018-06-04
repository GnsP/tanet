import actions from './actions';
import { getCookie, setCookie } from '../my-js-lib/cookie';

const initialState = {
  currentActivity: '/'
};

export default function uiReducer (state = initialState, action) {
	switch (action.type) {
    case actions.ui.setCurrentActivity:
      return {
        ...state,
        currentActivity: action.payload
      };

    default:
			return state;
	}
}
