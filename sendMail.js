const express = require("express");
const app = express();
const port = 3000;
var mailer = require("nodemailer");

app.get("/", (req, res) => res.send("Hello World!"));

app.listen(port, () => console.log(`Example app listening on port ${port}!`));

// Use Smtp Protocol to send Emaili

app.get("/sendEmail", function(req, res, next) {
  console.log("came to the function");
  var smtpTransport = mailer.createTransport({
    host: "smtp.gmail.com",
    port: 587,
    secure: false,
    requireTLS: true,
    auth: {
      user: "manoharmanu4444@gmail.com",
      pass: "1570000595"
    }
  });

  var mail = {
    from: "manoharmanu4444@gmail.com",
    to: "manoharmanu4444@gmail.com",
    subject: "Send Email Using Node.js",
    text: "Node.js New world for me",
    html: "MAIL SENT"
  };
  //console.log("mail>>>>>>", mail);
  smtpTransport.sendMail(mail, function(error, response) {
    if (error) {
      console.log(error);
    } else {
      console.log("Message sent to: " + mail.to);
      return res.status(200).json({
        status: "Success",
        statusCode: 200,
        message: "Message Sent"
      });
    }

    smtpTransport.close();
  });
});