var axios = require("axios");
var data = JSON.stringify({
  collection: "food",
  database: "caters",
  dataSource: "Cluster0",
  projection: {
    _id: 1,
  },
});

var config = {
  method: "post",
  url: "https://ap-south-1.aws.data.mongodb-api.com/app/data-antsw/endpoint/data/v1/action/insertOne",
  headers: {
    "Content-Type": "application/json",
    "Access-Control-Request-Headers": "*",
    "api-key":
      "PkWVkeX9o46gRLCuLfNLKDcjTc7zb23ncQI9fqJL0oOgNKEQqsZDGMebddiaWMiJ",
  },
  data: data,
};

axios(config)
  .then(function (response) {
    console.log(JSON.stringify(response.data));
  })
  .catch(function (error) {
    console.log(error);
  });
