import React, { Component } from 'react';
import withApollo from '../../lib/withApollo';
import EzComponent from '../components/EzComponent.js';

class Home extends EzComponent {
    render() {
        return (
            <div>
              <h2>My first Apollo app 🚀</h2>
            </div>
        );
    }
};

export default withApollo(Home);
