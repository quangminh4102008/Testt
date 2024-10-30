var express = require('express');
var router = express.Router();
const treeController = require('../controllers/tree-controller');

router.get('/', function(req, res, next) {
    treeController.getAll(req, res);
});

router.get('/add', function(req, res, next) {
    treeController.addTrees(req, res);
});

router.post('/store', async function(req, res, next) {
  await treeController.storeTree(req, res);
});

module.exports = router;