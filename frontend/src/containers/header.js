import React, { Component } from 'react';
import { connect } from 'react-redux';
import { Link } from 'react-router-dom';
import Cell from '../my-js-lib/cell';
import cn from '../my-js-lib/cn';

import Button from '../components/button';

import { logOut } from '../store/auth-dispatches';

export class HeaderComponent extends Component {
  constructor (props) {
    super (props);
  }

  renderUserHeader () {
    return (
      <Cell span={6} className={cn`navbar-section`}>
        <Cell span={4}>
          <h2> Welcome LoggedIn User </h2>
        </Cell>
        <Cell span={2}>
          <Button onClick={this.props.logOut}>Logout</Button>
        </Cell>
      </Cell>
    );
  }

  renderEntryHeader () {
    return (
      <Cell span={6} className={cn`navbar-section`}>
        <Cell span={2} offset={2}>
          {
            this.props.currentActivity !== 'login' &&
            <Link to='/login'>
              <Button large >Login</Button>
            </Link>
          }
        </Cell>
        <Cell span={2}>
          {
            this.props.currentActivity !== 'register' &&
            <Link to='/register'>
              <Button large primary >Register</Button>
            </Link>
          }
        </Cell>
      </Cell>
    );
  }

  render () {
    return (
      <Cell span={8} className={cn`navbar pad-header fixed`}>
        <Cell span={2} className={cn`navbar-section`}>
          <h2> TG Teachers Association, Odisha </h2>
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
