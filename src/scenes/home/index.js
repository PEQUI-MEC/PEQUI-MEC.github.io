import React, { Component } from 'react';
import Slide from "./components/carousel";
import {withRouter} from "react-router-dom";
import {getLanguageText} from "../../texts";

class Home extends Component {

    render(){
        const {lang} = this.props;
        return (<div>
          <Slide/>
            <div style={Home.CENTRAL_DIV_STYLE}>
                <div style={Home.CONTENT_DIV_STYLE}>
                    {getLanguageText("EXAMPLE", lang)}
                </div>
            </div>
            <div>

            </div>
        </div>)
    }

    static CENTRAL_DIV_STYLE = {
        marginTop: "10px",
        display: "flex",
        flexWrap: "noWrap",
        justifyContent: "space-around"
    };

    static CONTENT_DIV_STYLE = {
        maxWidth: "1048px"
    };
}


export default withRouter(Home);