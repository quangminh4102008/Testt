const mongoose = require('mongoose');
const Tree = require('../models/tree');
const { faker } = require('@faker-js/faker');
const mongoUri = 'mongodb://127.0.0.1:27017/TreeShop';

mongoose.connect(mongoUri, {}).then(() => {
  console.log('Connected to MongoDB');
}).catch((err) => {
  console.error('Error connecting to MongoDB', err);
  process.exit(1);
});
exports.process= async () => {
    const trees = [];
    for (let index = 0; index < 7; index++) {
        trees.push({
            name: faker.commerce.productName(),
            description: faker.commerce.productDescription(),
            image: faker.image.avatar()
          });  
    }
    try {
        await Tree.insertMany(trees);
        console.log('Insert successfully');    
        process.exit();
      } catch (error) {
        console.error('Error seeding users', error);
        process.exit(1);
      }
}
exports.process();