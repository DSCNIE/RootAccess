const mongoose = require('mongoose');

const ProductSchema = new mongoose.Schema({
    name:String,
    price:String,
    location:String,
    disp:String,
    email:String,
    phonenumber:String,
    image:String
    
});

module.exports = mongoose.model("products", ProductSchema)
