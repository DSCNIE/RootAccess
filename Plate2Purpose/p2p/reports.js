const express = require("express");
const router = express.Router();
const Report = require("../models/report");

// GET all reports
router.get("/", async (req, res) => {
  try {
    const reports = await Report.find();
    res.json(reports);
  } catch (err) {
    res.status(500).json({ message: err.message });
  }
});

// POST new report
router.post("/", async (req, res) => {
  const report = new Report({
    userId: req.body.userId,
    date: req.body.date,
    reportData: req.body.reportData,
  });

  try {
    const newReport = await report.save();
    res.status(201).json(newReport);
  } catch (err) {
    res.status(400).json({ message: err.message });
  }
});

module.exports = router;
