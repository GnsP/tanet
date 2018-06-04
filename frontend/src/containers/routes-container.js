import React, { Component } from 'react';
import { connect } from 'react-redux';
import { Route, Switch, Redirect, withRouter } from 'react-router-dom';

import EntryActivity from './entry-activity';
import RegisterActivity from './register-activity';
import LoginActivity from './login-activity';
import MainActivity from './main-activity';

import AboutUsPage from './about-us-page';
import ContactUsPage from './contact-us-page';

export class RoutesContainerComponent extends Component {
  constructor (props) {
    super (props);
  }

  render () {
    return (
      <Switch>
        <Route
          exact
          path='/entry'
          component={EntryActivity}
        />
        <Route
          exact
          path='/login'
          render={_ => this.props.isUserLoggedIn ? <Redirect to='/' /> : <LoginActivity /> }
        />
        <Route
          exact
          path='/register'
          render={_ => this.props.isUserLoggedIn ? <Redirect to='/' /> : <RegisterActivity /> }
        />
        <Route
          exact
          path='/about-us'
          component={AboutUsPage}
        />
        <Route
          exact
          path='/contact-us'
          component={ContactUsPage}
        />
        <Route
          path='/'
          render={ _ => this.props.isUserLoggedIn ? <MainActivity /> : <Redirect to='/entry' />  }
        />
      </Switch>
    );
  }
}

const mapStateToProps = state => ({
  isUserLoggedIn: state.auth.isUserLoggedIn
});

const RoutesContainer = connect (mapStateToProps, {}) (RoutesContainerComponent);
export default withRouter(RoutesContainer);
