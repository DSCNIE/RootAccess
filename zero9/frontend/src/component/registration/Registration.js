import React, { useEffect } from 'react'
import { useNavigate } from 'react-router-dom'

const Registration = () => {
    const [name,setName] = React.useState('')
    const [email,setEmail] = React.useState('')
    const [password,setPassword] = React.useState('')
    const navigate = useNavigate();
    useEffect(()=>{
      const auth = localStorage.getItem("user");
      if(auth){
        navigate('/')
      }
    }, [])
    const adduser= async() => {
        console.warn(name,email,password);
        let result = await fetch("http://localhost:5000/register" , {
            method:"POST",
            body:JSON.stringify({name,email,password}),
            headers:{
                "Content-Type":"application/json"
        }})
        result = await result.json();
        console.warn(result)
    }
    

  const handleClick = () => {
    navigate('/registration');
  };
  return (
    <div>
    <h1>registration</h1>

    <input type="text" placeholder='enter the  name ' className='inputbox' value={name} onChange={(e)=>{setName(e.target.value)}} /> 
    <input type="email" placeholder='enter the  email ' className='inputbox' value={email} onChange={(e)=>{setEmail(e.target.value)}} /> 
    <input type="password" placeholder='enter the  password' className='inputbox' value={password} onChange={(e)=>{setPassword(e.target.value)}} /> 
    <button onClick={adduser} className='appbutton'>Register</button>
    </div>
  )
}

export default Registration
