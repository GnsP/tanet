import React, { Component } from 'react';
import { connect } from 'react-redux';

import Header from './header';
import Footer from '../components/footer';

import { logIn } from '../store/auth-dispatches';
import { setCurrentActivity } from '../store/ui-dispatches';

export class LoginActivityComponent extends Component {
  constructor (props) {
    super (props);
  }

  componentDidMount () {
    this.props.setCurrentActivity('login');
  }

  render () {
    return (
      <div>
        <Header />
        <main>
          <button onClick={this.props.logIn}>LogIn</button>
        </main>
        <Footer />
      </div>
    );
  }
}

const mapStateToProps = state => ({
  isUserLoggedIn: state.auth.isUserLoggedIn,
  currentActivity: state.ui.currentActivity,
});

const LoginActivity = connect (mapStateToProps, { logIn, setCurrentActivity }) (LoginActivityComponent);
export default LoginActivity;

