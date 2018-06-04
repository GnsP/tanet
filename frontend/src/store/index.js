import { createStore, applyMiddleware, compose } from 'redux';
import promiseMiddleware from 'redux-promise';
import rootReducer from './root-reducer';

const createStoreWithMiddleware = applyMiddleware (promiseMiddleware) (createStore);

export default function configureStore (initialState = {}) {
  const store = createStoreWithMiddleware (rootReducer, initialState);
  store.subscribe( _ => store.getState() );
  return store;
}
