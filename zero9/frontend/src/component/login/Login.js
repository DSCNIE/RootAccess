import React, { useEffect } from 'react'
import './login.css'
import { useNavigate } from 'react-router-dom';

const Login = () => {
    const [email,setEmail] = React.useState('')
    const [password,setPassword] = React.useState('')
    const [error,setError] = React.useState(false)
const navigate = useNavigate();
useEffect(()=>{
  const auth = localStorage.getItem("user");
  if(auth){
    navigate('/')
  }
  
}, [])
    const login= async() => {

      
      const auth = localStorage.getItem("user")
      if(auth){
        navigate('/')
      }
        console.warn(!email);
        if( !email  || !password){
            setError(true);
            return false;
        } 
        console.warn("email,password",email,password);
        let result = await fetch("http://localhost:5000/loginuser" , {
            method:"post",
            body:JSON.stringify({email,password}),
            headers:{
                "Content-Type":"application/json"
        }})
        result = await result.json();
        console.warn(result)
        if(result.email){
            localStorage.setItem("user",JSON.stringify(result));
            alert("logined");
            navigate('/')

        }else{
            alert("please enter the incorrect detail");
        }
    }
   

  const handleClick = () => {
    
    navigate('/registration');
  };

  return (
    
    <div className='container'> 
    <div className='logincontainer'>
    <h1>Login</h1>
    <input type="email" placeholder='Enter the  email ' className='inputbox' value={email} onChange={(e)=>{setEmail(e.target.value)}} />
    <div>{error && !email && <span className='"invalid'>Enter the correct Email</span>}</div>
    <input type="password" placeholder='Enter the  password' className='inputbox' value={password} onChange={(e)=>{setPassword(e.target.value)}} /> 
    <div>{error && !password && <span className='"invalid'>Enter the correct password</span>}</div>
    <button onClick={login} className='appbutton'>Login</button>
    <button onClick={handleClick} className='registrationbutton'>Registration</button>
    </div></div>
  )
}

export default Login
