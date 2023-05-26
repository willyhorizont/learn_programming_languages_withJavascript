const javascriptArrayEvery = () => {
    console.log('Array.every() in JavaScript Array\n\n');

    const numbers = [12, 34, 27, 23, 65, 93, 36, 87, 4, 254];

    const isAllNumberLessThan500 = numbers.every((number) => number < 500);
    console.log('is all number < 500:', isAllNumberLessThan500);
    // is all number < 500: true

    const isAllNumberMoreThan500 = numbers.every((number) => number > 500);
    console.log('is all number > 500:', isAllNumberMoreThan500, '\n\n\n');
    // is all number > 500: false

    // ======================================================================================================================================================

    console.log('Array.every() in JavaScript Array of Objects\n\n');

    const products = [
        { id: 'id_1', price: 30 },
        { id: 'id_2', price: 233 },
        { id: 'id_3', price: 5 },
        { id: 'id_4', price: 499 }
    ];

    const isAllProductPriceLessThan500 = products.every((product) => product.price < 500);
    console.log('is all product price < 500:', isAllProductPriceLessThan500);
    // is all product price < 500: true

    const isAllProductPriceMoreThan500 = products.every((product) => product.price > 500);
    console.log('is all product price > 500:', isAllProductPriceMoreThan500);
    // is all product price > 500: true
};

export default javascriptArrayEvery;
