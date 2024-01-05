const mongoose = require("mongoose");

const reportSchema = new mongoose.Schema({
  userId: String,
  date: Date,
  reportData: String,
});

module.exports = mongoose.model("Report", reportSchema);
