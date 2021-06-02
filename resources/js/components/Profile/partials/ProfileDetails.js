import React, { Component } from 'react';
import fetchData from "../../includes/FetchData";
export default class ProfileDetails extends React.Component {

    constructor(props) {
        super(props);
        this.state = {
            items: [],
            isLoaded: false,
        }
    }

    componentDidMount() {
        fetchData.GET('/profile').then(res => {
            this.setState({
                isLoaded: true,
                items: res.data.body,
            })
        })
    }

    render() {
        const {isLoaded} = this.state;
        if(!isLoaded){
            return <div>Loading ..... !</div>
        }else {
            return (
                <>
                    <div className="card mb-3">
                        <div className="card-body">
                            <div className="row">
                                <div className="col-sm-3">
                                    <h6 className="mb-0">Full Name</h6>
                                </div>
                                <div className="col-sm-9 text-secondary">
                                    {
                                        this.state.items.name
                                    }

                                </div>
                            </div>
                            <hr/>
                            <div className="row">
                                <div className="col-sm-3">
                                    <h6 className="mb-0">Email</h6>
                                </div>
                                <div className="col-sm-9 text-secondary">
                                    {
                                        this.state.items.email
                                    }
                                </div>
                            </div>
                            <hr/>
                            <div className="row">
                                <div className="col-sm-3">
                                    <h6 className="mb-0">Phone</h6>
                                </div>
                                <div className="col-sm-9 text-secondary">
                                    (986) 8284426
                                </div>
                            </div>
                            <hr/>
                            <div className="row">
                                <div className="col-sm-3">
                                    <h6 className="mb-0">Mobile</h6>
                                </div>
                                <div className="col-sm-9 text-secondary">
                                    (981) 4566338
                                </div>
                            </div>
                            <hr/>
                            <div className="row">
                                <div className="col-sm-3">
                                    <h6 className="mb-0">Address</h6>
                                </div>
                                <div className="col-sm-9 text-secondary">
                                    Siddhanagar Kohalpur, Banke
                                </div>
                            </div>
                        </div>
                    </div>
                </>
            );
        }
    }
}
