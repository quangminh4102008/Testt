const treeService = require('../services/tree-service');
exports.getAll = async (req, res) => {  
    try {    
      const trees = await treeService.getAll();
      res.render('trees/list', { trees });
    } catch (error) {    
      res.status(400).send(error.message);
    }
};
exports.addTrees = async (req, res) => {  
    try {    
      res.render('trees/add');
    } catch (error) {    
      res.status(400).send(error.message);
    }
};

exports.storeTree = async (req, res) => {
    const { name,description,image } = req.body;
    try {    
      await treeService.store({ name, description, image });    
      res.redirect('/trees');
    } catch (error) {    
      res.status(400).send(error.message);
    }
};