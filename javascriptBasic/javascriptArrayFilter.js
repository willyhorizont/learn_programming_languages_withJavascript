const javascriptArrayFilter = () => {
    console.log('Array.filter() in JavaScript Array\n\n');

    const numbers = [12, 34, 27, 23, 65, 93, 36, 87, 4, 254];

    const evenNumbersOnly = numbers.filter((number) => number % 2 === 0);
    const evenNumbersOnlyFormatted = JSON.stringify(evenNumbersOnly)
    console.log('even numbers only:', evenNumbersOnlyFormatted);
    // even numbers only: [12,34,36,4,254]

    const oddNumbersOnly = numbers.filter((number) => number % 2 !== 0);
    const oddNumbersOnlyFormatted = JSON.stringify(oddNumbersOnly)
    console.log('odd numbers only:', oddNumbersOnlyFormatted, '\n\n\n');
    // odd numbers only: [27,23,65,93,87]

    // ======================================================================================================================================================

    console.log('Array.filter() in JavaScript Array of Objects\n\n');

    const products = [
        { id: 'id_1', price: 30 },
        { id: 'id_2', price: 233 },
        { id: 'id_3', price: 5 },
        { id: 'id_4', price: 499 }
    ];

    const cheapProductsOnly = products.filter((product) => product.price <= 100);
    const cheapProductsOnlyFormatted = JSON.stringify(cheapProductsOnly, null, ' '.repeat(4));
    console.log('cheap products only:', cheapProductsOnlyFormatted);
    // cheap products only: [
    //     {
    //         "id": "id_1",
    //         "price": 30
    //     },
    //     {
    //         "id": "id_3",
    //         "price": 5
    //     }
    // ]
};

export default javascriptArrayFilter;
