const javascriptArraySome = () => {
    console.log('Array.some() in JavaScript Array\n\n');

    const numbers = [12, 34, 27, 23, 65, 93, 36, 87, 4, 254];

    const isAnyNumberLessThan500 = numbers.some((number) => number < 500);
    console.log('is any number < 500:', isAnyNumberLessThan500);
    // is any number < 500: true

    const isanyNumberMoreThan500 = numbers.some((number) => number > 500);
    console.log('is any number > 500:', isanyNumberMoreThan500, '\n\n\n');
    // is any number > 500: false

    // ======================================================================================================================================================

    console.log('Array.some() in JavaScript Array of Objects\n\n');

    const products = [
        { id: 'id_1', price: 30 },
        { id: 'id_2', price: 233 },
        { id: 'id_3', price: 5 },
        { id: 'id_4', price: 499 }
    ];

    const isanyProductPriceLessThan500 = products.some((product) => product.price < 500);
    console.log('is any product price < 500:', isanyProductPriceLessThan500);
    // is any product price < 500: true

    const isanyProductPriceMoreThan500 = products.some((product) => product.price > 500);
    console.log('is any product price > 500:', isanyProductPriceMoreThan500);
    // is any product price > 500: true
};

export default javascriptArraySome;
