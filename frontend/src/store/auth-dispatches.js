import actions from './actions';

export function logIn () {
  return {
    type: actions.auth.logIn,
  };
}

export function logOut () {
  return {
    type: actions.auth.logOut,
  };
}

export function register () {
  return {
    type: actions.auth.register,
  };
}
