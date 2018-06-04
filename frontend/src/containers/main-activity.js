import React, { Component } from 'react';
import { connect } from 'react-redux';

import Header from './header';
import Footer from '../components/footer';

import { setCurrentActivity } from '../store/ui-dispatches';

export class MainActivityComponent extends Component {
  constructor (props) {
    super (props);
  }

  componentDidMount () {
    this.props.setCurrentActivity('main');
  }

  render () {
    return (
      <div>
        <Header />
        <main>
          <h1> Main Page </h1>
        </main>
        <Footer />
      </div>
    );
  }
}

const mapStateToProps = state => ({
  currentActivity: state.ui.currentActivity,
});

const MainActivity = connect (mapStateToProps, { setCurrentActivity }) (MainActivityComponent);
export default MainActivity;
