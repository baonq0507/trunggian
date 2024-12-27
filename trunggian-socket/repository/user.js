require('dotenv').config();
const db = require('../database/connection');
const jwt = require('jsonwebtoken');
const { JWT_SECRET } = process.env;
module.exports = {
    checkUser: async (token) => {
        return new Promise((resolve, reject) => {
            jwt.verify(token, JWT_SECRET, (err, decoded) => {
                if (err) {
                    return reject(err);
                }
                db.query(`SELECT * FROM users WHERE id = ?`, [decoded.sub], (err, rows) => {
                    if (err) {
                        return reject(err);
                    }
                    resolve(rows[0] || null);
                });
            });
        });
    }
}