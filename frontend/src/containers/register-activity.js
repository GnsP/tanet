import React, { Component } from 'react';
import { connect } from 'react-redux';

import Header from './header';
import Footer from '../components/footer';

import { register } from '../store/auth-dispatches';
import { setCurrentActivity } from '../store/ui-dispatches';

export class RegisterActivityComponent extends Component {
  constructor (props) {
    super (props);
  }

  componentDidMount () {
    this.props.setCurrentActivity('register')
  }

  render () {
    return (
      <div>
        <Header />
        <main>
          <form>
            <fieldset>
              <label> Name </label>
              <input type='text' />
            </fieldset>
            <fieldset>
              <label> Mobile Number </label>
              <input type='text' />
            </fieldset>
            <fieldset>
              <label> Address </label>
              <textarea />
            </fieldset>
            <button onClick={this.props.register}>Register</button>
          </form>
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

const RegisterActivity = connect (mapStateToProps, { register, setCurrentActivity }) (RegisterActivityComponent);
export default RegisterActivity;

