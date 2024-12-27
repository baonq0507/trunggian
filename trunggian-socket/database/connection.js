require('dotenv').config();
const mysql = require('mysql2');
const {DB_HOST, DB_USER, DB_PASSWORD, DB_NAME} = process.env;
const db = mysql.createConnection({
    host: DB_HOST,
    user: DB_USER,
    password: DB_PASSWORD,
    database: DB_NAME
});

// Kết nối tới MySQL
db.connect((err) => {
    if (err) {
      console.error('Error connecting to MySQL:', err.message);
      // stop server
      process.exit(1);

    }
    console.log('Connected to MySQL!');
  });
  
module.exports = db;