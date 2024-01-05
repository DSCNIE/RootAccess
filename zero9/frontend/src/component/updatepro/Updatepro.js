import React, { useEffect } from 'react'
import {useParams} from 'react-router-dom'
import './updatepro.css'
const Updatepro = () => {
    const [name,setName] = React.useState('')
    const [price,setPrice] = React.useState('')
    const [location,setLocation] = React.useState('')
    const [disp,setDisp] = React.useState('')
    const [email,setEmail] = React.useState('')
    const [phonenumber,setPhonenumber] = React.useState('')
    const [image,setImage] = React.useState('')
    console.log(window.location.pathname)
    const params = useParams();
    console.log(params)
    useEffect(()=>{
        getProductDetails();

    },[])

    const getProductDetails = async ()=>{
        console.warn(params)
        let result = await fetch(`http://localhost:5000/product/${params.id}`);
        result = await result.json();
        console.log(result)
        setName(result.name)
        setPrice(result.price)
        setLocation(result.location)
        setDisp(result.disp)
        setEmail(result.email)
        setImage(result.image)
        setPhonenumber(result.phonenumber)
    }


    
  return (
    <div className='wholecontainer'>
    <div className='single'>
    <div className='imageprotion'>
    <img src={image} alt="productsingle" /></div>
    <div className='textprotion'>
    <h1 className='name'>{name}</h1>
    <h1 className='dispsec'>{disp}</h1>
     <h1 className='price'>₹ {price}</h1>
    <h1 className='phonenumber'>{phonenumber}</h1>
    <h1 className='email'>{email}</h1>
    <h1 className='location'><i className='fas fa-map-marker-alt'/>{location}</h1>
    
     </div>
    </div>
    </div>
  )
}

export default Updatepro





/* 

const deleteProduct = async (id)=>{
    let result = await fetch(`http://localhost:5000/product/${id}`,{
        method:'DELETE'

    });
    result = await result.json()
    if(result){
        alert("Delete Successfully")
    }else{
        alert('Error')
    }
}


*/