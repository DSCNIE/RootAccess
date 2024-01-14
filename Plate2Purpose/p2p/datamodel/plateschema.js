const mongoose = require("mongoose");

const PlatesSchema = new mongoose.Schema({
  _id: mongoose.Schema.Types.ObjectId,
  plates: {
    type: {
      monday: Number,
      tuesday: Number,
      wednesday: Number,
      thursday: Number,
      friday: Number,
      saturday: Number,
      sunday: Number,
    },
    required: true,
  },
  average: {
    type: Number,
    required: true,
  },
});

PlatesSchema.pre("save", function (next) {
  const total =
    this.plates.monday +
    this.plates.tuesday +
    this.plates.wednesday +
    this.plates.thursday +
    this.plates.friday +
    this.plates.saturday +
    this.plates.sunday;
  this.average = total / 7;
  next();
});

module.exports = mongoose.model("Plates", PlatesSchema);
