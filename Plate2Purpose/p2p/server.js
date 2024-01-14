// server.js
const express = require("express");
const mongoose = require("mongoose");
const middleware = require("./middleware");
const routes = require("./routes");
const MyModel = require("./usersschema/usersschema"); // Adjust the path based on your file structure
// const {getReport} = require("./controller")
const app = express();
const PORT = 5000;

mongoose
  .connect("mongodb+srv://yashdivyapatna:0pxei1Hi9JK7azk3@cluster0.q30je9a.mongodb.net/?retryWrites=true&w=majority")
  .then(() => {
    console.log("Connected to MongoDB");
  })
  .catch((err) => {
    console.error("Error connecting to MongoDB:", err);
  });

middleware(app);
routes(app);

// Create a route to handle incoming data (GET and POST)
app.route("/api/data/:userId")
  .get(async (req, res) => {
    try {
      const userId = req.params.userId;
      // Fetch data based on userId from MongoDB
      const userData = await MyModel.findOne({ userId });
      res.status(200).json(userData);
    } catch (error) {
      console.error("Error fetching data:", error);
      res.status(500).json({ error: "Internal Server Error" });
    }
  })
  .post(async (req, res) => {
    try {
      // Assuming you're sending JSON data in the request body
      const { dishList } = req.body;

      // Save the data to MongoDB using your model
      const newData = new MyModel({ dishList });
      await newData.save();

      // Respond with a success message
      res.status(201).json({ message: "Data saved successfully" });
    } catch (error) {
      console.error("Error saving data:", error);
      res.status(500).json({ error: "Internal Server Error" });
    }
  });

app.listen(PORT, () => console.log(`Server started on port ${PORT}`));
