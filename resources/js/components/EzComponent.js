import React, { Component } from 'react';
import { ApolloContext } from 'react-apollo';


class EzComponent extends Component {
    static contextType = ApolloContext;
}

export default EzComponent;
