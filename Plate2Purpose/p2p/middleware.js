// middleware.js
const express = require("express");
const cors = require("cors");

module.exports = function (app) {
  app.use(cors());
  app.use(express.json());
  // Add other middleware as needed
};
