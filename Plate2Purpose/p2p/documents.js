// document.js file
const usersschema = require("./usersschema/usersschema");
const mongoose = require("mongoose");

// Directly use the usersschema to create the model
const MyModel = mongoose.model("User", usersschema);

module.exports = MyModel;
