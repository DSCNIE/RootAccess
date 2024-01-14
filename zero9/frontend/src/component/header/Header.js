import React from 'react'
import logo from './logo.png'
import './Header.css'
import { Link, useNavigate } from 'react-router-dom';


const Header = () => {
  const auth = localStorage.getItem("user");
  const navigate = useNavigate();
  const logout=()=>{
    localStorage.clear();
    navigate('/')
  }
 
  return (
  <>
  <div className="navbar">
 
  <div className="section1">
  <img src={logo} alt="Zero9" />
  </div>
  <div className="section2">


  
  </div>
  <div className="section3">
  
  <div className='linkssss'>
  <Link to="/profile" className='link'>Profile</Link>
</div>
  {auth ? <Link to='/logout' onClick={logout}><h1>logout</h1></Link>:<span>
  <Link to="/login" className='link'>Login</Link>
  <Link to="/registration" className='link'>Registration</Link>
  </span>}
  
  
  </div>

  </div>
  </>
  )
}

export default Header
