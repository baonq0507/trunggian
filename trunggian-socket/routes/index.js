var express = require('express');
var router = express.Router();
var multer = require('multer');
var storage = multer.diskStorage({
  destination: function (req, file, cb) {
    cb(null, 'public/uploads')
  },
  filename: function (req, file, cb) {
    cb(null, file.fieldname + '-' + Date.now() + '.' + file.mimetype.split('/')[1])
  }
})
 
var upload = multer({ storage: storage })
/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});

router.post('/upload', upload.single('file'), function(req, res, next) {
  console.log(req);
  
  const file = req.file
  if (!file) {
    const error = new Error('Please upload a file')
    error.httpStatusCode = 400
    return next(error)
  }
  // res.send(file)
  res.json({
    type: file.mimetype,
    name: file.originalname,
    size: file.size,
    url: `${req.protocol}://${req.get('host')}/uploads/${file.filename}`
  })
});

module.exports = router;
