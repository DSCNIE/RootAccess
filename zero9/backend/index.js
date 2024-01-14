const express = require('express')
require('./db/config')
const User  = require('./db/User')
const Product  = require('./db/Products')
const cors =require("cors")
const multer = require('multer')
const app = express();
app.use(express.json())
app.use(cors());



// backend for user detail  
//registration

app.post("/register",async(req,resp)=>{
    let user= new User(req.body);
    let result = await user.save();
    result = result.toObject();
    delete result.password
    resp.send(result)
})

//login detail which is already entered
app.post("/loginuser",async (req,resp)=>{
    console.log(req.body)
    if(req.body.password && req.body.email){
        let user = await User.findOne(req.body).select("-password");
        if(user){
            resp.send(user)
        }else {
            resp.send({result :"no user found "})
        }
    } else{
        resp.send({result:"no user found"})
    }
})

// backend for adding product
app.post("/product",async(req,resp)=>{
    let product= new Product(req.body);
    let result = await product.save();
    resp.send(result)
})

//getting all the product on the page
app.get("/getproducts", async (res,resp)=>{
    let products = await Product.find();
    if(products.length>0){
        resp.send(products)
    }else{
        resp.send({result:"no product found"})
    }
})

//updating the products after adding 
app.put("/product/:id", async (req,resp)=>{
    let result  = await Product.updateOne(
   {_id: req.params.id   },
   {
    $set: req.body
   }
    )
    resp.send(result)
})

//geting the product single id
app.get("/product/:id", async (req,resp) => {
    let result =await Product.findOne({ _id: req.params.id})
    console.log(result)
    if  (result) {
        resp.send(result)
    } else {
        resp.send({"result": "No Record Found."})
    }
})




//deleting the product from the data base
app.delete("/product/:id",async(req,resp)=>{
    const result = await Product.deleteOne({_id:req.params.id})
    resp.send(result)
});


//searching the product from the backend
app.get("/search/:key",async (req,resp)=>{
    let result = await Product.find({
        "$or":[
            {name: {$regex: req.params.key}},
            {price: {$regex: req.params.key}},
            {company: {$regex: req.params.key}},
            {desp: {$regex: req.params.key}}

        ]
    })
    resp.send(result)
})





app.listen(5000)