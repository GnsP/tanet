import React, { Component } from 'react';
import { connect } from 'react-redux';
import { Link } from 'react-router-dom';
import Cell from '../my-js-lib/cell';

import { logOut } from '../store/auth-dispatches';

export class HeaderComponent extends Component {
  constructor (props) {
    super (props);
  }

  renderUserHeader () {
    return (
      <Cell span={6}>
        <Cell span={4}>
          <h2> Welcome LoggedIn User </h2>
        </Cell>
        <Cell span={2}>
          <button onClick={this.props.logOut}>Logout</button>
        </Cell>
      </Cell>
    );
  }

  renderEntryHeader () {
    return (
      <Cell span={6}>
        <Cell span={2} offset={2}>
          {
            this.props.currentActivity !== 'login' &&
            <Link to='/login'> Login </Link>
          }
        </Cell>
        <Cell span={2}>
          {
            this.props.currentActivity !== 'register' &&
            <Link to='/register'> Register </Link>
          }
        </Cell>
      </Cell>
    );
  }

  render () {
    return (
      <Cell span={8}>
        <Cell span={2}>
          <h2> Logo </h2>
        </Cell>
        {
          this.props.isUserLoggedIn ?
            this.renderUserHeader()
            :
            this.renderEntryHeader()
        }
      </Cell>
    );
  }
}

const mapStateToProps = state => ({
  isUserLoggedIn: state.auth.isUserLoggedIn,
  currentActivity: state.ui.currentActivity,
});

const Header = connect (mapStateToProps, { logOut }) (HeaderComponent);
export default Header;
