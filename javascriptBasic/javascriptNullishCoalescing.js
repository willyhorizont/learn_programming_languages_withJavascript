const javascriptNullishCoalescing = () => {
    console.log('Nullish Coalescing (??) in JavaScript\n\n');

    const products = [
        { id: 'product_1', name: 'product_name_1', price: 1 },
        { id: 'product_2', name: 'product_name_2', price: 2 },
        { id: 'product_3', name: 'product_name_3', price: 3 },
        { id: 'product_4', name: 'product_name_4', price: 4 },
    ];

    const updateProduct = ({ id, name, price }) => products.map((product) => (product.id === id ? { ...product, name: name ?? product.name, price: price ?? product.price } : product));

    // notice {... name: name ?? product.name ...}
    // the value of property 'name' will using the left of (??) if the left value is not null or undefined else will default to the value of product.name

    // notice {... price: price ?? product.price ...}
    // the value of property 'price' will using the left of (??) if the left value is not null or undefined else will default to the value of product.price

    const updateProductResult1 = updateProduct({ id: 'product_1', name: null, price: null });
    const  updateProductResult1Formatted = JSON.stringify(updateProductResult1);
    console.log('updateProductResult1:', updateProductResult1Formatted, '\n\n');
    // updateProductResult1: [{"id":"product_1","name":"product_name_1","price":1},{"id":"product_2","name":"product_name_2","price":2},{"id":"product_3","name":"product_name_3","price":3},{"id":"product_4","name":"product_name_4","price":4}]

    const updateProductResult2 = updateProduct({ id: 'product_1', name: 'Coca cola', price: 2 });
    const updateProductResult2Formatted = JSON.stringify(updateProductResult2);
    console.log('updateProductResult2:', updateProductResult2Formatted);
    // updateProductResult2: [{"id":"product_1","name":"Coca cola","price":2},{"id":"product_2","name":"product_name_2","price":2},{"id":"product_3","name":"product_name_3","price":3},{"id":"product_4","name":"product_name_4","price":4}]
};

export default javascriptNullishCoalescing;
