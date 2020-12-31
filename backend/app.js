const express = require("express");
const app = express();
const nodemailer = require("nodemailer");
const cors = require("cors");

app.use(cors());
app.use(express.json({ extended: false }));
app.get("/", (req, res) => {
	res.send("Hi");
});

app.post("/sendmail", async (req, res) => {
	const { email } = req.body;
	console.log(email);
	try {
		let transporter = nodemailer.createTransport({
			service: "gmail",
			auth: {
				user: "mohammad.tafraouti@gmail.com",
				pass: "SoubhanaAllah",
			},
		});

		await transporter.sendMail({
			from: "mohammad.tafraouti@gmail.com",
			to: email,
			subject: "Please verify your email NOW",
			text: "TEST TEST TEST TEST",
			html: `<a href="#">Click here</a>`,
		});
		res.json({ message: "success" });
	} catch (err) {
		console.log("nodemailer", err.message);
		res.json({ error: "error" });
	}
});

app.listen(5000, () => console.log("Listening on port 5000..."));
