import React from 'react'
import './footer.css'
import logo from './logo.png'
import boat from './boat.png'

const Footer = () => {
  return (
    <>
    <div className='footer'>
    <div className='footersection1'>
      <div className="footer1item1">
      <p>NO CREDIT CARD REQUIRED </p>
      <h1>Start using Zero9 today.</h1>
      <input type="text" placeholder='Your Email'  className='inputbox'/>
      </div>
      <div className="footer1item2">
      <img src={boat} alt="logo" />
      </div>
    </div>
    <div className="footersection2">
    <div className="footer2item1">
    <img src={logo} alt="logo" />
    <h1> Revive, Recycle, Renew: Your E-Waste Solution for a Sustainable Tomorrow!</h1>
    </div>
    <div className="footer2item2">
    <ul>
    <li><a href="sdf#">About</a></li>
    <li><a href="sdf#">Jobs</a></li>
    <li><a href="sdf#">Docs</a></li>
    </ul>
    </div>
    <div className="footer2item3">
    <li><a href="dsf#">Terms and Conditions</a></li>
    <li><a href="#sdf">Privacy Policy</a></li>
    <li><a href="sdf#">Cookie Policy</a></li>
    </div>
    <div className="footer2item4">
    <h4>let's chat!</h4>
    <p>hi@zero9.com</p>
    <p>+81 256 656 96</p>
    </div>
    </div>
    </div>
    </>
  )
}

export default Footer
