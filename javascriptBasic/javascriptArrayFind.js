const javascriptArrayFind = () => {
    console.log('Array.find() in JavaScript Array\n\n');

    const numbers = [12, 34, 27, 23, 65, 93, 36, 87, 4, 254];

    const evenNumberFound = numbers.find((number) => number % 2 === 0);
    console.log('even number found:', JSON.stringify(evenNumberFound));
    // even number found: 12

    const oddNumberFound = numbers.find((number) => number % 2 !== 0);
    console.log('odd number found:', JSON.stringify(oddNumberFound), '\n\n\n');
    // odd number found: 27

    // ======================================================================================================================================================

    console.log('Array.find() in JavaScript Array of Objects\n\n');

    const products = [
        { id: 'id_1', price: 30 },
        { id: 'id_2', price: 233 },
        { id: 'id_3', price: 5 },
        { id: 'id_4', price: 499 }
    ];

    const productFound = products.find((product) => product.id === 'id_2');
    console.log('product found:', JSON.stringify(productFound));
    // product found: {"id":"id_2","price":233}
};

export default javascriptArrayFind;
