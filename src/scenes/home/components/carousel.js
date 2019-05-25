import React, { Component } from 'react';
import Carousel from "react-slick";

class Slide extends Component {

  state = {
    ulHeight:"20px"
  };

  componentDidMount(){
    this.setState({
        ulHeight: this.ulEl.height
    });
  }

  render(){
    const settings = {
      dots: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      speed: 2000,
      autoplaySpeed: 5000,
      cssEase: "linear",
        appendDots: dots => <ul style={{ display: "block", marginBottom: this.state.ulHeight}} ref={(ulEl) => this.ulEl = ulEl}>{dots}</ul>,
        customPaging: i => <button>{i + 1}</button>
    };
    return (<div>
      <Carousel {...settings}>
        <div className='home-carousel'>
          <h3>1</h3>
        </div>
        <div className='home-carousel'>
          <h3>2</h3>
        </div>
        <div className='home-carousel'>
          <h3>3</h3>
        </div>
        <div className='home-carousel'>
          <h3>4</h3>
        </div>
        <div className='home-carousel'>
          <h3>5</h3>
        </div>
        <div className='home-carousel'>
          <h3>6</h3>
        </div>
      </Carousel>
          <div style={{width:0, height:0, padding: 0, margin: `0 0 ${this.state.ulHeight} 0`}}/>
    </div>
    )
  };
}

export default Slide;