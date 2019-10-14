import gql from 'graphql-tag';
import withApollo from '../../resources/lib/withApollo';
import EzComponent from 'resources/components/EzComponent'
import { Query } from "react-apollo";

const GET_DATA = gql`
    {
        tests {
            name
        }
    }
`

class Data extends EzComponent {
    render() {
        return (
            <Query query={GET_DATA}>
                {({ loading, error, data }) => {
                    if (loading) return "Loading...";
                    if (error) return `Error! ${error.message}`;

                    return (
                        data
                    );
                }}
            </Query>
        );
    }
};

export default withApollo(Data);
