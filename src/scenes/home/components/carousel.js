import React, { Component } from 'react';
import Carousel from "react-slick";

class Slide extends Component {

  render(){
    const settings = {
      dots: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      speed: 2000,
      autoplaySpeed: 5000,
      cssEase: "linear"
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
    </div>)
  }
}

export default Slide;