import React, { Component } from 'react';
import { connect } from 'react-redux';
import { Link } from 'react-router-dom';

import Header from './header';
import Footer from '../components/footer';
import Background from '../components/background';

import { setCurrentActivity } from '../store/ui-dispatches';

export class EntryActivityComponent extends Component {
  constructor (props) {
    super (props);
  }

  componentDidMount () {
    this.props.setCurrentActivity('entry');
  }

  render () {
    return (
      <div>
        <Header />
        <Background hero medium src='https://placehold.it/1440x600/b35900'>
          <main>
            <h1> Entry Page </h1>
            <Link to='/about-us'> About Us </Link>
            <Link to='/contact-us'> Contact Us </Link>
          </main>
        </Background>
        <Footer />
      </div>
    );
  }
}

const mapStateToProps = state => ({
  currentActivity: state.ui.currentActivity
});

const EntryActivity = connect (mapStateToProps, { setCurrentActivity }) (EntryActivityComponent);
export default EntryActivity;
