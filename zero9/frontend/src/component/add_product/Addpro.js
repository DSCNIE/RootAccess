import React from 'react'
import './addpro.css'

const Addpro = () => {
    const [name,setName] = React.useState('')
    const [price,setPrice] = React.useState('')
    const [location,setLocation] = React.useState('')
    const [disp,setDisp] = React.useState('')
    const [email,setEmail] = React.useState('')
    const [phonenumber,setPhonenumber] = React.useState('')
    const [image,setImage] = React.useState('')
    const [error,setError] = React.useState(false)

    const addproduct= async() => {
      console.warn(!location);
      if( !name  || !price || !disp || !email || !phonenumber || !image || !location){
          setError(true);
          return false;
      } 
        console.warn(name,price,disp,email,phonenumber,image,location);
        const userId = localStorage.getItem('user') ? JSON.parse(localStorage.getItem('user'))._id : null;

        let result = await fetch("http://localhost:5000/product" , {
            method:"POST",
            body:JSON.stringify({name,price,email,disp,phonenumber,location,image,userId}),
            headers:{
                "Content-Type":"application/json"
        }})
        result = await result.json();
        console.warn(result)
        if(result){
          
          alert("producted added")

      }else{
          alert("not added")
      }
    }
    
    
  return (
    <div className='productadd'>
    <h1>Add Product</h1>
     <input type="text" placeholder='Enter the product name ' className='inputbox' value={name} onChange={(e)=>{setName(e.target.value)}} /> 
     <div>{error && !name && <span className='"invalid'>Enter the  Name</span>}</div>

     <input type="text" placeholder='Enter the product price ' className='inputbox' value={price} onChange={(e)=>{setPrice(e.target.value)}} /> 
     <div>{error && !price && <span className='"invalid'>Enter the  Price</span>}</div>

     <input type="text" placeholder='Enter the  email' className='inputbox' value={email} onChange={(e)=>{setEmail(e.target.value)}} /> 
     <div>{error && !email && <span className='"invalid'>Enter the  Email</span>}</div>

     <input type="disp" placeholder='Enter the product discription ' className='inputbox' value={disp} onChange={(e)=>{setDisp(e.target.value)}} /> 
     <div>{error && !email && <span className='"invalid'>Enter the  Discription</span>}</div>

     <input type="text" placeholder='Enter the phonenumber ' className='inputbox' value={phonenumber} onChange={(e)=>{setPhonenumber(e.target.value)}} />
     <div>{error && !phonenumber && <span className='"invalid'>Enter the  Phonenumber</span>}</div>

     <input type="text" placeholder='Enter the Image url' className='inputbox' value={image} onChange={(e)=>{setImage(e.target.value)}}  /> 
     <div>{error && !image && <span className='"invalid'>Enter the  Image URL</span>}</div>

     <input type="text" placeholder='Enter the address ' className='inputbox' value={location} onChange={(e)=>{setLocation(e.target.value)}}  /> 
     <div>{error && !location && <span className='"invalid'>Enter the  Address</span>}</div>

     <button onClick={addproduct} className='appbutton'>Add product</button>
    </div>
  )
}

export default Addpro
