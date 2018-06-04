import actions from './actions';
import { getCookie, setCookie } from '../my-js-lib/cookie';

const initialState = {
  isUserLoggedIn: false
}

export default function authReducer (state = initialState, action) {
	switch (action.type) {

		case actions.auth.logIn:
		case actions.auth.register:
			return { isUserLoggedIn: true };

		case actions.auth.logOut:
			return { isUserLoggedIn: false };

		default:
			return state;
	}
}
