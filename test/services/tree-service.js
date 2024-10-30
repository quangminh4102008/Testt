const treeRepository = require('../repositories/tree');
exports.store = async (storeData) => {
    return accountRepository.save(storeData);
};
exports.update = async (id, updateData) => {
    const existingTree = await treeRepository.findById(id);
    if (!existingTree) {
        throw new Error('Tree is not found');
    }
    existingTree.name = updateData.name;
    return treeRepository.update(existingTree);
};
exports.delete = async (id) => {
    const existingTree = await treeRepository.findById(id);
    if (!existingTree) {
        throw new Error('Tree is not found');
    }
    return treeRepository.update(existingTree);
};
exports.getAll = () => {
    return treeRepository.findAll();
};

exports.getDetail = (id) => {
    return treeRepository.findById(id);
};