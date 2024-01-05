import React from 'react'
import './video.css'
import videoBg from './recycle.mp4'; // Assuming your video is in an 'assets' folder
import logo from './logo.png'
import { useNavigate } from 'react-router-dom';

  const Video = () => {
    const navigate = useNavigate();
  const handleClick = () => {
    navigate('/addproduct');
  };
  const handleClicks = () => {
    navigate('/allproduct');
  };
  return (
    <div className='video-background'>
    <video autoPlay loop muted playsInline>
    <source src={videoBg} type="video/mp4" />
  </video>
  <div className='disp'>
  <div className='buttonused'>
  <button onClick={handleClick} className='addproduct'>Add Product</button>
  <button onClick={handleClicks} className='allproduct'>View all Product</button></div>
  <div className='uppertitle'>
  <img src={logo} alt="Zero9" /><div> Revive, Recycle, Renew: Your E-Waste Solution for a Sustainable Tomorrow!</div></div>
  <div>
  Ditch the dump! Give e-waste a second life with ZERO9. We connect your unwanted appliances, electronics, and gadgets with responsible recyclers, repair shops, and big names seeking sustainable materials. List your items for free, browse certified buyers, and enjoy peace of mind knowing your e-waste is responsibly handled. Recycle, repair, reuse  GreenCircuit keeps tech out of landfills and in the loop. Join the circular economy revolution!
  </div></div></div>
    
  )
}

export default Video
