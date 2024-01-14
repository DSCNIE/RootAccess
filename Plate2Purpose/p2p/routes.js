// routes.js file
const controller = require("./controller");

module.exports = (app) => {
  app.post("/submitReport", controller.submitReport);
  app.get("/reports/:userId", controller.getReports);
};
