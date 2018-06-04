import actions from './actions';

export function setCurrentActivity (activityName) {
  return {
    type: actions.ui.setCurrentActivity,
    payload: activityName,
  };
}

