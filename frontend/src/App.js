import './App.css';

import React, { Component } from 'react';
import { BrowserRouter } from 'react-router-dom';
import { Provider } from 'react-redux';
import configureStore from './store';
import RoutesContainer from './containers/routes-container';

const store = configureStore();

export default class App extends Component {
  constructor (props) {
    super (props);
  }

  render () {
    return (
      <Provider store={store}>
        <BrowserRouter>
          <RoutesContainer />
        </BrowserRouter>
      </Provider>
    );
  }
};

